@extends('layout.master')
@section('content')

    @section('content')
    <h1> กรุณากรอกข้อมูล</h1>
    <form action="/category/store" method="post">
        @csrf
    <input type="text" name="name" required>
<button type ="submit">บันทึก</button>
</form>

    @endsection
