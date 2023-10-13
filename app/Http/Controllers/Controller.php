<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegBController extends Controller
{


    public function perkalian(){
               return view('perkalianmalam')
         ;
    }

        public function perkalian2(Request $r){

            $vara=$r->a;
            $varb=$r->b;
            $hasil = $varb* $vara;
            

               return view('perkalianmalam')
               ->with('nilai_a',$vara)
               ->with('nilai_b',$varb)
               ->with('hasil',$hasil)
                  ;
    }
}