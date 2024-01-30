<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipes</title>
    <style>
        #edit{
            border-radius: 16px;
            background-color: yellow;
            color:black;
            text-decoration:none;
            display:flex;
            justify-content:center;
        }
    </style>
</head>
<body>
    <h1>Edit recipe</h1>
    <form name="edit" action="{{route('recipe.update', ['recipe'=>$recipe])}}" method="post">
        @csrf
        @method('put')
        <label for="name">recipe name</label>
        <input type="text" name="name" id="name" value="{{$recipe->name}}">
        <label for="content">content</label>
        <input type="text" name="content" id="content" value="{{$recipe->content}}">
        <button type="submit">edit</button>
    </form>
</body>
</html>
{{-- {{route('recipe.edit', ['recipe'=>$item->id])}} --}}