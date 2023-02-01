<?php

namespace App\Imports;

use Hash;
use App\User;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
     if($row[0]!='name' && $row[1]!='email' && $row[2]!='password'){
        return new User([
            'name'     => $row[0],
            'email'    => $row[1],
            'password' => $row[2],
        ]);
     } 
    }
}
