@extends('layouts.header')

@section('body')
<section>
    <h class="font-serif text-3xl capitalize"> all projects</h>
</section>
<section class="space-y-10 flex flex-col w-full">
    <div class="flex flex-wrap m-2">
        @foreach ($projects as $project )
            <a href="{{ route('project.show', $project) }}" class="hover:shadow-lg shadow rounded-lg w-1/2 p-5 cursor-pointer">
                <div class="text-xl font-serif">{{ $project->name }}</div>
                <div>{{ $project->body }}</div>
                <div>{{ $project->owner }}</div>
                <div>{{ $project->created_at }}</div>
            </a>
        @endforeach
    </div>
    <div>
        <button class="bg-teal-900 px-5 py-2 rounded-lg text-white hover:shadow-xl">
            <a href="/project/create">
                Create new Project
            </a>
        </button>
    </div>
</section>
@endsection
