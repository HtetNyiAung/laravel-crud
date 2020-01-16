
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('layouts.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header"> {{ $product->name }} </div>

                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-lg-12 margin-tb">
                                <div class="pull-left">
                                    <h2 class="center"> {{ $product->name }} </h2>
                                </div>
                                <div class="pull-right">
                                    <a class="btn btn-success" href="{{ route('products.index') }}"> Back</a>
                                </div>
                            </div>
                        </div>
                       
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Name:</strong>
                                    {{ $product->name }}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Details:</strong>
                                    {{ $product->detail }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

