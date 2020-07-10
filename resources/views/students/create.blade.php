@extends('layouts.app')

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action = "{{ route('students.store') }}" method="post">
                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="text">Name</label>
                        <input type="text" name="name" class="form-control" id="text" placeholder="Insert your name" value=" {{ old('name') }}">
                    </div>
                    <div class="form-group">
                        <label for="lastname">Lastname</label>
                        <input type="text" name="lastname" class="form-control" id="lastname" value=" {{ old('lastname') }}" placeholder="Insert your lastname">
                    </div>
                    <div class="form-group">
                        <label for="serialNumber">Serial Number</label>
                        <input type="text" name="serial_number" class="form-control" id="serialNumber" value=" {{ old('serial_number') }}" placeholder="Insert your serial number">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value=" {{ old('email') }}"  placeholder="Insert your email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                      <button type="submit" class="btn btn-primary">Aggiungi</button>
                      <a class="btn btn-dark btn-sm" href="{{ route('students.index') }}">Pagina principale</a>
                </form>

            </div>

        </div>

    </div>
@endsection
