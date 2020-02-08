@extends('layouts.app')
@section('content')
    <section class="ftco-section bg-light">
        <div class="container">
            <a style="font-size: 15px; color: #777777" href="{{url('my_cabinet')}}">return</a>

            @if(session()->has('added'))
                <div class="container alert">
                    <p class="alert alert-success"
                       style="text-align: center;font-size: 25px">{{session()->get('added')}}</p>
                </div>
            @endif

            <form action="{{url('/delete-images')}}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="image">Deleted images* <span id="count">0</span></label>

                <div id="append" style="display: flex;flex-wrap: wrap; border: 1px solid #777777">
                    @foreach($images as  $value)
                        <div style='padding: 10px'>
                            <img src='{{asset('images/auto_images/'. $value)}}' alt='#' width='100px' height='100px'
                                 class='rm'>
                            <button class='remove rm btn btn-danger btn-del-img'
                                    style='position: absolute; margin-left: -36px'>X
                            </button>
                            <input type="hidden" id="image" value="{{$value}}" name="images[]">
                        </div>
                    @endforeach
                </div>
                <button class="btn btn-success">Save changes</button>
            </form>

        </div>
    </section>
@endsection
