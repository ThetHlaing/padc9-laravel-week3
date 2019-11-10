<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>
</head>

<body>

    <a href="/product_review/create">Create new product review</a>

    @foreach($reviews as $review)
    <h1>
        <a href="/product_review/{{$review->id}}">
            Review For : {{$review->product_name}}
        </a>
    </h1>
    <p>{{$review->review}}</p>
    @endforeach
</body>

</html>