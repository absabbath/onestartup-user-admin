@extends('layouts.admin.admin-layout')
@section('content')
<div class="row">
	<div class='col-md-10 offset-1'>
		<div class='box'>
		  <div class='box-header dark'>
		    <h2>
		      Actualizar datos
		    </h2>
		  </div>
		  <div class='box-body'>
		    <div class="row">
		      <div class="col-md-8 offset-2">
		        {!! Form::model($user,['route'=> ['user.update',$user->id],"method"=>"PUT"]) !!}
		        @include('user-admin::fields')
		        <br>
		        <div class="row">
		        	<div class="col-md-6">
		        		{!! Form::submit('Actualizar', ['class'=>'btn btn-block btn-primary']) !!}
		        		{!! Form::close() !!}
		        	</div>
		        	<div class="col-md-6">
		        		{!! Form::open(['route'=> ['user.destroy', $user->id],'method'=>'DELETE'])!!}
			                <button type='submit' class="btn btn-block btn-danger"  onclick='return confirm("¿Estas seguro que deseas eliminar este USUARIO?")'>Eliminar este usuario</button>
			              {!! Form::close()!!}
		        	</div>
		        </div>
		        
		      </div>
		    </div>
		  </div>
		</div>
	</div>
</div>
@endsection