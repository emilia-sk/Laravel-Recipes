@extends('components.layout')
@section('login')
    <section class="pt-3 px-4">
        <!--BODY CONTENT-->
        <div class="row row-recipes pt-5 pb-5 d-flex justify-content-center">

            <div class="col-12 col-lg-4 px-5 pt-5 pb-5 col-border">
                <h4 class="text-center">Log In</h4>
                <hr>

                <form method="POST" action="/users/authenticate">
                    @csrf
                    <label for="inputLogEmail" class="form-label">Email</label>
                    <input type="email" class="form-control mb-3" id="inputLogEmail" placeholder="" name="email">
                    @error('email')
                        <p class="text-error-1">{{ $message }}</p>
                    @enderror
                    <label for="inputRegPassword" class="form-label">Password</label>
                    <input type="password" class="form-control mb-3" id="inputRegPassword" placeholder="" name="password">
                    @error('password')
                        <p class="text-error-1">{{ $message }}</p>
                    @enderror
                    <div class="col-12 d-flex justify-content-center mt-3">
                        <button type="submit" class="btn btn-post" href="">Login</button>
                    </div>
            </div>
            <div class="col-12 d-flex justify-content-center mt-3">
                <p class="text-register-sm">Don't have an account?</p> <a class="link-register-sm"
                    href="/register">Register</a>
            </div>
            </form>

        </div>
        </div>
    </section>
@endsection
