@extends('layout')
@section('recipe-single')
    <section class="pt-3 px-4">
        <!--BODY CONTENT-->
        <div class="row row-recipes p-2 p-lg-4 mb-5">
            <div class="row row-recipes pt-5 pb-5 d-flex justify-content-center">

                <div class="col-9 p-4 col-recipe">
                    <div class="col-12 text-center">
                        <h4>{{$recipe->title}}</h4>
                    </div>
                    <div class="col-12 text-center">
                        <img class="recipe-icon-sm" src="{{asset('images/icon-clock.png')}}" alt="clock icon">
                        <p class="recipe-text-md d-inline"><span class="number">{{$recipe->time}}</span> Minutes</p>
                        <img class="recipe-icon-sm" src={{asset('images/icon-book.png')}} alt="book icon">
                        <p class="recipe-text-md d-inline"><span class="number"><?php echo str_word_count($recipe->ingredients); ?></span> Ingredients</p>
                        <img class="recipe-icon-sm" src={{asset('images/icon-user-dark.png')}} alt="user icon">
                        <p class="recipe-text-md d-inline">Author: <strong>{{$recipe->author}}</strong></p>
                    </div>
                    <hr>
                    <div class="row d-flex justify-content-center">
                        <div class="col-5">
                            <img class="recipe-img-single img-fluid w-75 mx-4" src="{{asset('images/recipe-pic.jpg')}}">
                        </div>
                        <div class="col-6">
                            <h5>Ingredients</h5>
                            <p>{{$recipe->ingredients}}</p>
                            <h5>Directions</h5>
                            <p>{{$recipe->directions}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
