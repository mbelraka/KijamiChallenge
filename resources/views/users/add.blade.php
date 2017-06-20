@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                        <h4>Add Client</h4>
                    </div>
                    <div class="panel-body">
                        {{Form::open(array('url' => 'users', 'class' => 'form-horizontal'))}}
                        <div class="form-group {{($errors->has('name'))? 'has-error':''}}">
                            {{Form::label('name', $value = 'Client name', $attributes=['class' => 'col-md-4 control-label'])}}
                            <div class="col-md-6 {{($errors->has('name'))? 'has-error':''}}">
                                {{Form::text('name', $value = null,  $attributes=['class' => 'form-control', 'placeholder'=> 'Client name'])}}
                                @if($errors->has('name'))
                                    <div class="has-error">
                                        <label class="control-label" for="name">{{$errors->first('name')}}</label>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group {{($errors->has('email'))? 'has-error':''}}">
                            {{Form::label('email', $value = 'Client email', $attributes=['class' => 'col-md-4 control-label'])}}
                            <div class="col-md-6 {{($errors->has('email'))? 'has-error':''}}">
                                {{Form::email('email', $value = null,  $attributes=['class' => 'form-control', 'placeholder'=> 'Client email'])}}
                                @if($errors->has('email'))
                                    <div class="has-error">
                                        <label class="control-label" for="email">{{$errors->first('email')}}</label>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group {{($errors->has('password'))? 'has-error':''}}">
                            {{Form::label('password', $value = 'Password', $attributes=['class' => 'col-md-4 control-label'])}}
                            <div class="col-md-6 {{($errors->has('password'))? 'has-error':''}}">
                                {{Form::password('password', $attributes=['class' => 'form-control', 'placeholder'=> 'Password'])}}
                                @if($errors->has('password'))
                                    <div class="has-error">
                                        <label class="control-label" for="password">{{$errors->first('password')}}</label>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                {{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}
                                <a class="btn btn-default" href="{{URL::to('users')}}">Cancel</a>
                            </div>
                        </div>
                        {{Form::close()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection