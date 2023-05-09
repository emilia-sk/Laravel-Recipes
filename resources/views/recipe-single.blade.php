<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Recipes Template</title>
    <!--Bootstrap and custom styles-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/425e93ca1f.js" crossorigin="anonymous"></script>
</head>

<body>

    <main class="main container-fluid p-0 overflow-hidden"><!--MAIN CONTAINER-->

        <header class="row d-flex justify-content between text-center px-3"><!--TOP BAR-->
            <div class="col-sm-12 col-md-3 col-lg-4 pt-3">
                <img class="icon-cake" src="img/icon-cake.png" alt="cake icon">
                <a href="index.html" class="heading-top-bar">Laravel Recipes</a>
            </div>
            <div class="col-sm-12 col-md-5 col-lg-4 pt-0 pt-md-5 pt-lg-4">
                <nav class="nav justify-content-center">
                    <li><a class="nav-link" href="recipes.html">Recipes</a></li>
                    <li><a class="nav-link" href="">About Us</a></li>
                </nav>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 pt-3">
                <button class="btn btn-top">
                    <img class="icon-btn-top img-fluid" src="img/user.png">
                    Register
                </button>
                <button class="btn btn-top mt-sm-0 mt-md-2 mt-lg-0">
                    <img class="icon-btn-top img-fluid" src="img/login.png">
                    Login
                </button>
            </div>
        </header>

        <div class="wrapper-1"><!--BG SHAPES TOP-->
            <img class="shape-1 img-fluid" src="/img/shape 1.png">
            <img class="shape-2 img-fluid" src="/img/shape 2.png">
            <img class="shape-3 img-fluid" src="/img/shape 3.png">
            <img class="shape-4 img-fluid" src="/img/shape 4.png">
            <img class="dots-1 img-fluid" src="/img/dots.png">
        </div>

        <section class="pt-3 px-4"><!--BODY CONTENT-->
            <div class="row row-recipes pt-5 pb-5 d-flex justify-content-center">

                <div class="col-9 p-4 col-recipe">
                    <div class="col-12 text-center">
                        <h4>Title</h4>
                    </div>
                    <div class="col-12 text-center">
                        <img class="recipe-icon-sm" src="img/icon-clock.png" alt="clock icon">
                        <p class="recipe-text-md d-inline"><span class="number">20</span> Minutes</p>
                        <img class="recipe-icon-sm" src="img/icon-book.png" alt="book icon">
                        <p class="recipe-text-md d-inline"><span class="number">5</span> Ingredients</p>
                        <img class="recipe-icon-sm" src="img/icon-user-dark.png" alt="user icon">
                        <p class="recipe-text-md d-inline">Author: <strong>Name</strong></p>
                    </div>
                    <hr>
                    <div class="row d-flex justify-content-center">
                        <div class="col-5">
                            <img class="recipe-img-single img-fluid w-75 mx-4" src="img/recipe-pic.jpg">
                        </div>
                        <div class="col-6">
                            <h5>Ingredients</h5>
                            <p>blabla,blabla,,blabla,blabla,blabla</p>
                            <h5>Directions</h5>
                            <p>Maecenas tincidunt posuere neque, nec sodales ligula cursus nec. Donec efficitur, enim
                                non tincidunt vulputate, erat felis tempor libero, sed cursus erat quam quis quam. Donec
                                gravida ac tortor ac placerat. Praesent auctor commodo nunc, et facilisis massa luctus
                                eget.</p>
                        </div>
                    </div>
                </div>


            </div>
        </section>

        <footer class="footer px-4 px-lg-0"><!--FOOTER-->
            © 2023 Made with ❤ by Emilia |<a class="link-github" href="#"> Github </a> <img class="icon-github"
                src="img/github.png" />
        </footer>

        <div class="wrapper-2"><!--BG SHAPES BOTTOM-->
            <img class="shape-5 img-fluid" src="/img/shape 5.png">
            <img class="shape-6 img-fluid" src="/img/shape 6.png">
            <img class="leaf-1 img-fluid" src="/img/leaf 1.png">
            <img class="leaf-2 img-fluid" src="/img/leaf 2.png">
            <img class="dots-2 img-fluid" src="/img/dots.png">
        </div>

    </main>

    <!--Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>