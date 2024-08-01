@extends('backend.master')
@section('content')
    <section class="section p-5">
      <div class="row justify-content-center">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">FAQ Element</h5>
                @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ $error }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endforeach
                @endif
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> {{session()->get('success')}}.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
              <form action="{{url('/product/update/'.$product->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                  <label for="Tiele" class="col-sm-2 col-form-label">Product Title</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="Tiele" name="title" value="{{$product->title}}" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="Tiele" class="col-sm-2 col-form-label">Categorized</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="Tiele" name="category" value="{{$product->category}}" required>
                  </div>
                </div>
                <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                    <div class="col-sm-10">
                    <img class="image" src="{{ asset('products/'. $product->image) }}" alt="Product Image" style="height: 80px; width: 80px;">
                    <input class="form-control" type="file" id="formFile" name="image" value="{{$product->image}}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="Tiele" class="col-sm-2 col-form-label">Price</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="Tiele" name="price" value="{{$product->price}}" required>
                  </div>
                </div>
                <div class="text-center">
                  <a href="{{url('/product/store')}}"><button type="submit" class="btn btn-desbord">Submit</button></a>
                  <button type="reset" class="btn btn-desbord">Reset</button>
                </div>
              </form>

            </div>
          </div>
        </div>


      </div>
    </section>
@endsection
