@extends('layouts.app')
@section('content')
    <section class="ftco-section bg-light">
        <div class="container">
            <a style="font-size: 25px; color: #777777" href="{{url('my_cabinet')}}">return</a>
            @if(session()->has('edited_product'))
                <div class="container alert">
                    <p class="alert alert-success"
                       style="text-align: center;font-size: 25px">{{session()->get('edited_product')}}</p>
                </div>
            @endif

            <form method="post" action="{{url('edit-product-info')}}" enctype="multipart/form-data">
               @csrf
                <div class="form-group">
                    <label for="name">Product full name</label>
                    <input type="text" name="name" id="name" class="form-control " placeholder="For example -=> Bmw m5 f10" value="{{$product->name}}">
                </div>

                <div class="form-group">
                    <label for="year">Year of issue</label>
                    <input type="number" name="year" class="form-control " id="year" placeholder="For example -=> 2010" value="{{$product->year}}">
                </div>

                <div class="form-group">
                    <label for="price">Full price $</label>
                    <input type="number" name="price" class="form-control " id="price" placeholder="For example -=> 20000" value="{{$product->price}}">
                </div>

                <div class="form-group">
                    <label for="engine">Type of engine</label>
                    <input type="text" name="engine" class="form-control " id="engine" placeholder="For example -=> bensin" value="{{$product->engine}}">
                </div>

                <div class="form-group">
                    <label for="power">Power <small>H.P.</small></label>
                    <input type="number" name="power" class="form-control " id="power" placeholder="For example -=> 600" value="{{$product->power}}">
                </div>
                <div class="form-group">
                    <label for="volume">Volume <small>Liter</small></label>
                    <input type="text" name="volume" class="form-control " id="volume" placeholder="For example -=> 4.4" value="{{$product->volume}}">
                </div>

                <div class="form-group">
                    <label for="millage">Mileage</label>
                    <input type="number" name="millage" class="form-control " id="millage" placeholder="For example -=> 50000" value="{{$product->millage}}">
                </div>

                <div class="form-group">
                    <label for="color">Body color</label>
                    <input type="text" name="color" class="form-control " id="color" placeholder="For example -=> Skyblue" value="{{$product->color}}">
                </div>

                <div class="form-group">
                    <label for="drive">Drive unit</label>
                    <input type="text" name="drive" class="form-control " id="drive" placeholder="For example -=> automaton" value="{{$product->drive}}">
                </div>

                <div class="form-group">
                    <label for="condition">Condition</label>
                    <input type="text" name="condition" class="form-control " id="condition" placeholder="For example -=> not broken" value="{{$product->condition}}">
                </div>

{{--                <div class="form-group">--}}
{{--                    <label for="image">Send images* <span id="count">0</span>--}}
{{--                        <img src="http://127.0.0.1:8000/images/default-placeholder-300x300.png" alt="" id="uploads" style="cursor: pointer; width: 80px; height: 80px;">--}}
{{--                    </label>--}}
{{--                    <input type="file" id="image" name="image[]" class="form-control " multiple="" style="display: none;">--}}
{{--                </div>--}}

{{--                <div id="append" style="display: flex;flex-wrap: wrap; border: 1px solid #777777">--}}
{{--                </div>--}}

                <div class="form-group">
                    <label for="description">More information</label>
                    <textarea name="description" style="height: 150px !important;" type="text" class="form-control " id="description">{{$product->description}}</textarea>
                </div>

                <button type="submit" id="send" class="btn btn-primary">Save!</button>
            </form>


        </div>
    </section>
@endsection
