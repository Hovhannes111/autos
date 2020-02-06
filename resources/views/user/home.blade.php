@extends('layouts.app')
@section('content')
    <section class="ftco-section bg-light">
        <div class="container" style="padding: 40px">
            <div class="navbar" style="justify-content: center">
                <div class="row">
                    <ul class="nav" style="display:flex;">
                        <li class="nav-item"><a href="{{url('add-product')}}" class="nav-link">Add product</a></li>
                        @if($product !== null)
                            <li class="nav-item"><a href="" class="nav-link btn btn-info">Edit product</a></li>
                            <form method="POST" action="{{url('my_cabinet')}}">
                                <li class="nav-item"><button class="nav-link btn btn-danger">Deleted product</button></li>
                            </form>
                        @endif
                        <li class="nav-item"><a href="{{url('edit-profil')}}" class="nav-link">Edit my profile</a></li>
                        <li class="nav-item"><a href="{{url('change-password')}}" class="nav-link">Change my
                                password</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </section>
@endsection
