@extends('main')

@section('content')

    <h3 class="my-3">Įmonės sukūrimas</h3>
    <p>Užpildykite formą ir išsaugokite informaciją apie įmonę</p>
    <form method="post" action="/store-company">
        {{csrf_field()}}
        <div class="form-group">
            <label for="company">Įmonės pavadinimas</label>
            <input type="text" class="form-control" id="company" name="company" value="{{ old('company') }}" placeholder="Įmonės pavadinimas">
            @error('company')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-row">
            <div class="form-group col">
                <label for="code">Įmonės kodas</label>
                <input type="number" class="form-control" id="code" minlength="9" name="code" value="{{ old('code') }}">
                @error('code')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col">
                <label for="pvmCode">PVM mokėtojo kodas</label>
                <input type="text" class="form-control" id="pvmCode" name="pvmCode" value="{{ old('pvmCode') }}">
                @error('pvmCode')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="address">Įmonės adresas</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}" placeholder="Įmonės adresas">
            @error('address')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-row">
            <div class="form-group col">
                <label for="phone">Telefono numeris</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" placeholder="+370XXXXXXXX">
                @error('phone')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col">
                <label for="email">El. paštas</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="El.pašto adresas">
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="about">Veiklos sritis</label>
            <textarea class="form-control" id="about" name="about" placeholder="Įveskite informaciją apie įmonės veiklą" minlength="10" maxlength="1000" rows="3">{{ old('about') }}</textarea>
            @error('about')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="director">Įmonės vadovas</label>
            <input type="text" class="form-control" id="director" name="director" value="{{ old('director') }}" placeholder="Vardas Pavardė">
            @error('director')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-outline-success mb-4"><i class="fas fa-plus"></i> Pridėti</button>
        <a role="button" href="/all-companies" class="btn btn-outline-danger mb-4"><i class="fas fa-ban"></i> Atšaukti</a>
    </form>

@endsection
