<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticlesController extends Controller
{

    public function index()
    {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
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
        Article::create($this->validateArticle());
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
            ]
            );
    }

}


