@extends('layouts.app')
@section('content')
    <section class="ftco-section bg-light">
        <div class="container">
            <a style="font-size: 25px; color: #777777" href="{{url('my_cabinet')}}">return</a>
            @if(session()->has('added'))
                <div class="container alert">
                    <p class="alert alert-success"
                       style="text-align: center;font-size: 25px">{{session()->get('added')}}</p>
                </div>
            @endif

            {{--            <div id="append" style="display: flex;flex-wrap: wrap; border: 1px solid #777777">--}}
            {{--                @foreach($images as $key => $value)--}}
            {{--                    <div style='padding: 10px'>--}}
            {{--                        <form method="post" action="{{url('update-images/'. $key)}}" enctype="multipart/form-data">--}}
            {{--                            @csrf--}}
            {{--                            <img src='{{asset('images/auto_images/'.$value)}}' alt='' width='100px' height='100px'--}}
            {{--                                 class='rm'>--}}
            {{--                            <input type="submit" style='position: absolute; margin-left: -36px' value="x">--}}
            {{--                        </form>--}}
            {{--                    </div>--}}
            {{--                @endforeach--}}


            <form method="post" action="{{url('/add-images')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="image">Send images* <span id="count">0</span>
                        <img src="{{asset('images/default-placeholder-300x300.png')}}" alt="" id="uploads">
                    </label>
                    <input type="file" id="image" name="image[]" class="form-control" multiple>
                </div>

                <div id="append" style="display: flex;flex-wrap: wrap; border: 1px solid #777777"></div>

                <button class="btn btn-success">Save!</button>
            </form>

        </div>

    </section>
@endsection
