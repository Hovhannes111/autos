@extends('layouts.app')
@section('content')
    <style>
        ul li.nav-item {
            padding: 10px;
        }
    </style>
    <section class="ftco-section bg-light">
        <div class="container" style="padding: 40px">
            @if(session()->has('delete_product'))
                <div class="container alert">
                    <p class="alert alert-danger"
                       style="text-align: center;font-size: 25px">{{session()->get('delete_product')}}</p>
                </div>
            @endif
            <div class="navbar" style="justify-content: center">
                <div class="row">
                    <ul class="nav" style="display:flex;">
                        <li class="nav-item"><a href="{{url('add-product')}}" class="nav-link btn btn-success">Add
                                product</a></li>

                        <li class="nav-item"><a href="{{url('edit-profil')}}" class="nav-link btn btn-primary">Edit my
                                profile</a></li>

                        <li class="nav-item"><a href="{{url('change-password')}}" class="nav-link btn btn-info">Change
                                my password</a></li>
                        @if($product !== null)
                            <div style="display: flex">

                                <li class="nav-item"><a href="{{url('edit-product-info')}}"
                                                        class="nav-link btn btn-primary">Edit product info</a></li>

                                <li class="nav-item"><a href="{{url('add-images')}}" class="nav-link btn btn-primary">Add
                                        new images </a></li>

                                <li class="nav-item"><a href="{{url('delete-images')}}" class="nav-link btn btn-primary">Delete
                                        selected images </a></li>

                                <form method="POST" action="{{route('deleteProduct')}}">
                                    @csrf
                                    <li class="nav-item">
                                        <button class="nav-link btn btn-danger">Deleted product</button>
                                    </li>
                                </form>
                            </div>

                        @endif
                    </ul>

                </div>
            </div>
        </div>
    </section>
@endsection
