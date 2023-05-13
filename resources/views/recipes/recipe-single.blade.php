@extends('components.layout')
@section('recipe-single')
    <section class="pt-3 px-4">
        <!--BODY CONTENT-->
        <div class="row row-recipes p-2 p-lg-4 mb-5">
            <div class="row row-recipes pt-5 pb-5 d-flex justify-content-center">

                <div class="col-12 col-lg-9 p-4 col-recipe"> <!--RECIPE START-->
                    <div class="col-12 text-center position-relative">
                        <h4>{{ $recipe->title }}</h4>
                        <a href="/recipes/{{$recipe->id}}/edit" class="btn link-edit">
                        <img class="icon-edit" src="{{ asset('images/icon-edit.png') }}">
                         Edit</a>
                    </div>
                    <div class="col-12 text-center">
                        <img class="recipe-icon-sm" src="{{ asset('images/icon-clock.png') }}" alt="clock icon">
                        <p class="recipe-text-md d-block d-lg-inline"><span class="number">{{ $recipe->time }}</span> Minutes
                        </p>
                        <img class="recipe-icon-sm" src={{ asset('images/icon-book.png') }} alt="book icon">
                        <p class="recipe-text-md d-block d-lg-inline"><span class="number"><?php echo str_word_count($recipe->ingredients); ?></span>
                            Ingredients</p>
                        <img class="recipe-icon-sm" src={{ asset('images/icon-user-dark.png') }} alt="user icon">
                        <p class="recipe-text-md d-block d-lg-inline">Author: <strong>{{ $recipe->author }}</strong></p>
                    </div>
                    <hr>
                    <div class="row d-flex justify-content-center">
                        <div class="col-12 col-lg-5">
                            <img class="recipe-img-single img-fluid w-75 mx-4"
                                src="{{ $recipe->picture ? asset('storage/' . $recipe->picture) : asset('/images/no-image.png') }}">
                        </div>
                        <div class="col-12 col-lg-6 text-center text-lg-start pt-3 pt-lg-0">
                            <h5>Ingredients</h5>
                            <p>{{ $recipe->ingredients }}</p>
                            <h5>Directions</h5>
                            <p>{{ $recipe->directions }}</p>
                        </div>
                    </div>
                </div><!--RECIPE END-->

            </div>
        </div>
    </section>
@endsection
