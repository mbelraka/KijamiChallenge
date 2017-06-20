@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Clients
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-responsive table-bordered">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                            </tr>
                            @foreach($clients as $client)
                                <tr>
                                    <td><a href="{{URL::to('users', $client)}}">{{$client->name}}</a></td>
                                    <td>{{$client->email}}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection