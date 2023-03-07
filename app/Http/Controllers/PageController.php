<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function selamat(){
        return 'Selamat Datang';
    }

    public function about(){
        return '2141720145 --> Azis ilham kurniawan';
    }

    public function article($id){
        return 'Article dengan id ' . $id;
    }
}
