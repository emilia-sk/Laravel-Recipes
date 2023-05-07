@props(['recipe'])

<x-card>
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
</x-card>