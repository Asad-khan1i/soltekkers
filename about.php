
 <?php  
 include 'components/navheader.php';
?>
<link rel="stylesheet" href="about.css">


    <!-- PAGE TITLE
    ================================================== -->
    <header class="py-8 py-md-12 overlay overlay-primary overlay-80" style="background-image: url(assets/img/covers/cover-19.jpg);">
        <div class="container text-center py-xl-5">
            <h1 class="display-4 fw-semi-bold mb-0 text-white">About Us</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-scroll justify-content-center">
                    <li class="breadcrumb-item">
                        <a class="text-white" href="#">
                            Home
                        </a>
                    </li>
                    <li class="breadcrumb-item text-white active" aria-current="page">
                        About Us 
                    </li>
                </ol>
            </nav>
        </div>
        <!-- Img -->
        <img class="d-none img-fluid" src="...html" alt="...">
    </header>

    <!-- welcome to our website
    ==================================================-->
    <style>
        .about-hero{
            margin-top: 100px;
        }

        .hero-content{
            margin-bottom: 20px;
            animation:fadeInUp 2s ease;
        }

        .hero-content h2{
            font-size: 40px;
        }

        .hero-content p{
            text-align: justify ;
        }

        .hero-content button{
            border: none;
            cursor: pointer;
            transition: 0.3s ease ;
            background-color:  #2f2d51;
            padding: 12px  24px;
            
        }

        .hero-content a{
            color: white;
         
            
           }

           .hero-content button:hover{
            font-size: 30px;
        }

        .hero-image{
            animation:fadeInRight 2s ease;
        }


        @media only screen and (max-width: 768px) {
            .hero-content{
                width: 100%;
            }

            .hero-content h2{
                font-size: 30px;

            } 

            .hero-content p{
                font-size: 14px;
                margin-bottom: 20px;
                
            } 
            
            .hero-image{
                width: 100%;
            }
            


        }

        @media only screen and (max-width: 1005px ){
            .hero-content{
                width: 100%;
            }

            .hero-content h2{
                font-size: 20px;

            } 

            .hero-content p{
                font-size: 10px;
                margin-bottom: 20px;
                
            } 
            
            .hero-image{
                width: 100%;
            }

  
  }




    @keyframes fadeInUp {
        0%{
            opacity: 0;
            transform: translateY(50px);
        }

        100%{
            opacity: 1;
            transform: translateY(0px);
        }
    }

    @keyframes fadeInRight {
        0%{
            opacity: 0;
            transform: translateX(-50px);
        }

        100%{
            opacity: 1;
            transform: translateX(0px);
        }
    }
    
    

    </style>

    <div class="container about-hero">
  <div class="row">
    <div class="col-md-6 col-sm-12 "> 
              <div class="hero-content">
              <h2 >Welcome to our Website</h2>
                <p>Discover the latest trends and inovations in technology, design and more.
                     Our team experts brings you the best content and insights to help you
                    stay ahead of the curve.</p>
                    <p>Join the ranks of satisfied clients who have witnessed the transformative power of a strategically designed and expertly developed website. At Sol-Tekkers, 
                        we are not just building websites; we are crafting digital experiences that leave a lasting impression.</p>
                        <p>Take the leap into the digital frontier with Sol-Tekkers . Let's build something extraordinary together.</p>
                    <button class="cta-button" ><a href="#">learn-more</a></button>
              </div>
                </div>
    <div class="col-md-6 col-sm-12">
    <img src="assets/img/photos/photo-45.jpg" class="w-100 rounded hero-image" alt="...">
    </div>
  </div>
  </div>

<!-- mvv-mission-vision-values
    =======================================================  -->

    <style>
 


@media (max-width: 550px) {
  .img-abt-sect-2 img{
    width: 100%; 
    height: 100%;
  }
  .mvv-main-h h1{
    font-size: 25px;
    font-weight: 800;
    text-align: center;
    
    margin-bottom: 10px;
    

}
}

.mvv-main-h h1{
    font-weight: 700;
    
    margin-bottom: 10px;
    margin-top: 120px;

}

.mvv-h4{
    font-weight: 900;
}
    </style>
 


  <div class="container "  >
  <div class= "mvv-main-h d-flex flex-column my-2 flex-md-column flex-lg-row flex-sm-column justify-content-md-center justify-content-sm-center">
    <h1>Our Organizational Framework</h1>
