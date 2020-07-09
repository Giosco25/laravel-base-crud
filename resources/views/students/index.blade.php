@extends('layouts.app')

@section('main')
    <ul>
    @foreach ($students as $student)
        <li>{{ $student->name }}</li>
    </ul>
    @endforeach
@endsection
