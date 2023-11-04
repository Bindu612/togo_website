<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactTable;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactTableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data =  ContactTable::all();
       return view('admin.apps.contact-tables.index',compact('data'));
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
       
         $validator = Validator::make($request->all(), [
            'name' => 'string|required',
            'email' => 'required|email',
            'location' => 'string|required',
            'phone' => 'required|string|digits:10',
          
        ]);
        if ($validator->fails()) {
            return $validator->errors();
        }
        ContactTable::updateOrCreate( [], 
            $request->all() 
        );
    
        return response()->json(['success' => 'Added Successfully']);
       
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
        $contactTable = ContactTable::find($id);
        return view('admin.apps.contact-tables.edit',compact('contactTable')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'string|required',
           
            
        ]);
        if ($validator->fails()) {
            return $validator->errors();
        }
        ContactTable::updateOrCreate( [], 
            $request->all() 
        );
    
        return response()->json(['success' => 'updated Successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $contacttableData = ContactTable::findOrFail($id);
            $contacttableData->delete();
            return "Delete";
        } catch (Exception $e) {
            return response()->json(["error" =>"Can't Be Delete this May having some Employee"]);
        }
    }
}