</div>
  
        <div class="d-flex flex-column my-2 flex-md-column flex-lg-row flex-sm-column justify-content-md-center justify-content-sm-center">

            <div class="d-inline img-abt-sect-2">
                <img  class="shadow p-3 mb-5 bg-body-tertiary rounded " src="assets/img/photos/photo-46.jpg"  height="300px" alt="">
            </div>
            <div class="d-flex flex-column justify-content-center mx-3">
                <h4 class="mvv-h4">Our mission</h4>
            <p class="lead">At Sol Tekkers, our mission is to be a premier software house service provider dedicated to delivering innovative, reliable, and customized solutions that empower businesses to thrive in the dynamic digital landscape. We are committed to excellence in software development,
                 embracing cutting-edge technologies, and fostering a culture of continuous improvement.</p>
            </div>
        </div>

        <div class="d-flex flex-column my-2 flex-md-column flex-lg-row flex-sm-column justify-content-md-center justify-content-sm-center">
            <div class="img-abt-sect-2">
                <img class="shadow p-3 mb-5 bg-body-tertiary rounded " src="assets/img/photos/photo-47.jpg"  height="300px" alt="" >
            </div>
            <div class="d-flex flex-column justify-content-center mx-3">
                <h4 class="mvv-h4">Our Vision</h4>
            <p>At Sol Tekkers , our vision is to be the unrivaled catalyst for digital innovation, inspiring transformative growth for businesses across industries. We envision a future where technology is seamlessly integrated into every facet of enterprise operations,
                 and we are at the forefront, leading this evolution with our cutting-edge software solutions.</p>
            </div>
        </div>
        <div class="d-flex flex-column my-2 flex-md-column flex-lg-row flex-sm-column justify-content-md-center justify-content-sm-center">
            <div class="img-abt-sect-2">
                <img class="shadow p-3 mb-5 bg-body-tertiary rounded " src="assets/img/photos/photo-48.jpg"  height="300px" alt="">
            </div>
            <div class="d-flex flex-column justify-content-center mx-3">
                <h4 class="mvv-h4">Our Values</h4>
            <p>We foster a culture of creativity and continuous learning, encouraging our team to explore new ideas, embrace emerging technologies, and push the boundaries of what's possible. 
                Innovation is at the heart of everything we do, driving our solutions to be at the forefront of the industry.</p>
            </div>
        </div>
    </div>


    <!-- ABOUT V2
    ================================================== -->
    <div class="container pb-4 pb-xl-7">
        <div class="text-center mb-md-6 mb-4 pt-8 pt-md-11">
            <h1 class="mb-3">Our Story</h1>
            <p class="font-size-lg mb-5 text-capitalize">Discover your perfect program in our courses.</p>
        </div>
        

        <!-- GALLERY
        ================================================== -->
        <div class="mb-8">
            <div class="row row-cols-md-3">
                <div class="col-md mb-6">
                    <!-- Image -->
                    <a class="d-block position-relative" href="assets/img/photos/photo-31.jpg" data-fancybox data-width="1110" data-height="810">
                        <img src="assets/img/photos/photo-31.jpg" class="w-100 rounded" alt="...">

                        <div class="center position-absolute hover-visible">
                            <div class="mb-4 text-white">
                                <!-- Icon -->
                                <svg width="30" height="30" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M23.3272 10.8975H20.6028V16.5998H14.8105V19.4059H20.6028V25.1982H23.3272V19.4059H29.1113V16.5998H23.3272V10.8975Z" fill="currentColor"></path>
                                    <path d="M21.9604 0C11.9957 0 3.91267 8.07486 3.91267 18.0478C3.91267 22.4411 5.48346 26.4662 8.09327 29.5996L0.509281 37.11C-0.16976 37.789 -0.16976 38.8117 0.509281 39.4907C1.18832 40.1698 2.21097 40.1698 2.89001 39.4907L10.4413 31.9395C13.5665 34.5329 17.5753 36.0873 21.9522 36.0873C31.917 36.0873 40 28.0125 40 18.0396C40 8.06668 31.9251 0 21.9604 0ZM21.9604 32.7739C13.8283 32.7739 7.23424 26.1799 7.23424 18.0478C7.23424 9.91563 13.8283 3.32157 21.9604 3.32157C30.0926 3.32157 36.6866 9.91563 36.6866 18.0478C36.6866 26.1799 30.0926 32.7739 21.9604 32.7739Z" fill="currentColor"></path>
                                </svg>

                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md mb-6">
                    <!-- Image -->
                    <a class="d-block position-relative" href="assets/img/photos/photo-32.jpg" data-fancybox data-width="1110" data-height="810">
                        <img src="assets/img/photos/photo-32.jpg" class="w-100 rounded" alt="...">

                        <div class="center position-absolute hover-visible">
                            <div class="mb-4 text-white">
                                <!-- Icon -->
                                <svg width="30" height="30" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M23.3272 10.8975H20.6028V16.5998H14.8105V19.4059H20.6028V25.1982H23.3272V19.4059H29.1113V16.5998H23.3272V10.8975Z" fill="currentColor"></path>
                                    <path d="M21.9604 0C11.9957 0 3.91267 8.07486 3.91267 18.0478C3.91267 22.4411 5.48346 26.4662 8.09327 29.5996L0.509281 37.11C-0.16976 37.789 -0.16976 38.8117 0.509281 39.4907C1.18832 40.1698 2.21097 40.1698 2.89001 39.4907L10.4413 31.9395C13.5665 34.5329 17.5753 36.0873 21.9522 36.0873C31.917 36.0873 40 28.0125 40 18.0396C40 8.06668 31.9251 0 21.9604 0ZM21.9604 32.7739C13.8283 32.7739 7.23424 26.1799 7.23424 18.0478C7.23424 9.91563 13.8283 3.32157 21.9604 3.32157C30.0926 3.32157 36.6866 9.91563 36.6866 18.0478C36.6866 26.1799 30.0926 32.7739 21.9604 32.7739Z" fill="currentColor"></path>
                                </svg>

                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md mb-6">
                    <!-- Image -->
                    <a class="d-block position-relative" href="assets/img/photos/photo-33.jpg" data-fancybox data-width="1110" data-height="810">
                        <img src="assets/img/photos/photo-33.jpg" class="w-100 rounded" alt="...">

                        <div class="center position-absolute hover-visible">
                            <div class="mb-4 text-white">
                                <!-- Icon -->
                                <svg width="30" height="30" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M23.3272 10.8975H20.6028V16.5998H14.8105V19.4059H20.6028V25.1982H23.3272V19.4059H29.1113V16.5998H23.3272V10.8975Z" fill="currentColor"></path>
                                    <path d="M21.9604 0C11.9957 0 3.91267 8.07486 3.91267 18.0478C3.91267 22.4411 5.48346 26.4662 8.09327 29.5996L0.509281 37.11C-0.16976 37.789 -0.16976 38.8117 0.509281 39.4907C1.18832 40.1698 2.21097 40.1698 2.89001 39.4907L10.4413 31.9395C13.5665 34.5329 17.5753 36.0873 21.9522 36.0873C31.917 36.0873 40 28.0125 40 18.0396C40 8.06668 31.9251 0 21.9604 0ZM21.9604 32.7739C13.8283 32.7739 7.23424 26.1799 7.23424 18.0478C7.23424 9.91563 13.8283 3.32157 21.9604 3.32157C30.0926 3.32157 36.6866 9.91563 36.6866 18.0478C36.6866 26.1799 30.0926 32.7739 21.9604 32.7739Z" fill="currentColor"></path>
                                </svg>

                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md mb-6">
                    <!-- Image -->
                    <a class="d-block position-relative" href="assets/img/photos/photo-34.jpg" data-fancybox data-width="1110" data-height="810">
                        <img src="assets/img/photos/photo-34.jpg" class="w-100 rounded" alt="...">

                        <div class="center position-absolute hover-visible">
                            <div class="mb-4 text-white">
                                <!-- Icon -->
                                <svg width="30" height="30" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M23.3272 10.8975H20.6028V16.5998H14.8105V19.4059H20.6028V25.1982H23.3272V19.4059H29.1113V16.5998H23.3272V10.8975Z" fill="currentColor"></path>
                                    <path d="M21.9604 0C11.9957 0 3.91267 8.07486 3.91267 18.0478C3.91267 22.4411 5.48346 26.4662 8.09327 29.5996L0.509281 37.11C-0.16976 37.789 -0.16976 38.8117 0.509281 39.4907C1.18832 40.1698 2.21097 40.1698 2.89001 39.4907L10.4413 31.9395C13.5665 34.5329 17.5753 36.0873 21.9522 36.0873C31.917 36.0873 40 28.0125 40 18.0396C40 8.06668 31.9251 0 21.9604 0ZM21.9604 32.7739C13.8283 32.7739 7.23424 26.1799 7.23424 18.0478C7.23424 9.91563 13.8283 3.32157 21.9604 3.32157C30.0926 3.32157 36.6866 9.91563 36.6866 18.0478C36.6866 26.1799 30.0926 32.7739 21.9604 32.7739Z" fill="currentColor"></path>
                                </svg>

                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md mb-6">
                    <!-- Image -->
                    <a class="d-block position-relative" href="assets/img/photos/photo-35.jpg" data-fancybox data-width="1110" data-height="810">
                        <img src="assets/img/photos/photo-35.jpg" class="w-100 rounded" alt="...">

                        <div class="center position-absolute hover-visible">
                            <div class="mb-4 text-white">
                                <!-- Icon -->
                                <svg width="30" height="30" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M23.3272 10.8975H20.6028V16.5998H14.8105V19.4059H20.6028V25.1982H23.3272V19.4059H29.1113V16.5998H23.3272V10.8975Z" fill="currentColor"></path>
                                    <path d="M21.9604 0C11.9957 0 3.91267 8.07486 3.91267 18.0478C3.91267 22.4411 5.48346 26.4662 8.09327 29.5996L0.509281 37.11C-0.16976 37.789 -0.16976 38.8117 0.509281 39.4907C1.18832 40.1698 2.21097 40.1698 2.89001 39.4907L10.4413 31.9395C13.5665 34.5329 17.5753 36.0873 21.9522 36.0873C31.917 36.0873 40 28.0125 40 18.0396C40 8.06668 31.9251 0 21.9604 0ZM21.9604 32.7739C13.8283 32.7739 7.23424 26.1799 7.23424 18.0478C7.23424 9.91563 13.8283 3.32157 21.9604 3.32157C30.0926 3.32157 36.6866 9.91563 36.6866 18.0478C36.6866 26.1799 30.0926 32.7739 21.9604 32.7739Z" fill="currentColor"></path>
                                </svg>

                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md mb-6">
                    <!-- Image -->
                    <a class="d-block position-relative" href="assets/img/photos/photo-36.jpg" data-fancybox data-width="1110" data-height="810">
                        <img src="assets/img/photos/photo-36.jpg" class="w-100 rounded" alt="...">

                        <div class="center position-absolute hover-visible">
                            <div class="mb-4 text-white">
                                <!-- Icon -->
                                <svg width="30" height="30" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M23.3272 10.8975H20.6028V16.5998H14.8105V19.4059H20.6028V25.1982H23.3272V19.4059H29.1113V16.5998H23.3272V10.8975Z" fill="currentColor"></path>
                                    <path d="M21.9604 0C11.9957 0 3.91267 8.07486 3.91267 18.0478C3.91267 22.4411 5.48346 26.4662 8.09327 29.5996L0.509281 37.11C-0.16976 37.789 -0.16976 38.8117 0.509281 39.4907C1.18832 40.1698 2.21097 40.1698 2.89001 39.4907L10.4413 31.9395C13.5665 34.5329 17.5753 36.0873 21.9522 36.0873C31.917 36.0873 40 28.0125 40 18.0396C40 8.06668 31.9251 0 21.9604 0ZM21.9604 32.7739C13.8283 32.7739 7.23424 26.1799 7.23424 18.0478C7.23424 9.91563 13.8283 3.32157 21.9604 3.32157C30.0926 3.32157 36.6866 9.91563 36.6866 18.0478C36.6866 26.1799 30.0926 32.7739 21.9604 32.7739Z" fill="currentColor"></path>
                                </svg>

                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- COUNTUP
        ================================================== -->
        <div class="pb-8 bg-white">
            <div class="row text-center">
                <div class="col-md-3 mb-6 mb-md-0">
                    <div class="h1 mb-1"><span data-toggle="countup" data-from="0" data-to="749" data-aos data-aos-id="countup:in"></span></div>
                    <p class="font-size-lg fw-medium mb-0">Creative Events</p>
                </div>

                <div class="col-md-3 mb-6 mb-md-0">
                    <div class="h1 mb-1"><span data-toggle="countup" data-from="0" data-to="853" data-aos data-aos-id="countup:in"></span></div>
                    <p class="font-size-lg fw-medium mb-0">Skilled Tutors</p>
                </div>

                <div class="col-md-3 mb-6 mb-md-0">
                    <div class="h1 mb-1"><span data-toggle="countup" data-from="0" data-to="28" data-aos="" data-aos-id="countup:in"></span>k+</div>
                    <p class="font-size-lg fw-medium mb-0">Online Courses</p>
                </div>

                <div class="col-md-3 mb-6 mb-md-0">
                    <div class="h1 mb-1"><span data-toggle="countup" data-from="0" data-to="53" data-aos="" data-aos-id="countup:in"></span>k+</div>
                    <p class="font-size-lg fw-medium mb-0">People Worldwide</p>
                </div>
            </div>
        </div>
    </div>

    <!-- ICON BLOCKS
    ================================================== -->
    <section class="py-5 pt-md-11 pb-md-10 bg-light text-center">
        <div class="container">
            <div class="mb-md-8 mb-4">
                <h1>Why Study With Sol-Tekkers ?</h1>
                <p class="font-size-lg mb-0 text-capitalize">Discover your perfect program in our courses.</p>
            </div>

            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="p-5 d-inline-block rounded-circle mb-6" style="border: 1px solid #F8C994;">
                        <div class="icon-circle icon-circle-lg" style="background-color: #f5debc; color: #EE8E00;">
                            <!-- Icon -->
                            <svg width="50" height="42" viewBox="0 0 50 42" xmlns="http://www.w3.org/2000/svg">
                                <path d="M40.7772 24.0457L34.8852 20.873C33.9687 20.3794 32.8878 20.4035 31.9939 20.9373C31.1 21.4711 30.5664 22.4115 30.5664 23.4525V30.7043C30.5664 31.7975 31.168 32.7919 32.1364 33.2993C32.5655 33.5241 33.0321 33.6353 33.4971 33.6353C34.0813 33.6353 34.6631 33.4595 35.1637 33.113L41.0558 29.0338C41.9005 28.4491 42.3706 27.4876 42.3133 26.4618C42.2561 25.436 41.6817 24.5328 40.7772 24.0457ZM33.4961 30.7037V23.4526L39.3879 26.6254L33.4961 30.7037Z" fill="currentColor"/>
                                <path d="M17.1875 19.5352H7.8125C7.00352 19.5352 6.34766 20.191 6.34766 21C6.34766 21.809 7.00352 22.4648 7.8125 22.4648H17.1875C17.9965 22.4648 18.6523 21.809 18.6523 21C18.6523 20.191 17.9965 19.5352 17.1875 19.5352Z" fill="currentColor"/>
                                <path d="M17.1875 25.7852H7.8125C7.00352 25.7852 6.34766 26.441 6.34766 27.25C6.34766 28.059 7.00352 28.7148 7.8125 28.7148H17.1875C17.9965 28.7148 18.6523 28.059 18.6523 27.25C18.6523 26.441 17.9965 25.7852 17.1875 25.7852Z" fill="currentColor"/>
                                <path d="M17.1875 32.0352H7.8125C7.00352 32.0352 6.34766 32.691 6.34766 33.5C6.34766 34.309 7.00352 34.9648 7.8125 34.9648H17.1875C17.9965 34.9648 18.6523 34.309 18.6523 33.5C18.6523 32.691 17.9965 32.0352 17.1875 32.0352Z" fill="currentColor"/>
                                <path d="M45.6055 0.00390625H4.39453C1.97139 0.00390625 0 1.97529 0 4.39844V37.6016C0 40.0247 1.97139 41.9961 4.39453 41.9961H45.6055C48.0286 41.9961 50 40.0247 50 37.6016V4.39844C50 1.97529 48.0286 0.00390625 45.6055 0.00390625ZM4.39453 2.93359H45.6055C46.4132 2.93359 47.0703 3.59072 47.0703 4.39844V12.5039H2.92969V4.39844C2.92969 3.59072 3.58682 2.93359 4.39453 2.93359ZM45.6055 39.0664H4.39453C3.58682 39.0664 2.92969 38.4093 2.92969 37.6016V15.4336H47.0703V37.6016C47.0703 38.4093 46.4132 39.0664 45.6055 39.0664Z" fill="currentColor"/>
                                <path d="M7.8125 9.18359C8.62151 9.18359 9.27734 8.52776 9.27734 7.71875C9.27734 6.90974 8.62151 6.25391 7.8125 6.25391C7.00349 6.25391 6.34766 6.90974 6.34766 7.71875C6.34766 8.52776 7.00349 9.18359 7.8125 9.18359Z" fill="currentColor"/>
                                <path d="M14.0625 9.18372C14.8715 9.18372 15.5273 8.52788 15.5273 7.71887C15.5273 6.90986 14.8715 6.25403 14.0625 6.25403C13.2535 6.25403 12.5977 6.90986 12.5977 7.71887C12.5977 8.52788 13.2535 9.18372 14.0625 9.18372Z" fill="currentColor"/>
                                <path d="M20.3125 9.18359C21.1215 9.18359 21.7773 8.52776 21.7773 7.71875C21.7773 6.90974 21.1215 6.25391 20.3125 6.25391C19.5035 6.25391 18.8477 6.90974 18.8477 7.71875C18.8477 8.52776 19.5035 9.18359 20.3125 9.18359Z" fill="currentColor"/>
                            </svg>

                        </div>
                    </div>

                    <h4 class="mb-1">Learn Anything</h4>
                    <p class="px-lg-7 px-xl-8">Sed cursus turpis vitae tortor donec eaque ipsa quaeab illo.</p>
                </div>

                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="p-5 d-inline-block rounded-circle mb-6" style="border: 1px solid #B7B3F8;">
                        <div class="icon-circle icon-circle-lg" style="background-color: #d3d8f8; color: #5066F5;">
                            <!-- Icon -->
                            <svg width="50" height="50" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg">
                                <path d="M42.6777 7.32231C37.9558 2.60048 31.6777 0 25 0C18.3223 0 12.0442 2.60048 7.32231 7.32231C2.60038 12.0441 0 18.3223 0 25C0 31.6777 2.60048 37.9558 7.32231 42.6777C12.0441 47.3996 18.3223 50 25 50C31.6777 50 37.9558 47.3995 42.6777 42.6777C47.3996 37.9559 50 31.6777 50 25C50 18.3223 47.3995 12.0442 42.6777 7.32231ZM41.6253 39.5856L40.2162 38.1764C39.4842 37.4445 39.3028 36.3304 39.7647 35.404L41.0257 32.875C42.2388 30.4418 42.88 27.7188 42.88 25C42.88 22.2812 42.2388 19.5581 41.0257 17.125L39.7647 14.596C39.3028 13.6696 39.4842 12.5555 40.2162 11.8236L41.6253 10.4144C45.1758 14.4502 47.1154 19.5763 47.1154 25C47.1154 30.4237 45.1758 35.5498 41.6253 39.5856ZM12.8168 34.1168L11.5559 31.5878C9.49914 27.4627 9.49914 22.5372 11.5559 18.4121L12.8168 15.8831C13.2154 15.0838 13.3953 14.2209 13.3707 13.3701C13.4213 13.3715 13.4719 13.3738 13.5227 13.3738C14.3238 13.3738 15.1315 13.1914 15.8832 12.8167L18.4122 11.5558C22.5373 9.49894 27.4628 9.49904 31.5879 11.5558L34.1169 12.8167C34.9161 13.2152 35.7788 13.395 36.6293 13.3705C36.6048 14.2212 36.7847 15.0838 37.1832 15.883L38.4441 18.412C40.5009 22.5371 40.5009 27.4626 38.4441 31.5877L37.1832 34.1167C36.7847 34.916 36.6048 35.7786 36.6293 36.6291C35.7788 36.6046 34.9161 36.7845 34.1169 37.183L31.5879 38.4439C27.4627 40.5007 22.5372 40.5006 18.4122 38.4439L15.8832 37.183C15.0839 36.7845 14.2213 36.6046 13.3708 36.6291C13.3952 35.7788 13.2153 34.9161 12.8168 34.1168ZM25 2.88462C30.4237 2.88462 35.5498 4.82423 39.5856 8.37471L38.1764 9.78385C37.4446 10.5157 36.3305 10.6973 35.404 10.2353L32.875 8.97433C30.4418 7.76125 27.7188 7.12 25 7.12C22.2812 7.12 19.5581 7.76125 17.125 8.97433L14.596 10.2353C13.6695 10.6972 12.5556 10.5158 11.8236 9.78385L10.4144 8.37471C14.4502 4.82423 19.5763 2.88462 25 2.88462ZM8.37471 10.4144L9.78385 11.8236C10.5158 12.5555 10.6972 13.6696 10.2353 14.596L8.97433 17.125C7.76125 19.5582 7.12 22.2812 7.12 25C7.12 27.7188 7.76125 30.4419 8.97433 32.875L10.2353 35.404C10.6972 36.3304 10.5158 37.4445 9.78385 38.1764L8.37471 39.5856C4.82423 35.5498 2.88462 30.4237 2.88462 25C2.88462 19.5763 4.82423 14.4502 8.37471 10.4144ZM25 47.1154C19.5763 47.1154 14.4502 45.1758 10.4144 41.6253L11.8236 40.2162C12.5555 39.4844 13.6696 39.3028 14.596 39.7647L17.125 41.0257C19.5582 42.2388 22.2812 42.88 25 42.88C27.7188 42.88 30.4419 42.2388 32.875 41.0257L35.404 39.7647C36.3305 39.3029 37.4445 39.4842 38.1764 40.2162L39.5856 41.6253C35.5498 45.1758 30.4237 47.1154 25 47.1154Z" fill="currentColor"/>
                            </svg>

                        </div>
                    </div>

                    <h4 class="mb-1">Flexible Learning</h4>
                    <p class="px-lg-7 px-xl-8">Sed cursus turpis vitae tortor donec eaque ipsa quaeab illo.</p>
                </div>

                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="p-5 d-inline-block rounded-circle mb-6" style="border: 1px solid #B2F4DC;">
                        <div class="icon-circle icon-circle-lg" style="background-color: #b2f4dc; color: #00C27C;">
                            <!-- Icon -->
                            <svg width="50" height="50" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg">
                                <path d="M36.7188 39.7461C36.7188 40.5552 36.063 41.2109 35.2539 41.2109C34.4448 41.2109 33.7891 40.5552 33.7891 39.7461C33.7891 38.937 34.4448 38.2812 35.2539 38.2812C36.063 38.2812 36.7188 38.937 36.7188 39.7461Z" fill="currentColor"/>
                                <path d="M29.3945 17.7734H31.1108C33.3912 17.7734 35.5354 18.6615 37.1479 20.274C37.429 20.5555 37.8056 20.7031 38.184 20.7031C38.5735 20.7031 38.9503 20.5433 39.2193 20.274C40.1783 19.315 41.3261 18.6146 42.5781 18.2026V22.168C42.5781 22.9771 43.2339 23.6328 44.043 23.6328C44.8521 23.6328 45.5078 22.9771 45.5078 22.168V17.7734H46.9727C47.7818 17.7734 48.4375 17.1177 48.4375 16.3086V1.46484C48.4375 0.655746 47.7818 0 46.9727 0H45.2564C42.659 0 40.1939 0.857925 38.1836 2.4395C36.1732 0.857925 33.7082 0 31.1108 0H29.3945C28.5854 0 27.9297 0.655746 27.9297 1.46484V16.3086C27.9297 17.1177 28.5854 17.7734 29.3945 17.7734ZM45.5078 2.92969V14.8438H45.2564C43.2205 14.8438 41.3033 15.3725 39.6484 16.3033V5.03235C41.2033 3.67355 43.1721 2.92969 45.2564 2.92969H45.5078ZM30.8594 2.92969H31.1108C33.1944 2.92969 35.1643 3.67126 36.7188 5.0293V16.3029C35.025 15.3503 33.107 14.8438 31.1108 14.8438H30.8594V2.92969Z" fill="currentColor"/>
                                <path d="M3.02734 50H46.9727C47.7818 50 48.4375 49.3443 48.4375 48.5352V33.8867C48.4375 33.0776 47.7818 32.4219 46.9727 32.4219H33.6418C32.9613 29.0829 30.0018 26.5625 26.4648 26.5625H22.0703V25.0675C23.896 23.6919 25 21.5286 25 19.2383V16.6222C25 12.8906 22.3755 9.64966 18.895 9.08356C14.397 8.3519 10.3516 11.7859 10.3516 16.3086V19.2383C10.3516 21.5286 11.4555 23.6919 13.2812 25.0675V26.5625H8.88672C4.8481 26.5625 1.5625 29.8481 1.5625 33.8867V48.5352C1.5625 49.3443 2.21825 50 3.02734 50ZM45.5078 47.0703H25V35.3516H45.5078V47.0703ZM13.2812 16.3086C13.2812 13.6845 15.6109 11.5177 18.4246 11.9755C20.5029 12.3135 22.0703 14.3112 22.0703 16.6222V19.2383C22.0703 20.8031 21.2471 22.2164 19.8685 23.019C19.418 23.2811 19.1406 23.7633 19.1406 24.2851V27.4204L17.6758 28.8853L16.2109 27.4204V24.2851C16.2109 23.7637 15.9336 23.2811 15.4831 23.019C14.1045 22.2164 13.2812 20.8031 13.2812 19.2383V16.3086ZM4.49219 33.8867C4.49219 31.4636 6.46362 29.4922 8.88672 29.4922H14.1392L16.6401 31.9927C16.9258 32.2788 17.3008 32.4219 17.6758 32.4219C18.0508 32.4219 18.4258 32.2788 18.7115 31.9927L21.2124 29.4922H26.4648C28.3745 29.4922 30.0026 30.7167 30.6076 32.4219H23.5352C22.7261 32.4219 22.0703 33.0776 22.0703 33.8867V42.6796C20.8454 41.758 19.3233 41.2109 17.6758 41.2109H10.3516V33.8867C10.3516 33.0776 9.69582 32.4219 8.88672 32.4219C8.07762 32.4219 7.42188 33.0776 7.42188 33.8867V42.6758C7.42188 43.4849 8.07762 44.1406 8.88672 44.1406H17.6758C19.5858 44.1406 21.2147 45.3652 21.8193 47.0703H4.49219V33.8867Z" fill="currentColor"/>
                            </svg>

                        </div>
                    </div>

                    <h4 class="mb-1">Learn With Experts</h4>
                    <p class="px-lg-7 px-xl-8">Sed cursus turpis vitae tortor donec eaque ipsa quaeab illo.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- TESTIMONIAL
    ================================================== -->
    <section class="pt-5 pt-md-11 pb-9">
        <div class="container">
            <div class="text-center mb-2" data-aos="fade-up">
                <h1>What our students have to say</h1>
                <p class="font-size-lg text-capitalize mb-0">Discover your perfect program in our courses.</p>
            </div>

            <div class="mx-n4" data-flickity='{"pageDots": true, "prevNextButtons": false, "cellAlign": "left", "wrapAround": true, "imagesLoaded": true}'>
                <div class="col-md-6 col-xl-4 py-md-7 py-3" data-aos="fade-up" data-aos-delay="50" style="padding-right:15px;padding-left:15px;">
                    <!-- Card -->
                    <div class="card border shadow p-6 lift-md">
                        <!-- Image -->
                        <div class="card-zoom">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-custom me-5">
                                    <img src="assets/img/avatars/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                                </div>
                                <div class="media-body">
                                    <h5 class="mb-0">Albert Cole</h5>
                                    <span>Designer</span>
                                </div>
                            </div>
                        </div>

                        <!-- Footer -->
                        <div class="card-footer px-0 pb-0">
                            <p class="mb-0 text-capitalize">“ I believe in lifelong learning and Skola is a great place to learn from experts. I've learned a lot and recommend it to all my friends “</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4 py-md-7 py-3" data-aos="fade-up" data-aos-delay="100" style="padding-right:15px;padding-left:15px;">
                    <!-- Card -->
                    <div class="card border shadow p-6 lift-md">
                        <!-- Image -->
                        <div class="card-zoom">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-custom me-5">
                                    <img src="assets/img/avatars/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                                </div>
                                <div class="media-body">
                                    <h5 class="mb-0">Alison Dawn</h5>
                                    <span>WordPress Developer</span>
                                </div>
                            </div>
                        </div>

                        <!-- Footer -->
                        <div class="card-footer px-0 pb-0">
                            <p class="mb-0 text-capitalize">“ I believe in lifelong learning and Skola is a great place to learn from experts. I've learned a lot and recommend it to all my friends “</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4 py-md-7 py-3" data-aos="fade-up" data-aos-delay="150" style="padding-right:15px;padding-left:15px;">
                    <!-- Card -->
                    <div class="card border shadow p-6 lift-md">
                        <!-- Image -->
                        <div class="card-zoom">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-custom me-5">
                                    <img src="assets/img/avatars/avatar-3.jpg" alt="..." class="avatar-img rounded-circle">
                                </div>
                                <div class="media-body">
                                    <h5 class="mb-0">Daniel Parker</h5>
                                    <span>Front-end Developer</span>
                                </div>
                            </div>
                        </div>

                        <!-- Footer -->
                        <div class="card-footer px-0 pb-0">
                            <p class="mb-0 text-capitalize">“ I believe in lifelong learning and Skola is a great place to learn from experts. I've learned a lot and recommend it to all my friends “</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4 py-md-7 py-3" data-aos="fade-up" data-aos-delay="200" style="padding-right:15px;padding-left:15px;">
                    <!-- Card -->
                    <div class="card border shadow p-6 lift-md">
                        <!-- Image -->
                        <div class="card-zoom">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-custom me-5">
                                    <img src="assets/img/avatars/avatar-4.jpg" alt="..." class="avatar-img rounded-circle">
                                </div>
                                <div class="media-body">
                                    <h5 class="mb-0">Albert Cole</h5>
                                    <span>Designer</span>
                                </div>
                            </div>
                        </div>

                        <!-- Footer -->
                        <div class="card-footer px-0 pb-0">
                            <p class="mb-0 text-capitalize">“ I believe in lifelong learning and Skola is a great place to learn from experts. I've learned a lot and recommend it to all my friends “</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BRAND
    ================================================== -->
    <div class="py-2 pt-md-5 pb-md-11">
        <div class="container">
            <div class="row row-cols-3 row-cols-md-5 text-center w-xl-80 mx-xl-auto justify-content-center align-items-center">
                <div class="col-md mb-4 mb-md-0">
                    <div class="mw-100p mx-auto">
                        <!-- Image -->
                        <svg viewBox="0 0 100 34" xmlns="http://www.w3.org/2000/svg">
                        	<path fill="#000000" d="M15,19.1c-0.1,0-0.2,0.1-0.3,0.1c-0.2,0-0.6-0.9-0.7-1.5c-0.5,0.5-1.4,1.5-3.2,1.5c-2.3,0-3.7-1.5-3.7-3.8
                        		c0-4.2,4.5-4.2,6.5-4.2v-0.8c0-1.1-0.2-1.8-1.8-1.8c-1.4,0-2.8,0.7-3.1,0.7c-0.1,0-0.2-0.1-0.2-0.2L7.9,7.7c0-0.1-0.1-0.2-0.1-0.3
                        		c0-0.6,2.5-1.2,4.4-1.2c3.1,0,4.3,1.4,4.3,4v4.7c0,2.4,0.6,2.7,0.6,3.2c0,0.1-0.1,0.2-0.2,0.2L15,19.1z M13.5,13.3
                        		c-0.6,0-3.5-0.2-3.5,2c0,1,0.7,1.7,1.6,1.7c0.9,0,1.6-0.6,1.9-0.9V13.3z M35.9,18.4c0,0.3-0.1,0.3-0.3,0.3H33
                        		c-0.3,0-0.3-0.1-0.3-0.3v-7.6c0-0.9-0.1-2.1-1-2.1c-1,0-1.9,0.7-2.2,1v8.6c0,0.3,0,0.3-0.3,0.3h-2.5c-0.3,0-0.3-0.1-0.3-0.3v-7.6
                        		c0-0.9-0.1-2.1-1-2.1c-1,0-1.9,0.7-2.2,1v8.6c0,0.3,0,0.3-0.3,0.3h-2.5c-0.3,0-0.3-0.1-0.3-0.3V11c0-3.5-0.5-3.3-0.5-3.8
                        		c0-0.1,0.1-0.2,0.3-0.3l1.9-0.6c0.1,0,0.3-0.1,0.4-0.1c0.3,0,0.5,0.5,0.8,1.7c0.7-0.6,1.8-1.7,3.8-1.7c1.1,0,2.2,0.7,2.5,1.7
                        		c0.7-0.6,1.8-1.7,3.9-1.7c2.3,0,2.9,1.7,2.9,3.9V18.4z M46.4,19.1c-0.1,0-0.2,0.1-0.3,0.1c-0.2,0-0.6-0.9-0.7-1.5
                        		c-0.5,0.5-1.4,1.5-3.2,1.5c-2.3,0-3.7-1.5-3.7-3.8c0-4.2,4.5-4.2,6.5-4.2v-0.8c0-1.1-0.2-1.8-1.8-1.8c-1.4,0-2.8,0.7-3.1,0.7
                        		c-0.1,0-0.2-0.1-0.2-0.2l-0.5-1.5c0-0.1-0.1-0.2-0.1-0.3c0-0.6,2.5-1.2,4.4-1.2c3.1,0,4.3,1.4,4.3,4v4.7c0,2.4,0.6,2.7,0.6,3.2
                        		c0,0.1-0.1,0.2-0.2,0.2L46.4,19.1z M44.9,13.3c-0.6,0-3.5-0.2-3.5,2c0,1,0.7,1.7,1.6,1.7c0.9,0,1.6-0.6,1.9-0.9V13.3z M59,18.5
                        		c-0.1,0.2-0.2,0.3-0.3,0.3h-8.3c-0.1,0-0.2-0.1-0.2-0.2v-1.8l5.7-7.5h-5c-0.1,0-0.2-0.1-0.2-0.3V7c0-0.2,0.1-0.3,0.3-0.3h7.9
                        		c0.2,0,0.4,0.1,0.4,0.2v1.9l-5.6,7.4h5.7c0.5,0,0.5,0.2,0.5,0.2c0,0.1-0.1,0.2-0.1,0.3L59,18.5z M65.9,18.4c0,0.3,0,0.3-0.3,0.3
                        		h-2.5c-0.3,0-0.3-0.1-0.3-0.3V8.9h-1.9c-0.3,0-0.3-0.1-0.3-0.3V7c0-0.3,0.1-0.3,0.3-0.3h4.7c0.3,0,0.3,0.1,0.3,0.3V18.4z M64.3,5.1
                        		c-1.1,0-2.1-0.9-2.1-2c0-1.1,0.9-2,2.1-2c1.1,0,2,0.9,2,2C66.4,4.1,65.4,5.1,64.3,5.1z M79.6,18.4c0,0.3,0,0.3-0.3,0.3h-2.5
                        		c-0.3,0-0.3-0.1-0.3-0.3v-7.6c0-0.9-0.1-2.1-1.4-2.1c-1,0-1.9,0.7-2.2,1v8.6c0,0.3,0,0.3-0.3,0.3H70c-0.3,0-0.3-0.1-0.3-0.3V11
                        		c0-3.5-0.5-3.3-0.5-3.8c0-0.1,0.1-0.2,0.3-0.3l1.9-0.6c0.1,0,0.3-0.1,0.4-0.1c0.3,0,0.5,0.5,0.8,1.7c0.7-0.6,1.8-1.7,3.8-1.7
                        		c1.4,0,3.2,0.6,3.2,3.6V18.4z M92.3,14c0,1.6,0.1,4.2,0.1,5.5c0,2.7-1.3,4.4-4.8,4.4c-1.9,0-5.2-0.8-5.2-1.3c0-0.2,0-0.3,0.1-0.5
                        		l0.5-1.5c0-0.2,0.1-0.2,0.3-0.2c0.3,0,1.8,1,4,1c1.7,0,2-0.7,2-2.1c0-0.9-0.1-1.5-0.1-1.6c-0.4,0.2-1.3,0.9-3,0.9
                        		c-2.8,0-4.3-2.3-4.3-6c0-4,1.7-6.4,4.7-6.4c1.8,0,2.5,0.8,3,1.2c0.1-0.2,0.5-1.2,0.9-1.2c0.1,0,0.2,0,0.2,0L92.8,7
                        		C92.9,7,93,7.1,93,7.2c0,0.3-0.7,1.2-0.7,3.1V14z M89.3,9.6c-0.3-0.2-0.8-0.7-2-0.7c-1.5,0-2.1,1.4-2.1,3.7c0,2.2,0.5,3.6,2,3.6
                        		c1.3,0,1.9-0.6,2.1-0.8V9.6z"/>
                        	<path fill="#FF9900" d="M74.2,25.3c-6.6,5-16.1,7.7-24.3,7.7c-11.5,0-21.8-4.4-29.7-11.7c-0.6-0.6-0.1-1.4,0.7-0.9
                        		c8.5,5.1,18.9,8.2,29.7,8.2c7.3,0,15.3-1.6,22.6-4.8C74.4,23.2,75.3,24.5,74.2,25.3 M77,22.1c-0.8-1.1-5.6-0.5-7.7-0.3
                        		c-0.6,0.1-0.7-0.5-0.2-0.9c3.8-2.7,9.9-1.9,10.6-1c0.7,0.9-0.2,7.3-3.7,10.4c-0.5,0.5-1.1,0.2-0.8-0.4C76,27.8,77.8,23.2,77,22.1"/>
                        </svg>

                    </div>
                </div>
                <div class="col-md mb-4 mb-md-0">
                    <div class="mw-100p mx-auto">
                        <!-- Image -->
                        <svg viewBox="0 0 100 34" xmlns="http://www.w3.org/2000/svg">
                        <path fill="#FF5A5F" d="M31.5,23.4c-1-1.1-1.5-2.5-1.5-4.2c0-1.7,0.5-3.1,1.5-4.1c1-1.1,2.2-1.6,3.7-1.6c1.5,0,2.7,0.6,3.4,1.9v-1.7
                        	h2.8v11.2h-2.8V23c-0.8,1.4-2,2-3.5,2C33.7,25,32.5,24.5,31.5,23.4z M37.8,21.6c0.6-0.6,0.9-1.4,0.9-2.4s-0.3-1.8-0.9-2.4
                        	c-0.6-0.6-1.3-0.9-2-0.9c-0.8,0-1.5,0.3-2,0.9c-0.6,0.6-0.9,1.4-0.9,2.4c0,1,0.3,1.8,0.9,2.4c0.6,0.6,1.3,0.9,2,0.9
                        	C36.5,22.5,37.2,22.2,37.8,21.6z M46.3,10.7c0,0.5-0.2,0.9-0.5,1.2c-0.3,0.3-0.7,0.5-1.2,0.5c-0.5,0-0.9-0.2-1.2-0.5
                        	c-0.3-0.3-0.5-0.8-0.5-1.2s0.2-0.9,0.5-1.2C43.7,9.2,44.1,9,44.6,9c0.5,0,0.9,0.2,1.2,0.5C46.1,9.8,46.3,10.3,46.3,10.7z M43.2,24.8
                        	V13.6H46v11.2H43.2z M50.6,13.6v2c0.7-1.4,1.8-2.1,3.2-2.1v2.9h-0.7c-0.8,0-1.5,0.2-1.9,0.6s-0.6,1.2-0.6,2.2v5.6h-2.8V13.6H50.6z
                        	 M57.4,15.3c0.8-1.3,1.9-1.9,3.4-1.9c1.5,0,2.7,0.5,3.7,1.6c1,1.1,1.5,2.5,1.5,4.2c0,1.7-0.5,3.1-1.5,4.2c-1,1.1-2.2,1.6-3.7,1.6
                        	s-2.6-0.7-3.5-2v1.9h-2.8v-15h2.8V15.3z M62.3,21.6c0.6-0.6,0.9-1.4,0.9-2.4c0-1-0.3-1.8-0.9-2.4s-1.3-0.9-2-0.9
                        	c-0.8,0-1.5,0.3-2,0.9c-0.6,0.6-0.9,1.4-0.9,2.4s0.3,1.8,0.9,2.4c0.6,0.6,1.3,0.9,2,0.9C61,22.5,61.7,22.2,62.3,21.6z M67.8,23.4
                        	c-1.1-1.1-1.6-2.5-1.6-4.2c0-1.7,0.5-3.1,1.6-4.2c1.1-1.1,2.4-1.6,4-1.6s2.9,0.5,4,1.6c1.1,1.1,1.6,2.4,1.6,4.2
                        	c0,1.7-0.5,3.1-1.6,4.2c-1.1,1.1-2.4,1.6-4.1,1.6S68.9,24.5,67.8,23.4z M71.9,22.6c0.8,0,1.4-0.3,2-0.9c0.6-0.6,0.8-1.4,0.8-2.5
                        	c0-1.1-0.3-1.9-0.8-2.5c-0.6-0.6-1.2-0.9-2-0.9s-1.4,0.3-2,0.9s-0.8,1.4-0.8,2.5c0,1.1,0.3,1.9,0.8,2.5
                        	C70.4,22.3,71.1,22.6,71.9,22.6z M81.4,15.3c0.8-1.3,1.9-1.9,3.4-1.9c1.5,0,2.7,0.5,3.7,1.6c1,1.1,1.5,2.5,1.5,4.2
                        	c0,1.7-0.5,3.1-1.5,4.2c-1,1.1-2.2,1.6-3.7,1.6c-1.5,0-2.6-0.7-3.5-2v1.9h-2.8v-15h2.8V15.3z M86.3,21.6c0.6-0.6,0.9-1.4,0.9-2.4
                        	c0-1-0.3-1.8-0.9-2.4s-1.3-0.9-2-0.9c-0.8,0-1.5,0.3-2,0.9c-0.6,0.6-0.9,1.4-0.9,2.4s0.3,1.8,0.9,2.4c0.6,0.6,1.3,0.9,2,0.9
                        	C85.1,22.5,85.7,22.2,86.3,21.6z M15.5,29.8c0.1,0.1,0.3,0.2,0.5,0.2s0.4-0.1,0.5-0.2C20,26.4,26,19,26,14c0-5.5-4.5-10-10-10
                        	S6,8.5,6,14C6,19,12.1,26.4,15.5,29.8z M16,5.5c4.7,0,8.5,3.8,8.5,8.4c0,4.9-6.5,12.1-8.5,14.2c-2-2.1-8.5-9.3-8.5-14.2
                        	C7.5,9.3,11.3,5.5,16,5.5z M16.2,19.2c2.6-0.9,5.1-3.1,5.1-6.1c0-1.7-1.4-3-3.1-3c-0.9,0-1.7,0.4-2.3,1c-0.6-0.6-1.4-1-2.3-1
                        	c-1.7,0-3.1,1.4-3.1,3c0,3,2.6,5.2,5.1,6.1c0.1,0,0.2,0,0.2,0C16.1,19.3,16.2,19.3,16.2,19.2z M12.2,13.2c0-0.8,0.7-1.5,1.5-1.5
                        	c0.8,0,1.5,0.7,1.5,1.5c0,0.4,0.3,0.8,0.8,0.8c0.4,0,0.8-0.3,0.8-0.8c0-0.8,0.7-1.5,1.5-1.5c0.8,0,1.5,0.7,1.5,1.5
                        	c0,2.7-3,4.2-3.8,4.5C15.1,17.3,12.2,15.9,12.2,13.2L12.2,13.2z"/>
                        </svg>

                    </div>
                </div>
                <div class="col-md mb-4 mb-md-0">
                    <div class="mw-100p mx-auto">
                        <!-- Image -->
                        <svg viewBox="0 0 100 34" xmlns="http://www.w3.org/2000/svg">
                        <g>
                        	<g>
                        		<path fill="#E43D91" d="M15.2,27c-1,0-1.8-0.9-1.6-2l2.8-16.6C16.6,7.6,17.3,7,18.1,7c1,0,1.8,0.9,1.6,2l-2.8,16.6
                        			C16.7,26.4,16,27,15.2,27L15.2,27z"/>
                        		<path fill="#E43D91" d="M15.2,25l2.8-16.6c0.1-0.5,0.4-0.9,0.8-1.2C18.7,7.1,18.4,7,18.1,7c-0.8,0-1.5,0.6-1.6,1.4L13.6,25
                        			c-0.2,1,0.6,2,1.6,2c0.3,0,0.6-0.1,0.8-0.2C15.5,26.4,15.1,25.8,15.2,25z"/>
                        	</g>
                        	<g>
                        		<path fill="#009ADD" d="M22.9,27c-1,0-1.8-0.9-1.6-2l2.8-16.6C24.3,7.6,25,7,25.8,7c1,0,1.8,0.9,1.6,2l-2.8,16.6
                        			C24.4,26.4,23.7,27,22.9,27L22.9,27z"/>
                        		<path fill="#009ADD" d="M22.9,25l2.8-16.6c0.1-0.5,0.4-0.9,0.8-1.2C26.3,7.1,26.1,7,25.8,7c-0.8,0-1.5,0.6-1.6,1.4L21.3,25
                        			c-0.2,1,0.6,2,1.6,2c0.3,0,0.6-0.1,0.8-0.2C23.1,26.5,22.8,25.8,22.9,25L22.9,25z"/>
                        	</g>
                        	<g>
                        		<path fill="#FEDE3A" d="M11.4,12.8c0.1-0.8,0.8-1.4,1.7-1.4h16.3c1,0,1.8,1,1.7,2c-0.1,0.8-0.8,1.4-1.7,1.4H13
                        			C12,14.8,11.2,13.8,11.4,12.8L11.4,12.8z"/>
                        		<path fill="#FEDE3A" d="M29.3,13.1H13c-0.6,0-1.2-0.3-1.5-0.9c-0.1,0.2-0.2,0.4-0.2,0.6c-0.2,1,0.6,2,1.7,2h16.3
                        			c0.8,0,1.5-0.6,1.7-1.4c0.1-0.4,0-0.8-0.2-1.1C30.5,12.8,29.9,13.1,29.3,13.1L29.3,13.1z"/>
                        	</g>
                        	<g>
                        		<path fill="#A2F2B3" d="M11,20.6c0.1-0.8,0.8-1.4,1.7-1.4H29c1,0,1.8,1,1.7,2c-0.1,0.8-0.8,1.4-1.7,1.4H12.7
                        			C11.6,22.6,10.8,21.7,11,20.6z"/>
                        		<path fill="#A2F2B3" d="M29,20.9H12.7c-0.6,0-1.2-0.3-1.5-0.9c-0.1,0.2-0.2,0.4-0.2,0.6c-0.2,1,0.6,2,1.7,2H29c0.8,0,1.5-0.6,1.7-1.4
                        			c0.1-0.4,0-0.8-0.2-1.1C30.1,20.6,29.6,20.9,29,20.9L29,20.9z"/>
                        	</g>
                        </g>
                        <path stroke="#000000" stroke-miterlimit="10" d="M35.5,24.8c-0.3-0.2-0.5-0.5-0.5-0.9c0-0.3,0.1-0.5,0.3-0.8c0.2-0.2,0.5-0.3,0.8-0.3c0.2,0,0.3,0,0.5,0.1
                        	c0.6,0.3,1.2,0.4,1.7,0.6c0.6,0.1,1.2,0.2,2,0.2c2,0,3-0.6,3-1.9c0-0.4-0.2-0.7-0.7-0.9c-0.5-0.2-1.2-0.5-2.3-0.7
                        	c-1.1-0.3-2-0.5-2.7-0.8c-0.7-0.3-1.3-0.7-1.8-1.2c-0.5-0.5-0.7-1.3-0.7-2.2c0-1.3,0.5-2.3,1.4-3.1c0.9-0.8,2.2-1.2,3.9-1.2
                        	c1.4,0,2.7,0.2,4,0.7c0.3,0.1,0.5,0.2,0.6,0.4c0.1,0.2,0.2,0.4,0.2,0.6c0,0.3-0.1,0.5-0.3,0.8c-0.2,0.2-0.5,0.3-0.8,0.3
                        	c-0.1,0-0.2,0-0.4-0.1c-1.1-0.3-2.1-0.5-3.1-0.5c-1,0-1.8,0.2-2.3,0.5c-0.6,0.3-0.8,0.8-0.8,1.4c0,0.5,0.3,0.9,0.8,1.2
                        	c0.5,0.3,1.3,0.5,2.4,0.7c1.1,0.3,1.9,0.5,2.6,0.8c0.7,0.3,1.3,0.7,1.7,1.2c0.5,0.6,0.7,1.3,0.7,2.2c0,1.1-0.5,2.1-1.4,2.8
                        	c-0.9,0.8-2.2,1.1-3.9,1.1C38.6,26,37,25.6,35.5,24.8z M47.7,25.5c-0.2-0.2-0.4-0.5-0.4-0.9V7.2c0-0.3,0.1-0.6,0.4-0.9
                        	C48,6.1,48.3,6,48.6,6c0.4,0,0.7,0.1,0.9,0.3c0.2,0.2,0.4,0.5,0.4,0.9v17.4c0,0.3-0.1,0.6-0.4,0.9c-0.2,0.2-0.5,0.3-0.9,0.3
                        	C48.3,25.9,48,25.7,47.7,25.5z M53.9,25.5c-0.7-0.3-1.2-0.8-1.6-1.4c-0.4-0.6-0.6-1.3-0.6-2.1c0-1.3,0.5-2.4,1.6-3.2
                        	c1.1-0.8,2.6-1.2,4.7-1.2h3.3v-0.2c0-1.2-0.3-2-0.9-2.6c-0.6-0.5-1.5-0.8-2.8-0.8c-0.7,0-1.3,0.1-1.8,0.2c-0.5,0.1-1.1,0.3-1.8,0.5
                        	c-0.1,0-0.3,0.1-0.4,0.1c-0.3,0-0.5-0.1-0.7-0.3c-0.2-0.2-0.3-0.4-0.3-0.7c0-0.5,0.2-0.8,0.7-1c1.5-0.6,3.1-1,4.7-1
                        	c1.3,0,2.3,0.3,3.2,0.8c0.9,0.5,1.5,1.2,1.9,1.9c0.4,0.8,0.6,1.7,0.6,2.6v7.6c0,0.3-0.1,0.6-0.4,0.9c-0.2,0.2-0.5,0.3-0.9,0.3
                        	c-0.3,0-0.6-0.1-0.9-0.3c-0.2-0.2-0.4-0.5-0.4-0.9V24c-1.3,1.4-3.1,2-5.1,2C55.3,26,54.5,25.8,53.9,25.5z M59.3,23.3
                        	c0.7-0.4,1.4-0.9,1.9-1.4v-2.3h-3c-2.7,0-4.1,0.7-4.1,2.1c0,0.6,0.2,1.2,0.7,1.6c0.4,0.4,1.2,0.6,2.2,0.6
                        	C57.8,23.9,58.6,23.7,59.3,23.3z M68.7,25.1c-1.1-0.6-1.9-1.4-2.4-2.5c-0.6-1.1-0.9-2.3-0.9-3.7c0-1.4,0.3-2.6,0.9-3.7
                        	c0.6-1.1,1.4-1.9,2.4-2.5c1.1-0.6,2.3-0.9,3.7-0.9c1.4,0,2.6,0.3,3.7,0.9c1.1,0.6,1.9,1.4,2.5,2.5c0.6,1.1,0.9,2.3,0.9,3.7
                        	c0,1.4-0.3,2.6-0.9,3.7c-0.6,1.1-1.4,1.9-2.5,2.5S73.8,26,72.4,26C71,26,69.7,25.7,68.7,25.1z M74.5,23.3c0.7-0.3,1.2-0.9,1.7-1.6
                        	c0.4-0.7,0.7-1.7,0.7-2.8c0-1.1-0.2-2-0.7-2.8c-0.4-0.7-1-1.3-1.7-1.6c-0.7-0.3-1.4-0.5-2.1-0.5c-0.8,0-1.5,0.2-2.2,0.5
                        	c-0.7,0.3-1.2,0.9-1.7,1.6c-0.4,0.7-0.7,1.7-0.7,2.8c0,1.1,0.2,2.1,0.7,2.8c0.4,0.7,1,1.3,1.7,1.6c0.7,0.3,1.4,0.5,2.2,0.5
                        	C73.1,23.8,73.8,23.6,74.5,23.3z M81.5,25.5c-0.2-0.2-0.4-0.5-0.4-0.9V7.2c0-0.3,0.1-0.6,0.4-0.9C81.8,6.1,82.1,6,82.4,6
                        	s0.6,0.1,0.9,0.4c0.2,0.2,0.4,0.5,0.4,0.9v11l6.5-5.9c0.3-0.2,0.5-0.3,0.8-0.3c0.4,0,0.7,0.1,0.9,0.3c0.2,0.2,0.3,0.5,0.3,0.8
                        	c0,0.3-0.2,0.6-0.5,0.9l-3.9,3.5l4.9,6.4c0.2,0.2,0.3,0.5,0.3,0.7c0,0.4-0.1,0.6-0.4,0.9c-0.2,0.2-0.5,0.3-0.9,0.3
                        	c-0.2,0-0.4,0-0.5-0.1c-0.2-0.1-0.3-0.2-0.5-0.4L86,19.1l-2.4,2.1v3.5c0,0.3-0.1,0.6-0.4,0.9c-0.2,0.2-0.5,0.3-0.9,0.3
                        	S81.8,25.7,81.5,25.5z"/>
                        </svg>

                    </div>
                </div>
                <div class="col-md mb-4 mb-md-0">
                    <div class="mw-100p mx-auto">
                        <!-- Image -->
                        <svg viewBox="0 0 100 34" xmlns="http://www.w3.org/2000/svg">
                        	<path fill="#0096DA" d="M20.2,7h-6.6v7H9.6v3.6h3.9v7.7h4.7v-7.7h0.6h1.3c3.7,0,5.8-2,5.8-5.5C26,8.9,23.9,7,20.2,7z M20,14h-1.1 h-0.6v-3.4H20c1,0,1.6,0.6,1.6,1.7C21.6,13.4,21,14,20,14z"/>
                        	<polygon fill="#002B86" points="13.6,14 13.6,7 11.9,8.7 11.9,14"/>
                        	<path fill="#002B86" d="M20,14c1,0,1.6-0.6,1.6-1.7c0-1.1-0.6-1.7-1.6-1.7h-1.7v1.7h0.1C19.3,12.3,19.9,12.9,20,14C19.9,14,19.9,14,20,14L20,14z"/>
                        	<path fill="#002B86" d="M20.2,17.6h-1.3h-0.6v1.7h0.3c2,0,3.6-0.7,4.7-1.7c0.5-0.5,1.1-1.1,1.6-1.8C23.9,17,22.3,17.6,20.2,17.6z"/>
                        	<polygon fill="#002B86" points="13.6,17.6 9.6,17.6 9.6,14 8,15.7 8,19.3 11.9,19.3 11.9,27 16.6,27 18.3,25.3 13.6,25.3"/>
                        	<path fill="#002B86" stroke="#002B86" stroke-miterlimit="#002B86" d="M32,7h3.3c1.5,0,2.6,0.2,3.3,0.7c0.6,0.4,1.1,0.9,1.5,1.6c0.4,0.7,0.5,1.5,0.5,2.3c0,1.2-0.3,2.2-1,3.1 c-1,1.3-2.5,2-4.7,2h-1.8l-0.8,6.6H30L32,7z M34.2,9.2l-0.7,5.3h1.6c1,0,1.8-0.3,2.3-0.8c0.5-0.5,0.8-1.2,0.8-2.2 c0-1.6-1-2.3-3-2.3H34.2z"/>
                        	<path fill="#002B86" stroke="#002B86" stroke-miterlimit="#002B86" d="M51.4,13.4l-1.2,9.9h-2.4l0.1-1.1c-1,0.9-2.1,1.3-3.1,1.3c-1.3,0-2.4-0.4-3.3-1.3c-0.8-0.9-1.3-2.1-1.3-3.5 c0-1.6,0.5-3,1.4-4c1-1,2.2-1.6,3.8-1.6c0.7,0,1.3,0.1,1.8,0.3c0.5,0.2,1,0.6,1.6,1.2l0.2-1.3H51.4z M48.5,18 c0-0.9-0.3-1.6-0.8-2.1c-0.5-0.6-1.2-0.8-2-0.8c-0.9,0-1.6,0.3-2.2,1c-0.6,0.7-0.9,1.5-0.9,2.5c0,0.9,0.2,1.6,0.7,2.1 c0.5,0.6,1.1,0.8,1.9,0.8c0.9,0,1.6-0.3,2.3-1C48.2,19.9,48.5,19,48.5,18z"/>
                        	<path fill="#002B86" stroke="#002B86" stroke-miterlimit="#002B86" d="M63.5,13.4L54.4,29h-2.7l4.1-6.9l-3.6-8.7h2.5l2.5,6.4l3.6-6.4H63.5z"/>
                        	<path fill="#0096DA" stroke="#0096DA" stroke-miterlimit="#0096DA" d="M67.4,7h3.3c1.5,0,2.6,0.2,3.3,0.7c0.6,0.4,1.1,0.9,1.5,1.6c0.4,0.7,0.5,1.5,0.5,2.3c0,1.2-0.3,2.2-1,3.1 c-1,1.3-2.5,2-4.7,2h-1.8l-0.8,6.6h-2.4L67.4,7z M69.5,9.2l-0.7,5.3h1.6c1,0,1.8-0.3,2.3-0.8c0.5-0.5,0.8-1.2,0.8-2.2 c0-1.6-1-2.3-3-2.3H69.5z"/>
                        	<path fill="#0096DA" stroke="#0096DA" stroke-miterlimit="#0096DA" d="M86.7,13.4l-1.2,9.9h-2.4l0.1-1.1c-1,0.9-2.1,1.3-3.1,1.3c-1.3,0-2.4-0.4-3.3-1.3c-0.8-0.9-1.3-2.1-1.3-3.5 c0-1.6,0.5-3,1.4-4c1-1,2.2-1.6,3.8-1.6c0.7,0,1.3,0.1,1.8,0.3c0.5,0.2,1,0.6,1.6,1.2l0.2-1.3H86.7z M83.8,18 c0-0.9-0.3-1.6-0.8-2.1c-0.5-0.6-1.2-0.8-2-0.8c-0.9,0-1.6,0.3-2.2,1c-0.6,0.7-0.9,1.5-0.9,2.5c0,0.9,0.2,1.6,0.7,2.1 c0.5,0.6,1.1,0.8,1.9,0.8c0.9,0,1.6-0.3,2.3-1C83.5,19.9,83.8,19,83.8,18z"/>
                        	<path fill="#0096DA" stroke="#0096DA" stroke-miterlimit="#0096DA" d="M91.3,13.4L90,23.3h-2.4l1.2-9.9H91.3z M92,8.6c0,0.3-0.1,0.6-0.4,0.9c-0.2,0.2-0.5,0.4-0.9,0.4 c-0.3,0-0.7-0.1-0.9-0.4c-0.2-0.3-0.4-0.6-0.4-0.9c0-0.3,0.1-0.6,0.4-0.9c0.2-0.2,0.5-0.4,0.9-0.4c0.3,0,0.7,0.1,0.9,0.4 C91.9,8,92,8.3,92,8.6z"/>
                        </svg>

                    </div>
                </div>
                <div class="col-md mb-4 mb-md-0">
                    <div class="mw-100p mx-auto">
                        <!-- Image -->
                        <svg viewBox="0 0 100 34" xmlns="http://www.w3.org/2000/svg">
                        <path fill="#1DD05D" d="M29.3,17c0,6.6-5.4,12-12.1,12C10.4,29,5,23.6,5,17c0-6.6,5.4-12,12.1-12C23.8,5,29.3,10.4,29.3,17z M17.1,11.5
                        	c-3.2,0-6.1,1.5-7.9,3.9l1.1,1.1c1.5-2.1,4-3.4,6.8-3.4c2.8,0,5.3,1.4,6.8,3.4l1.1-1.1C23.2,13,20.4,11.5,17.1,11.5z M17.1,14.1
                        	c-2.6,0-4.9,1.3-6.3,3.2l1.1,1.1c1.1-1.7,3-2.8,5.2-2.8c2.2,0,4.1,1.1,5.2,2.8l1.1-1.1C22,15.4,19.7,14.1,17.1,14.1z M17.1,16.8
                        	c-1.8,0-3.4,1-4.3,2.5l1.1,1.1c0.5-1.2,1.7-2.1,3.1-2.1c1.4,0,2.6,0.9,3.1,2.1l1.1-1.1C20.6,17.8,19,16.8,17.1,16.8z M17.1,22.8
                        	l1.9-1.9c-0.5-0.5-1.2-0.8-1.9-0.8c-0.8,0-1.4,0.3-1.9,0.8L17.1,22.8z M39.1,24.2c2.9,0,4.9-1.5,4.9-4v0c0-2.2-1.5-3.2-4.4-3.9
                        	c-2.6-0.6-3.2-1.1-3.2-2.1v0c0-0.9,0.8-1.6,2.2-1.6c1.1,0,2.1,0.3,3.1,1c0.2,0.1,0.4,0.2,0.6,0.2c0.6,0,1.1-0.5,1.1-1.1
                        	c0-0.5-0.3-0.8-0.5-0.9c-1.2-0.8-2.6-1.2-4.3-1.2c-2.7,0-4.6,1.6-4.6,3.9v0c0,2.5,1.6,3.3,4.5,4c2.5,0.6,3.1,1.1,3.1,2.1v0
                        	c0,1-0.9,1.7-2.4,1.7c-1.5,0-2.7-0.5-3.8-1.4c-0.2-0.1-0.4-0.2-0.7-0.2c-0.6,0-1.1,0.5-1.1,1.1c0,0.4,0.2,0.7,0.5,0.9
                        	C35.5,23.7,37.2,24.2,39.1,24.2z M45.5,26.1c0,0.7,0.5,1.2,1.2,1.2c0.7,0,1.2-0.5,1.2-1.2v-3.6c0.7,0.9,1.8,1.8,3.5,1.8
                        	c2.4,0,4.8-1.9,4.8-5.3v0c0-3.4-2.4-5.3-4.8-5.3c-1.7,0-2.7,0.8-3.5,1.9V15c0-0.7-0.5-1.2-1.2-1.2c-0.7,0-1.2,0.5-1.2,1.2V26.1z
                        	 M50.8,22.2c-1.6,0-3-1.3-3-3.2v0c0-1.9,1.4-3.2,3-3.2s2.9,1.3,2.9,3.2v0C53.7,21,52.4,22.2,50.8,22.2z M60.5,24.3
                        	c1.6,0,2.6-0.7,3.3-1.5v0.4c0,0.5,0.5,1,1.1,1c0.6,0,1.1-0.5,1.1-1.1v-5c0-1.3-0.3-2.4-1.1-3.1c-0.7-0.7-1.9-1.1-3.4-1.1
                        	c-1.3,0-2.3,0.2-3.3,0.6c-0.3,0.1-0.6,0.5-0.6,0.9c0,0.5,0.4,1,1,1c0.1,0,0.2,0,0.4-0.1c0.6-0.2,1.4-0.4,2.3-0.4
                        	c1.7,0,2.5,0.8,2.5,2.2v0.2c-0.8-0.2-1.6-0.4-2.8-0.4c-2.5,0-4.2,1.1-4.2,3.3v0C56.9,23.2,58.6,24.3,60.5,24.3z M61.2,22.6
                        	c-1.1,0-2-0.6-2-1.5v0c0-1.1,0.9-1.7,2.4-1.7c0.9,0,1.7,0.2,2.3,0.4v0.7C63.9,21.7,62.7,22.6,61.2,22.6z M71.3,24.2
                        	c0.6,0,1.1-0.1,1.6-0.3c0.3-0.1,0.6-0.5,0.6-0.9c0-0.5-0.5-1-1-1c-0.1,0-0.3,0.1-0.6,0.1c-0.8,0-1.3-0.4-1.3-1.3v-5h1.8
                        	c0.6,0,1-0.4,1-1c0-0.6-0.5-1-1-1h-1.8v-1.7c0-0.6-0.5-1.2-1.2-1.2c-0.7,0-1.2,0.5-1.2,1.2v1.7H68c-0.6,0-1,0.4-1,1c0,0.6,0.4,1,1,1
                        	h0.4v5.3C68.4,23.5,69.6,24.2,71.3,24.2z M74.9,11.3c0,0.7,0.6,1.2,1.3,1.2c0.8,0,1.3-0.5,1.3-1.2v-0.1c0-0.7-0.6-1.1-1.3-1.1
                        	c-0.8,0-1.3,0.4-1.3,1.1V11.3z M75,23c0,0.7,0.5,1.2,1.2,1.2c0.7,0,1.2-0.5,1.2-1.2v-8c0-0.7-0.5-1.2-1.2-1.2S75,14.3,75,15V23z
                        	 M80,23c0,0.6,0.5,1.2,1.2,1.2c0.7,0,1.2-0.5,1.2-1.2v-7.1h1.8c0.5,0,1-0.4,1-1s-0.4-1-1-1h-1.8v-0.6c0-1.1,0.5-1.5,1.4-1.5
                        	c0.2,0,0.3,0,0.5,0c0.5,0,1-0.4,1-1c0-0.5-0.4-0.9-0.8-1C84,10,83.6,9.9,83.2,9.9c-1,0-1.8,0.3-2.3,0.8c-0.5,0.5-0.8,1.4-0.8,2.5V14
                        	h-0.4c-0.5,0-1,0.4-1,1s0.4,1,1,1H80V23z M87.7,27.2c1.7,0,2.6-0.8,3.5-2.8l3.8-8.9c0-0.1,0.1-0.4,0.1-0.6c0-0.6-0.5-1.1-1.1-1.1
                        	c-0.6,0-0.9,0.4-1.1,0.9l-2.6,6.7l-2.8-6.7c-0.2-0.5-0.5-0.9-1.1-0.9c-0.7,0-1.2,0.5-1.2,1.1c0,0.2,0.1,0.4,0.1,0.6l3.8,8.4L89,24.1
                        	c-0.4,0.8-0.8,1.1-1.5,1.1c-0.3,0-0.5-0.1-0.8-0.1c-0.1,0-0.2-0.1-0.4-0.1c-0.5,0-1,0.4-1,1c0,0.6,0.4,0.8,0.7,1
                        	C86.5,27.1,87,27.2,87.7,27.2z"/>
                        </svg>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CALL ACTION
    ================================================== -->
    <section class="py-6 py-md-11 border-top" data-jarallax data-speed=".8" style="background-image: url(assets/img/illustrations/illustration-1.jpg)">
        <div class="container text-center py-xl-4">
            <div class="row">
                <div class="col-xl-7 mx-auto">
                    <h1 class="text-capitalize">Subscribe our newsletter</h1>
                    <p class="text-capitalize font-size-lg mb-md-6 mb-4">Your download should start automatically, if not Click here. Should I give up, huh?.</p>
                    <div class="mx-md-8">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Enter your email" aria-label="Enter your email" aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary btn-sm-wide" type="button" id="button-addon2">Subscribe</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER
    ================================================== -->
   <?php
    include 'components/footer.php';
    ?>