@extends('layout.master')
@section('content')

    @section('content')
    <h1> กรุณากรอกข้อมูล</h1>
    <form action="/user/store" method="post">
        @csrf

        <input type="text" name="name" required>
    <input type="text" name="username" required>
    <input type="text" name="password" required>
    <input type="text" name="email" required>

    <button type ="submit">บันทึก</button>
</form>

    @endsection
