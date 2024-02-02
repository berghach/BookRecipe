<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> --}}
    <link rel="stylesheet" href="{{asset('SCSS/style.css')}}">
    <title>Recipes</title>
</head>
<body>
    @include('partial.header')
    <section class="col-12" style="">
        <h1>Recipes</h1>
        @if (session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
        <div class="container col-12">
            <div class="recipe-card col-3">
                <a href="">
                    <div class="">
                        <img class="" style="" src="{{asset('images\site_home_pic.png')}}" alt="" srcset="">
                        <h3>recipe name</h3>
                    </div>
                </a>
            </div>
            <div class="recipe-card col-3">
                <a href="">
                    <div class="">
                        <img class="" style="" src="{{asset('images\site_home_pic.png')}}" alt="" srcset="">
                        <h3>recipe name</h3>
                    </div>
                </a>
            </div>
            <div class="recipe-card col-3">
                <a href="">
                    <div class="">
                        <img class="" style="" src="{{asset('images\site_home_pic.png')}}" alt="" srcset="">
                        <h3>recipe name</h3>
                    </div>
                </a>
            </div>
            <div class="recipe-card col-3">
                <a href="">
                    <div class="">
                        <img class="" style="" src="{{asset('images\site_home_pic.png')}}" alt="" srcset="">
                        <h3>recipe name</h3>
                    </div>
                </a>
            </div>
            <div class="recipe-card col-3">
                <a href="">
                    <div class="">
                        <img class="" style="" src="{{asset('images\site_home_pic.png')}}" alt="" srcset="">
                        <h3>recipe name</h3>
                    </div>
                </a>
            </div>
        </div>
        <table class="col-3" style="border: 4px solid black ">
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
    </section>
    <script src="js/app.js"></script>
</body>
</html>
{{-- {{route('recipe.edit', ['recipe'=>$item->id])}} --}}