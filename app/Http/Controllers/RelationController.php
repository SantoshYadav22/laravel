<?php

namespace App\Http\Controllers;
use App\Models\RelationModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;

class RelationController extends Controller
{
   
        function Form(){
            return view('addmember');
        }
            

            function addData(Request $request){
                $validator=Validator::make($request->all(),[
                    'name'=>'required|regex:/^[\pL\s\-]+$/u',
                    'rollno'=>'required|numeric',
                    'std'=>'required|numeric',
                    'div'=>'required|regex:/^[\pL\s\-]+$/u|max:1' 


                ]);

            
                if(!$validator->passes()){
                    return response()->json(['status'=>0, 'error'=>$validator->errors()->toArray()]);

                }else{
                    // $values=[
                    //     'name'=>$request->name,
                    // 'rollno'=>$request->rollno,
                    // 'std'=>$request->std,
                    // 'div'=>$request->div
                    // ];
                    $query = DB::table('relationmodels')->insert([
                        'name'=>$request->name,
                    'rollno'=>$request->rollno,
                    'std'=>$request->std,
                    'div'=>$request->div
                    ]);
                    if($query){
                        return response()->json(['status'=>1, 'msg'=>'New data is insert']);
                    }
                   
                
                }
            }
    
  
}


