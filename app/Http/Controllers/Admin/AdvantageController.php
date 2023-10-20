<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Advantage;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdvantageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data =  Advantage::all();
       return view('admin.pages.advantage.index',compact('data'));
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
            'name' => 'string|required',
            'image' => 'required|file|mimes:jpeg,jpg,png',
           
        ]);
        if ($validator->fails()) {
            return $validator->errors();
        } else {
            $advantageData = $request->except('_token');
        
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = $file->getClientOriginalName();
                $file->move('assets/images/advantage_image', $filename);
                $advantageData['image'] = $filename;
            }
            try {
                Advantage::create($advantageData);
                return response()->json(['success' => 'Added Successfully']);
            } catch (Exception $e) {
                return response()->json(['error' => $e->getMessage()]);
            }
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
        $advantage = Advantage::find($id);
        return view('admin.pages.advantage.edit',compact('advantage')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'string|required',
            'image' => 'nullable|file|mimes:jpeg,jpg,png',
        ]);
        if ($validator->fails()) {
            return $validator->errors();
         } 
         else {
            $advantageData = $request->except('_token', '_method');
        
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = $file->getClientOriginalName();
                $file->move('assets/images/advantage_image', $filename);
                $advantageData['image'] = $filename;
            }

            Advantage::where('id', $id)->update($advantageData);
            return response()->json(['success' =>" Updated Successfully"]);
         }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $advantageData = Advantage::findOrFail($id);
            $advantageData->delete();
            return "Delete";
        } catch (Exception $e) {
            return response()->json(["error" =>"Can't Be Delete this May having some Employee"]);
        }
    }
}
