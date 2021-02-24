@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{route('formpost.update')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div horizontal layout class="form-group" >
                        <label for="username">Username</label>
                        <b>{{ Auth::user()->username }}</b>
                    </div>
                    <div class="form-group">
                        <label for="newname">New name</label>
                        <input type="text" name="name" value="{{Auth::user()->name}}" class="form-control"/>
                        @error('name')
                        <small class="form-text text-muted">{{ $message }}</small>
                        @enderror
                    </div>
{{--                    <div class="form-group">--}}
{{--                        <label for="oldpass">Old password</label>--}}
{{--                        <input type="password" name="oldpass" placeholder="Old password" class="form-control"/>--}}
{{--                        @error('oldpassword')--}}
{{--                        <small class="form-text text-muted">{{ $message }}</small>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
                    <div class="form-group">
                        <label for="newpass">New password</label>
                        <input type="password" name="password" placeholder="New password" class="form-control"/>
                        @error('password')
                        <small class="form-text text-muted">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="newemail">New email</label>
                        <input type="text" name="email" value="{{Auth::user()->email}}" class="form-control"/>
{{--                        @error('description')--}}
{{--                        <small class="form-text text-muted">{{ $message }}</small>--}}
{{--                        @enderror--}}
                    </div>
                    <div class="form-group">
                        <label for="newphone">New phone</label>
                        <input type="phone" name="phone" value="{{Auth::user()->phone}}" class="form-control"/>
{{--                        @error('description')--}}
{{--                        <small class="form-text text-muted">{{ $message }}</small>--}}
{{--                        @enderror--}}
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Submit" />
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
