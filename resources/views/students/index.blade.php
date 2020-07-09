@extends('layouts.app')

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h1>Lista Studenti</h1>
                    <a class="btn btn-primary" href="{{ route('students.create') }}">Aggiungi studente</a>
                </div>
                <table class="table table-sm table-dark">
                  <thead>
                    <tr>
                      <th scope="col">id</th>
                      <th scope="col">Name</th>
                      <th scope="col">Lastname</th>
                      <th scope="col">Serial-Number</th>
                      <th scope="col">Email</th>
                      {{-- <th scope="col">Dettagli</th> --}}
                    </tr>
                  </thead>
                  <tbody>

                      @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->lastname }}</td>
                        <td>{{ $student->serial_number }}</td>
                        <td>{{ $student->email }}</td>
                        {{-- <td>
                            <a class="btn btn-light" href="#">Dettagli</a>
                        </td> --}}
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
