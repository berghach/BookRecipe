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
    <section>
        <h1>Add recipes</h1>
        <form class="forms col-6" name="add" action="{{route('recipe.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('post')
            <div>
                <label for="name">Recipe name</label>
                <input type="text" name="name" id="name" placeholder="Recipe name">
            </div>
            <div>
                <label for="content">Content</label>
                <input type="text" name="content" id="content" placeholder="Content">
            </div>
                <label for="image">Image</label>
                <input type="file" name="image" id="image" placeholder="Upload your image">
            <button type="submit">Add</button>
        </form>
    </section>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>