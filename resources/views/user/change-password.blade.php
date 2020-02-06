@extends('layouts.app')
@section('content')
    <section class="ftco-section bg-light">
        <div class="container">
            @if(session()->has('error_pass'))
                <div class="container alert">
                    <p class="alert alert-danger"
                       style="text-align: center;font-size: 25px">{{session()->get('error_pass')}}</p>
                </div>
            @endif
            @if(session()->has('error_this'))
                <div class="container alert">
                    <p class="alert alert-danger"
                       style="text-align: center;font-size: 25px">{{session()->get('error_this')}}</p>
                </div>
            @endif
            @if(session()->has('success'))
                <div class="container alert">
                    <p class="alert alert-success"
                       style="text-align: center;font-size: 25px">{{session()->get('success')}}</p>
                </div>
            @endif

            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Change my password</div>

                        <div class="card-body">
                            <form method="POST" action="{{url('change-password')}}">
                                @csrf
                                <div class="form-group row">
                                    <label for="this_password" class="col-md-4 col-form-label text-md-right">This
                                        Password</label>

                                    <div class="col-md-6">
                                        <input id="this_password" type="password" class="form-control "
                                               name="this_password" required="" autocomplete="old-password">

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control " name="password"
                                               required="" autocomplete="new-password">

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm
                                        Password</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control"
                                               name="password_confirmation" required="" autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <a style="padding: 50px" href="{{url('my_cabinet')}}">Back</a>
                                        <button type="submit" class="btn btn-primary">
                                            Change password
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
