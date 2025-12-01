<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Contact::all();
         return view('index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // validate request
        $request->validate(
            // rules
            [
                'name' => 'required|min:3|max:50',
                'email' => 'required|min:3|max:30',
                'contact' => 'required|min:3|max:9'
            ]
        );

        // create new contact
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->contact = $request->contact;
        $contact->save();

        // redirect to home
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('details');
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
        if($id === null){
            return redirect()->route('home');
        }

        // load contact
        $note = Contact::find($id);
        $note->delete();

        // redirect to home
        return redirect()->route('home');
    }
}