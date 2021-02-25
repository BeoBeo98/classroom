@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card-header">Homework</div>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{route('formpost.create')}}" method="post" enctype="multipart/form-data" >
                    @csrf
                    <div class="form-group">
                        <label for="file">File</label>
                        <input type="file" name="fileName"/>
                        @error('file')
                        <small class="form-text text-muted">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Submit" />
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
