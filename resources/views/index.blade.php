@extends('layouts.app')

@section('content')
    <table class="table table table-striped">
        <thead>
                <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Contact</th>
                <th></th>
                </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->contact }}</td>
                        <td>
                            <a href="{{ route('contact_details', $item->id) }}" class="btn btn-sm bg-dark text-white">Datails</a>
                            <a href="editar_noticia/{{$item->id}}" class="btn btn-sm bg-dark text-white">Edit</a>
                            <a href="eliminar_noticia/{{$item->id}}"  class="btn btn-sm bg-dark text-white ">Delete</a>
                        </td>
                    </tr>
            @endforeach
        </tbody>
    </table>

@endsection