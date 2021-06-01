
@extends('layout')

@section('content')
<div class="container">
<h4 align="center">Pregled stadiona</h4>
    <div>
        <table id="stadioni" class="table table-info table-hover table-bordered table-striped">
            <thead class="thead-light">
                <tr>
                    <th>Naziv</th>
                    <th>Grad</th>
                    <th>Broj Mesta</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
</div>

<script src="/js/stadioni.js"></script>
@endsection