<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: Nazmus Sakib-->
<!-- * Date: 12/26/2018-->
<!-- * Time: 12:21 PM-->
<!--*/  -->

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Web Site Design Using Bootstrap</title>
    <!--css added in html-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fontawesome-free-5.6.3-web/css/all.css">
    <link rel="stylesheet" href="vendor/animation-css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

</head>

<body>

    <!--Navigation Section-->

    <div class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <div class="container">

            <a class="navbar-brand" href="#">Website</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Team Member</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Our Client</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                </ul>
            </div>
        </div>

    </div>

    <!-- header -->

    <div class="header" id="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 animated wow slideInLeft">
                    <h1>Buy Your Items</h1>
                    <p>Online shopping is a form of electronic commerce which allows consumers to directly buy goods or
                        services from a seller over the Internet using a web browser. Consumers find a product of interest
                        by visiting the website of the retailer directly or by searching among alternative vendors using a
                        shopping search engine, which displays the same product's availability and pricing at different
                        e-retailers. As of 2016, customers can shop online using a range of different computers and
                        devices, including desktop computers, laptops, tablet computers and smartphones.
                    </p>
                    <div id="buttons">
                        <button class="btn btn-primary">Buy Now</button>
                        <button class="btn btn-success">Order Now</button>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 animated wow slideInRight">
                    <img src="images/side-image-1.png" alt="side Image">
                </div>

            </div>
        </div>
    </div>

    <!-- end header -->

    <!-- start services -->

    <div class="services" id="services">
        <div class="container">
            <h2 class="wow fadeInDown">Our Services</h2>
            <h6 class="wow fadeInUp" data-wow-delay="0.4s">In economics, a service is a transaction in which no physical
                goods are transferred from the seller to the buyer</h6>
            <div class="row">
                <div class="col-lg-3 animated wow fadeInLeftBig" data-wow-delay="1.8s">
                    <i class="fas fa-desktop"></i>
                    <h4>Web Design</h4>
                    <p>A database is an organized collection of data, generally stored and accessed
                        electronically from a computer system.</p>
                </div>
                <div class="col-lg-3 animated wow fadeInLeftBig" data-wow-delay="1.4s">
                    <i class="fas fa-server"></i>
                    <h4>Server Design</h4>
                    <p>A database is an organized collection of data, generally stored and accessed
                        electronically from a computer system.</p>
                </div>
                <div class="col-lg-3 animated wow fadeInLeftBig" data-wow-delay="0.8s">
                    <i class="fas fa-database"></i>
                    <h4>Database Design</h4>
                    <p>A database is an organized collection of data, generally stored and accessed
                        electronically from a computer system.</p>
                </div>
                <div class="col-lg-3 animated wow fadeInLeftBig" data-wow-delay="0.4s">
                    <i class="fab fa-adversal"></i>
                    <h4>Degital Marketing</h4>
                    <p>A database is an organized collection of data, generally stored and accessed
                        electronically from a computer system.</p>
                </div>

            </div>
        </div>
    </div>

    <div class="pricing bg-dark" id="pricing">
        <div class="container">

            <h2 class="head1 wow fadeInDown">Pricing</h2>
            <p class="head2" class="wow fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                labore et dolore magna aliqua.</p>
            <div class="row">
                <div class="col-lg-4 col-sm-12 wow flipInY" data-wow-delay="1.2s">
                    <div class="packages">
                        <h2>Basic</h2>
                        <h4>Free</h4>
                        <hr>
                        <li>10 users</li>
                        <li>1 Server</li>
                        <li>Online Support</li>
                        <li>Email Hosting</li>
                        <li>1GB Free Space</li>
                        <button class="btn btn-primary">Get Started</button>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12  wow flipInY" data-wow-delay="0.8s">
                    <div class="packages">
                        <h2>Intermediate</h2>
                        <h4>10$ per month</h4>
                        <hr>
                        <li>100 users</li>
                        <li>10 Server</li>
                        <li>Online Support</li>
                        <li>Email Hosting</li>
                        <li>10GB Free Space</li>
                        <button class="btn btn-primary">Get Started</button>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12  wow flipInY" data-wow-delay="0.4s">
                    <div class="packages">
                        <h2>Pro Version</h2>
                        <h4>100$ per month</h4>
                        <hr>
                        <li>1000 users</li>
                        <li>Unlimited Server Used</li>
                        <li>Online Support</li>
                        <li>Email Hosting</li>
                        <li>Unlimited Space</li>
                        <button class="btn btn-primary">Get Started</button>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- our team -->

    <div class="team" id="team">
        <div class="container">
            <h2 id="team-h1" class="wow fadeInDown">Our Team</h2>
            <p id="team-h2" class="wow fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <div class="row">
                <div class="col-lg-3 col-md-3 wow fadeInDown" id="teams" data-wow-delay="1.5s">
                    <img id="team-image" class="rounded-circle" src="images/team/muaz.jpg">
                    <h2>Md. Muaz</h2>
                    <h4>CEO & Founder</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua.</p>

                    <i class="fab fa-facebook-square"></i>
                    <i class="fab fa-twitter-square"></i>
                    <i class="fab fa-linkedin"></i>
                    <i class="fab fa-pinterest"></i>

                </div>

                <div class="col-lg-3 col-md-3 wow fadeInDown" id="teams" data-wow-delay="1.20s">
                    <img id="team-image" class="rounded-circle" src="images/team/vk.jpg">
                    <h2>Md. Tanvir</h2>
                    <h4>CEO & Founder</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua.</p>
                    <i class="fab fa-facebook-square"></i>
                    <i class="fab fa-twitter-square"></i>
                    <i class="fab fa-linkedin"></i>
                    <i class="fab fa-pinterest"></i>
                </div>
                <div class="col-lg-3 col-md-3 wow fadeInDown" id="teams" data-wow-delay="0.8s">
                    <img id="team-image" class="rounded-circle" src="images/team/pappu.jpg">
                    <h2>Pappu</h2>
                    <h4>CEO & Founder</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua.</p>

                    <i class="fab fa-facebook-square"></i>
                    <i class="fab fa-twitter-square"></i>
                    <i class="fab fa-linkedin"></i>
                    <i class="fab fa-pinterest"></i>

                </div>
                <div class="col-lg-3 col-md-3 wow fadeInDown" id="teams" data-wow-delay="0.4s">
                    <img id="team-image" class="rounded-circle" src="images/team/i.jpg">
                    <h2>Shakib</h2>
                    <h4>CEO & Founder</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua.</p>

                    <i class="fab fa-facebook-square"></i>
                    <i class="fab fa-twitter-square"></i>
                    <i class="fab fa-linkedin"></i>
                    <i class="fab fa-pinterest"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Client -->

    <div class="client bg-dark" id="client">
        <div class="container">
            <h2 class="wow fadeInDown">Trusted By</h2>
            <p class="wow fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 wow fadeInUp" data-wow-delay="0.4s">
                    <li><img src="images/clients/client1.png" alt="client1"></li>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 wow fadeInUp" data-wow-delay="0.8s">
                    <li><img src="images/clients/client2.png" alt="client2"></li>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 wow fadeInUp" data-wow-delay="1.2s">
                    <li><img src="images/clients/client3.png" alt="client3"></li>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 wow fadeInUp" data-wow-delay="1.6s">
                    <li><img src="images/clients/client4.png" alt="client4"></li>
                </div>
            </div>
        </div>
    </div>

    <div class="contact" id="contact">
        <div class="container">
            <h2 class="wow fadeInDown">Contact</h2>
            <p class="wow fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12" id="contact1">
                    <form action="/action_page.php">
                        <div class="form-group input-group wow" data-wow-delay="0.4s">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-user"></i>
                                </span>
                            </div>
                            <input type="text" placeholder="Full Name" class="form-control" id="email">
                        </div>
                        <div class="form-group input-group wow fadeInDown" data-wow-delay="0.8s">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-envelope "></i>
                                </span>
                            </div>
                            <input type="email" placeholder="Email Address" class="form-control" id="email">
                        </div>
                        <div class="form-group input-group wow fadeInDown" data-wow-delay="1.2s">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-phone"></i>
                                </span>
                            </div>
                            <input type="tel" placeholder="Phone Number" class="form-control" id="pwd">
                        </div>
                        <div class="form-group wow fadeInDown" data-wow-delay="1.6s">
                            <textarea class="form-control" placeholder="Comment or Advice" rows="4" id="comment" name="text"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block wow fadeInDown" data-wow-delay="2.1s">Submit</button>
                    </form>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 wow slideInRight" id="contact2">
                    <div class="map-responsive">
                        <div class="map-responsive">
                            <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" style="border:0" allowfullscreen="" width="600" height="450" frameborder="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="footer bg-dark mt-10" id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <h2>Contact Us</h2>
                        <ul>
                            <li><i class="fa fa-home" aria-hidden="true"></i>Aftabnagor,East West University,Dhaka</li>
                            <li><i class="fa fa-envelope" aria-hidden="true"></i>website@info.com</li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i>+1211555644</li>
                            <li><i class="fa fa-globe" aria-hidden="true"></i>www.website.com</li>
                        </ul>

                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12" id="footer2">

                        <h2>About</h2>
                        <li><i class="fa fa-cicle-o" aria-hidden="true"></i>About Us</li>
                        <li><i class="fa fa-circle-o" aria-hidden="true"></i>Privacy</li>
                        <li><i class="fa fa-circle-o" aria-hidden="true"></i>Term & Condition</li>

                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <h2>Stay in touch</h2>
                        <i class="fab fa-facebook" aria-hidden="true"></i>
                        <i class="fab fa-twitter" aria-hidden="true"></i>
                        <i class="fab fa-linkedin" aria-hidden="true"></i>
                        <i class="fab fa-pinterest" aria-hidden="true"></i>
                        <i class="fab fa-youtube" aria-hidden="true"></i>
                        <i class="fab fa-github" aria-hidden="true"></i><br>
                        <input type="email" placeholder="Subscribe For Updates">
                        <button class="btn btn-primary">Subscribe</button>



                    </div>

                </div>

            </div>

            <p>Copyright &copy;2019 by Website</p>

        </div>










        <!--js added in html -->
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="vendor/wow-js/wow.min.js"></script>
        <script>
            new WOW().init();

        </script>

        </script>
        <!-- jQuery library -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>


</html>
