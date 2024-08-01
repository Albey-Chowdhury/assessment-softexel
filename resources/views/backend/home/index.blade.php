@extends('backend.master')
@section('content')
<div class="container p-5">
    <div class="row">
      <div class="col-md-6">
        <div class="card mb-4 desbord-card">
          <div class="card-body">
            <h5 class="card-title">Add Product</h5>
            <a href="{{url('/product/add')}}" class=""><button class="btn btn-desbord col-md-8">ADD</button></a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card mb-4 desbord-card">
          <div class="card-body">
            <h5 class="card-title">Manage Product</h5>
            <a href="{{url('/product/manage')}}"><button class="btn btn-desbord col-md-8">MANAGE</button></a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card mb-4 desbord-card">
          <div class="card-body">
            <h5 class="card-title">Add categorized</h5>
            <a href="{{url('/add/categori')}}"><button class="btn btn-desbord col-md-8">Add</button></a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card mb-4 desbord-card">
          <div class="card-body">
            <h5 class="card-title">Manage categorized</h5>
            <a href=""><button class="btn btn-desbord col-md-8">Manage</button></a>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
