@extends('layout')

        @section('content')
                    
                 @foreach ($recipes as $recipe)

                 <div class="col-12 col-md-6 col-lg-3"><!--CARD-->
                    <div class="card h-10">
                        <img src="{{asset('images/recipe-pic.jpg')}}" class="recipe-img img-fluid" alt="" /><!--CARD IMG-->
                        <div class="card-header">
                            <div class="row">
                                <div class="col-12">
                                    <h6 class="fs-6 recipe-title">{{$recipe->title}}</h6><!--CARD HEADING-->
                                    <hr>
                                </div>
                                <div class="col-12 text-center"><!--CARD BODY-->
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-4">
                                            <img class="recipe-icon-sm" src={{asset('images/icon-clock.png')}} alt="clock">
                                            <p class="recipe-sm-text"><span class="number">{{$recipe->time}}</span> Minutes</p>
                                        </div>
                                        <div class="col-4">
                                            <img class="recipe-icon-sm" src={{asset('images/icon-book.png')}} alt="clock">
                                            <p class="recipe-sm-text">
                                            <span class="number"><?php echo str_word_count($recipe->ingredients); ?></span> <!--Function to count word number in string-->  
                                            Ingredients</p>
                                        </div>
                                        <div class="col-4 p-0">
                                            <img class="recipe-icon-sm" src={{asset('images/icon-user-dark.png')}} alt="user icon">
                                            <p class="recipe-sm-text">Author: <strong>{{$recipe->author}}</strong></p>
                                        </div>
                                    </div>
                                    <p class="recipe-description">
                                        {{$recipe->description}}
                                    </p>
                                    <a class="btn recipe-btn" href="/recipe-single">View Recipe</a><!--CARD BTN-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--CARD END-->
                @endforeach

        @endsection