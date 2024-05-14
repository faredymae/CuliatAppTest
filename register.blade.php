@extends('layouts.header')
@section('title', 'CA | Register')

<div class="container d-flex justify-content-center align-items-center min-vh-100 " style="width: 800px">
    <div class="row rounded-1 shadow box-area" style="border: 1px solid black">
        {{-- left box --}}
        <div class="col-md-6 rounded-1 gx-0 justify-content-center align-items-center flex-column" style="background-color: white">
            <img src="{{asset('assets/img/logowithwhiteBG.png')}}" alt="">
        </div>
        {{-- right box --}}
        <div class="col-md-6">
            <div class="row align-items-center gx-0 m-4 ">
                <div class="text-center header-text mt-1 ms-1">
                    <h1 class="fw-bold mt-5 text-align-center">{{ __('auth.registration') }}</h1>
                    <p class>{{ __('auth.regist_subtext') }}</p>
                </div>
                    <div class="input-group1 d-flex flex-column col-sm-11">
                        <div>
                            @if($errors -> any())
                            <div class="alert alert-danger" role="alert">
                                <ul>
                                    @foreach ($errors -> all() as $error)
                                    <li>{{$error}}</li>
                                    @endforeach

                                </ul>
                            </div>
                            @endif
                        </div>
                    <form action="{{ route('register.store')}}" method="POST">
                        @csrf
                        <label class="ms-3" for="name">{{ __('auth.fullname_regis') }}</label>
                        <input class=" form-control rounded-1 form-control-sm ms-3"type="text" name="name" id="name" >
                    </div>

                    <div class="input-group2 mt-2 mb-1 d-flex flex-column col-sm-11 ms-3">
                        <label for="email">{{ __('auth.email_regist') }}</label>
                        <input class="mt-1 form-control rounded-1 form-control-sm" type="email" name="email" id="email" >
                    </div>

                    <div class="input-group2 mt-2 mb-1 d-flex flex-column col-sm-11 ms-3">
                        <label for="password">{{ __('auth.password_hint') }}</label>
                        <input class="mt-1 form-control rounded-1 form-control-sm" type="password" name="password" id="password"  >
                    </div>

                    <div class="input-group2 mt-2 mb-1 d-flex flex-column col-sm-11 ms-3">
                        <label for="confirm-password">{{ __('auth.confirmpass_regis') }}</label>
                        <input class="mt-1 form-control rounded-1 form-control-sm" type="password" name="password_confirmation" id="password" style="" >
                    </div>

                    <div class="input-group3 mt-4 mb-3 me-5  pe-4">
                        <div class="form-check">
                            <button class="btn btn-light  rounded-4 fs-6 form-control round align-items-center d-flex flex-column" type="submit" style="background-color: #FB8500; ">{{ __('auth.sign_up_btn') }}</button>

                        </div>
                    </div>
                    </form>


            </div>

        </div>

    </div>
</div>

@include('layouts.header')
