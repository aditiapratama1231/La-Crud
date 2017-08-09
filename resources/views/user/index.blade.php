@extends('layouts.app')

@section('content')

<div class="panel panel-info">
    <div class="panel-heading">
        <center>
          <h1>
            List All User
          </h1>
        </center>
    </div>
    <div class="panel-body">
      <a href="{{ URL('user/create') }}" class="btn btn-raised btn-primary pull-right">Add new</a>
        <table class="table table-bordered table-hover ">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php(
                    $no = 1
                    )
                {{-- loop all kendaraan --}}
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->address }}</td>
                        <td>
                          <center>
                            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-sm btn-raised btn-info">Edit</a>
                            {!! Form::open(['method' => 'DELETE', 'route' => ['user.destroy', $user->id]]) !!}
                              {{ Form::submit('delete', ['class' => 'btn btn-sm btn-raised btn-danger']) }}
                            {!! Form::close() !!}
                          </center>
                        </td>
                    </tr>
                @endforeach
                {{-- // end loop --}}
            </tbody>
        </table>
    </div>
</div>

@stop
