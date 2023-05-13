@extends('components.layout')
@section('register')
    <section class="pt-3 px-4">
        <!--BODY CONTENT-->
        <div class="row row-recipes pt-3 pb-3 d-flex justify-content-center">

            <div class="col-12 col-lg-4 px-5 pt-3 col-border">
                <h4 class="text-center">Register</h4>
                <hr>

                <form method="POST" action="/users">
                    @csrf
                    <label for="inputRegName" class="form-label">Name</label>
                    <input type="text" class="form-control mb-3" id="inputRegName" placeholder="" name="name">
                    @error('name')
                        <p class="text-error-1">{{ $message }}</p>
                    @enderror
                    <label for="inputRegEmail" class="form-label">Email</label>
                    <input type="email" class="form-control mb-3" id="inputRegEmail" placeholder="" name="email">
                    @error('email')
                        <p class="text-error-1">{{ $message }}</p>
                    @enderror
                    <label for="inputRegPassword" class="form-label">Password</label>
                    <input type="password" class="form-control mb-3" id="inputRegPassword" placeholder="" name="password">
                    @error('password')
                        <p class="text-error-1">{{ $message }}</p>
                    @enderror
                    <label for="inputRegPasswordConfirm" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control mb-3" id="inputRegPasswordConfirm" placeholder=""
                        name="password_confirmation">
                    @error('password_confirmation')
                        <p class="text-error-1">{{ $message }}</p>
                    @enderror
                    <div class="col-12 d-flex justify-content-center mt-3">
                        <button class="btn btn-post" href="">Sign Up</button>
                    </div>
                    <div class="col-12 d-flex justify-content-center mt-3">
                        <p class="text-register-sm">Already have an account?</p> <a class="link-register-sm"
                            href="">Login</a>
                    </div>
                </form>

            </div>
        </div>
    </section>
@endsection
