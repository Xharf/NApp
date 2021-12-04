<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notes = Auth::user()->notes()->get();
        $siteTitle = 'Home';
        dd($notes);
        return view('notes.index', compact('siteTitle', 'notes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'tags' => 'max:255',
            'body' => 'required|max:255',
            // file only jpeg, png, jpg and size less than 5MB
            'media' => 'file|mimes:jpeg,png,jpg|max:5000',
        ]);

        Note::create([
            'title' => $validatedData['title'],
            'tags' => $validatedData['tags'],
            'body' => $validatedData['body'],
            'owner' => Auth::user()->id,
            // TODO: implementasi upload file
            'media' => 'https://picsum.photos/300/200',
        ]);

        return redirect('/notes')->with('success', 'Note created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $note = Note::find($id);
        if ($note->owner !== Auth::user()->id) {
            abort(403, 'Unauthorized action.');
        }
        $siteTitle = $note->title;
        return view('notes.show', compact('siteTitle', 'note'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $note = Note::find($id);
        return view('notes.edit', compact('note'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'tags' => 'max:255',
            'body' => 'required',
        ]);

        $note = Note::find($id);
        if ($note->owner !== Auth::user()->id) {
            abort(403, 'Unauthorized action.');
        }

        $note->title = $request->title;
        $note->tags = $request->tags;
        $note->body = $request->body;
        $note->save();

        return redirect("/notes/{$id}")->with('success', 'Note updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $note = Note::find($id);

        if ($note->owner !== Auth::user()->id) {
            abort(403);
        }

        $note->delete();

        return redirect('/notes')->with('success', 'Note deleted successfully.');
    }
}
