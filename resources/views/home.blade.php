@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div horizontal layout class="form-group" >
                    <label for="username">Username: </label>
                    <b>{{ Auth::user()->username }}</b>
                </div>
                <div horizontal layout class="form-group" >
                    <label for="fullname">Fullname: </label>
                    <b>{{ Auth::user()->name }}</b>
                </div>
                <div horizontal layout class="form-group" >
                    <label for="phone">Phone: </label>
                    <b>{{ Auth::user()->phone }}</b>
                </div>
                <div horizontal layout class="form-group" >
                    <label for="email">Email: </label>
                    <b>{{ Auth::user()->email }}</b>
                </div>
                <div horizontal layout class="form-group" >
                    <a href="{{ url('/classInfo/') }}" class="btn-classInfo">Class Info</a>
                    <a href="{{ url('/changeInfo/') }}" class="btn-classInfo">Change Info</a>
                </div>
                <div horizontal layout class="form-group" >
                    <a href="{{ url('/homework/') }}" class="btn-classInfo">Homework</a>
                    <a href="{{ url('/challenge/') }}" class="btn-classInfo">Challenge</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
