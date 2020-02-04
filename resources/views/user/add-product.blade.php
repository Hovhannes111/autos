@extends('layouts.app')
@section('content')
    <section class="ftco-section bg-light">
        <div class="container">
            <form method="post" action="{{url('/add-product')}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="user_id" value="{{ $user_id }}">

                <div class="form-group">
                    <label for="name">Product full name</label>
                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                           placeholder="For example -=> Bmw m5 f10" value="{{ old('name') }}">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="year">Year of issue</label>
                    <input type="number" name="year" class="form-control @error('year') is-invalid @enderror" id="year"
                           placeholder="For example -=> 2010" value="{{ old('year') }}">
                    @error('year')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="price">Full price $</label>
                    <input type="number" name="price" class="form-control @error('price') is-invalid @enderror"
                           id="price" placeholder="For example -=> 20000" value="{{ old('price') }}">
                    @error('price')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="engine">Type of engine</label>
                    <input type="text" name="engine" class="form-control @error('engine') is-invalid @enderror"
                           id="engine" placeholder="For example -=> bensin" value="{{ old('engine') }}">
                    @error('engine')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="power">Power <small>H.P.</small></label>
                    <input type="number" name="power" class="form-control @error('power') is-invalid @enderror"
                           id="power" placeholder="For example -=> 600" value="{{ old('power') }}">
                    @error('power')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="volume">Volume <small>Liter</small></label>
                    <input type="text" name="volume" class="form-control @error('volume') is-invalid @enderror"
                           id="volume" placeholder="For example -=> 4.4" value="{{ old('volume') }}">
                    @error('volume')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="millage">Mileage</label>
                    <input type="number" name="millage" class="form-control @error('millage') is-invalid @enderror"
                           id="millage" placeholder="For example -=> 50000" value="{{ old('millage') }}">
                    @error('millage')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="color">Body color</label>
                    <input type="text" name="color" class="form-control @error('color') is-invalid @enderror" id="color"
                           placeholder="For example -=> Skyblue" value="{{ old('color') }}">
                    @error('color')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="drive">Drive unit</label>
                    <input type="text" name="drive" class="form-control @error('drive') is-invalid @enderror" id="drive"
                           placeholder="For example -=> automaton" value="{{ old('drive') }}">
                    @error('drive')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="condition">Condition</label>
                    <input type="text" name="condition" class="form-control @error('condition') is-invalid @enderror"
                           id="condition" placeholder="For example -=> not broken" value="{{ old('condition') }}">
                    @error('condition')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="image">Send images* <span id="count">0</span>
                        <img src="{{asset('images/default-placeholder-300x300.png')}}" alt="" id="uploads">
                    </label>
                    <input type="file" id="image" name="image[]"
                           class="form-control @error('image') is-invalid @enderror" multiple>
                    @error('image')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>

                <div id="append" style="display: flex;flex-wrap: wrap; border: 1px solid #777777">
                </div>

                <div class="form-group">
                    <label for="description">More information</label>
                    <textarea name="description" style="height: 150px !important;" type="text"
                              class="form-control @error('description') is-invalid @enderror"
                              id="description"></textarea>
                    @error('description')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>

                <button type="submit" id="send" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
@endsection
