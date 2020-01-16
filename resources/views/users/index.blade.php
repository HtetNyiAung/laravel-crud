
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('layouts.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">User Lists</div>

                    <div class="card-body">
                        <div class="row m-2">
                            <div class="col-lg-12 margin-tb">
                                <div class="pull-right">
                                    <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>
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
                                <th>Email</th>
                                <th width="280px">Action</th>
                            </tr>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <form action="{{ route('users.destroy',$user->id) }}" method="POST" class="delete">
                       
                                        @csrf
                                        @method('DELETE')
                          
                                        <button type="submit" class="btn btn-danger" id="delete">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                      
                        {!! $users->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

