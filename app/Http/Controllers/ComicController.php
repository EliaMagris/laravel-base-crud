<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    // public function index(){
    //     return view('pages.welcome');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::orderBy('id', 'desc')->paginate(4);

        $data = [
            'comics' => $comics
        ];

        return view('pages.fumetti.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.fumetti.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();


        $request->validate(
            [
                'title' => 'required|max:50'
            ],
            [
                'title.required' => 'Attenzione il campo title è obbligatorio',
                'title.max' => 'Attenzione il campo non deve superare i 50 caratteri'
            ]
        );
        $new_record = new Comic();
        $new_record->fill($data);
        $new_record->save();

        return redirect()->route('fumetti.index', ['fumetti' => $new_record->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $elem = Comic::findOrFail($id);
        return view('pages.fumetti.show', compact('elem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);

        return view('pages.fumetti.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $modSpec = $request->all();
        $comic = Comic::findOrFail($id);
        $request->validate(
            [
                'title' => 'required|max:50'
            ],
            [
                'title.required' => 'il campo title è obbligatorio',
                'title.max' => 'Troppi caratteri, non oltre i 50'
            ]
        );
        $comic->update($modSpec);

        return redirect()->route('fumetti.show', $comic->id)->with('success', "la modifica è andata buon fine");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);
        $comic->delete();
        return redirect()->route('fumetti.index')->with('success', "Hai cancellato con successo la pasta: $comic->title");
    }
}