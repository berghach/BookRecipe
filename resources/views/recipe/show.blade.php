<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> --}}
    <link rel="stylesheet" href="{{asset('SCSS/style.css')}}">
    <title>Recipe:{{$recipe->name}}</title>
</head>
<body>
    @include('partial.header')
    <section>
        <h1>{{$recipe->name}}</h1>
        <div id="recipe">
            <img class="col-4" src="{{asset($recipe->image)}}" alt="">
            <p>{{$recipe->content}}</p>
            <a id="action" style="background-color: yellow;" href="{{route('recipe.edit', ['recipe'=>$recipe->id])}}">Edit</a>
            <form id="action" style="background-color: red;" method="POST" action="{{route('recipe.delete', ['recipe'=>$recipe->id])}}">
                @csrf
                @method('delete')
                <input style="background-color: transparent; border: none;" type="submit" value="Delete"/>
            </form>
        </div>
    </section>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>