@extends('layouts.blog')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Profile</div>
                    <div class="panel-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <p class="post-text light">
                            <strong>Your name: </strong>{!! $user->name !!}
                        </p>

                        <p class="post-text light">
                            <strong>Your email: </strong>{!! $user->email !!}
                        </p>

                        @if(!Auth::guest() AND Auth::user())
                            <a href="{{ url('user/edit/'.$user->id) }}" class="btn btn-warning pull-right">
                                <i class="fa fa-pencil"></i>
                                Edit Profile
                            </a>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection