 	<div class="">
           <div class="row py-2 bg-dark text-white">
		<div class="col-sm-12">
				<h3>Contact Management</h3>
		</div>
	</div>
	
	<div class="row">
		<div class="col-sm-12 pt-2">
				<a href="{{ route('home') }}" class="btn btn-dark"> Home </a>
				<a href="{{ route('create') }}" class="btn btn-dark"> New Contact </a>
				@auth
					<a href="{{ route('logout') }}" class="btn btn-dark"> Logout </a>
				@endauth
		</div>
	</div>
    </div>
 
	<hr>