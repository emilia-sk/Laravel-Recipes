@extends('components.layout')
@section('create')
    <section class="pt-3 px-4">
        <!--BODY CONTENT-->
        <div class="row row-recipes pt-5 pb-5 d-flex justify-content-center">
            <div class="col-12 col-lg-7 p-3 col-border">
                <h4 class="text-center">Create a recipe!</h4>
                <hr>

                <form method="POST" action="/recipes-all" enctype="multipart/form-data" class="row mb-3">
                    @csrf
                    <div class="col-12 col-lg-4 position-relative">
                        <label for="inputTitle" class="form-label">Title</label>
                        <input type="text" class="form-control mb-5" id="inputTitle" name="title"
                            placeholder="Recipe name">
                        @error('title')
                            <p class="text-error-1">{{ $message }}</p>
                        @enderror
                        <label for="inputDescription" class="form-label">Description</label>
                        <textarea class="form-control mb-4 mb-lg-0" id="inputDescription" name="description"
                            placeholder="A short summary for the reicpe"></textarea>
                        @error('description')
                            <p class="text-error-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-12 col-lg-4 position-relative">
                        <label for="inputAuthor" class="form-label">Author</label>
                        <input type="text" class="form-control mb-5" id="inputAuthor" name="author"
                            placeholder="Creator's name">
                        @error('author')
                            <p class="text-error-1">{{ $message }}</p>
                        @enderror
                        <label for="inputIngredients" class="form-label">Ingredients</label>
                        <textarea class="form-control mb-4 mb-lg-0" id="inputIngredients" name="ingredients"
                            placeholder="What is needed for the recipe"></textarea>
                        @error('ingredients')
                            <p class="text-error-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-12 col-lg-4 position-relative">
                        <label for="inputTime" class="form-label">Preparation Time</label>
                        <input type="number" class="form-control mb-5" id="inputTime" name="time" placeholder="Minutes">
                        @error('time')
                            <p class="text-error-1">{{ $message }}</p>
                        @enderror
                        <label for="inputDirections" class="form-label">Directions</label>
                        <textarea class="form-control" id="inputDirections" name="directions" placeholder="Preparation steps"></textarea>
                        @error('directions')
                            <p class="text-error-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-12 d-flex justify-content-center mt-3">
                        <button class="btn btn-post">Post</button>
                        <!--CARD BTN-->
                    </div>
                </form>

            </div>
        </div>
    </section>
@endsection
