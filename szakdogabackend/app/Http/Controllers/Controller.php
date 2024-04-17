<?php

namespace App\Http\Controllers;

use App\Models\Szakdoga;
use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests; public function index(){
        $szakdogas = response()->json(Szakdoga::all());
        return $szakdogas;
    }

    public function show($id){
        $szakdoga = response()->json(Szakdoga::find($id));
        return $szakdoga;
    }

    public function store(Request $request){
        $szakdoga = new Szakdoga();
        $szakdoga->title = $request->title;
        $szakdoga->date = $request->date;
        $szakdoga->price = $request->price; 
        $szakdoga->save();
    }

    public function update(Request $request, $id){
       $szakdoga  = Szakdoga::find($id);
        $szakdoga->title = $request->title;
        $szakdoga->date = $request->date;
        $szakdoga->price = $request->price;
        $szakdoga->save();
    }

    public function destroy($id){
        $szakdoga= Szakdoga::find($id);       
         $szakdoga->delete();
    }


}
