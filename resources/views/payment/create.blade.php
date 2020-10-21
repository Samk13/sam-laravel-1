@extends('layouts.header')

@section('body')

<div class="flex justify-center">
    <form  method="POST" action="/payment">
        @csrf
        <button type="submit" class="px-10 py-5 rounded-full shadow font-serif text-2xl capitalize">make payment</button>
    </form>
</div>
@endsection
