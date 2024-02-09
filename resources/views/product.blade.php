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
    <h1>OUR PRODUCT</h1>
  </div>
</head>


<body class="background-image">
<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="/storage/image/kelapa.jpg" class="card-img-top" alt="photo">
      <div class="card-body">
        <h5 class="card-title">Kelapa Muda Segar</h5>
        <p class="card-text">Kelapa Muda yang dipetik langsung oleh para petani dari perkebunan kelapa terbesar di Jawa Timur. </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="/storage/image/kopra.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Kopra</h5>
        <p class="card-text">Kopra adalah daging kelapa tua dan kering dan menghasilkan minyak kelapa yang di ekstrak yang biasa digunakan untuk memasak,kosmetik, pembuatan sabun.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="/storage/image/Charcoal.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Briket</h5>
        <p class="card-text">Briket kelapa adalah bahan bakar padat yang dibuat dari serbuk kelapa yang telah dipadatkan menjadi bentuk briket. Pembuatan briket kelapa melibatkan kompresi serbuk kelapa dengan menggunakan mesin pencetak hingga serbuk tersebut menjadi padat dan berbentuk briket digunakan sebagai bahan bakar kompor, oven, atau alat pemanas lainnya.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="/storage/image/SantanKelapa.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Santan Kelapa</h5>
        <p class="card-text">Santan kelapa adalah cairan kental yang dihasilkan dari daging kelapa yang diperas. Proses pembuatan santan kelapa melibatkan pengambilan daging kelapa yang telah diparut atau dihaluskan, kemudian daging tersebut diperas dan dicampur dengan air. </p>
      </div>
    </div>
  </div>
</div>
</body>
@endsection