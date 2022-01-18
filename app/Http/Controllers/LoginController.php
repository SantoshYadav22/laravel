<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\DB;
class LoginController extends Controller
{
    public function Login(Request $req){

        $req->validate([
            'userName'=>'required',
            'passWord'=>'required'
        ]);
      return $req->input();
    }

    // function save(Request $request){
    //     $validator=Validator::make($request->all(),[
    //         'userName'=>'required',
    //         'passWord'=>'required'
    //     ]);
    //     if(!$validator->passes()){
    //         return responce()->json(['status'=>0, 'error'=>$validator->error()->toArray()]);

    //     }
    //     else{
    //         $values=[
    //             'userName'=>$request->userName,
    //             'passWord'=>$request->passWord
    //         ];
    //         $query=DB::table('students')->insert($values);
    //         if($query){
    //             return response()->json(['status'=>1, 'msg'=>'new student has been sucess register']);


    //         }





        // }}}
    }