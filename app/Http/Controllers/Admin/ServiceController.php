<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Storage;
use Illuminate\Support\Facades\Validator;


class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $services = Service::all();
        return view('admin.pages.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.pages.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        

        $request->validate([
            'name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif',
            'description' => 'required',
            'highlight' => 'required',
            'status' => 'in:active,inactive',
        ]);
    
        // Handle image upload if present
        if ($request->hasFile('service_image')) {
            $imagePath = $request->file('service_image')->store('images');
            $extension = $imagePath->getClientOriginalExtension();
            $filename = $imagePath->getClientOriginalName();
            $imagePath->move('assets/images/service_image', $filename);
           
        }
        
    
        Service::create([
            'name' => $request->input('name'),
            'image' => $imagePath ?? null,
            'description' => $request->input('description'),
            'highlight' => $request->input('highlight'),
            'status' => $request->input('status'),
        ]);
    
        return redirect()->route('admin.services.index')->with('success', 'Service created successfully.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $service = Service::findOrFail($id);
        return view('admin.pages.services.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $service = Service::findOrFail($id);
        return view('admin.pages.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        {
            $service = Service::findOrFail($id);
    
            $request->validate([
                'name' => 'required',
                'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                'description' => 'required',
                'highlight' => 'required',
                'status' => 'in:active,inactive',
            ]);
    
            if ($request->hasFile('image')) {
                if ($service->image) {
                    Storage::disk('public')->delete($service->image);
                }
                $imagePath = $request->file('image')->store('images', 'public');
                $service->image = $imagePath;
            }
    
            $service->name = $request->input('name');
            $service->description = $request->input('description');
            $service->highlight = $request->input('highlight');
            $service->status = $request->input('status');
    
            $service->save();
    
            return redirect()->route('admin.services.index')->with('success', 'Service updated successfully.');
        }
       
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = Service::findOrFail($id);

        if ($service->image) {
            Storage::disk('public')->delete($service->image);
        }

        $service->delete();

        return redirect()->route('admin.services.index')->with('success', 'Service deleted successfully.');
    }

}