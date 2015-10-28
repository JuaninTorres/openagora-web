<h2>Contáctenos</h2>
{!! Form::open(['route' => 'contact_path', 'method' => 'POST']) !!}
    <div class="form-group @if($errors->has('first_name')) has-error @endif">
        {!! Form::text('first_name' , null, ['class'=>'form-control', 'required', 'placeholder' => trans('validation.attributes.first_name')]) !!}
    </div>
    <div class="form-group @if($errors->has('last_name')) has-error @endif">
        {!! Form::text('last_name' , null, ['class'=>'form-control', 'required', 'placeholder' => trans('validation.attributes.last_name')]) !!}
    </div>
    <div class="form-group @if($errors->has('company')) has-error @endif">
        {!! Form::text('company' , null, ['class'=>'form-control', 'required', 'placeholder' => trans('validation.attributes.company')]) !!}
    </div>
    <div class="form-group @if($errors->has('role')) has-error @endif">
        {!! Form::text('role' , null, ['class'=>'form-control', 'placeholder' => trans('validation.attributes.role')]) !!}
    </div>
    <div class="form-group @if($errors->has('phone')) has-error @endif">
        {!! Form::number('phone' , null, ['class'=>'form-control', 'required', 'placeholder' => trans('validation.attributes.phone')]) !!}
    </div>
    <div class="form-group @if($errors->has('email')) has-error @endif">
        {!! Form::email('email' , null, ['class'=>'form-control', 'required', 'placeholder' => trans('validation.attributes.email')]) !!}
    </div>
    <div class="form-group @if($errors->has('message')) has-error @endif">
        {!! Form::textarea('message' , null, ['class'=>'form-control', 'required', 'placeholder' => trans('validation.attributes.message'), 'rows' => '5']) !!}
    </div>
<div class="form-group">
    {!! Form::submit('Enviar', ['class'=> 'btn btn-lg btn-success btn-block']) !!}
</div>
{!! Form::close() !!}