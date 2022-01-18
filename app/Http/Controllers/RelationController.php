<?php

namespace App\Http\Controllers;
use App\Models\RelationModel;
use Illuminate\Http\Request;

class RelationController extends Controller
{
    //
    function addData(Request $req){
        $Relation=new RelationModel;
        $Relation->name=$req->name;
        $Relation->rollno=$req->rollno;
        $Relation->std=$req->std;
        $Relation->div=$req->div;
        $Relation->save();

        return redirect('dashboard');

    }

  
}
