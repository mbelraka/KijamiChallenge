@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                        <h4>Error</h4>
                    </div>
                    <div class="panel-body text-center">
                        <h5>You need to have admin privilege to do such action</h5>
                        <br/>
                        <div class="col-md-4 col-md-offset-4">
                            <a class="btn btn-primary" href="{{URL::to('users')}}">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection