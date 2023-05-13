@extends('components.layout')
@section('recipes-all')
    <section class="pt-3 px-4">
        <!--BODY CONTENT-->
        <div class="row row-recipes p-2 p-lg-4 mb-5">
            <x-search />
            <x-flash-message />
            <a href="/recipes/create">create</a>
            <div class="row px-4 pt-4 pt-lg-0 px-lg-5">
                <!--CARDS WRAPPER-->
                @foreach ($recipes as $recipe)
                    <div class="col-12 col-md-6 col-lg-3">
                        <!--CARD-->
                        <div class="card h-10">
                            <img src="{{$recipe->picture ? asset('storage/' . $recipe->picture) : asset('/images/no-image.svg')}}" class="recipe-img img-fluid" alt="" />
                            <!--CARD IMG-->
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-12">
                                        <h6 class="fs-6 recipe-title">{{ $recipe->title }}</h6>
                                        <!--CARD HEADING-->
                                        <hr>
                                    </div>
                                    <div class="col-12 text-center">
                                        <!--CARD BODY-->
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-4">
                                                <img class="recipe-icon-sm" src={{ asset('images/icon-clock.png') }}
                                                    alt="clock">
                                                <p class="recipe-sm-text"><span class="number">{{ $recipe->time }}</span>
                                                    Minutes
                                                </p>
                                            </div>
                                            <div class="col-4">
                                                <img class="recipe-icon-sm" src={{ asset('images/icon-book.png') }}
                                                    alt="clock">
                                                <p class="recipe-sm-text">
                                                    <span class="number"><?php echo str_word_count($recipe->ingredients); ?></span>
                                                    <!--Function to count word number in string-->
                                                    Ingredients
                                                </p>
                                            </div>
                                            <div class="col-4 p-0">
                                                <img class="recipe-icon-sm" src={{ asset('images/icon-user-dark.png') }}
                                                    alt="user icon">
                                                <p class="recipe-sm-text">Author: <strong>{{ $recipe->author }}</strong></p>
                                            </div>
                                        </div>
                                        <p class="recipe-description">
                                            {{ $recipe->description }}
                                        </p>
                                        <a class="btn recipe-btn" href="/recipe-single/{{ $recipe->id }}">View Recipe</a>
                                        <!--CARD BTN-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--CARD END-->
                @endforeach
            </div>

            <div class="d-flex justify-content-center pt-4">
                {{ $recipes->links() }}
            </div>

    </section>
@endsection
