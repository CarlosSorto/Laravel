<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usuario extends Controller
{
    public function index($id){
        if (is_numeric($id)) {
            return "sos un usuario con id numerico, id:{$id}";
        }else{
            return "usuario con letras, id: {$id}";
        }
        
    }

    public function users(){
        $users = ['John','Sam'];
        
        return view('usuarios',['users' => $users]);
    }
}

