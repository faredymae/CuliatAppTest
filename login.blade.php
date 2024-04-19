@include('components.header');

<div class="container d-flex justify-content-center align-items-center min-vh-100 " style="width: 800px">
    <div class="row rounded-1 shadow box-area" style="border: 1px solid black">
        {{-- left box --}}
        <div class="col-md-6 rounded-1 gx-0 justify-content-center align-items-center flex-column" style="background-color: white">
        </div>
        {{-- right box --}}
        <div class="col-md-6">
            <div class="row align-items-center gx-0 m-4">
                <div class="text-center header-text mt-2">
                    <h2 class="fw-bold mt-4 text-align-center">{{ __('auth.login_text') }}</h2>
                    <p>{{ __('auth.login_subtext') }}</p>
                </div>
                <div class="input-group1 mt-2 d-flex flex-column col-sm-11">
                    <form action="perform-login" method="post">
                        @csrf
                        <label for="username">{{ __('auth.username_hint') }}</label>
                        <input class=" form-control rounded-1 col-md-"type="text" name="username" id="username" required>
                    </div>
                    <div class="input-group2 mt-3 mb-1 d-flex flex-column col-sm-11">
                        <label for="password">{{ __('auth.password_hint') }}</label>
                        <input class="mt-1 form-control rounded-1" type="password" name="password" id="password" style="" required>
                    </div>
                    <div class="input-group3 mt-4 mb-3 ms-2">
                        <div class="form-check">
                            <button class="btn btn-light me-3  fs-6 ms-5 w-50 round align-items-center d-flex flex-column" type="submit" style="background-color: #FB8500;">{{ __('auth.sign_in_btn') }}</button>

                        </div>
                    </div>
                    </form>
                <div class="forget-pass text-center mt-4">
                    <small><a href="">{{ __('auth.forgot_pass_btn') }}</a></small>
                </div>

                <div class="registration">
                    <div class=" text-center mt-3">
                        <small>{{ __('auth.register_now_text') }} <a href="#">{{ __('auth.register_now_link') }}</a></small>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>






@include('components.header');
