<?php

namespace App\Http\Controllers;
use App\Models\Mariusz;
use Illuminate\Http\Request;
class FormController extends Controller
{
    public function store(Request $request){
        $name = $request->name;
        $age = $request->age;
        $height = $request->height;

        $arr = [
            'name' => $name,
            'age' =>$age,
            'height' => $height
        ];
        $arr = (object)$arr;
        $Mariusz = new Mariusz();

        $Mariusz->imie = $arr->name;
        $Mariusz->wiek = $arr->age;
        $Mariusz->wzrost = $arr->height;
        $Mariusz->save();
        return view('welcome')->with(['arr' => $arr]);
    }
   public function index()
    {
        $users = Mariusz::all();
        return view('welcome')->with(['users'=>$users]);
    }
}

