<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function view_data(){
        $data['nama'] = 'Ixsan.P';
        $data['nim'] = '20110236';

        return view('users.index', $data);
    }
}
