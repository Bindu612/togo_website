<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Note;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data =  Note::all();
        return view('admin.apps.notes.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = Note::all();
        return view('admin.apps.notes.index', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());


        $validator = Validator::make($request->all(), [
            'note_title' => 'required|max:255',


        ]);
        if ($validator->fails()) {
            return $validator->errors();
        }
        Note::Create(
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

        $note = Note::find($id);
        return view('admin.apps.notes.edit', compact('note'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'note_title' => 'required|max:255',

        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }
        Note::updateOrCreate(
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
            $noteData = Note::findOrFail($id);
            $noteData->delete();
            return "Delete";
        } catch (Exception $e) {
            return response()->json(["error" => "Can't Be Delete this May having some Employee"]);
        }
    }
}
