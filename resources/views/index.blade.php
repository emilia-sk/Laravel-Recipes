  @extends('components.layout')
  @section('index')
  <section class="row d-flex justify-content-center mt-0 mt-lg-3"><!--BODY CONTENT-->
      <figure class="col-sm-12 col-md-7 col-lg-5">
        <img class="img-main img-fluid" src="{{asset('images/Left section.png')}}" </div>
      </figure>
      <article class="col-sm-12 col-md-7 col-lg-4 col-hero-right">
        <h3 class="heading-hero">Sweet Recipes</h3>
        <p>Lorem ipsum dolor sit amet, consectetur
          adipiscing elit.Nullam sit amet massa non
          nisl euismod ornare maximus eget lorem.
        </p>
        <a class="btn btn-hero" href="/recipes-all">
          See Recipes
        </a>
      </article>
    </section>
    @endsection