<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Recipes Template</title>
  <!--Bootstrap and custom styles-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link href="css/app.css" rel="stylesheet">
</head>

<body>

  <main class="main container-fluid p-0 overflow-hidden"><!--MAIN CONTAINER-->

    <header class="row d-flex justify-content between text-center px-3"><!--TOP BAR-->
      <div class="col-sm-12 col-md-3 col-lg-4 pt-3">
        <p class="display-6 fw-bold">Laravel Recipes</p>
      </div>
      <div class="col-sm-12 col-md-5 col-lg-4 pt-0 pt-md-5 pt-lg-4">
        <nav class="nav justify-content-center">
          <li><a class="nav-link" href="/recipes-page">Recipes</a></li>
          <li><a class="nav-link" href="">About Us</a></li>
        </nav>
      </div>
      <div class="col-sm-12 col-md-4 col-lg-4 pt-3">
        <button class="btn btn-top">
          <img class="icon-btn-top img-fluid" src="{{asset('images/user.png')}}">
          Register
        </button>
        <button class="btn btn-top mt-sm-0 mt-md-2 mt-lg-0">
          <img class="icon-btn-top img-fluid" src="{{asset('images/login.png')}}">
          Login
        </button>
      </div>
    </header>

    <div class="wrapper-1"><!--BG SHAPES TOP-->
      <img class="shape-1 img-fluid" src="{{asset('/images/shape 1.png')}}">
      <img class="shape-2 img-fluid" src="{{asset('/images/shape 2.png')}}">
      <img class="shape-3 img-fluid" src="{{asset('/images/shape 3.png')}}">
      <img class="shape-4 img-fluid" src="{{asset('/images/shape 4.png')}}">
      <img class="dots-1 img-fluid" src="{{asset('/images/dots.png')}}"">
    </div>

    <section class="row d-flex justify-content-center mt-0 mt-lg-3"><!--BODY CONTENT-->
      <figure class="col-sm-12 col-md-7 col-lg-5">
        <img class="img-main img-fluid" src="{{asset('images/Left section.png')}}" </div>
      </figure>
      <article class="col-sm-12 col-md-7 col-lg-4 col-hero-right">
        <h3 class="heading-hero">Sweet Recipes</h3>
        <p>Lorem ipsum dolor sit amet, consectetur
          adipiscing elit.Nullam sit amet massa non
          nisl euismod ornare maximus eget lorem.
        </p>
        <button class="btn btn-hero">
          See Recipes
        </button>
      </article>
    </section>

    <footer class="footer px-4 px-lg-0"><!--FOOTER-->
      © 2023 Made with ❤ by Emilia |<a class="link-github" href="#"> Github </a> <img class="icon-github"
        src="{{asset('images/github.png')}}" />
    </footer>

    <div class="wrapper-2"><!--BG SHAPES BOTTOM-->
      <img class="shape-5 img-fluid" src="/images/shape 5.png">
      <img class="shape-6 img-fluid" src="/images/shape 6.png">
      <img class="leaf-1 img-fluid" src="/images/leaf 1.png">
      <img class="leaf-2 img-fluid" src="/images/leaf 2.png">
      <img class="dots-2 img-fluid" src="/images/dots.png">
    </div>

  </main>

  <!--Bootstrap JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
</body>

</html>