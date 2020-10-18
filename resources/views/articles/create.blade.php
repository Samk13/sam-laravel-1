@extends('layouts.header')

@section('body')

<h1 class="font-serif text-3xl capitalize">Create article</h1>
<section>
    <form method="POST" action="/articles" class="flex flex-col md:w-1/2 space-y-6">
        @csrf
        <div class="flex flex-col w-full ">
            <label for="name" class="mb-2 capitalize">title</label>
            <input
                type="text"
                name="title"
                class="p-3 rounded-full pl-5 text-xl font-hairline
                {{  $errors->has('title') ? 'border border-red-500 shadow-xl' : null }}" placeholder="Article title"
                value="{{ @old('title') }}"
            >
            @error('title')
                <label for="title" class="text-pink-700 mt-2">{{ $message }}</label>
            @enderror
        </div>
        <div class="flex flex-col w-full">
            <label for="body" class="mb-2 capitalize">body</label>
            <input type="text" name="body"
                class="p-3 rounded-full pl-5 text-xl font-hairline {{  $errors->has('body') ? 'border border-red-500 shadow-xl' : null }}" placeholder="Project body"
                value="{{ @old('body') }}"
            >
            @error('body')
                <label for="body" class="text-pink-700 mt-2">
                    {{ $message }}
                </label>
            @enderror
        </div>
        <div class="flex flex-col w-full">
            <label for="author" class="mb-2 capitalize">author</label>
            <input type="text" name="author"
                class="p-3 rounded-full pl-5 text-xl font-hairline {{  $errors->has('author') ? 'border border-red-500 shadow-xl' : null }}" placeholder="Project author"
                value="{{ @old('author') }}"
            >
            @error('author')
                <label for="author" class="text-pink-700 mt-2">{{ $message }}</label>
            @enderror
        </div>
        <div class="flex flex-col w-full">
            <label for="author" class="mb-2 capitalize">tags</label>
            <select name="tags[]" class="p-3 rounded-full" multiple>
                @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}" >{{ $tag->name }}</option>
                @endforeach
            </select>
            @error('tags')
                <label for="author" class="text-pink-700 mt-2">{{ $message }}</label>
            @enderror
        </div>
        <div class="pt-10">
            <button type="submit" class="bg-green-900 px-3 py-1 rounded-lg text-white hover:shadow-xl mr-5">
                    Create new Project
            </button>
            <button class="bg-pink-900 px-3 py-1 rounded-lg text-white hover:shadow-xl">
                <a href="/articles">
                    Cancel
                </a>
            </button>
        </div>
    </form>
</section>
@endsection
