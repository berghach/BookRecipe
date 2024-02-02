<header class="header-area">
    <nav class="main-nav col-12">
        <div>
            <h1>
                <a class="logo" href="{{ route('recipe.index') }}">
                    Recipe Book
                </a>
            </h1>
        </div>
        <ul class="nav">
            <li><a href="{{ route('recipe.index')}}">HOME</a></li>
            <li><a href="{{ url('categories') }}">CATEGORIES</a></li>
            <li><a href="{{ url('/recipes/add') }}">ADD RECIPES</a></li>
        </ul>
        <a class='menu-trigger'>
            <span></span>
        </a>
        @if (request()->is('/') || request()->is('recipes/search'))
        <form class="search-bar col-9" action="{{route('recipe.search')}}" method="get">
            <input type="text" name="search" id="search" placeholder="Search for recipes">
            <button type="submit">Search</button>
        </form>
        @endif
    </nav>
</header>