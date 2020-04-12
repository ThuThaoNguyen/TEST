<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class Mycontroller extends Controller
{
    //
    public function XinChao(){
      echo 'Xin chao';	
    }

    public function Khoahoc($ten){
      echo "khoa hoc ".$ten;
      return redirect()->route('lophoc');
    }


    public function getURL (Request $request){
    	if( $request -> is('My*')){
    		echo "la my";
    	}
    	else echo "ko co my";
    }
  
     public function postForm(Request $request){
  	   // $name= $request->hoten;
  	   // echo "ten cua ban ".$name;
  	   if ($request->has('tuoi'))
  	   	echo "ten co ton tai";
  	   
  	   else 
  	   	echo "ko ton tai";

  }
}
