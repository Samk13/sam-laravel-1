<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Tag;

class ArticlesController extends Controller
{

    public function index()
    {
        if(request('tag')){
            $articles = Tag::where('name', request('tag'))->firstOrFail()->articles;
            // return $articles;
        } else{
            $articles = Article::latest()->get();
        }

        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags= Tag::all();
        return view('articles.create',compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd(request()->all());
        // Article::create($this->validateArticle());
        $this->validateArticle();
        $article = new Article(request([
            'title', 'body','author'
        ]));
        $article->user_id = 1; // should create AUTH, <- auth()->id();
        $article->save();

        $article->tags()->attach(request('tags'));
        return redirect(route('articles.index'));
    }

        /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {

        return view('articles.show', compact('article'));
    }

        /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {

        return view('articles.edit', compact('article'));
    }

        /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(article $article)
    {

        $article->update($this->validateArticle());
        // Dirty way
        // return redirect('/article/'. $article->id);

        // cleaner way

        return redirect(route('articles.show', $article));
    }

        /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }

    protected function validateArticle()
    {
        return request()->validate(
            [
                'title' => ['required', 'min:4', 'max:255'],
                'body' => ['required', 'min:4', 'max:255'],
                'author' => ['required', 'min:4', 'max:255'],
                // 'tags' => 'exists:tags,id'
            ]
            );
    }

}


