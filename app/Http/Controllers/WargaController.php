<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;
use Psy\TabCompletion\Matcher\FunctionsMatcher;

class WargaController extends Controller
{
    public function index(){
        $Warga = Warga::all();  
        return view('Warga.index',compact(['Warga']));
    }

    public function create(){
        return view('Warga.create');
    }

    public function store(Request $request)
    {
        Warga::create($request->except(['_token','sumbit']));
        return redirect('/warga');
    }

    public function edit($id){
        $warga = Warga::find($id); 
        return view('Warga.edit',compact('warga'));
    }

    public function update($id,Request $request){
        $warga = Warga::find($id);
        $warga->update($request->except(['_token','sumbit']));
        return redirect('/warga');

    }

    public function destroy($id){
        $warga = Warga::find($id);
        $warga->delete();
        return redirect('/warga');

    }

}
