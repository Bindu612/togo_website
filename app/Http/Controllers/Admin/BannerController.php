<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data =  Banner::all();
       return view('admin.pages.banner.index',compact('data'));
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
         $description = substr($description, 0, 255); // Truncate to 255 characters

         $validator = Validator::make($request->all(), [
            'name' => 'string|required',
            'banner_image' => 'required|file|mimes:jpeg,jpg,png',
           
        ]);
        if ($validator->fails()) {
            return $validator->errors();
        } else {
            $bannerData = $request->except('_token');
        
            if ($request->hasFile('banner_image')) {
                $file = $request->file('banner_image');
                $extension = $file->getClientOriginalExtension();
                $filename = $file->getClientOriginalName();
                $file->move('assets/images/banner_image', $filename);
                $bannerData['banner_image'] = $filename;
            }
            try {
                Banner::create($bannerData);
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
        $banner = Banner::find($id);
        return view('admin.pages.banner.edit',compact('banner')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'string|required',
            'banner_image' => 'nullable|file|mimes:jpeg,jpg,png',
            
        ]);
        if ($validator->fails()) {
            return $validator->errors();
         } 
         else {
            $bannerData = $request->except('_token', '_method');
        
            if ($request->hasFile('banner_image')) {
                $file = $request->file('banner_image');
                $extension = $file->getClientOriginalExtension();
                $filename = $file->getClientOriginalName();
                $file->move('assets/images/banner_image', $filename);
                $bannerData['banner_image'] = $filename;
            }

            Banner::where('id', $id)->update($bannerData);
            return response()->json(['success' =>" Updated Successfully"]);
         }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $bannerData = Banner::findOrFail($id);
            $bannerData->delete();
            return "Delete";
        } catch (Exception $e) {
            return response()->json(["error" =>"Can't Be Delete this May having some Employee"]);
        }
    }
}
