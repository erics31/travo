<style>
    .sec-2::after{
        background:white !important;
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
  
  left:310px ;

}

/*--------
new
-------*/


.blog__item__text {

}

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
</style>

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
            <!--searchbar-->
        </div>
        <!--banner-->

        <div class="middle">
            
            <!--sec-1-->

            <div class="sec-2">
                <div class="main-container">
                    <div class="sec-heading">
                        <div class="head-text">Your heading here</div>
                        <p class="sub-heading">Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                    </div>

                    <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="single-services mb-200">
                              <div class="hero-items owl-carousel">
    <div class="single-hero-items set-bg" data-setbg="img/apart/gh.jpg"></div>
    <div class="single-hero-items set-bg" data-setbg="img/apart/pano.png"></div>
    <div class="single-hero-items set-bg" data-setbg="img/apart/uy.jpg"></div>
</div>
                          
                             <div class="services-caption" style="height: 80px;z-index: 10;background-color: #fff; border-top: 4px solid #fff;padding: 5px;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1); transition: 0.3s;">
                                <h5 ><a href="services.html"style="color:black">Painthouse - direct oceanfront</a></h5>
                                <div class="blog__item__text">
                           
                            <ul>
                              <li>France, Paris</li>
                                <li><span>100m from louvre museum</span></li>
                              
                                <p style=" font-size: 15px;font-weight: 500;color: #606060;margin-left:240px;">$5.00/hour</p>

                            </ul>
                        </div>
                            </div>
                        
                        </div>
                    </div>

    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="single-services mb-200">
                              <div class="hero-items owl-carousel">
    <div class="single-hero-items set-bg" data-setbg="img/apart/6.jpg"></div>
    <div class="single-hero-items set-bg" data-setbg="img/apart/61.jpg"></div>
    <div class="single-hero-items set-bg" data-setbg="img/apart/62.jpg"></div>
</div>
                            
                             <div class="services-caption" style="height: 80px;z-index: 10;background-color: #fff; border-top: 4px solid #fff;padding: 5px;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1); transition: 0.3s;">
                                <h5 ><a href="services.html"style="color:black">Painthouse - direct oceanfront</a></h5>
                                <div class="blog__item__text">
                           
                            <ul>
                              <li>France, Paris</li>
                                <li><span>100m from louvre museum</span></li>
                              
                                <p style=" font-size: 15px;font-weight: 500;color: #606060;margin-left:240px;">$5.00/hour</p>
                            </ul>
                        </div>
                            </div>
                          
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="single-services mb-200">
                           <div class="hero-items owl-carousel">
    <div class="single-hero-items set-bg" data-setbg="img/apart/7.jpg"></div>
    <div class="single-hero-items set-bg" data-setbg="img/apart/71.jpg"></div>
    <div class="single-hero-items set-bg" data-setbg="img/apart/72.jpg"></div>
</div>
                          
                             
                             <div class="services-caption" style="height: 80px;z-index: 10;background-color: #fff; border-top: 4px solid #fff;padding: 5px;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1); transition: 0.3s;">
                                <h5 ><a href="services.html"style="color:black">Painthouse - direct oceanfront</a></h5>
                                <div class="blog__item__text">
                           
                            <ul>
                              <li>France, Paris</li>
                                <li><span>100m from louvre museum</span></li>
                              
                                <p style=" font-size: 15px;font-weight: 500;color: #606060;margin-left:240px;">$5.00/hour</p>
                            </ul>
                        </div>
                            </div>

                        
                        </div>
                    </div>
                 
                </div>
                    <!--cat-slider-->
                </div>
                <!--main-container-->
            </div>
            
            <!--sec-1-->
        </div>
        <!--middle-->

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
        <div class="modal fade modal-center" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
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
        <div class="modal fade modal-center" id="signup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
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
