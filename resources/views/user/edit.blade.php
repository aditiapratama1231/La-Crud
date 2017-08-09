@extends('layouts.app')
@section('content')

<div class="panel panel-info">
    <div class="error">
        {{ Html::ul($errors->all()) }}
    </div>
    <div class="panel-body">
        <a href="{{ URL('user') }}" class="btn btn-raised btn-danger pull-left">Back</a>
        <div class="row">
            <div class="col-md-12"><hr>
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    {{-- <form class="form-horizontal" action="{{ URL('users') }}" method="POST"> --}}
                    {{ Form::model($user, array('route' => array('user.update', $user->id), 'method' => 'PUT')) }}
                    {{ csrf_field() }}
                      <fieldset>
                        <legend>FORM INSERT USER</legend>
                            <div class="form-group label-floating">
                              {{ Form::label('name', 'Name') }}
                              {{ Form::text('name', null, ['class' => 'form-control']) }}
                            </div>

                            <div class="form-group label-floating">
                              {{ Form::label('phone', 'Phone') }}
                              {{ Form::text('phone', null, array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group label-floating">
                              {{ Form::label('address', 'Address') }}
                              {{ Form::textarea('address', null, array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                              <div class="col-md-12">
                                <button type="submit" class="btn btn-raised btn-primary pull-right">Submit</button>
                                <button type="reset" class="btn btn-raised btn-warning pull-right">Reset</button>
                              </div>
                            </div>
                        </fieldset>
                        {!! Form::close() !!}
                    {{-- </form> --}}
                </div>
            </div>
        </div>
    </div>
</div>

@stop
