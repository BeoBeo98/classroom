@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Classroom Information</div>

                <li>
                    <span1><label for="title">Name</label></span1>
                    <span1><label for="title">email</label></span1>
                    <span1><label for="title">phone</label></span1>
                </li>
                @foreach($data as $user)
                    <li>
                        <span1><label for="title">{{$user->name}}</label></span1>
                        <span1><label for="title">{{$user->email}}</label></span1>
                        <span1><label for="title">{{$user->phone}}</label></span1>
                    </li>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

<style>
    span1{
        color: red;
        display: inline-block;
        width: 100px;
        margin-bottom: 3px;
        margin-left: 3px;
        padding: 5px;
        background-color: #e2e6ea;
    }
</style>
