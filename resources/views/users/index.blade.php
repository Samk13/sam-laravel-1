@extends('layouts.header')

@section('body')
    <h1>users</h1>


    <section >
        <form method="POST" action="/users" class="space-y-5 md:w-1/2 px-5 flex flex-col">

        {{ csrf_field() }}

            <p>
                <input class="w-full p-3 px-5  rounded-full" type="text" name="name" placeholder="Name" required>
            </p>
            <p>
                <input class="w-full p-3 px-5  rounded-full" type="email" name="email" placeholder="Email" required>
            </p>
            <p>
                <input class="w-full p-3 px-5  rounded-full" type="password" name="password" placeholder="Password" required>
            </p>
            <p>
                <button class=" w-full py-2 px-10 rounded-full bg-blue-400" type="submit">Add user</button>
            </p>
        </form>

        <div >
            <pre>
                @foreach ($users as $user)
                    {{ $user->name }}
                    {{ $user->password }}
                    {{ $user->email }}
                    {{ $user->created_at }}
                @endforeach
            </pre>
        </div>
    </section>
@endsection
