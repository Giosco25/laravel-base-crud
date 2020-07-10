@extends('layouts.app')

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 class="mt-3">Lista Studenti</h1>
                    <a class="btn btn-primary mt-3" href="{{ route('students.create') }}">Aggiungi studente</a>
                </div>
                <table class="table table-sm table-dark mt-4">
                  <thead>
                    <tr>
                      <th scope="col">id</th>
                      <th scope="col">Name</th>
                      <th scope="col">Lastname</th>
                      <th scope="col">Serial-Number</th>
                      <th scope="col">Email</th>
                      <th scope="col">Informazioni</th>
                      <th scope="col">Modifica</th>
                      <th scope="col">Elimina</th>
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
                        <td>
                            <a class="btn btn-light btn-sm" href="{{ route('students.show',['student'=>$student->id]) }}">Informazioni studente</a>
                        </td>
                        <td>
                            <a class="btn btn-light btn-sm" href="{{ route('students.edit',['student'=>$student->id]) }}">Modifica</a>
                        </td>
                        <td>
                            <form action="{{ route('students.destroy',['student'=>$student->id]) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <input type="submit" class="btn btn-light btn-sm" value="Elimina">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
