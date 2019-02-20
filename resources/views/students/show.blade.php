@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <ul>
                @forelse ($student as $k => $value)
                    <li>{{ $k }}: {{ $value }}</li>
                @empty
                    <p>Questo studente non esiste</p>
                @endforelse
            </ul>
        </div>
    </div>

@endsection
