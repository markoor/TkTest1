@extends('admin.main')

@section('title','Laptop')

@section('content')
    @if($item ==NULL)
        No se le asignó ningun mouse.
    @else
    <table class="table table-striped">
        <thead >
            <th>Código</th>
            <th>Marca</th>
            <th>Reportar Avería</th>
        </thead>
        <tbody>
         <tr>
             <td>{{$item->cod}}</td>
             <td>{{$item->trademark}}</td>
             <td><a href="{{route('worker.damaged',$item->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-user"></span></a></td>
         </tr> 
        </tbody>
    </table>
    @endif
@endsection