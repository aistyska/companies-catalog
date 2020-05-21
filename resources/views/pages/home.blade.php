@extends('main')

@section('content')

    <form method="get">
        {{csrf_field()}}
        <div class="form-group">
            <label for="company">Įmonės pavadinimas</label>
            <div class="input-group">
                <input type="text" class="form-control" id="company" name="company" placeholder="Įmonės pavadinimas" aria-label="Įmonės pavadinimas" aria-describedby="search">
                <div class="input-group-append">
                    <button class="btn btn-outline-success" type="button" id="search"><i class="fas fa-search"></i> Ieškoti</button>
                </div>
            </div>
        </div>
    </form>

@endsection
