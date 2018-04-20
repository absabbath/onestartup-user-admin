{!! Form::label('name', 'Nombre', ['class'=>'control-label']) !!}
{!! Form::text('name', null, ["class"=>"form-control", "required"=>"required"]) !!}

{!! Form::label('email', 'Correo electrónico', ['class'=>'control-label']) !!}
{!! Form::email('email', null, ["class"=>"form-control", "required"=>"required"]) !!}

{!! Form::label('rol_id', 'Tipo de usuario', ['class'=>'control-label']) !!}
{!! Form::select('rol_id', $roles, null, ["class"=>"form-control", "required"=>"required"]) !!}

{!! Form::label('short_bio', 'Biografia', ['class'=>'control-label']) !!}
{!! Form::text('short_bio', null, ["class"=>"form-control", "id"=>"short_bio", "required"=>"required"]) !!}