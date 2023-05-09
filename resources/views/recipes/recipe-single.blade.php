@extends('layout')
@section('recipe-single')
    <section class="pt-3 px-4">
        <!--BODY CONTENT-->
        <div class="row row-recipes p-2 p-lg-4 mb-5">
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
        </div>
    </section>
@endsection
