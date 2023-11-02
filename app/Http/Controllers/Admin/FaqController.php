<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data =  Faq::all();
       return view('admin.pages.faqs.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // dd($request->all());
         $validator = Validator::make($request->all(), [
            'title' => 'required|string',
        'description' => 'required|string',
        
           
        ]);
        if ($validator->fails()) {
            return $validator->errors();
        } else {
            $faqData = $request->except('_token');
            Faq::where('id', $id)->update($faqData);
            return response()->json(['success' =>" Updated Successfully"]);
        
           
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $faq = Faq::find($id);
        return view('admin.pages.faqs.edit',compact('faq')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'description' => 'required|string',
           
        ]);
        if ($validator->fails()) {
            return $validator->errors();
         } 
         else {
            $faqData = $request->except('_token', '_method');
        
          
            Faq::where('id', $id)->update($faqData);
            return response()->json(['success' =>" Updated Successfully"]);
         }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $faqData = Faq::findOrFail($id);
            $faqData->delete();
            return "Delete";
        } catch (Exception $e) {
            return response()->json(["error" =>"Can't Be Delete this May having some Employee"]);
        }
    }
}
