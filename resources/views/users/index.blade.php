<?php

use Illuminate\Http\JsonResponse;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>users</h1>
    <pre>
        @foreach ($users as $user)
            {{ $user->name }}
            {{ $user->password }}
            {{ $user->email }}
            {{ $user->created_at }}
        @endforeach
    </pre>

    <section>
        <form method="POST" action="/users">

        {{ csrf_field() }}

            <p>
                <input type="text" name="name" placeholder="Name" required>
            </p>
            <p>
                <input type="email" name="email" placeholder="Email" required>
            </p>
            <p>
                <input type="password" name="password" placeholder="Password" required>
            </p>
            <p>
                <button type="submit">Add user</button>
            </p>
        </form>
    </section>
</body>
</html>
