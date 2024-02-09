@extends('layouts.master')
@section('content')
<head>
  <style>
       h1 {
      text-align: center;
      font-weight: bold;
      color: white; 
    }
     .background-image {
            position: relative; /* Menggunakan posisi relatif pada elemen utama */
            background-image: url('/storage/image/kebun.jpg');;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 1480px;
            width: 100%;
            color: #0C2D57;
            text-align: center;
        }
  </style>

<div>
    <h1>OUR ADDRESS</h1>
  </div>
</head>

<body class="background-image">
<div class="d-flex justify-content-center">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15312.241225271695!2d113.7235716972122!3d-8.167914766514908!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd69500310220bd%3A0x106255a73514fc58!2sKELAPA%20GADING%20J14!5e0!3m2!1sid!2sid!4v1706668586489!5m2!1sid!2sid" width="950" height="750" style="border: 2px solid black;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</body>
@endsection