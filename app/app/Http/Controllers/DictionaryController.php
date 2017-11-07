<?php

namespace App\Http\Controllers;

use App\Dictionary;
use Illuminate\Http\Request;

class DictionaryController extends Controller
{
    private $rootPath = 'dictionary';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dictionaries = Dictionary::all();
        return view($this->rootPath . '.index', compact('dictionaries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->rootPath . '.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dictionary = new Dictionary(['name' => $request->request->get('name')]);
        $dictionary->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dictionary $dictionary
     * @return \Illuminate\Http\Response
     */
    public function show(Dictionary $dictionary)
    {
        return view($this->rootPath . '.show', compact('dictionary'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dictionary $dictionary
     * @return \Illuminate\Http\Response
     */
    public function edit(Dictionary $dictionary)
    {
        return view($this->rootPath . '.edit', compact('dictionary'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Dictionary $dictionary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dictionary $dictionary)
    {
        $dictionary->update($request->request->all());
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dictionary $dictionary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dictionary $dictionary)
    {
        $dictionary->delete();

        return redirect()->back();
    }

}
