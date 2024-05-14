@include('layouts.navbar')
@extends('layouts.header')
@section('title', 'Culiat App | Explore')

<div class="container mt-3 ">
    <div class="row">
        @include('components.profile')
        <div class="col-6">
            <div class="row rounded-3 p-3" style="background-color: white">
            @include('shared.success-message')
            @include('shared.submit-post')
            </div>
            <hr>
            @foreach ($posts as $post)
            <div class="mt-3">
                @include('shared.post-card')

            </div>
            @endforeach
            <div class="mt-3 text-orange">
              {{$posts ->links()}}
            </div>

        </div>





        @include('components.follow')









    </div>
</div>







@include('layouts.footer')
