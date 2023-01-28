<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Carbon\Carbon;
use Illuminate\Http\Request;

use function Symfony\Component\String\b;

class FaqContorller extends Controller
{
    function faq(){
        $faqs = Faq::all();
         return view('backend.faq.index',[
            'faqs'=> $faqs,
         ]);
    }
    function addfaq(){
        return view('backend.faq.add_faq');
    }
    function store_faq(Request $request){
        Faq::insert([
            'description'=>$request->description,
            'created_at' => Carbon::now(),
        ]);
        return back();
    }
    function del_faq($id){
        Faq::find($id)->delete();
        return back();
    }
    function edit_faq($id) {
        $faq = Faq::find($id);
        return view('backend.faq.edit_faq', [
            'faq' => $faq,
        ]);
    }
    function update_faq($id, Request $request) {
        Faq::find($id)->update([
            'description' => $request->description,
            'updated_at' => Carbon::now(),
        ]);
        return back();
    }
}
