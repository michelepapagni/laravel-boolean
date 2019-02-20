@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <select id="gender">
                    <option value="">---</option>
                    <option value="m">Male</option>
                    <option value="f">Female</option>
                </select>
                <button id="filtra">Filtra</button>
            </div>
            @foreach (config('students') as $student)
                <div class="col-6">
                    <div class="student">
                        <div class="student-left">
                            <img src="{{ $student['img'] }}" alt="{{ $student['name'] }}">
                        </div>
                        <div class="student-right">
                            <h3>
                                <a href="{{ route('students.show', $student['slug']) }}">{{ $student['name'] }} ({{ $student['age'] }} anni)</a>
                            </h3>
                            <small>Ora è Web Developer in {{ $student['azienda'] }}</small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
