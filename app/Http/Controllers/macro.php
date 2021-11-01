<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;

class macro extends Controller
{

    function __construct()
    {
         $this->middleware('permission:regulacao-list|regulacao-create|regulacao-edit|regulacao-delete', ['only' => ['index','show','__invoke']]);
         $this->middleware('permission:regulacao-create', ['only' => ['create','store']]);
         $this->middleware('permission:regulacao-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:regulacao-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        return view("users.macro");
    }

    public function show($id){

     /*   return view('users.create',['id'=>$id]); */
     return view('users.create');

    }




}
