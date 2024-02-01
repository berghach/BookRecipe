<header class="header-area">
    <nav class="col-12 main-nav">
        <div>
            <h1>
                <a class="logo" href="{{ url('/recipes') }}">
                    <span>Recipe</span>
                    <span>Book</span>
                </a>
            </h1>
        </div>
        <ul class="nav">
            <li><a href="{{ url('/recipes') }}">HOME</a></li>
            <li><a href="{{ url('categories') }}">CATEGORIES</a></li>
            <li><a href="{{ url('/recipes/add') }}">ADD RECIPES</a></li>
        </ul>
        <a class='menu-trigger'>
            <span></span>
        </a>
        @if (url('/recipes'))
        <form class="search-bar col-9" action="{{route('recipe.search')}}" method="get">
            <input type="text" name="search" id="search" placeholder="Search for recipes">
            <button type="submit">Search</button>
        </form>
        @endif
    </nav>
</header>