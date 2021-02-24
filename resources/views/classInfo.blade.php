@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Classroom Information</div>
                        <div id="listView">
                            <input name="num" type="button" class="btn1" id="num" value="1" />
                            <div id="name">name: </div>
                            <div id="email">email: </div>
                            <div id="phone">phone: </div>
                        </div>
            </div>
        </div>
    </div>
</div>
@endsection
