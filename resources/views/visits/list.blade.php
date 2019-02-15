@extends('template')

@section('title')
  @if (isset($title)) 
    - {{ $title }}
  @endif
@endsection('title')

@section('content')
<div class="container">
    
    <h2>Wizyty</h2>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Pacjent</th>
            <th scope="col">Lekarz</th>
            <th scope="col">Data</th>            
        </tr>
        </thead>
        <tbody>
        @foreach($visits as $visit)
            <tr>
            <th scope="row">{{ $visit->id }}</th>
            <td>{{ $visit->patient->name }} ({{ $visit->patient->pesel }})</th>
            <td>{{ $visit->doctor->name }}</th>
            <td>{{ $visit->date }}</th>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
@endsection('content')
