<?php

namespace App\Http\Controllers;
use App\Person;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index(){
        $people = Person::get();
        return $people;
    }
    
    public function show(Person $person){
        return $person;
    }
}
