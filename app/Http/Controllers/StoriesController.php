<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Stories;
use Illuminate\Support\Facades\Auth;

class StoriesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $stories = Stories::paginate();
        return view('stori.index', compact('stories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stori.crear');
    }

    public function storiCreate(Request $request)
    {
        request()->validate([
            'title' => 'required',
            'body' => 'required',
        ]);
        Stori::create($request->all());
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        $stori = new Stories();
        $stori->user_id = $request->user_id;
        $stori->title = $request->title;
        $stori->body = $request->body;
       
        $stori->save();
        return redirect()->route('stories.index')->with('success','Historia creada correctamente');

        /*$stori = new Stori();
        $stori->stori_id = $request->stori_id;
        $stori->body = $request->body;
        $stori->title = $request->title;
        $stori->calification = $request->calification;
        $stori->slug = uniqid().$request->title;
        $stori->save();
        return redirect()->back();*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Stori $id)
    {
        return view('stori.editar', compact('stori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stori $stori)
    {
        request()->validate([
            'title' => 'required',
            'body' => 'required',
        ]);
        $stori->update($request->all());
        return redirect()->route('stori.index')->with('success','Historia actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stori $stori)
    {
        $stori->delete();
        return redirect()->route('stories.index')->with('success','Historia eliminada correctamente');
    }
}
