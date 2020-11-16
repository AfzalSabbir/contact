<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AfzalSabbir/Contact</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h4>Contact Us</h4>
    <form action="{{route('contact')}}" method="post">
        @csrf
        <input name="name" class="form-control" type="text">
        <input name="email" class="form-control" type="email">
        <textarea name="description" class="form-control" name="" id="" cols="30" rows="10"></textarea>
        <button class="btn btn-success" type="submit">Save</button>
    </form>
</div>
</body>
</html>
