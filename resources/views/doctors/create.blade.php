@extends('template')

@section('title')
  @if (isset($title)) 
    - {{ $title }}
  @endif
@endsection('title')

@section('content')
<div class="container">    
    <h2>Dodawanie lekarza</h2>
    <form action="{{ action('DoctorController@store') }}" method="POST" role="form">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        
        <div class="form-group">
            <label for="name">Nazwisko i imię</label>
            <input type="text" class="form-control" name="name" />            
        </div>
        
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" />            
        </div>

        <div class="form-group">
            <label for="password">Hasło</label>
            <input type="password" class="form-control" name="password" />            
        </div>

        <div class="form-group">
            <label for="phone">Telefon</label>
            <input type="text" class="form-control" name="phone" />            
        </div>
        
        <div class="form-group">
            <label for="address">Adres</label>
            <input type="text" class="form-control" name="address" />            
        </div>

        <div class="form-group">
            <label for="pesel">PESEL</label>
            <input type="text" class="form-control" name="pesel" />            
        </div>

        <div class="form-group">
            <label for="specialization">Specjalizacja</label>
            @foreach($specializations as $specialization)
            <div class="form-group">
            <input type="checkbox" name="specializations[]" value="{{ $specialization->id }}" /> {{ $specialization->name }}
            </div>
            @endforeach
        </div>

        <input type="hidden" name="status" value="Active" />

        <input type="submit" value="Dodaj" class="btn btn-primary" />
    </form>
</div>
@endsection('content')
