@extends('layouts.blog')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">All bloggers</div>
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

                        @foreach ($users as $user)
                            <p class="post-text light">
                                <strong>Name: </strong>{!! $user->name !!}
                            </p>

                            <p class="post-text light">
                                <strong>Email: </strong>{!! $user->email !!}
                            </p>
                            <hr/>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection