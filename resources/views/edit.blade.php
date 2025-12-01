@extends('layouts.app')
 
@section('content')
	<form action="{{ route('update')}}" method="post">
		{{ csrf_field() }}

        <input type="hidden" name="contact_id" value="{{$contact->id }}">

		<h4>Edit contact</h4>

			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" class="form-control" value="{{ old('name', $contact->name) }}">
                  {{-- show error --}}
                     @error('name')
                                <div class="text-danger">{{ $message }}</div>
                     @enderror
			</div>
			
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" class="form-control" value="{{ old('email', $contact->email) }}">
                 {{-- show error --}}
                     @error('email')
                                <div class="text-danger">{{ $message }}</div>
                     @enderror
			</div>
			
			<div class="form-group">
				<label>Contact</label>
				<input type="text" name="contact" class="form-control" value="{{ old('contact', $contact->contact) }}">
                 {{-- show error --}}
                     @error('contact')
                                <div class="text-danger">{{ $message }}</div>
                     @enderror
			</div>
			
			<div class="form-group text-center my-3">
				<button class="btn btn-dark btn-md" role="submit"> Update </button>
			</div>
	</form>
@endsection