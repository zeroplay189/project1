<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <a href="/">หน้าแรก</a> |<a href="/about">เกี่ยวกับ</a> | <a href="/contact">ติดต่อ</a>
   สวัสดี, @if(auth()->check()) {{auth()->user()->name}} <a href="/auth/logout">ออกระบบ</a>
   @else บุคคลทั่วไป @endif
    @yield("content")
    <hr>
    &copy; 2021 surachet
</body>
</html>
