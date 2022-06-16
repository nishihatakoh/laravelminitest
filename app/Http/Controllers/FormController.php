<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        $items = Form::all();
        return view('index',['items' =>$items]);
    }

    public function move()
    {
        return view('thanks');
    }
}
