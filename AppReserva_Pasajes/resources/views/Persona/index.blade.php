@extends('layouts.base')
@section('content')
    <div class="row">
        <div class="col">
            <h1>Usuarios</h1>
            @foreach ($Personas as $Persona)
                <tr>
                    <td>{{$Persona->Nombre}}</td>
                </tr>
            @endforeach
        </div>
    </div>   
@endsection