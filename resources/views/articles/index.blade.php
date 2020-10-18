@extends('layouts.header')

@section('body')
<section>
    <h class="font-serif text-3xl capitalize">articles</h>
</section>
<section class="space-y-10 flex flex-col w-full">
    @foreach ($articles as $article )
        <div class="flex flex-wrap m-2 space-y-5">
            <a href="{{ route('articles.show', $article) }}" class="hover:shadow-lg shadow rounded-lg w-1/2 p-5 cursor-pointer">
                <div>{{ $article->author }}</div>
                <div class="text-xl font-serif ">{{ $article->name }}</div>
                <div>{{ $article->body }}</div>
                <div>TAG == {{ $article->tags->pluck('name') }}</div>
            </a>
        </div>
        @endforeach
    <div>
        <button class="bg-teal-900 px-5 py-2 rounded-lg text-white hover:shadow-xl">
            <a href="/articles/create">
                Create new article
            </a>
        </button>
    </div>
</section>
@endsection
