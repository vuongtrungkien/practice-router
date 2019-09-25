<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index(){

        return view('modules.customer.index');
    }

    public  function  create(){
        return view('modules.customer.create');
    }

    public function show(){
        return view('modules.customer.show');
    }
}
