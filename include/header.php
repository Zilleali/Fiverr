<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Fiverr - Freelance Services Marketplace</title>
  <link rel="stylesheet" href="assest\dist\css\main.css">
  <link rel="stylesheet" href="assest\plugin\bootstrap\css\bootstrap.min.css">
  <!-- <link rel="stylesheet" href="assest\plugin\slick\css\slick-theme.min.css">
  <link rel="stylesheet" href="assest\plugin\slick\css\slick-theme.css"> -->
  <!-- <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script> -->
 <!-- slider -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" />


    <link
      rel="stylesheet"
      href="https://unpkg.com/flickity@2/dist/flickity.min.css"
    />
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
<script>
  // slick slider
$('.slider').slick({
  infinite: true,
  speed: 800,
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  dots: false,
  responsive: [{
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
})
</script>

</head>
<style>
  #recog {
    font-family: Arial, Helvetica, sans-serif;
    margin: -7px;
    height: 80px;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 50px;
    color: #b5b6ba;
    background-color: rgb(248, 248, 248);
  }

  /*
*
* ==========================================
* CUSTOM UTIL CLASSES
* ==========================================
*
*/
  .navbar {
    transition: all 0.4s;
  }

  .navbar .nav-link {
    color: #fff;
  }

  .navbar .nav-link:hover,
  .navbar .nav-link:focus {
    color: #fff;
    text-decoration: none;
  }

  .navbar .navbar-brand {
    color: #fff;
  }


  /* Change navbar styling on scroll */
  .navbar.active {
    background: #fff;
    box-shadow: 1px 2px 10px rgba(0, 0, 0, 0.1);
  }

  .navbar.active .nav-link {
    color: #555;
  }

  .navbar.active .nav-link:hover,
  .navbar.active .nav-link:focus {
    color: #555;
    text-decoration: none;
  }

  .navbar.active .navbar-brand {
    color: #555;
  }


  /* Change navbar styling on small viewports */
  @media (max-width: 991.98px) {
    .navbar {
      background: #fff;
    }

    .navbar .navbar-brand,
    .navbar .nav-link {
      color: #555;
    }
  }
</style>


<body>
  <header class="header">
    <nav class="navbar navbar-expand-lg fixed-top py-3">
      <div class="container"><a href="#" class="navbar-brand  font-weight-bold">
          <a href="/?source=top_nav" class="site-logo"><svg width="89" height="27" viewBox="0 0 89 27" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g fill="white">
                <path d="m81.6 13.1h-3.1c-2 0-3.1 1.5-3.1 4.1v9.3h-6v-13.4h-2.5c-2 0-3.1 1.5-3.1 4.1v9.3h-6v-18.4h6v2.8c1-2.2 2.3-2.8 4.3-2.8h7.3v2.8c1-2.2 2.3-2.8 4.3-2.8h2zm-25.2 5.6h-12.4c.3 2.1 1.6 3.2 3.7 3.2 1.6 0 2.7-.7 3.1-1.8l5.3 1.5c-1.3 3.2-4.5 5.1-8.4 5.1-6.5 0-9.5-5.1-9.5-9.5 0-4.3 2.6-9.4 9.1-9.4 6.9 0 9.2 5.2 9.2 9.1 0 .9 0 1.4-.1 1.8zm-5.7-3.5c-.1-1.6-1.3-3-3.3-3-1.9 0-3 .8-3.4 3zm-22.9 11.3h5.2l6.6-18.3h-6l-3.2 10.7-3.2-10.8h-6zm-24.4 0h5.9v-13.4h5.7v13.4h5.9v-18.4h-11.6v-1.1c0-1.2.9-2 2.2-2h3.5v-5h-4.4c-4.3 0-7.2 2.7-7.2 6.6v1.5h-3.4v5h3.4z"></path>
              </g>
              <g fill="#1dbf73">
                <path d="m85.3 27c2 0 3.7-1.7 3.7-3.7s-1.7-3.7-3.7-3.7-3.7 1.7-3.7 3.7 1.7 3.7 3.7 3.7z"></path>
              </g>
            </svg>
          </a>
        </a>
        <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>

        <div id="navbarSupportedContent" class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="#" class="nav-link  ">Fiverr Business <span class="sr-only">(current)</span></a></li>
            <li class="nav-item"><a href="#" class="nav-link  ">Explore</a></li>
            <li class="nav-item"><a href="#" class="nav-link  ">English</a></li>
            <li class="nav-item"><a href="#" class="nav-link  ">Become a Seller</a></li>
            <li class="nav-item"><a href="#" class="nav-link  btn btn-outline-light signin-btn">Sign in</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
 