@extends('template')

@section('title')
{{ $title }}
@endsection('title')

@section('content')
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Firstname</th>
        <th scope="col">Lastname</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Address</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>
    @foreach($doctorsList as $doctor)
      <tr>
        <th scope="row">{{ $doctor['id'] }}</th>
        <td>{{ $doctor['firstname'] }}</td>
        <td>{{ $doctor['lastname'] }}</td>
        <td>{{ $doctor['email'] }}</td>
        <td>{{ $doctor['phone'] }}</td>
        <td>{{ $doctor['address'] }}</td>
        <td>{{ $doctor['status'] }}</td>
      </tr>
    @endforeach
    </tbody>
  </table>
@endsection('content')
