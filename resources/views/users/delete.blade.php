@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                        <h4>Delete Client</h4>
                    </div>
                    <div class="panel-body text-center">
                        <h5>Are you sure you would like to delete {{$client->name}}?</h5>
                        <br/>
                        {{Form::model($client, array('route' => array('users.destroy', $client), 'method' => 'DELETE', 'class' => 'form-horizontal'))}}
                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-4">
                                {{ Form::submit('Yes', array('class' => 'btn btn-primary')) }}
                                <a class="btn btn-default" href="{{URL::to('users')}}">No</a>
                            </div>
                        </div>
                        {{Form::close()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection