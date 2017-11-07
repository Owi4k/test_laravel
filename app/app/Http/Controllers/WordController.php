<?php

namespace App\Http\Controllers;

use App\Word;
use Illuminate\Http\Request;

class WordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $words = Word::all();
        return view('word.index', compact('words'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('word.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Word::created($request->request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Word $word
     * @return \Illuminate\Http\Response
     */
    public function show(Word $word)
    {
        return view('word.show', compact('word'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Word $word
     * @return \Illuminate\Http\Response
     */
    public function edit(Word $word)
    {
        return view('word.edit', compact('word'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Word $word
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Word $word)
    {
        $word->update($request->request->all());
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Word $word
     * @return \Illuminate\Http\Response
     */
    public function destroy(Word $word)
    {
        $word->delete();
        return redirect()->back();
    }
}
