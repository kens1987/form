<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Http\Requests\ForRequest;
// use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(){
        return view('index');
    }
    public function confirm(ForRequest $request){
        $request ->flash();
        $contact = $request->only(['name','tel','content']);
        return view('confirm',compact('contact'));
    }
    public function store(ForRequest $request){
        $contact = $request->only(['name','tel','content']);
        Form::create($contact);
        return view('thanks');
    }
}
