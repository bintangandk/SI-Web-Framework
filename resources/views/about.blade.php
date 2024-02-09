@extends('layouts.master')
@section('content')

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    h1 {
      text-align: center;
      font-weight: bold;
      color: white; 
    }

    .background-image {
      position: relative;
      /* Menggunakan posisi relatif pada elemen utama */
      background-image: url('/storage/image/kebun.jpg');
      ;
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      height: 950px;
      width: 100%;
      color: #0C2D57;
      text-align: center;
    }
  </style>
  <div>
    <h1>OUR TEAM</h1>
  </div>
</head>

<body class="background-image">
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-100" style="opacity: 0.8;">
        <img src="/storage/image/MyPhoto.jpg" class="card-img-top" alt="photo" style="height: 500px;">
        <div class="card-body">
          <h5 class="card-title">Co Founder</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100" style="opacity: 0.8;">
        <img src="/storage/image/MyPhoto.jpg" class="card-img-top" alt="photo" style="height: 500px;">
        <div class="card-body">
          <h5 class="card-title">Manager</h5>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100" style="opacity: 0.8;">
        <img src="/storage/image/MyPhoto.jpg" class="card-img-top" alt="photo" style="height: 500px;">
        <div class="card-body">
          <h5 class="card-title">Marketing</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
        </div>
      </div>
    </div>
  </div>
</body>

@endsection
