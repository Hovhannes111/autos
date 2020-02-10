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

                                <li class="nav-item"><a href="{{url('add-images')}}" class="nav-link btn btn-success">Add
                                        new images </a></li>

                                <li class="nav-item"><a href="{{url('delete-images')}}" class="nav-link btn btn-warning">Delete
                                        selected images </a></li>

                                <form method="POST" action="{{route('deleteProduct')}}">
                                    @csrf
                                    <li class="nav-item">
                                        <button class="nav-link btn btn-danger">Deleted product</button>
                                    </li>
                                </form>
                            </div>


{{--                            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">--}}
{{--                                <div class="card">--}}
{{--                                    <h5 class="card-header">Recent Orders</h5>--}}
{{--                                    <div class="card-body p-0">--}}
{{--                                        <div class="table-responsive">--}}
{{--                                            <table class="table">--}}
{{--                                                <thead class="bg-light">--}}
{{--                                                <tr class="border-0">--}}
{{--                                                    <th class="border-0">#</th>--}}
{{--                                                    <th class="border-0">Image</th>--}}
{{--                                                    <th class="border-0">Product Name</th>--}}
{{--                                                    <th class="border-0">Product Id</th>--}}
{{--                                                    <th class="border-0">Quantity</th>--}}
{{--                                                    <th class="border-0">Price</th>--}}
{{--                                                    <th class="border-0">Order Time</th>--}}
{{--                                                    <th class="border-0">Customer</th>--}}
{{--                                                    <th class="border-0">Status</th>--}}
{{--                                                </tr>--}}
{{--                                                </thead>--}}
{{--                                                <tbody>--}}
{{--                                                <tr>--}}
{{--                                                    <td>1</td>--}}
{{--                                                    <td>--}}
{{--                                                        <div class="m-r-10"><img src="assets/images/product-pic.jpg" alt="user" class="rounded" width="45"></div>--}}
{{--                                                    </td>--}}
{{--                                                    <td>Product #1 </td>--}}
{{--                                                    <td>1 </td>--}}
{{--                                                    <td>20</td>--}}
{{--                                                    <td>$80.00</td>--}}
{{--                                                    <td>27-08-2018 01:22:12</td>--}}
{{--                                                    <td>Patricia J. King </td>--}}
{{--                                                    <td><span class="badge-dot badge-brand mr-1"></span>InTransit </td>--}}
{{--                                                </tr>--}}
{{--                                                </tbody>--}}
{{--                                            </table>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}


                        @endif
                    </ul>

                </div>
            </div>
        </div>
    </section>
@endsection
