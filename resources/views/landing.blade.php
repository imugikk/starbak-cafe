<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Fresh Food
    </title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{asset('admin/plugins/customs/css/style1.css')}}">
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Satisfy&display=swap');
</style>

<body>
    <!-- MOBILE NAV -->
    <div class="mb-nav">
        <div class="mb-move-item"></div>
        <div class="mb-nav-item active">
            <a href="#home">
                <i class="bx bxs-home"></i>
            </a>
        </div>
        <div class="mb-nav-item">
            <a href="#about">
                <i class='bx bxs-wink-smile'></i>
            </a>
        </div>
        <div class="mb-nav-item">
            <a href="#food-menu-section">
                <i class='bx bxs-food-menu'></i>
            </a>
        </div>
        <div class="mb-nav-item">
            <a href="#testimonial">
                <i class='bx bxs-comment-detail'></i>
            </a>
        </div>
    </div>
    <!-- END MOBILE NAV -->
    <!-- BACK TO TOP BTN -->
    <a href="#home" class="back-to-top">
        <i class="bx bxs-to-top"></i>
    </a>
    <!-- END BACK TO TOP BTN -->
    <!-- TOP NAVIGATION -->
    <div class="nav">
        <div class="menu-wrap">
            <a href="#home">
                <div class="logo mr-4">
                    Starbak Cafe
                </div>
            </a>
            <div class="menu h-xs">
                <a href="#home">
                    <div class="menu-item active">
                        Home
                    </div>
                </a>
                <a href="#about">
                    <div class="menu-item">
                        About Cafe
                    </div>
                </a>
                <a href="#food-menu-section">
                    <div class="menu-item">
                        Menu
                    </div>
                </a>
                <a href="#staff">
                    <div class="menu-item">
                        Staffs
                    </div>
                </a>
            </div>
            <a href="/dashboard">
                <div class="right-menu ml-1">
                    <div class="cart-btn">
                        <i class='nav-icon fas fa-desktop'></i>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!-- END TOP NAVIGATION -->
    <!-- SECTION HOME -->
    <div class="container">
    <section id="home" class="fullheight align-items-center bg-img bg-img-fixed"
        style="background-image: url(assets2/img/landing.jpg);">
        <div class="container" style="margin-top: 100px;">
            <div class="row">
                <div class="col-6 col-xs-12 mt-5">
                    <div class="slogan">
                        <h3 class="left-to-right play-on-scroll"  style="font-family: 'Satisfy', cursive;">
                            Starbak Cafe
                        </h3>
                        <p class="left-to-right play-on-scroll delay-2">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae eveniet ullam perferendis
                            eos, nobis corrupti similique fuga ipsa minus at eius ipsam expedita quam aliquam
                            perspiciatis voluptate qui dolore soluta.
                        </p>
                        <div class="left-to-right play-on-scroll delay-4">
                            <button>
                                Order now
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
    <!-- END SECTION HOME -->
    <!-- SECION ABOUT -->
    <section class="about fullheight align-items-center" id="about">
        <div class="container">
            <div class="row">
                <div class="col-7 h-xs">
                    <img src="assets2/img/sub-landing.jpg" alt=""
                        class="fullwidth left-to-right play-on-scroll">
                </div>
                <div class="col-5 col-xs-12 align-items-center">
                    <div class="about-slogan right-to-left play-on-scroll">
                        <h3>
                            <span class="primary-color">We</span> create <span class="primary-color">delicious</span>
                            memories for <span class="primary-color">you</span>
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio natus placeat et eos,
                            dignissimos voluptatem tempora necessitatibus doloribus! Eum qui doloribus odio dolor
                            tenetur nihil impedit vero magni, distinctio soluta!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECION ABOUT -->
    <!-- FOOD MENU SECTION -->
    <section class="align-items-center bg-img bg-img-fixed" id="food-menu-section"
        style="background-image: url(/assets2/img/katherine-chase-4MMK78S7eyk-unsplash.jpg);">
        <div class="container">
            <div class="food-menu">
                <h1>
                    What will <span class="primary-color">you</span> eat today?
                </h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque alias aliquam eveniet, iure
                    praesentium dicta ex dolorum inventore itaque minus repudiandae, odio provident? Velit architecto
                    natus expedita non? Odio, dolorum.
                </p>
                <div class="food-category">
                    <div class="zoom play-on-scroll">
                        <button class="active" data-food-type="all">
                            All food
                        </button>
                    </div>
                    <div class="zoom play-on-scroll delay-2">
                        <button data-food-type="salad">
                            Foods
                        </button>
                    </div>
                    <div class="zoom play-on-scroll delay-4">
                        <button data-food-type="lorem">
                            Drinks
                        </button>
                    </div>
                    <div class="zoom play-on-scroll delay-6">
                        <button data-food-type="ipsum">
                            Merchandise
                        </button>
                    </div>
                    <div class="zoom play-on-scroll delay-8">
                        <button data-food-type="dolor">
                            Soon
                        </button>
                    </div>
                </div>

                <div class="food-item-wrap all">
                    @foreach ($foods as $item)
                    <div class="food-item salad-type">
                        <div class="item-wrap bottom-up play-on-scroll">
                            <div class="item-img">
                                <img src=" {{ $item->foto}} " class="img-holder bg-img" alt="">
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        {{$item->nama}}
                                    </h3>
                                    <span>
                                        ${{$item->harga}}
                                    </span>
                                </div>
                                <div class="cart-btn">
                                    <i class="bx bx-cart-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @foreach ($drinks as $item)
                    <div class="food-item lorem-type">
                        <div class="item-wrap bottom-up play-on-scroll">
                            <div class="item-img">
                                <img src=" {{ $item->foto}} " class="img-holder bg-img" alt="">
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        {{$item->nama}}
                                    </h3>
                                    <span>
                                        ${{$item->harga}}
                                    </span>
                                </div>
                                <div class="cart-btn">
                                    <i class="bx bx-cart-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @foreach ($merchandises as $item)
                    <div class="food-item ipsum-type">
                        <div class="item-wrap bottom-up play-on-scroll">
                            <div class="item-img">
                                <img src=" {{ $item->foto}} " class="img-holder bg-img" alt="">
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        {{$item->nama}}
                                    </h3>
                                    <span>
                                        ${{$item->harga}}
                                    </span>
                                </div>
                                <div class="cart-btn">
                                    <i class="bx bx-cart-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- END FOOD MENU SECTION -->
    <center><h1>- Our Staff -</h1></center>
    <section class="align-items-center bg-img bg-img-fixed" id="staff"
        style="background-image: url(assets/katherine-chase-4MMK78S7eyk-unsplash.jpg);">
        <div class="container" style="margin-top: -150px ;">
            <div class="food-item-wrap all">
                @foreach ($staffs as $item)
                <div class="food-item salad-type">
                    <div class="item-wrap">
                        <div class="item-img">
                            <img src=" {{ $item->foto}} " class="bg-img" alt="" style="width: 100%">
                        </div>
                        <div class="item-info">
                            <div>
                                <h3>
                                    {{$item->nama}}
                                </h3>
                                <span>
                                    {{$item->divisi}}
                                </span>
                                <p style="color: grey;">
                                    {{$item->NIK}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section><!-- End Team Section -->


    <!-- FOOTER SECTION -->
    <section class="footer bg-img" style="background-image: url(assets2/img/footer.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-6 col-xs-12">
                    <h1>
                        Starbak-Cafe
                    </h1>
                    <br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, quas harum? Atque eius
                        quaerat fuga sint molestiae illo corrupti vitae voluptatibus. Dicta rerum est delectus
                        perspiciatis nemo nihil autem! Doloremque?</p>
                    <br>
                    <p>Email: ugik@gmail.com</p>
                    <p>Phone: +00 123 456 789</p>
                    <p>Website: starbak-cafe.com</p>
                </div>
                <div class="col-2 col-xs-12">
                    <h1>
                        About us
                    </h1>
                    <br>
                    <p>
                        <a href="#">
                            Home
                        </a>
                    </p>
                    <p>
                        <a href="#food-menu-section">
                            Menu
                        </a>
                    </p>
                    <p>
                        <a href="#">
                            Testimonials
                        </a>
                    </p>
                </div>
                <div class="col-4 col-xs-12">
                    <h1>
                        Subscribe & media
                    </h1>
                    <br>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto aspernatur doloremque rerum nam
                        ullam obcaecati error asperiores temporibus quo eum eaque sed odio vitae accusantium, dolorem
                        nihil molestiae deserunt maxime!</p>
                    <div class="input-group">
                        <input type="text" placeholder="Enter your email">
                        <button>
                            Subscribe
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END FOOTER SECTION -->

    <script src="{{asset('admin/plugins/customs/js/index.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
