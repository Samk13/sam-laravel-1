@extends('layouts.header')

@section('body')
<section>
    <h class="font-serif text-3xl capitalize">show projects</h>
</section>
<section class="space-y-10 flex flex-col w-full">
    <div class="flex flex-wrap m-2">
            {{-- <a href="/project/{{ $project->id }}/edit" class="hover:shadow-lg shadow rounded-lg w-1/2 p-5 cursor-pointer"> --}}
            <a href="{{ route('project.edit', $project) }}" class="hover:shadow-lg shadow rounded-lg w-1/2 p-5 cursor-pointer">
                <div class="text-xl font-serif">{{ $project->name }}</div>
                <div>{{ $project->body }}</div>
                <div>{{ $project->owner }}</div>
                <div>{{ $project->created_at }}</div>
            </a>

    </div>
    <div>
        <button class="bg-teal-900 px-5 py-2 rounded-lg text-white hover:shadow-xl capitalize">
            <a href="/project">
                Go back
            </a>
        </button>
        <button class="bg-teal-900 px-5 py-2 rounded-lg text-white hover:shadow-xl capitalize">
            {{-- <a href="/project/{{ $project->id }}/edit"> --}}
            <a href="{{ route('project.edit', $project) }}">
                Edit
            </a>
        </button>
    </div>
</section>
@endsection
