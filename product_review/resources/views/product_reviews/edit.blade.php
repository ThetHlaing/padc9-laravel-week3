<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Edit {{$review->product_name}}</title>
</head>

<body>
    <h1>Edit {{$review->product_name}}</h1>

    @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif
    
    <form action="/product_review/{{$review->id}}/update/" method="post">
        @csrf

        <label for="product_name">Product Name</label>
        <input type="text" id="product_name" name="product_name" value="{{$review->product_name}}">
        <br />

        <label for="exampleInputEmail1">Review Detail</label>
        <input type="text" id="review" name="review" value="{{$review->review}}">
        <br />

        <button type="submit">Update</button>
    </form>
</body>

</html>