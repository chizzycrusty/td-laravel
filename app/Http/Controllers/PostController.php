<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->only(['create', 'edit']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Post::orderBy('created_at', 'desc')->paginate(100);

        return view('posts.index', compact('list'));

    }

    public function addvotes()  {

      // assume you have a clicks  field in your DB

      $this->votes = $this->votes + 1;
      $this->save();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
       // return view('posts.create');
    }

    public function web()
    {
        return view('web');
       // return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this -> validate($request, [
        //     'title' => 'required',
        //     'content' => 'required',
        //     'prix' => 'required',
        //     'lieu' => 'required'
        // ]);
        $post = new Post;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->type = $request->type;
        $post->adresse = $request->adresse;
        $post->postal = $request->postal;
        $post->lieu = $request->lieu;
        $post->region = $request->region;
        $post->user_id = Auth::user()->id;

        // Image::make(Input::file('img'))->resize(300, 200)->save('/uploads');
        $image = Input::file('img');
            $filename  = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('uploads/' . $filename);
            Image::make($image->getRealPath())->save($path);
            $post->img = 'uploads/'.$filename;

        $post -> save();

        return redirect() -> route('post.index') -> with('success', 'Votre article a bien été créé');
    }

    public function message(Request $request)
    {
        $this -> validate($request, [
            'user_id' => 'required',
            'message' => 'required'
        ]);

        $post = new Message;
        $input = $request -> input();
        $input['user_id'] = Auth::user() -> id;
        $input['destinataire'] = Auth::user() -> id;
        $post -> fill($input) -> save();

        return redirect() -> route('messages.index') -> with('success', 'Votre message a bien été envoyé');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
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
        $post = Post::findOrFail($id);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->type = $request->content;
        $post->adresse = $request->adresse;
        $post->postal = $request->postal;
        $post->lieu = $request->lieu;
        $post->region = $request->region;
        $post->user_id = Auth::user()->id;

        // Image::make(Input::file('img'))->resize(300, 200)->save('/uploads');


        $post -> save();

        return redirect() -> route('post.index') -> with('success', 'Votre article a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect() -> route('post.index') -> with('success', 'Votre article a bien été supprimé');
    }
    public function tag($tag)
    {
        $posts = Post::where('type', $tag)->get();
        //dump($posts);
        return view('posts.tag') -> with(compact('posts')); 
    }
    public function region($region)
    {
        $posts = Post::where('region', $region)->get();
        //dump($posts);
        return view('posts.region') -> with(compact('posts')); 
    }


}
