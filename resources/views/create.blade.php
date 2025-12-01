@extends('layouts.app')
 
@section('content')
	<form action="{{ route('store')}}" method="post">
		{{ csrf_field() }}
		<h4>Add contact</h4>

			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" class="form-control">
                  {{-- show error --}}
                     @error('name')
                                <div class="text-danger">{{ $message }}</div>
                     @enderror
			</div>
			
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" class="form-control">
                 {{-- show error --}}
                     @error('email')
                                <div class="text-danger">{{ $message }}</div>
                     @enderror
			</div>
			
			<div class="form-group">
				<label>Contact</label>
				<input type="text" name="contact" class="form-control">
                 {{-- show error --}}
                     @error('contact')
                                <div class="text-danger">{{ $message }}</div>
                     @enderror
			</div>
			
			<div class="form-group text-center my-3">
				<button class="btn btn-dark btn-md" role="submit"> Save </button>
			</div>
	</form>
@endsection