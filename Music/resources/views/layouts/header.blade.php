<nav class="navbar navbar-expand-lg bg-warning">
  <div class="container-fluid">
  <a class="navbar-brand" href="http://127.0.0.1:8000/musics">
      <img src="https://i.pinimg.com/564x/0f/12/36/0f12361910c69aa7070464560af1c1a6.jpg" alt="Avatar Logo" style="width:40px;" class="rounded-pill"> 
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Create new
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/musics/create">Create new Song</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/authors/create">Create new Author</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/nationals/create">Create new National</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/categories/create">Create new Category</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Display
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/musics">Songs</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/authors">Authors</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/nationals">Nationals</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/categories">Categories</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search" action="/search" type="get">
        <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <form action="/logout" type="get">
        <button class="btn btn-outline-success" type="submit">logout</button>
      </form>
    </div>
  </div>
</nav>