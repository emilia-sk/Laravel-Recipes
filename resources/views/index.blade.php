  @extends('components.layout')
  @section('index')
  <section class="row d-flex justify-content-center mt-0 mt-lg-3"><!--BODY CONTENT-->
      <figure class="col-sm-12 col-md-7 col-lg-5">
        <img class="img-main img-fluid" src="{{asset('images/Left section.png')}}" </div>
      </figure>
      <article class="col-sm-12 col-md-7 col-lg-4 col-hero-right">
        <h3 class="heading-hero">Sweet Recipes</h3>
        <p>Whether you're after an old favourite or inspiration for something new, we have the perfect recipe.
        </p>
        <a class="btn btn-hero" href="/recipes-all">
          See Recipes
        </a>
      </article>
    </section>
    @endsection