<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function me() 
    {
        return 
        [
          "name" => "Tegar Putra Pratama",
          "class" => "XII RPL 4",
          "gender" => "Laki-Laki",
          "nis" => "3103118132"
        ];
    }
    
}