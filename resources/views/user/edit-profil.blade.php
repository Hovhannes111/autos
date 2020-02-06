@extends('layouts.app')
@section('content')
    <section class="ftco-section bg-light">
        <div class="container">
            @if(session()->has('changed'))
                <div class="container alert">
                    <p class="alert alert-success" style="text-align: center;font-size: 25px">{{session()->get('changed')}}</p>
                </div>
            @endif
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit my profil</div>

                    <div class="card-body">
                        <form method="POST" action="{{url('edit-profil')}}">
                           @csrf
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control " name="name" value="{{$user->name}}" required="" autocomplete="name" autofocus="">

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="phone" class="col-md-4 col-form-label text-md-right">Phone</label>

                                <div class="col-md-6">
                                    <input id="phone" type="number" class="form-control " name="phone" value="{{$user->phone}}" required="" autocomplete="phone">
                                </div>

                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <a style="padding: 50px" href="{{url('my_cabinet')}}">Back</a>
                                    <button type="submit" class="btn btn-primary">
                                        Change info
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
