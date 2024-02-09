<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('pages.index') }}">Coconuts Farm</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('pages.index') ? 'active' : '' }}" aria-current="page" href="{{ route('pages.index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('pages.about') ? 'active' : '' }}" href="{{ route('pages.about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('product.products') ? 'active' : '' }}" href="{{ route('product.products') }}">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('maps.address') ? 'active' : '' }}" href="{{ route('maps.address') }}">Maps</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('sosmed.socials') ? 'active' : '' }}" href="{{ route('sosmed.socials') }}">Social Media</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
</header>



<!-- <html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Elastic Tab Animation | CodingNepal</title>
      <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
      <div class="wrapper">
         <nav>
            <input type="radio" name="tab" id="home" checked>
            <input type="radio" name="tab" id="inbox">
            <input type="radio" name="tab" id="contact">
            <input type="radio" name="tab" id="heart">
            <input type="radio" name="tab" id="about">
            <label for="home" class="home"><a href="#"><i class="fas fa-home"></i>Home</a></label>
            <label for="inbox" class="inbox"><a href="#"><i class="far fa-comment"></i>Inbox</a></label>
            <label for="contact" class="contact"><a href="#"><i class="far fa-envelope"></i>Contact</a></label>
            <label for="heart" class="heart"><a href="#"><i class="far fa-heart"></i>Heart</a></label>
            <label for="about" class="about"><a href="#"><i class="far fa-user"></i>About</a></label>
            <div class="tab"></div>
         </nav>
      </div>
   </body>
</html> -->