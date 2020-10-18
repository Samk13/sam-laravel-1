@extends('layouts.header')

@section('body')
<section>
    <h class="font-serif text-3xl capitalize">show articke</h>
</section>
<section class="space-y-10 flex flex-col w-full">
    <div class="flex flex-wrap m-2">
            {{-- <a href="/article/{{ $project->id }}/edit" class="hover:shadow-lg shadow rounded-lg w-1/2 p-5 cursor-pointer"> --}}
            <a href="{{ route('articles.edit', $article) }}" class="hover:shadow-lg shadow rounded-lg w-1/2 p-5 cursor-pointer">
                <div class="text-xl font-serif">{{ $article->name }}</div>
                <div>{{ $article->body }}</div>
                <div>{{ $article->owner }}</div>
                <div>{{ $article->created_at }}</div>
            </a>

    </div>
    <div>
        <button class="bg-teal-900 px-5 py-2 rounded-lg text-white hover:shadow-xl capitalize">
            <a href="/articles">
                Go back
            </a>
        </button>
        <button class="bg-teal-900 px-5 py-2 rounded-lg text-white hover:shadow-xl capitalize">
            {{-- <a href="/article/{{ $article->id }}/edit"> --}}
            <a href="{{ route('articles.edit', $article) }}">
                Edit
            </a>
        </button>
    </div>
</section>
@endsection
