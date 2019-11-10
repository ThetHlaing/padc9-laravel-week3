<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>
    <style>
        form {
            display: inline;
        }
    </style>
</head>

<body>

    <h1>
        Review For : {{$review->product_name}}
    </h1>
    
    <span>votes : {{$review->votes }}</span>
    <a href="/product_review/{{$review->id}}/edit/">Edit the review</a>

    <p>{{$review->review}}</p>

    <form action="/product_review/{{$review->id}}/upvote" method="post">
        @csrf
        <button type="submit">vote up</button>
    </form>

    <form action="/product_review/{{$review->id}}/downvote" method="post">
        @csrf
        <button type="submit">vote down</button>
    </form>
</body>

</html>