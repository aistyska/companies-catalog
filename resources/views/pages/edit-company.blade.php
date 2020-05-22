@extends('main')

@section('content')

    <h3>Įmonės informacijos atnaujinimas</h3>
    <p>Redaguokite ankščiau išsaugotą informaciją apie įmonę</p>
    <form method="post" action="/store-update/{{$company->id}}">
        {{csrf_field()}}
        <div class="form-group">
            <label for="company">Įmonės pavadinimas</label>
            <input type="text" class="form-control" id="company" name="company" value="{{$company->title}}" placeholder="Įmonės pavadinimas">
            @error('company')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-row">
            <div class="form-group col">
                <label for="code">Įmonės kodas</label>
                <input type="number" class="form-control" id="code" minlength="9" name="code" value="{{$company->code}}">
                @error('code')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col">
                <label for="pvmCode">PVM mokėtojo kodas</label>
                <input type="text" class="form-control" id="pvmCode" name="pvmCode" value="{{$company->pvm_code}}">
                @error('pvmCode')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="address">Įmonės adresas</label>
            <input type="text" class="form-control" id="address" name="address" value="{{$company->address}}" placeholder="Įmonės adresas">
            @error('address')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-row">
            <div class="form-group col">
                <label for="phone">Telefono numeris</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{$company->phone}}" placeholder="+370XXXXXXXX">
                @error('phone')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col">
                <label for="email">El. paštas</label>
                <input type="email" class="form-control" id="email" name="email" value="{{$company->email}}" placeholder="El.pašto adresas">
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="about">Veiklos sritis</label>
            <textarea class="form-control" id="about" name="about" placeholder="Įveskite informaciją apie įmonės veiklą" minlength="15" maxlength="1000" rows="3">{{$company->about}}</textarea>
            @error('about')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="director">Įmonės vadovas</label>
            <input type="text" class="form-control" id="director" name="director" value="{{$company->director}}" placeholder="Vardas Pavardė">
            @error('director')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-outline-success"><i class="fas fa-lock"></i> Išsaugoti</button>
        <a role="button" href="/company/{{$company->id}}" class="btn btn-outline-danger"><i class="fas fa-ban"></i> Atšaukti</a>
    </form>

@endsection
