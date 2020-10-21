@extends('layouts.header')

@section('body')

<form action="/contact" method="POST" class="flex flex-col mt-10 space-y-5">
    @csrf

    <div class="flex flex-col ">
        <label for="email" class="mb-2 font-serif text-xl capitalize">Email</label>
        <input type="text" name="email" class="p-3 rounded-full pl-5 text-xl font-hairline {{  $errors->has('email') ? 'border border-red-500 shadow-xl' : null }}" value="{{ @old('email') ?? '' }}">
    </div>
    @error('email')
        <label for="email" class="text-pink-700 mt-2">
            {{ $message }}
        </label>
    @enderror
    <button type="submit" class="shadow-xl bg-pink-700 p-4 rounded-full mb-2 font-serif text-xl capitalize">submite</button>
</form>
@if (session('message'))
    <div class="font-serif text-xl shadow">
        {{ session('message') }}
    </div>
@endif
@endsection
