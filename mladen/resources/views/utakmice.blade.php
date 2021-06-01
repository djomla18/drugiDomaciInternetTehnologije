
@extends('layout')

@section('content')
<div class="container">
<h4 align="center">Pregled aktivnih utakmica</h4>
    <div>
        <table id="utakmice" class="table table-info table-hover table-bordered table-striped">
            <thead class="thead-light">
                <tr>
                    <th>Domacin</th>
                    <th>Gost</th>
                    <th>Stadion</th>
                    <th>Kad</th>
                    <th>Cena </th>
                    <th>Akcije</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>
</div>

<script src="/js/utakmice.js"></script>
@endsection