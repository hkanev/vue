@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div>
                    @if($projects)
                        <table>
                        @foreach ($projects as $project)
                            <tr>
                                <td>{{$project->name}}</td>
                                <td></td>
                                <td>{{$project->description}}</td>
                            </tr>
                        @endforeach
                        </table>
                    @endif
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">Projects create</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="/projects">
                            {{ csrf_field() }}

                            {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" required autofocus>

                                    {{--@if ($errors->has('email'))--}}
                                        {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                    {{--@endif--}}
                                </div>
                            {{--</div>--}}

                            {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                            <label for="description" class="col-md-4 control-label">Description</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control" name="description" required autofocus>

                                {{--@if ($errors->has('email'))--}}
                                {{--<span class="help-block">--}}
                                {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                {{--</span>--}}
                                {{--@endif--}}
                            </div>
                            {{--</div>--}}


                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Login
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
