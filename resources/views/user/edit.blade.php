@extends('layout.master')
@section('content')

    @section('content')
    <h1> กรุณากรอกข้อมูล</h1>
    <form action="/user/update/{{$user->id}}" method="post">
        @csrf

    <input type="text" name="name" value="{{$user->name}}"required>
    <input type="text" name="username" value="{{$user->username}}"required>
    <input type="text" name="password" value="{{$user->password}}"required>
    <input type="text" name="email" value="{{$user->email}}"required>

    <button type ="submit">บันทึก</button>
</form>

    @endsection
