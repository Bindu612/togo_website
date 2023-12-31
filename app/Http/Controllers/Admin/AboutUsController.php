<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $aboutUs = AboutUs::first();
        return view('admin.pages.about_us.index', compact('aboutUs'));
      
       
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
        //
        {
            $validator = Validator::make($request->all(), [
                'about_us' => 'string|required',
                'mission' => 'string|required',
                'vission' => 'string|required',
    
            ]);
            if ($validator->fails()) {
                return $validator->errors();
            }
            AboutUs::updateOrCreate( [], 
                $request->all() 
            );
        
            return response()->json(['success' => 'Added Successfully']);
        
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
