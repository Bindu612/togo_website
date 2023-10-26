<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SiteSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siteSetting = SiteSetting::first();

        return view('admin.pages.site_setting.index', compact('siteSetting'));

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
            'address' => 'string|required',
            'phone1' => 'required|string|digits:10',
            'phone2' => 'nullable|string|digits:10',
            'email1' => 'required|email',
            'email2' => 'nullable|email',
            'facebook_link' => 'required|url',
            'instagram_link' => 'required|url',
            'whatsapp_no' => 'required|string|digits:10',
            'youtube_link' => 'required|url',
            'twitter_link' => 'required|url',
            'linkedin_link' => 'required|url',
            'status' => 'required|string',


        ]);
        if ($validator->fails()) {
            return $validator->errors();
        }
        SiteSetting::updateOrCreate( [], 
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
