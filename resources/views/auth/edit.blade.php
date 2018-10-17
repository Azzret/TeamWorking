@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <form  class="col-10">
                <div class="form-group">
                    <label>Имя</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="text" class="form-control" name="email" >
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="text" class="form-control" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>


@endsection