<?php

namespace App\Http\Controllers;

use App\Models\Name;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        return view('deshboard');
    }

    public function submitindex(Request $request){
        $validate = $request->validate([
            "number"=>"required"
        ],
        );

        if($validate){
 
            $datas = Name::inRandomOrder()->limit($request->number)->get();
            return view('data', compact('datas'));
        }
    }

    public function addname(){
        return view('AddName');
    }

    public function submitaddname(Request $request){
        $validate = $request->validate([
            "name"=>"required|min:5|max:20"
        ],
        );

        if($validate){
 
            DB::table('names')->insert(
                 array(
                     'name' => $request->name,
                 )
 
            );
 
             $error = "Insert Successfull";
             return Redirect()->route('name')
             ->with('success', $error);
         } 
         else{
            $error = "Something is Wrong Try Again.";
             return Redirect()->route('name')
             ->with('error', $error);
         }
    }
}
