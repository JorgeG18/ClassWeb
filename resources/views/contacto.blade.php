@extends('plantilla')

@section('titulo', 'contacto')

@section('content')
    <h1>Contactos</h1>


    <form method="post" action = {{route('contacto')}}>
    
        @csrf
        <input name="fullname" placeholder="Nombre completo" value="{{old('name')}}"><br>
        {!! $errors->first('name', '<small>:message</small><br>') !!}
        <input name="email" placeholder="Correo electronico" value="{{old('email')}}"><br>
        {!! $errors->first('email', '<small>:message</small><br>') !!}
        <input name="subject" placeholder="Asunto" value="{{old('subject')}}"><br>
        {!! $errors->first('subject', '<small>:message</small><br>') !!}
        <textarea name="contenido" placeholder="Texto...">{{old('contenido')}}</textarea><br>
        <Button>Enviar</Button>
        
    </form>
@endsection


