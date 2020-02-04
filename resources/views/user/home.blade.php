@extends('layouts.app')
@section('content')
    <section class="ftco-section bg-light">
        <div class="container" style="padding: 40px">
            <div class="navbar" style="justify-content: center">
                <div class="row">
                    <ul class="nav" style="display:flex;">
                        <li class="nav-item"><a href="{{url('add-product')}}" class="nav-link">Add product</a></li>
{{--                        <li class="nav-item"><a href="" class="nav-link">Edit product</a></li>--}}
{{--                        <li class="nav-item"><a href="" class="nav-link">Deleted product</a></li>--}}
                        <li class="nav-item"><a href="" class="nav-link">Edit my profile</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Change my password</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </section>
@endsection
