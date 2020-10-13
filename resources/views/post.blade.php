@extends('layouts.header')


@section('body')
<section class="bg-gray-900 h-screen md:px-5 pt-10 ">
    <div class="p-5 bg-yellow-500 rounded-lg space-y-4">
        <h1 class="uppercase text-3xl font-serif">Lorem, ipsum dolor sit font-display font-black</h1>

        <div class="text-x font-medium">
            amet consectetur adipisicing elit. Eligendi autem provident, distinctio magnam error blanditiis est enim minima voluptate delectus doloremque beatae quae eveniet impedit! Cumque exercitationem consequatur ducimus vitae.

        </div>
        <div  class="bg-blue-500 rounded-lg p-2 font-black">
            <table class="table-auto">
                <thead>
                    <tr>
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">Slug</th>
                        <th class="px-4 py-2">body</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->slug }}</td>
                        <td>{{ $post->body }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

@stop
