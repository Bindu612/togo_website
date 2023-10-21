<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Challenge;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ChallengeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data =  Challenge::all();
       return view('admin.pages.challenge.index',compact('data'));
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
            $challengeData = $request->except('_token');
        
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = $file->getClientOriginalName();
                $file->move('assets/images/challenge_image', $filename);
                $challengeData['image'] = $filename;
            }
            try {
                Challenge::create($challengeData);
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
        $challenge = Challenge::find($id);
        return view('admin.pages.challenge.edit',compact('challenge')); 
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
            $challengeData = $request->except('_token', '_method');
        
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = $file->getClientOriginalName();
                $file->move('assets/images/challenge_image', $filename);
                $challengeData['image'] = $filename;
            }

            Challenge::where('id', $id)->update($challengeData);
            return response()->json(['success' =>" Updated Successfully"]);
         }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $challengeData = Challenge::findOrFail($id);
            $challengeData->delete();
            return "Delete";
        } catch (Exception $e) {
            return response()->json(["error" =>"Can't Be Delete this May having some Employee"]);
        }
    }
}
