<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<style>
    *{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  box-sizing: border-box;
}

@media(min-aspect-ratio: 16/9)
{
  .banner video
  {
      width: 100%;
      height:100%;
  }
}
.navbar-brand {
    color: deepskyblue;
}

.navbar-toggler:hover {
    text-decoration: none;
    color: red;
    
}
/* Tùy chỉnh màu của biểu tượng trong .navbar-toggler-icon */
.navbar-toggler-icon {
      background-color: purple; /* Màu nền biểu tượng */
    }
.nav-link:focus, .nav-link:hover {
    /* color: var(--bs-nav-link-hover-color); */
    color: deepskyblue;
}

</style>
</head>

<body>
    <header>
        <nav class="navbar navbar-light  fixed-top ">
            <div class="container-fluid ">
                   <a class="navbar-brand "  href="http://127.0.0.1:8000/musics">
                   <img src="https://i.pinimg.com/564x/0f/12/36/0f12361910c69aa7070464560af1c1a6.jpg" alt="Avatar Logo" style="width:40px;" class="rounded-pill">
                   Kmusic

                   </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="http://127.0.0.1:8000/login">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://127.0.0.1:8000/register">Register</a>
                            </li>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="banner">
            <video autoplay loop playsinline>
                <source src="{{URL('images/layout.mp4')}}">
                <source src="{{URL('images/layout.mp4')}}">
            </video>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>
</html>