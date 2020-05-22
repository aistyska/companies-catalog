@extends('main')

@section('content')

    <form method="get">
        <div class="form-group">
            <label for="company">Įmonės pavadinimas</label>
            <div class="input-group">
                <input type="text" class="form-control" id="company" name="company" value="{{$searchInput ?? ''}}" placeholder="Įmonės pavadinimas" aria-label="Įmonės pavadinimas" aria-describedby="search">
                <div class="input-group-append">
                    <button class="btn btn-outline-success" type="button" id="search"><i class="fas fa-search"></i> Ieškoti</button>
                </div>
            </div>
        </div>
    </form>

    @isset($results)
        @if(count($results) == 0)
            <div class="alert alert-warning" role="alert">
                Rezultatų nėra
            </div>
        @else
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Pavadinimas</th>
                        <th scope="col">Adresas</th>
                        <th scope="col">El. paštas</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($results as $company)
                        <tr>
                            <th scope="row">
                                <a href="/company/{{$company->id}}" class="text-secondary" >{{$company->title}}</a>
                            </th>
                            <td>{{$company->address}}</td>
                            <td>{{$company->email}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            {{$results->withQueryString()->links()}}
        @endif
    @endisset

@endsection
