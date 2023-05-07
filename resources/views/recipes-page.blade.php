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
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/425e93ca1f.js" crossorigin="anonymous"></script>
</head>

<body>

    <main class="main container-fluid p-0 overflow-hidden"><!--MAIN CONTAINER-->

        <header class="row d-flex justify-content between text-center px-3"><!--TOP BAR-->
            <div class="col-sm-12 col-md-3 col-lg-4 pt-3">
                <img class="icon-cake" src="{{asset('images/icon-cake.png')}}" alt="cake icon">
                <a href="/" class="heading-top-bar">Laravel Recipes</a>
            </div>
            <div class="col-sm-12 col-md-5 col-lg-4 pt-0 pt-md-5 pt-lg-4">
                <nav class="nav justify-content-center">
                    <li><a class="nav-link" href="/recipes-page">Recipes</a></li>
                    <li><a class="nav-link" href="a">About Us</a></li>
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

        <section class="row d-flex justify-content-center pt-3 px-4"><!--BODY CONTENT-->
            <div class="row row-recipes p-2 p-lg-4">

                <div class="col-12 d-flex justify-content-center mx-4 pt-2 pt-lg-0 pb-0 pb-lg-4"><!--SEARCH BAR-->
                    <div class="col-12 col-lg-3">
                        <form class="input-group">
                            <input type="text" class="form-control" id="searchBar" name="searchBar"
                                placeholder="Search recipes...">
                            <button type="submit" class="btn btn-search mb-2">
                                <img class="icon-search" src="{{asset('images/icon-search.png')}}" </button>
                        </form>
                    </div>
                </div>

                <div class="row px-4 pt-4 pt-lg-0 px-lg-5"><!--CARDS WRAPPER-->

                    <div class="col-12 col-md-6 col-lg-3"><!--CARD-->
                        <div class="card h-10">
                            <img src="{{asset('images/recipe-pic.jpg')}}" class="recipe-img img-fluid" alt="" /><!--CARD IMG-->
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-12">
                                        <h6 class="fs-6 recipe-title">Chocolate Cake</h6><!--CARD HEADING-->
                                        <hr>
                                    </div>
                                    <div class="col-12 text-center"><!--CARD BODY-->
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-6">
                                                <img class="recipe-icon-sm" src="img/icon-clock.png" alt="clock">
                                                <p class="recipe-sm-text"><span class="number">20</span> Minutes</p>
                                            </div>
                                            <div class="col-6">
                                                <img class="recipe-icon-sm" src="img/icon-book.png" alt="clock">
                                                <p class="recipe-sm-text"><span class="number">5</span>  Ingredients</p>
                                            </div>
                                        </div>
                                        <p class="recipe-description">
                                        Sed ullamcorper nisi feugiat sollicitudin blandit.
                                        Nunc imperdiet lorem turpis...
                                        </p>
                                        <a class="btn recipe-btn" href="">View Recipe</a><!--CARD BTN-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--CARD END-->

                    <div class="col-12 col-md-6 col-lg-3"><!--CARD-->
                        <div class="card h-10">
                            <img src="{{asset('images/recipe-pic.jpg')}}" class="recipe-img img-fluid" alt="" /><!--CARD IMG-->
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-12">
                                        <h6 class="fs-6 recipe-title">Chocolate Cake</h6><!--CARD HEADING-->
                                        <hr>
                                    </div>
                                    <div class="col-12 text-center"><!--CARD BODY-->
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-6">
                                                <img class="recipe-icon-sm" src="img/icon-clock.png" alt="clock">
                                                <p class="recipe-sm-text"><span class="number">20</span> Minutes</p>
                                            </div>
                                            <div class="col-6">
                                                <img class="recipe-icon-sm" src="img/icon-book.png" alt="clock">
                                                <p class="recipe-sm-text"><span class="number">5</span>  Ingredients</p>
                                            </div>
                                        </div>
                                        <p class="recipe-description">
                                        Sed ullamcorper nisi feugiat sollicitudin blandit.
                                        Nunc imperdiet lorem turpis...
                                        </p>
                                        <a class="btn recipe-btn" href="">View Recipe</a><!--CARD BTN-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--CARD END-->

                    <div class="col-12 col-md-6 col-lg-3"><!--CARD-->
                        <div class="card h-10">
                            <img src="{{asset('images/recipe-pic.jpg')}}" class="recipe-img img-fluid" alt="" /><!--CARD IMG-->
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-12">
                                        <h6 class="fs-6 recipe-title">Chocolate Cake</h6><!--CARD HEADING-->
                                        <hr>
                                    </div>
                                    <div class="col-12 text-center"><!--CARD BODY-->
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-6">
                                                <img class="recipe-icon-sm" src="img/icon-clock.png" alt="clock">
                                                <p class="recipe-sm-text"><span class="number">20</span> Minutes</p>
                                            </div>
                                            <div class="col-6">
                                                <img class="recipe-icon-sm" src="img/icon-book.png" alt="clock">
                                                <p class="recipe-sm-text"><span class="number">5</span>  Ingredients</p>
                                            </div>
                                        </div>
                                        <p class="recipe-description">
                                        Sed ullamcorper nisi feugiat sollicitudin blandit.
                                        Nunc imperdiet lorem turpis...
                                        </p>
                                        <a class="btn recipe-btn" href="">View Recipe</a><!--CARD BTN-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--CARD END-->

                    <div class="col-12 col-md-6 col-lg-3"><!--CARD-->
                        <div class="card h-10">
                            <img src="{{asset('images/recipe-pic.jpg')}}" class="recipe-img img-fluid" alt="" /><!--CARD IMG-->
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-12">
                                        <h6 class="fs-6 recipe-title">Chocolate Cake</h6><!--CARD HEADING-->
                                        <hr>
                                    </div>
                                    <div class="col-12 text-center"><!--CARD BODY-->
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-6">
                                                <img class="recipe-icon-sm" src="img/icon-clock.png" alt="clock">
                                                <p class="recipe-sm-text"><span class="number">20</span> Minutes</p>
                                            </div>
                                            <div class="col-6">
                                                <img class="recipe-icon-sm" src="img/icon-book.png" alt="clock">
                                                <p class="recipe-sm-text"><span class="number">5</span>  Ingredients</p>
                                            </div>
                                        </div>
                                        <p class="recipe-description">
                                        Sed ullamcorper nisi feugiat sollicitudin blandit.
                                        Nunc imperdiet lorem turpis...
                                        </p>
                                        <a class="btn recipe-btn" href="">View Recipe</a><!--CARD BTN-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--CARD END-->

                </div><!--CARDS WRAPPER END-->

            </div>
        </section>

        <footer class="footer px-4 px-lg-0"><!--FOOTER-->
            © 2023 Made with ❤ by Emilia |<a class="link-github" href="#"> Github </a> <img class="icon-github"
                src="{{asset('images/github.png')}}" />
        </footer>

        <div class="wrapper-2"><!--BG SHAPES BOTTOM-->
            <img class="shape-5 img-fluid" src="{{asset('/images/shape 5.png')}}">
            <img class="shape-6 img-fluid" src="{{asset('/images/shape 6.png')}}">
            <img class="leaf-1 img-fluid" src="{{asset('/images/leaf 1.png')}}">
            <img class="leaf-2 img-fluid" src="{{asset('/images/leaf 2.png')}}">
            <img class="dots-2 img-fluid" src="{{asset('/images/dots.png')}}">
          </div>
    </main>

    <!--Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>