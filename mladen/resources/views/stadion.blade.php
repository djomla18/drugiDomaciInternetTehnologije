
@extends('layout')

@section('content')
<div class="container">
    <h4>Utakmice na stadionu {{$stadion->naziv}} u {{$stadion->grad}}-u</h4>
    <div>
        <table id="utakmice" class="table table-info table-hover table-bordered table-striped">
            <thead class="thead-light">
                <tr>
                    <th>Domacin</th>
                    <th>Gost</th>
                    <th>Kad</th>
                    <th>Cena </th>
                    <th>Pregled</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($utakmice as $utakmica)
                    <tr>
                        <td>{{$utakmica->tim_domacin}}</td>
                        <td>{{$utakmica->tim_gost}}</td>
                        <td>{{$utakmica->odrzava_se_at}}</td>
                        <td>{{$utakmica->cena}}</td>
                        
                        <td>
                        <a href={{
                            "http://127.0.0.1:8000/utakmica/" .$utakmica->id
                        }} class="btn btn-info btn-block">Pregledaj</a>
                       
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection