@extends('layout.master')
@section('content')

    @section('content')
    <h1> กรุณากรอกข้อมูล</h1>
    <form action="/post/store" method="post" enctype="multipart/form-data">
        @csrf

       หัวข้อข่าว <input type="text" name="title" required><br>
    รูปประจำข่าว<input type="ดรสำ" name="thumbnail" required><br>
    หมวดหมู่ข่าว
    <select name="category_id" id="">
        @foreach($category as $item)
        <option value="{{$item->id}}">{{$item->name}}</option>
        @endforeach
    </select>
    รายละเอียด
    <textarea name="detail" id="" cols="30" rows="10"></textarea>

    <button type ="submit">บันทึก</button>
</form>

    @endsection
