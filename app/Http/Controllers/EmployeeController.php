<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        return view('index');
    }

    public function store(Request $request){
        $index = new Employee();

        $index->name = $request->input('name');
        $index->email = $request->input('email');
        $index->phone = $request->input('phone');
        $index->message = $request->input('message');
        $index->resume = $request->input('resume');

        if($request->hasFile('resume')){
            $file = $request->file('resume');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' .$extension;
            $file->move('uploads/', $filename);
            $index->resume = $filename;

        }else {
            return $request;
            $index->resume = '';
        }

        $index->save();

        return view('index')->with('index', $index);
    }
}
