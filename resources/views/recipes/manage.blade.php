@extends('components.layout')
@section('manage')
    <section class="pt-3 px-4">
        <!--BODY CONTENT-->
        <div class="row row-recipes pt-2 pb-4 d-flex justify-content-center">
            <div class="col-12 col-lg-6 px-5 pt-4 pb-4 col-border">
                <h4 class="text-center">Manage My Recipes</h4>
                <hr>
                <div class="col-12 p-3 bg-light border col-manage">

                    @unless ($recipes->isEmpty())
                        @foreach ($recipes as $recipe)
                            <div class="row bg-light border">
                                <!--RECIPE-->
                                <div class="col-12 col-lg-6">
                                    <p>{{ $recipe->title }}</p>
                                </div>
                                <div class="col-12 col-lg-3">
                                    <a href="/recipes/{{ $recipe->id }}/edit" class="btn link-edit">
                                        <img class="icon-edit" src="{{ asset('images/icon-edit.png') }}">
                                        Edit</a>
                                </div>
                                <div class="col-12 col-lg-3 position-relative">
                                    <form method="POST" action="/recipe-single/{{ $recipe->id }}">
                                        <!--DELETE FORM-->
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn link-delete">
                                            <img class="icon-edit" src="{{ asset('images/icon-delete.png') }}">
                                            Delete</button>
                                    </form>
                                </div>
                            </div>
                            <!--RECIPE END-->
                        @endforeach
                    @else
                        <div class="row bg-light border">
                            <p class="pt-0 pt-lg-3">No recipes found</p>
                        </div>
                    @endunless

                </div>
            </div>
    </section>
@endsection
