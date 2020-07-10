@extends('layouts.app')


@section('main')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card w-50">
                    <div class="card-body">
                        <h5 class="card-title">Informazione Studente</h5>
                        <ul>
                            <li>ID: {{ $student->id }}</li>
                            <li>Nome: {{ $student->name }}</li>
                            <li>Cognome: {{ $student->lastname }}</li>
                            <li>Matricola: {{ $student->serial_number }}</li>
                            <li>Email: {{ $student->email }}</li>
                        </ul>
                        <div class="d-flex justify-content-flex-start align-items-center">
                            <a class="btn btn-dark btn-sm" href="{{ route('students.index') }}">Pagina principale</a>
                            <form action="{{ route('students.destroy',['student'=>$student->id]) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <input type="submit" class="btn btn-dark btn-sm ml-5 " value="Elimina">
                            </form>
                        </div>

                     </div>
                </div>



            </div>
        </div>
    </div>
@endsection
