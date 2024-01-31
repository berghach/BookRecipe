<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="SCSS/style.css">
    <title>Recipes</title>
</head>
<body>
    <h1>Edit recipe</h1>
    <form name="edit" action="{{route('recipe.update', ['recipe'=>$recipe])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <label for="name">recipe name</label>
        <input type="text" name="name" id="name" value="{{$recipe->name}}">
        <label for="content">content</label>
        <input type="text" name="content" id="content" value="{{$recipe->content}}">
        <label for="image">Image</label>
        <img width="40px" height="40px" src="{{asset($recipe->image)}}" alt="">
        <input type="file" name="image" id="image">
        <button type="submit">edit</button>
    </form>
</body>
</html>
{{-- {{route('recipe.edit', ['recipe'=>$item->id])}} --}}