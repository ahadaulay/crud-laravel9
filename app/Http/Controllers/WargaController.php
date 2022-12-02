<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;

class WargaController extends Controller
{
    public function index(){
        $Warga = Warga::all();  
        return view('Warga.index',compact(['Warga']));
    }

    public function create(){
        
    }
}
