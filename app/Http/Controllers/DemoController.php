<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class DemoController extends Controller
{
    public function importExportView()
    {
       return view('import');
    }
   
    public function export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx'); //will ;et the file to be downloaded
    }
   
    public function import(Request $request) 
    {
        $rows = Excel::toArray(new UsersImport, $request->file('file')); //getting data from Excel
        //dd($rows);
        Excel::import(new UsersImport,request()->file('file')); //saving into db  
        return redirect()->back();
    }
    
}
