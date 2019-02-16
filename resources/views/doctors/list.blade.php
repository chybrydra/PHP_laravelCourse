@extends('template')

@section('title')
  @if (isset($title)) 
    - {{ $title }}
  @endif
@endsection('title')

@section('content')
<div class="container">
    <h2>Lekarze</h2>
    <a href="{{ URL::to('doctors/create') }}">Dodaj lekarza</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nazwisko</th>
            <th scope="col">Email</th>
            <th scope="col">Telefon</th>
            <th scope="col">Specjalizacje</th>
            <th scope="col">Status</th>
        </tr>
        </thead>
        <tbody>
        @foreach($doctorsList as $doctor)
            <tr>
            <th scope="row">{{ $doctor->id }}</th>
            <td><a href="{{ URL::to('doctors/'.$doctor->id) }}">{{ $doctor->name }}</a></td>
            <td>{{ $doctor->email }}</td>
            <td>{{ $doctor->phone }}</td>
            <td>
                <ul>
                @foreach ($doctor->specializations as $specialization)
                <li>{{ $specialization->name }}</li>
                @endforeach
                </ul>
            </td>
            <td>{{ $doctor->status }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    
    @foreach ($statistics as $stat)
        @if ($stat->status == 'Active')
            Liczba dostepnych lekarzy: {{ $stat->user_count }} <br/>
        @endif
        @if ($stat->status == 'Inactive')
            Liczba niedostepnych lekarzy: {{ $stat->user_count }}
        @endif
    @endforeach
</div>
@endsection('content')
