@extends('layout.master')
@section('content')
    <h1>หมวดหมู่ข่าว</h1>
    <a href="/user/create">+ เพิ่มหมวดหมู่ใหม่</a>

<table>
    <thead>
<tr>
<td>ลำดับ</td>
<td>ชื่อ</td>
<td>ชื่อเข้าใช้</td>
<td>รหัสผ่าน</td>
<td>อีเมล์</td>
</tr>
    </thead>
</table>

<table>
    <tbody>
        @foreach($user as $item)
<tr>
    <td>{{$item->id}}</td></td>
    <td>{{$item->name}}</td>
        <td>{{$item->username}}</td>
        <td>{{$item->password}}</td>
       <td>{{$item->email}}</td>

        <td><a href="/user/edit/{{$item->id}}"> แก้ไข</a>
            <a href="/user/delete/{{$item->id}}">ลบ</a>
        </td>
</tr>
@endforeach
</tbody>
</table>


@endsection
