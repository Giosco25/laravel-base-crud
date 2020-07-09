@extends('layouts.app')

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form>
                    <div class="form-group">
                        <label for="text">Name</label>
                        <input type="text" class="form-control" id="text" placeholder="Insert your name">
                    </div>
                    <div class="form-group">
                        <label for="lastname">Lastname</label>
                        <input type="text" class="form-control" id="lastname"  placeholder="Insert your lastname">
                    </div>
                    <div class="form-group">
                        <label for="serialNumber">Serial Number</label>
                        <input type="text" class="form-control" id="serialNumber"  placeholder="Insert your serial number">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Insert your email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                      <button type="submit" class="btn btn-primary">Aggiungi</button>
                </form>

            </div>

        </div>

    </div>
@endsection
