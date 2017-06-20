@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                        <h4>Show Client</h4>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <label class="col-md-offset-4 col-md-2 control-label">Client name</label>
                            <div class="col-md-4">{{$client->name}}</div>
                        </div>
                        <div class="row">
                            <label class="col-md-offset-4 col-md-2 control-label">Client email</label>
                            <div class="col-md-4">{{$client->email}}</div>
                        </div>
                        <div class="row">
                            <label class="col-md-offset-4 col-md-2 control-label">Memebr since</label>
                            <div class="col-md-4">{{$client->created_at->format('d-m-Y')}}</div>
                        </div>
                        <div class="row">
                            <label class="col-md-offset-4 col-md-2 control-label">Last updated</label>
                            <div class="col-md-4">{{$client->updated_at->diffForHumans()}}</div>
                        </div>
                        <br/>
                        <div class="row">
                            <a class="btn btn-primary col-md-offset-5" href="{{URL::to('users', array($client, 'edit'))}}">Edit</a>
                            <a class="btn btn-default" href="{{URL::to('users')}}">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection