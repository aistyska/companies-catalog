@extends('main')

@section('content')

    <a class="btn btn-outline-secondary btn-sm my-3 mr-1" href="{{url()->previous()}}" role="button"><i class="fas fa-arrow-left"></i> Grįžti atgal</a>
    <h3 class="d-inline-block my-3 align-middle">{{$company->title}}</h3>
    <div class="row">
        <div class="col">
            <p><strong>Įmonės kodas: </strong>{{$company->code}}</p>
            <p><strong>PVM mokėtojo kodas: </strong>{{$company->pvm_code}}</p>
            <p><strong>Įmonės vadovas: </strong>{{$company->director}}</p>
            <p><strong>Veiklos sritys, įmonės aprašymas: </strong>{{$company->about}}</p>
        </div>
        <div class="col">
            <p><strong>Adresas: </strong>{{$company->address}}</p>
            <p><strong>Telefono numeris: </strong>{{$company->phone}}</p>
            <p><strong>El. paštas: </strong>{{$company->email}}</p>
            <a class="btn btn-outline-success mb-3" href="/edit/{{$company->id}}" role="button"><i class="fas fa-edit"></i> Redaguoti</a>
            <a class="btn btn-outline-danger mb-3" href="/delete/{{$company->id}}" role="button"><i class="far fa-trash-alt"></i> Ištrinti</a>
        </div>
    </div>

@endsection
