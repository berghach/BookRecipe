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
    <h1>Recipes</h1>
    <table style="border: 4px solid black ">
        <thead style="background-color: aqua ">
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>CONTENT</th>
                <th>CREATED AT</th>
                <th>EDITED AT</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($recipes as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->content}}</td>
                    <td>{{$item->created_at}}</td>
                    <td>{{$item->updated_at}}</td>
                    <td>
                        <a id="edit" href="{{route('recipe.edit', ['recipe'=>$item->id])}}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <h1>Add recipes</h1>
    <form name="add" action="{{route('recipe.store')}}" method="post">
        @csrf
        @method('post')
        <label for="name">recipe name</label>
        <input type="text" name="name" id="name">
        <label for="content">content</label>
        <input type="text" name="content" id="content">
        <button type="submit">add</button>
    </form>
</body>
</html>
{{-- {{route('recipe.edit', ['recipe'=>$item->id])}} --}}