@extends('main')

@section('content')
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
                @foreach($companies as $company)
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
    {{$companies->links()}}

@endsection
