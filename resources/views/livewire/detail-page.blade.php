<style>
.sec-2::after {
    background: white !important;
}

.hero-items .single-hero-items {
    height: 174px;
    width: 490px;
    padding-top: 210px;
}

.hero-items .single-hero-items span {
    color: #e7ab3c;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
    line-height: 28px;
    display: inline-block;
    position: relative;
    top: 50px;
    opacity: 0;
}

.hero-items .single-hero-items h1 {
    color: #252525;
    font-size: 72px;
    font-weight: 700;
    margin-bottom: 6px;
    position: relative;
    top: 50px;
    opacity: 0;
}

.hero-items .single-hero-items p {
    margin-bottom: 42px;
    position: relative;
    top: 100px;
    opacity: 0;
}

.hero-items .single-hero-items .primary-btn {
    position: relative;
    top: 100px;
    opacity: 0;
}

.hero-items .off-card {
    height: 154px;
    width: 154px;
    padding-top: 40px;
    border-radius: 50%;
    text-align: center;
    line-height: 140px;
    position: absolute;
    left: 47%;
    top: 160px;
    background: #e7ab3c;
    z-index: 1;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
    opacity: 0;
}

.hero-items .off-card:after {
    position: absolute;
    left: 5px;
    top: 5px;
    width: calc(100% - 10px);
    height: calc(100% - 10px);
    border: 2px dashed #ffffff;
    content: "";
    border-radius: 50%;
    z-index: -1;
}

.hero-items .off-card h2 {
    font-size: 32px;
    font-weight: 700;
    color: #ffffff;
    text-transform: uppercase;
}

.hero-items .off-card h2 span {
    display: block;
    font-size: 32px;
    font-weight: 700;
    color: #ffffff;
    text-transform: uppercase;
    margin-top: 6px;
}

.hero-items .owl-item.active .single-hero-items span,
.hero-items .owl-item.active .single-hero-items h1,
.hero-items .owl-item.active .single-hero-items p,
.hero-items .owl-item.active .single-hero-items .primary-btn {
    top: 0;
    opacity: 1;
}

.hero-items .owl-item.active .single-hero-items span {
    -webkit-transition: all 0.2s ease 0.2s;
    -o-transition: all 0.2s ease 0.2s;
    transition: all 0.2s ease 0.2s;
}

.hero-items .owl-item.active .single-hero-items h1 {
    -webkit-transition: all 0.4s ease 0.4s;
    -o-transition: all 0.4s ease 0.4s;
    transition: all 0.4s ease 0.4s;
}

.hero-items .owl-item.active .single-hero-items p {
    -webkit-transition: all 0.6s ease 0.6s;
    -o-transition: all 0.6s ease 0.6s;
    transition: all 0.6s ease 0.6s;
}

.hero-items .owl-item.active .single-hero-items .primary-btn {
    -webkit-transition: all 0.8s ease 0.8s;
    -o-transition: all 0.8s ease 0.8s;
    transition: all 0.8s ease 0.8s;
}

.hero-items .owl-item.active .single-hero-items .off-card {
    opacity: 1;
    -webkit-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    transform: rotate(0deg);
    -webkit-transition: all 1s ease 1s;
    -o-transition: all 1s ease 1s;
    transition: all 1s ease 1s;
}

.hero-items .owl-nav button[type=button] {
    font-size: 30px;
    position: absolute;
    left: 0px;
    top: 45%;
    color: #252525;
}

.hero-items .owl-nav button[type=button]:hover {
    color: #dfad51;
}

.hero-items .owl-nav button[type=button].owl-next {

    left: 310px;

}

/*--------
new
-------*/


.blog__item__text {}

.blog__item__text h6 {
    margin-bottom: 6px;
}

.blog__item__text h6 a {
    color: #111111;
    font-weight: 600;
    line-height: 21px;
}

.blog__item__text ul li {
    font-size: 12px;
    color: #888888;
    display: inline-block;
    list-style: none;
    margin-right: 25px;
    position: relative;
}

.blog__item__text ul li span {
    color: #111111;
}

.blog__item__text ul li:after {
    position: absolute;
    right: -17px;
    top: 0px;
    content: "|";
}

.blog__item__text ul li:last-child {
    margin-right: 0;
}

.blog__item__text ul li:last-child:after {
    display: none;
}
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
#map {
  height: 400px;
  /* The height is 400 pixels */
  width: 100%;
  /* The width is the width of the web page */
}
</style>
<script>
    // Initialize and add the map
function initMap() {
  // The location of Uluru
  const uluru = { lat: -25.344, lng: 131.036 };
  // The map, centered at Uluru
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 4,
    center: uluru,
  });
  // The marker, positioned at Uluru
  const marker = new google.maps.Marker({
    position: uluru,
    map: map,
  });
}
</script>
<div>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid - Cato the Younger -->
    <div class="mainwrapper">
        <div class="header">
            <div class="main-container">
                <div class="header-inner">
                    <div class="logo">
                        <a href="/"><img src="images/logo.png" alt=""></a>
                    </div>
                    <!--logo-->

                    <div class="header-right">
                        <ul>
                            <li><a href="" data-toggle="modal" class="logbtn" data-target="#login">Login</a></li>
                            <li><a href="" data-toggle="modal" class="signupbtn" data-target="#signup">Sign up</a></li>
                        </ul>
                    </div>
                    <!--header-right-->
                </div>
                <!--header-inner-->
            </div>
            <!--main-container-->
        </div>
        <!--header-->

        <div class="banner">
            <div class="banner-img"><img src="img/apartments.jpg" alt="" style="height:300px;object-fit: cover;"> </div>
            <div class="searchbar">
                <div class="sr-head">
                    <p>Find Your Perfect Space </p>
                    <p>15 City, 400 Places</p>
                </div>

                <div class="sr-inner">
                    <form>
                        <select>
                            <option>Location</option>
                            <option>Location1</option>
                        </select>

                        <select class="s-name">
                            <option>Service Name</option>
                            <option>Service Name1</option>
                        </select>

                        <button><i class="fa fa-search"></i> Search</button>
                    </form>
                </div>
                <!--sr-inner-->
            </div>
            <!--searchbar-->
        </div>
        <!--banner-->

        <!-- detail data into column -->
        <div class="row">
            <div class="column" style="background-color:#aaa;">
                <h2>Column 1</h2>
                <p>Some text..</p>
            </div>
            <div class="column" style="background-color:#bbb;">
                <!-- add map here -->
                <div id="map"></div>
            </div>
        </div>
        <div>

            <div>

                <div class="footer">
                    <div class="middle">
                        <div class="main-container">
                            <div class="footer-1">
                                <div class="f-head">
                                    Useful links
                                </div>
                                <!--f-head-->
                                <div class="footer-menu">
                                    <ul>
                                        <li><a href="#">Term & condition </a></li>
                                        <li><a href="#">About us </a></li>
                                        <li><a href="#">Contact us </a></li>
                                    </ul>
                                </div>
                                <!--footer-menu-->
                            </div>
                            <!--footer-1-->

                            <div class="footer-2">
                                <div class="copy-right">
                                    © 2021 Your logo name here. All rights reserved.
                                </div>
                                <!--copy-right-->

                                <div class="social-icon">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"> </i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"> </i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"> </i></a></li>
                                    </ul>
                                </div>
                                <!--social-icon-->
                            </div>
                            <!--footer-2-->

                        </div>
                        <!--main-container-->
                    </div>
                    <!--middle-->
                </div>
                <!--footer-->


                <!---login popup--->
                <div class="modal fade modal-center" id="login" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                                <button type="button" class="close close2" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                @livewire('login-form')
                            </div>
                            <!--modal-body-->
                        </div>
                    </div>
                </div>
                <!---login popup--->


                <!---signup popup--->
                <div class="modal fade modal-center" id="signup" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Sign up</h5>
                                <button type="button" class="close close3" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                @livewire('register-form')
                            </div>
                            <!--modal-body-->
                        </div>
                    </div>
                </div>
                <!---signup popup--->
            </div>
            <!--mainwrapper-->
        </div>