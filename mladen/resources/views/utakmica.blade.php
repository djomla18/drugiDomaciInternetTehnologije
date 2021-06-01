
@extends('layout')

@section('content')
<div class="container">
    <div class="container">
        <div class="row">
            <div class="col"><h5>Cena ulaznice: {{$utakmica->cena}}</h5></div>    
            <div class="col"><h5>Datum odrzavanja: {{$utakmica->odrzava_se_at}}</h5></div>    
        </div>    
        <div class="row">
            <div class="col"><h5>Domacin: {{$utakmica->tim_domacin}}</h5></div>    
            <div class="col"><h5>Gost: {{$utakmica->tim_gost}}</h5></div>    
        </div>    
        <div class="row">
            <div class="col"><h5>Stadion: {{$stadion->naziv}}</h5></div>    
            <div class="col"><h5>Grad: {{$stadion->grad}}</h5></div>    
        </div>    
           
    
        </div>    
        <hr>
<h5>Popunjena mesta:</h5>
<h6>Da biste numerisali mesto, pritisnite dugme u donjem-desnom uglu. </h6>
<h6>Kada odredite koje biste mesto, iskoristite ctrl+f da proverite da li je to mesto vec zauzeto. </h6>
     <div class="row">
         @foreach ($ulaznice as $u)
             <div class="col-2">{{$u->numerisano_mesto}}</div>
         @endforeach
     </div>
</div>


<a type="button" style="position: absolute; bottom:10px; right:2px;"  class="btn btn-success " data-toggle="modal"
data-target="#kupiUlaznicu">
Kupite ulaznicu
</a>

<!-- Modal HTML Markup -->
<div id="kupiUlaznicu" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-12">
                    <h3 class="modal-title">Kupite ulaznicu</h3>
                    <h5>Kupite ulaznicu popunjavanjem sledece forme</h5>
                </div>
            </div>
            <div class="modal-body">
                <form id="kupiUlaznicuForma">
                    <div class="row">
                        <div class="col">
                            <label for="ime_prezime">Ime i prezime:</label>
                            <input id="ime_prezime" class="form-control" type="text" >
                        </div>
                        <input id="utakmica_id" value="{{$utakmica->id}}" class="form-control" hidden type="text" >
                        <div class="col">
                            <label for="numerisano_mesto">Mesto koje biste zeleli:</label>
                            <input list="slobodna_mesta" id="numerisano_mesto" min="1" max="{{$stadion->broj_mesta}}" placeholder="1-{{$stadion->broj_mesta}}" class="form-control" type="number">
                                <datalist id="slobodna_mesta">
                                    @foreach ($slobodna_mesta as $mesto)
                                        <option value="{{$mesto}}" />
                                    @endforeach
                                </datalist>
                        </div>
                        <input class="form-control" type="submit">
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


@endsection