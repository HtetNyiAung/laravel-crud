
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('layouts.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Edit {{ $product->name }}</div>

                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-lg-12 margin-tb">
                                <div class="pull-left">
                                    <h2>Edit {{ $product->name }}</h2>
                                </div>
                                <div class="pull-right">
                                    <a class="btn btn-success" href="{{ route('products.index') }}"> Back</a>
                                </div>
                            </div>
                        </div>
                       
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                      
                        <form action="{{ route('products.update',$product->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                       
                             <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Name:</strong>
                                        <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Detail:</strong>
                                        <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail">{{ $product->detail }}</textarea>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                  <button type="submit" class="btn btn-success">Update</button>
                                </div>
                            </div>
                       
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

