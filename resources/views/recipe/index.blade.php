<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('SCSS/style.css')}}">
    <title>Recipes</title>
</head>
<body>
    <h1>Recipes</h1>
    <form action="{{route('recipe.search')}}" method="get">
        {{-- <label for="search">Search</label> --}}
        <input type="text" name="search" id="search">
        <button type="submit">Search</button>
    </form>
    @if (session()->has('success'))
        <div>
            {{session('success')}}
        </div>
    @endif
    <table style="border: 4px solid black ">
        <thead style="background-color: aqua ">
            <tr>
                <th>ID</th>
                <th>IMAGE</th>
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
                    <td><img width="40px" height="40px" src="{{asset($item->image)}}" alt=""></td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->content}}</td>
                    <td>{{$item->created_at}}</td>
                    <td>{{$item->updated_at}}</td>
                    <td style="display: flex; gap:8px;">
                        <a id="action" style="background-color: yellow;" href="{{route('recipe.edit', ['recipe'=>$item->id])}}">Edit</a>
                        <form id="action" style="background-color: red;" method="POST" action="{{route('recipe.delete', ['recipe'=>$item->id])}}">
                            @csrf
                            @method('delete')
                            <input style="background-color: transparent; border: none;" type="submit" value="Delete"/>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <h1>Add recipes</h1>
    <form name="add" action="{{route('recipe.store')}}" method="post" enctype="multipart/form-data">
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
    <script src="js/app.js"></script>
</body>
</html>
{{-- {{route('recipe.edit', ['recipe'=>$item->id])}} --}}