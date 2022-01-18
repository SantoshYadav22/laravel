<?php

namespace App\Http\Controllers;
use App\Models\RelationModel;
use Illuminate\Http\Request;
use PDF;

class UpdateController extends Controller
{
    //
    public function Updates(){
            return view('updates');
    }
    public function Edit($id){
        $lists=RelationModel::find($id);
        return view('admin.lists.edit',compact('lists'));
        }
    
     public function Update(Request $request, $id){
        $update=RelationModel::find($id)->update(
                        
[                'name'=>$request->userNames,
                       'rollno'=>$request->userroll,
                       'std'=>$request->userstd,
                       'div'=>$request->userdiv
                       
]);
        
        return Redirect()->route("dashboard")->with('success','lists updated');
        }


        public function Delete($id){
                $delete=RelationModel::find($id)->forceDelete();

        return Redirect()->back()->with('success','lists delete');

        }

        public function createPDF () {
                $fmdata=RelationModel::all();
                view()->share ('fmdata', $fmdata);
                $pdf = PDF ::loadView ('pdfcreate', $fmdata);
                return $pdf->download ('file-pdf.pdf');
        }






};
