@extends('main')

@section('content')

    @if (session('success'))
        <div class="alert alert-success mt-1">
            {{ session('success') }}
        </div>
    @endif

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
            <button type="button" class="btn btn-outline-danger mb-3" data-toggle="modal" data-target="#deleteModal"><i class="far fa-trash-alt"></i> Ištrinti</button>
{{--            Modal--}}
            <div class="modal fade" id="deleteModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Ištrinti įmonę</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Ar tikrai norite ištrinti visą informaciją apie įmonę?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal"><i class="fas fa-ban"></i> Atšaukti</button>
                            <a class="btn btn-outline-danger" href="/delete/{{$company->id}}" role="button"><i class="far fa-trash-alt"></i> Ištrinti</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection


