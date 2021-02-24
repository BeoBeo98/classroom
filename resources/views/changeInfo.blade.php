@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Change your Information</div>
                <label for="newuser"><b>Your username</b></label>
                    <div>
                      <p>{{ Auth::user()->username }}</p>
                    </div>
                <label for="newname"><b>New name</b></label>
                    <input type="text" placeholder="Enter new name" name="newname">
                <label for="newpass"><b>New password</b></label>
                    <input type="password" placeholder="Enter new password" name="newpass">
                <label for="newemail"><b>New email</b></label>
                    <input type="text" placeholder="Enter new email" name="newemail">
                <label for="newphone"><b>New phone number</b></label>
                    <input type="text" placeholder="Enter new phone" name="newphone"><br><br>
                <button type="submit">Change</button>
            </div>
        </div>
    </div>
</div>
@endsection
