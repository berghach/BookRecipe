<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('SCSS/style.css')}}">
    <title>Edit recipe</title>
</head>
<body>
    @include('partial.header')
    <section>
        <h1>Edit recipe: {{$recipe->name}}</h1>
        <form class="forms col-6" name="edit" action="{{route('recipe.update', ['recipe'=>$recipe])}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div>
                <label for="name">Recipe name</label>
                <input type="text" name="name" id="name" value="{{$recipe->name}}">
            </div>
            <div>
                <label for="content">Content</label>
                <input type="text" name="content" id="content" value="{{$recipe->content}}">
            </div>
            <label for="image">Image</label>
            <img width="160px" height="160px" src="{{asset($recipe->image)}}" alt="">
            <input type="file" name="image" id="image">
            <button type="submit">Edit</button>
        </form>
    </section>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
{{-- {{route('recipe.edit', ['recipe'=>$item->id])}} --}}