@extends('main_layout')
@section('main_content')
<h2>
Welcome to Project Lara
</h2>
<p>
Please login to continue:
</p>

<form action="/login" method="POST">

<input type="text" placeholder="username"/><br>
<input type="password" placeholder="password"/><br>
<input type="Submit" value="Login"/>
</form>
<style>
input {
margin:10px;
padding:10px;
}
</style>
@endsection
