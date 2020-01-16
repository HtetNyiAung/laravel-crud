
@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            @include('layouts.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Products</div>

                    <div class="card-body">
                        <div class="row m-2">
                            <div class="col-lg-12 margin-tb">
                                <div class="pull-right">
                                    <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
                                </div>
                            </div>
                        </div>
                       
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                       
                        <table class="table table-bordered">
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Details</th>
                                <th width="280px">Action</th>
                            </tr>
                            @foreach ($products as $product)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->detail }}</td>
                                <td>
                                    <form action="{{ route('products.destroy',$product->id) }}" method="POST" class="delete">
                       
                                        <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
                        
                                        <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                       
                                        @csrf
                                        @method('DELETE')
                          
                                        <button type="submit" class="btn btn-danger" id="delete">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                      
                        {!! $products->links() !!}
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

