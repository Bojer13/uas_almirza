@extends('layouts.app')

@section('content')
<style type="text/css">
    .category{
        text-align: center;
        padding-top: 40px;
    }
    .input_color{
      color: black;
    }
</style>
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">category</h1>
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <div class="category">
    @if (session()->has('message'))
    <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
      {{ session()->get('message') }}
    </div>
    @endif
    
    <h4>add category</h4>
    <form action="{{ url('/add_category') }}" method="POST">
      @csrf
      <input class="input_color" type="text" name="category" placeholder="tambah kategori">
      <input type="submit" class="btn btn-primary" name="submit" value="Add category">
    </form>
</div>
</div>
@endsection