<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data =  Event::all();
        return view('admin.apps.events.index', compact('data'));
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
            'event_date' => 'required|date',
            'event_start_time' => 'required|date_format:H:i',
            'event_end_time' => 'required', 'date_format:H:i',
            'event_title' => 'required|max:255',
            'event_notes' => 'nullable',

        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }
        Event::updateOrCreate(
            [],
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
        $event = Event::find($id);
        return view('admin.apps.events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'event_date' => 'required|date',
            'event_start_time' => 'required|date_format:H:i',
            'event_end_time' => 'required', 'date_format:H:i',
            'event_title' => 'required|max:255',
            'event_notes' => 'nullable',
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }
        Event::updateOrCreate(
            [],
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
            $eventData = Event::findOrFail($id);
            $eventData->delete();
            return "Delete";
        } catch (Exception $e) {
            return response()->json(["error" => "Can't Be Delete this May having some Employee"]);
        }
    }
}
