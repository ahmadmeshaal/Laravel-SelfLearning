<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>string</h2>
    <p>Name= {{ $name }}</p>

    <h2>Array</h2>
    <ul>
        @foreach ($fruits as $f)
        <li>{{ $f }}</li>
        @endforeach
    </ul>

    <h2>Associative Array</h2>
    <p>NAme: {{ $user['name'] }}</p>
    <p>Email: {{ $user['email'] }}</p>
    <p>Status: {{ $user['isActive'] }}</p>

    <h2>Object</h2>
    <p>ID:{{ $product->id }}</p>
    <p>ID:{{ $product->name }}</p>
    <p>ID:{{ $product->price }}</p>
</body>

</html>