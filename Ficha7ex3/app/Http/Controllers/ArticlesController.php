<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article; #Model

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->order == 'asc'){
            $articles = Article::all()->sortBy('created_at');
            return view('articles.index', compact('articles'));
        }elseif($request->order == 'desc'){
            $articles = Article::all()->sortByDesc('created_at');
            return view('articles.index', compact('articles'));
        }elseif($request->search){
            $articles = Article::where('title', 'LIKE', '%'.$request->search.'%')->get();
            return view('articles.index', compact('articles'));
        }else{
            $articles = Article::all();

            return view('articles.index', compact('articles'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = request()->validate(['title' => ['required', 'min:3', 'max:255'], 'content' => ['required', 'min:5', 'max:255']]);
        $article = Article::create($validated);
        if($request->featured == 'on'){
            $article->featured = 1;
            $article->save();
        }
        return redirect('/articles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('articles.edit',compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $validated = request()->validate(['title' => ['required', 'min:3', 'max:255'], 'content' => ['required', 'min:5', 'max:255']]);
        if($request->featured == 'on'){
            $validated['featured'] = 1;
            $article->update($validated);
        }else{
            $validated['featured'] = 0;
            $article->update($validated);
        }
        return redirect('/articles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return redirect('/articles');
    }

    public function featured()
    {
        $articles = Article::where('featured', 1)->get();
        return view('articles.featured', compact('articles'));
    }
}
