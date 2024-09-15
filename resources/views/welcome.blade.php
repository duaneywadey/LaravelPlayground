<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    @php
        $fruits = ["one"=>"Apple", "two"=>"Banana", "three"=>"Pineapple"];
    @endphp

    @include('pages.header', ['names' => $fruits])
    <h1>This is the homepage</h1>
    <a href="/about">About</a>
    <a href="/post">Posts</a>
    <a href="/users">Users</a>
    @include('pages.footer')
</body>
</html>