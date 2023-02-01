<?php

use App\Imports\UsersImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Route;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('export', 'DemoController@export')->name('export');
Route::get('importExportView', 'DemoController@importExportView');
Route::post('import', 'DemoController@import')->name('import');



Route::get('/', function () {
    return view('welcome');
});
Route::post('/upload', function (Request $request) {
    $file = $request->file('uploaded_file');
    if ($file) {
        $filename = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension(); //Get extension of uploaded file
        $tempPath = $file->getRealPath();
        $fileSize = $file->getSize(); //Get size of uploaded file in bytes
        $location = 'uploads'; //Created an "uploads" folder for that
        $file->move($location, $filename);
        $filepath = public_path($location . '/' . $filename);
        // dd($filepath);
        $reader = new Xlsx();
        $spreadsheet = IOFactory::load($filepath);
        $sheet  = $spreadsheet->getActiveSheet();
        $worksheetinfo = $reader->listWorksheetInfo($filepath);
        $totalRows = $worksheetinfo[0]['totalRows'];
        $array = [];
        for($row = 2; $row < $totalRows; $row++){
            $id = $sheet->getCell("A{$row}")->getValue();
            $name = $sheet->getCell("B{$row}")->getValue();
            $club = $sheet->getCell("C{$row}")->getValue();
            $email = $sheet->getCell("D{$row}")->getValue();
            $position = $sheet->getCell("E{$row}")->getValue();
            $age = $sheet->getCell("F{$row}")->getValue();
            $salary = $sheet->getCell("G{$row}")->getValue();
            $object = new stdClass();
            $object->name = $name;
            $object->id = $id;
            $object->club = $club;
            $object->salary = $salary;
            $object->email = $email;
            $object->age = $age;
            $object->position = $position;
            array_push($array, $object);

        }
        print_r($array);
    }
});

?>
