@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Information</div>
                 {{ $user->username }}
                 {{ $user->email }}
                 {{ $user->phone }}
            </div>
        </div>
    </div>
</div>
@endsection
