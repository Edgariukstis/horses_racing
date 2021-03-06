  
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pakeiskime lažybininko informaciją</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('betters.update', $better->id) }}">
                        @csrf @method("PUT")
                        <div class="form-group">
                            <label>Vardas: </label>
                            <input type="text" name="name" class="form-control" value="{{ $better->name }}">
                        </div>
                        <div class="form-group">
                            <label>Pavardė: </label>
                            <input type="text" name="surname" class="form-control" value="{{ $better->surname }}"> 
                        </div>
                        <div class="form-group">
                            <label>Statom suma eur: </label>
                            <input type="number" name="bet" class="form-control" value="{{ $better->bet }}"> 
                        </div>
                        <div class="form-group">
                            <label>Stato už arklį: </label>
                            <select name="horse_id" id="" class="form-control">
                                 <option value="" selected disabled>Pasirinkite arklį</option>
                                 @foreach ($horses as $horse)
                                <option value="{{ $horse->id }}" @if($horse->id == $better->reservoir_title) selected="selected" @endif>{{ $horse->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Pakeisti</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection