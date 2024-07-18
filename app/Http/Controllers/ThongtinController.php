<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThongtinController extends Controller
{
    public function index(){

        $name = "Nguyễn Xuân Hồng";
        $dayofbirth = "15/09/2004";
        $mssv = "PD09347";
        $class = "WD18303";
        $phone = "0839893573";
        $email = "hongnxpd09347@fpt.edu.vn";

        return view('thongtinsv')->with(compact('name', 'dayofbirth', 'mssv' , 'class', 'phone', 'email'));
    }
}
