<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mockery\Matcher\Not;

class NoteController extends Controller
{
    // ==================================== Methode 1
//    public function show(int $urlId)
//    {
//        $id = Auth::id();
//        if ($id === $urlId) {
//            $query = Note::query();
//            $query->where('id_user', $urlId);
//            $notes = $query->get();
//        } else {
//            return;
//        }
//
//        return view('note.show', compact('notes'));
//    }

    public function show($id)
    {

        $note = Note::find($id);
        $userId = $note['id_user'];
        if ($userId != Auth::id()){
            return redirect('/');
        }

    return view('note.show', compact('note'));
    }
    public function index()
    {
        $id = Auth::id();
        $note = new Note();
        $notes = $note->notesByUser($id);

        return view('note.index', compact('notes'));
    }

    public function create()
    {
        return view('note.create');
    }
    public function store(Request $request)
    {
       $request->validate([
           'title' => 'required',
           'note' => 'required',
       ]);

       // $id = Auth::id();
      // dd($id);
//       $note->id_user = $request->$id;
//       $note->title = $request->title;
//       $note->note = $request->note;


        // Note::create($request->all());
        auth()->user()->create($request->all());
        return redirect()->route('note.index')->with('success', 'note ajouter');
    }


    public function delete()
    {
        return view('note.delete');
    }

    public function destroy(Note $note)
    {
        $note->delete();
        return redirect()->route('note.index')->with('success', 'film delete');
    }
    public function edit()
    {
        return view('note.edit');
    }
    public function uptade()
    {


    }
}
