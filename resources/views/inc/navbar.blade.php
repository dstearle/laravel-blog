<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-5">

    {{-- Brand --}}
    <a class="navbar-brand" href="/">{{ config('app.name', 'laravel-blog')}}</a>

    {{-- Collapsed List --}}
    <button 
        class="navbar-toggler" 
        type="button" 
        data-toggle="collapse" 
        data-target="#navbarsExampleDefault" 
        aria-controls="navbarsExampleDefault" 
        aria-expanded="false" 
        aria-label="Toggle navigation"
    >

        <span class="navbar-toggler-icon"></span>

    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">

        {{-- Links --}}
        <ul class="navbar-nav mr-auto">

            {{-- Home --}}
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>

            {{-- About --}}
            <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
            </li>

            {{-- Services --}}
            <li class="nav-item">
                <a class="nav-link" href="/services">Services</a>
            </li>

            {{-- Posts --}}
            <li class="nav-item">
                <a class="nav-link" href="/posts">Posts</a>
            </li>

        </ul>

    </div>

</nav>