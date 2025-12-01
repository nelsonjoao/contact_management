@extends('layouts.app')

@section('content')
	@forelse ($data as $item)
        <p>{{ $item->name }}</p>
    @empty  
        <p>There are no items to display.</p>
    @endforelse

@endsection