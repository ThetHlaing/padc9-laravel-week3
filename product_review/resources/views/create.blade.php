<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Create new product review</title>
</head>

<body>

    <h1>Create new product review</h1>

    @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif

    <form action="{{route('product_review.store')}}" method="post">
        @csrf

        <label for="product_name">Product Name</label>
        <input type="text" id="product_name" name="product_name">
        <br />

        <label for="review">Review Detail</label>
        <input type="text" id="review" name="review">
        <br />

        <button type="submit">Save</button>
    </form>
</body>

</html>