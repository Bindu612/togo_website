<?php


namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use App\Models\SiteSetting;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactUsFrontController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showIndex()
    {
       
        $data = SiteSetting::all(); // Replace this with your actual data retrieval method

    return view('front.contactus', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    // ContactUsFrontController.php

public function submit(Request $request)
{
    // Handle the POST request here, including form validation and saving to the database.
    // For example, you can use the ContactUs model to save the data.

    // Example validation (customize as needed)
    $request->validate([
        'your_name' => 'required|string',
        'subject' => 'required|string',
        'phone' => 'required|numeric|digits:10',
        'email' => 'required|email',
        'message' => 'nullable|string',
    ]);

    // Create a new ContactUs record using the data from the form
    ContactUs::create($request->all());

    // You can then redirect to a confirmation page or return a success response.
    // For example:
    return view('front.contactus');
}


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'your_name' => 'required|string',
            'subject' => 'required|string',
            'phone' => 'required|numeric|digits:10',
            'email' => 'required|email',
            'message' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $data = $request->except('_token');
            try {
                ContactUs::create($data);
                return redirect()->back()->with('success', 'Added Successfully');
            } catch (Exception $e) {
                return redirect()->back()->with('error', 'An error occurred while saving data: ' . $e->getMessage())->withInput();
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
