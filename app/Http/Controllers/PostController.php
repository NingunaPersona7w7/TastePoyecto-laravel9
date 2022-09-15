<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    function __construct()
    {
        $this->middleware('permissions:ver-post|crear-post|editar-post|eliminar-post',['only'=>['index']]);
        $this->middleware('permissions:crear-post' ,['only'=>['create', 'store']]);
        $this->middleware('permissions:editar-post' ,['only'=>['edit', 'update']]);
        $this->middleware('permissions:eliminar-post' ,['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate();
        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.crear');
    }

    public function postCreate(Request $request)
    {
        request()->validate([
            'title' => 'required',
            'body' => 'required',
        ]);
        Post::create($request->all());
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
            'body' => 'required',
            'price' => 'required'
        ]);
        $user = Auth::user();
        $post = new Post();
        $post->user_id =$user->id;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->price = $request->price;
        if($request->hasFile("image")) {
            $imagen = $request->file("image");
            $nombreimagen = uniqid().".".$imagen->guessExtension();
            $ruta = public_path("assets/img/products/");

            copy($imagen->getRealPath(),$ruta.$nombreimagen);

            $post->image = "assets/img/products/".$nombreimagen;

        }
        $post->save();
        return redirect()->route('posts.index')->with('success','Post creado correctamente');
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
    public function edit(Post $post)
    {
        return view('post.editar', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        request()->validate([
            'title' => 'required',
            'body' => 'required',
            'price' => 'required',
        ]);
        $post->update($request->all());
        if($request->hasFile("image")) {
            if($post->image != null){
                Post::disk('images')->delete($post->image);
                $post->image->delete();
            }
            $imagen = $request->file("image");
            $nombreimagen = uniqid().".".$imagen->guessExtension();
            $ruta = public_path("assets/img/products/");

            copy($imagen->getRealPath(),$ruta.$nombreimagen);

            $post->image = "assets/img/products/".$nombreimagen;

        }
        $post->save();
        return redirect()->route('posts.index')->with('success','Post actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->forceDelete();
        return redirect()->route('posts.index');
    }
}
