@extends('layout')
@section('create')
<section class="pt-3 px-4">
    <!--BODY CONTENT-->
    <div class="row row-recipes pt-5 pb-5 d-flex justify-content-center">
        <div class="col-12 col-lg-7 p-3 col-border">
            <h4 class="text-center">Create a recipe!</h4>
            <hr>

            <form class="row mb-3">
                <div class="col-12 col-lg-4">
                    <label for="inputTitle" class="form-label">Title</label>
                    <input type="text" class="form-control mb-4" id="inputTitle" placeholder="Recipe name">
                    <label for="inputDescription" class="form-label">Desription</label>
                    <textarea class="form-control mb-4 mb-lg-0" id="inputDescription" placeholder="A short summary for the reicpe"></textarea>
                </div>

                <div class="col-12 col-lg-4">
                    <label for="inputAuthor" class="form-label">Author</label>
                    <input type="text" class="form-control mb-4" id="inputAuthor" placeholder="Creator's name">
                    <label for="inputIngredients" class="form-label">Ingredients</label>
                    <textarea class="form-control mb-4 mb-lg-0" id="inputIngredients" placeholder="What is needed for the recipe"></textarea>
                </div>

                <div class="col-12 col-lg-4">
                    <label for="inputTime" class="form-label">Preparation Time</label>
                    <input type="number" class="form-control mb-4" id="inputTime" placeholder="Minutes">
                    <label for="inputDirections" class="form-label">Directions</label>
                    <textarea class="form-control" id="inputDirections" placeholder="Preparation steps"></textarea>
                </div>

                <div class="col-12 d-flex justify-content-center mt-3">
                    <button class="btn btn-post" href="">Post</button>
                    <!--CARD BTN-->
                </div>
            </form>

        </div>
    </div>
</section>
@endsection
