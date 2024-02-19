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
    <section style="">
        <h1>Recipes</h1>
        @if (session()->has('success'))
            <div class="response">
                {{session('success')}}
            </div>
        @endif
        <div class="container">
            @foreach ($recipes as $item)
                <div class="recipe-card col-3">
                    <a href="{{route('recipe.show', ['recipe'=>$item->name])}}">
                        <div class="">
                            <img class="" style="" src="{{asset($item->image)}}" alt="" srcset="">
                            <h3>{{$item->name}}</h3>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </section>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
