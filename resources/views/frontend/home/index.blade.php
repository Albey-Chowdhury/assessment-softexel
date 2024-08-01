@extends('frontend.master')
@section('content')

    <section>

        <div class="whole-prodect-section">
            <div class="container">
                <div class="row">
                    <div class="whole-prodect">
                        <div class="owl-carousel owl-theme justify-content-center">
                            @foreach ( $products as $product )
                            <div class="card">
                                <img class="image" src="{{ asset('products/'. $product->image) }}" alt="Product Image">
                                <div class="text">
                                    <span>{{$product->title}}</span>
                                    <h6>{{$product->category}}</h6>
                                    <p>{{$product->price}}</p>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
