@extends('layouts.app')

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action = "{{ route('students.update',['student'=>$student->id]) }}" method="post">
                    @method('PUT')
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
                        <input type="text" name="name" class="form-control" value="{{ $student->name }}" id="text" placeholder="Insert your name">
                    </div>
                    <div class="form-group">
                        <label for="lastname">Lastname</label>
                        <input type="text" name="lastname" class="form-control" value="{{ $student->lastname }}" id="lastname"  placeholder="Insert your lastname">
                    </div>
                    <div class="form-group">
                        <label for="serialNumber">Serial Number</label>
                        <input type="text" name="serial_number" class="form-control" id="serialNumber" value="{{ $student->serial_number }}"  placeholder="Insert your serial number">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{ $student->email }}" aria-describedby="emailHelp" placeholder="Insert your email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                      <button type="submit" class="btn btn-primary">Modifica</button>
                      <a class="btn btn-dark btn-sm" href="{{ route('students.index') }}">Pagina principale</a>
                </form>

            </div>

        </div>

    </div>
@endsection
