@extends('layouts.app')
@section('content')
    <section class="ftco-section bg-light">
    <div class="container">
        <form method="post" action="{{url('/add-product')}}">
            @csrf
            <div class="form-group">
                <label for="name">Product full name</label>
                <input type="text" name="name" id="name" class="form-control"  placeholder="Product full name">
            </div>
            <div class="form-group">
                <label for="year">Year of issue</label>
                <input type="number" name="year" class="form-control" id="year" placeholder="Year of issue">
            </div>
            <div class="form-group">
                <label for="price">Full price $</label>
                <input type="number" name="price" class="form-control" id="price" placeholder="Full price $">
            </div>
            <div class="form-group">
                <label for="engine">Type of engine</label>
                <input type="text" name="engine" class="form-control" id="engine" placeholder="Type of engine">
            </div>
            <div class="form-group">
                <label for="power">Power <small>H.P.</small></label>
                <input type="number" name="power" class="form-control" id="power" placeholder="Power">
            </div>
            <div class="form-group">
                <label for="volume">Volume <small>Liter</small></label>
                <input type="number" name="volume" class="form-control" id="volume" placeholder="Volume">
            </div>
            <div class="form-group">
                <label for="millage">Mileage</label>
                <input type="number" name="millage" class="form-control" id="millage" placeholder="Mileage">
            </div>
            <div class="form-group">
                <label for="color">Body color</label>
                <input type="text" name="color" class="form-control" id="color" placeholder="Body color">
            </div>
            <div class="form-group">
                <label for="drive">Drive unit</label>
                <input type="text" name="drive" class="form-control" id="drive" placeholder="Drive unit">
            </div>
            <div class="form-group">
                <label for="condition">Condition</label>
                <input type="text" name="condition" class="form-control" id="condition" placeholder="Condition">
            </div>
            <div class="form-group">
                <label for="description">More information</label>
                <textarea name="description" style="height: 150px !important;" type="text" class="form-control" id="description"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </section>
@endsection
