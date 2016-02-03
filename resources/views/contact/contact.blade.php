@extends('layouts.blog')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Contact Us</div>
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

                        <form action="/contact" method="post">
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}">

                            <div class="row control-group">
                                <div class="form-group col-xs-12">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                           value="{{ old('name') }}">
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12">
                                    <label for="email">Email Address</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                           value="{{ old('email') }}">
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 controls">
                                    <label for="phone">Phone Number</label>
                                    <input type="tel" class="form-control" id="phone" name="phone"
                                           value="{{ old('phone') }}">
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 controls">
                                    <label for="message">Message</label>
                                    <textarea rows="5" class="form-control" id="message" name="message">{{ old('message') }}</textarea>
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <button type="submit" class="btn btn-default">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection