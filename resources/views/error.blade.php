@extends('layouts.app')
@section('content')
    <div class="hero-wrap ftco-degree-bg" style="background-image: url({{asset('images/bg_1.jpg')}});"
         data-stellar-background-ratio="0.5">
        <div class="overlay"></div>

        <div class="container">
            <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
                <div class="col-lg-8 ftco-animate">
                    <div class="text w-100 text-center mb-md-5 pb-md-5">
                        @if($errors->any())
                            <h1 style="color: red; font-size: 100px">{{$errors->first()}}</h1>
                            <i class="fa icon-arrow-down fa-4x" style="color: red; font-size: 30px"></i>
                            <h2><a href="{{url('/')}}">Go Home</a></h2>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
