<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> --}}
    <link rel="stylesheet" href="{{asset('SCSS/style.css')}}">

    <title>Add recipe</title>
</head>
<body>
    @include('partial.header')
    <h1>Add recipes</h1>
    <form  name="add" action="{{route('recipe.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('post')
        <label for="name">recipe name</label>
        <input type="text" name="name" id="name">
        <label for="content">content</label>
        <input type="text" name="content" id="content">
        <label for="image">Image</label>
        <input type="file" name="image" id="image">
        <button type="submit">add</button>
    </form>
</body>
</html>