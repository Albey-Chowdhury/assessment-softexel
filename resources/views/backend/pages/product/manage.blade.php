@extends('backend.master')
@section('content')
    <section class="container p-5">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Table with stripped rows</h5>

              <table class="table table-striped table-responsive">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Image</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product )
                    <tr>
                        <th>{{$loop->index+1}}</th>
                        <td>{{$product->title}}</td>
                        <td>{{$product->category}}</td>
                        <td><img class="image" src="{{ asset('products/'. $product->image) }}" alt="Product Image" style="height: 80px; width: 80px;"></td>
                        <td>{{$product->price}}</td>
                        <td><a href="{{url('/product/edit/'.$product->id)}}" class="btn btn-success ms-2"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="{{url('/product/delete/'.$product->id)}}" onclick="return confirm('Are you sure delete this')" class="btn btn-danger"><i class="fa-solid fa-delete-left"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
        </div>
        <div class="mt-2">{{ $products->links() }}</div>
    </section>
@endsection
