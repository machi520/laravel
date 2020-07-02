<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    //
    public function index(Request $request){
        $items = Person::find(1);
        return view('person.index',['items' => $items]);
    }
}
