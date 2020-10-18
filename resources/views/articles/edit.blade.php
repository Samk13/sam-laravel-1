@extends('layouts.header')

@section('body')

<h1 class="font-serif text-3xl capitalize">edit article</h1>
<section>
    <form method="POST" action="/articles/{{ $article->id }}" class="flex flex-col md:w-1/2 space-y-6">
        @csrf
        @method('PUT')
        <div class="flex flex-col w-full ">
            <label for="tutle" class="mb-2 capitalize">name</label>
            <input
                type="text"
                name="title"
                class="p-3 rounded-full pl-5 text-xl font-hairline
                {{  $errors->has('title') ? 'border border-red-500 shadow-xl' : null }}" placeholder="article name"
                value="{{ @old('title') ?? $article->title}}"
            >
            @if ($errors->has('title'))
                <label for="title" class="text-pink-700 mt-2">{{ $errors->first('title') }}</label>
            @endif
        </div>
        <div class="flex flex-col w-full">
            <label for="body" class="mb-2 capitalize">body</label>
            <input type="text" name="body"
                class="p-3 rounded-full pl-5 text-xl font-hairline {{  $errors->has('body') ? 'border border-red-500 shadow-xl' : null }}" placeholder="article body"
                value="{{ @old('body') ?? $article->body}}"
            >
            @if ($errors->has('body'))
                <label for="body" class="text-pink-700 mt-2">
                    {{ $errors->first('body') }}
                </label>
            @endif
        </div>
        <div class="flex flex-col w-full">
            <label for="owner" class="mb-2 capitalize">Author</label>
            <input type="text" name="author"
                class="p-3 rounded-full pl-5 text-xl font-hairline {{ $errors->has('author') ? 'border border-red-500 shadow-xl' : null }}" placeholder="article owner"
                value="{{ @old('author') ?? $article->author }}"
            >
            @if ($errors->has('author'))
                <label for="author" class="text-pink-700 mt-2">{{ $errors->first('author') }}</label>
            @endif
        </div>
        <div class="pt-10">
            <button type="submit" class="bg-green-900 px-3 py-1 rounded-lg text-white hover:shadow-xl mr-5">
                   Update
            </button>
            <button class="bg-pink-900 px-3 py-1 rounded-lg text-white hover:shadow-xl">
                <a href="{{ route('articles.show',$article) }}">
                    Cancel
                </a>
            </button>
        </div>
    </form>
</section>
@endsection
