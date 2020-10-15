@extends('layouts.header')

@section('body')

<h1 class="font-serif text-3xl capitalize">edit Project</h1>
<section class="">
    <form method="POST" action="/project/{{ $project->id }}" class="flex flex-col md:w-1/2 space-y-6">
        @csrf
        @method('PUT')
        <div class="flex flex-col w-full ">
            <label for="name" class="mb-2 capitalize">name</label>
            <input
                type="text"
                name="name"
                class="p-3 rounded-full pl-5 text-xl font-hairline
                {{  $errors->has('name') ? 'border border-red-500 shadow-xl' : null }}" placeholder="Project name"
                value="{{ @old('name') ?? $project->name}}"
            >
            @if ($errors->has('name'))
                <label for="name" class="text-pink-700 mt-2">{{ $errors->first('name') }}</label>
            @endif
        </div>
        <div class="flex flex-col w-full">
            <label for="body" class="mb-2 capitalize">body</label>
            <input type="text" name="body"
                class="p-3 rounded-full pl-5 text-xl font-hairline {{  $errors->has('body') ? 'border border-red-500 shadow-xl' : null }}" placeholder="Project body"
                value="{{ @old('body') ?? $project->body}}"
            >
            @if ($errors->has('body'))
                <label for="body" class="text-pink-700 mt-2">
                    {{ $errors->first('body') }}
                </label>
            @endif
        </div>
        <div class="flex flex-col w-full">
            <label for="owner" class="mb-2 capitalize">owner</label>
            <input type="text" name="owner"
                class="p-3 rounded-full pl-5 text-xl font-hairline {{ $errors->has('owner') ? 'border border-red-500 shadow-xl' : null }}" placeholder="Project owner"
                value="{{ @old('owner') ?? $project->owner }}"
            >
            @if ($errors->has('owner'))
                <label for="owner" class="text-pink-700 mt-2">{{ $errors->first('owner') }}</label>
            @endif
        </div>
        <div class="pt-10">
            <button type="submit" class="bg-green-900 px-3 py-1 rounded-lg text-white hover:shadow-xl mr-5">
                   Update
            </button>
            <button class="bg-pink-900 px-3 py-1 rounded-lg text-white hover:shadow-xl">
                <a href="{{ route('project.show',$project) }}">
                    Cancel
                </a>
            </button>
        </div>
    </form>
</section>
@endsection
