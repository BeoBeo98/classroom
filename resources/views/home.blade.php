@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="name">name: {{Auth::user()->username}}</div>
                <br></br>
                <div class="email">email: {{Auth::user()->email}}</div>
                <br></br>
                <div class="phone">phone: {{Auth::user()->phone}}</div>
                <br></br>
                <a href="{{ url('/classInfo/') }}" class="btn-classInfo">Class Info</a>
                <a href="{{ url('/changeInfo/') }}" class="btn-classInfo">Change Info</a>
                <a href="{{ url('/homework/') }}" class="btn-classInfo">Homework</a>
                <a href="{{ url('/challenge/') }}" class="btn-classInfo">Challenge</a>
                <button type="button">Change Info</button>
                <button type="button">Homework</button>
                <button type="button">Challenge</button>
            </div>
        </div>
    </div>
</div>
@endsection
