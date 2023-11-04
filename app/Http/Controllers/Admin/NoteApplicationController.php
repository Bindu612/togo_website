<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NoteApplication;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NoteApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $noteApplication = NoteApplication::first();

        return view('admin.apps.note-applications.index', compact('noteApplication'));

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
            
            'name' => 'required|string',


        ]);
        if ($validator->fails()) {
            return $validator->errors();
        }
        Calendar::updateOrCreate( [], 
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
