
<header id="header_show">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-4 img-res">
                  <a href="../index.php">
                  <img src="../assets/images/cropped-logo.png"  id="header_show_image" class="img-fluid" alt="">
                  </a>
                  </div>
                <div class="col-md-8">
                </div>
            </div>
            <div class="row d-flex justify-content-center justify-content-sm-center">
                <div class="col-md-2 d-sm-block d-md-block d-lg-none "></div>
                <div class="col-md-7 ">
                    <div class="text-success font-italic text-center font-weight-bolder text-uppercase lh-2">
                        surely Allah will not change the condition<br /> of a people until they change
                        their own condition.
                    </div>
                    <p class="mb-0 text-center">Quran 13:11</p>
                </div>
            <div class="col-sm-6">
                <?php include"../pages/five_principals_small.php" ?>
            </div>
                
                <div class="col-md-3 d-sm-block d-md-block d-lg-none toggler_adjustment p-0 w-auto">
                    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg">
                        <div id="navbarNav" class="collapse navbar-collapse align-self-start ">
                            <ul id="menu-menu" class="navbar-nav mx-auto my-2 mt-4 p-1 text-center font-weight-bolder">
                                <li class="nav-item  ">
                                    <a class="nav-link " id="home" title="Home" href="../index.php">Home</a>
                                </li>
                        <li id="menu-item-46" class=""><a href="../pages/how_it_works.php" 
                        id="how-it-works"
                        class="nav-link activePage text-white" title="How It Works">How It Works</a>
                        </li>
                                <li class="nav-item">
                                    <a class=" nav-link" title="Join us"
                        id="join-us"
                                    href="../my_account/join-us.php">Join us</a>
                                </li>
                                <li class="nav-item">
                                    <a class=" nav-link" title="Contact Us" 
                        id="contact-us"
                                    href="../my_account/contact-us.php">Contact Us</a>
                                </li>
                                <li class="nav-item">
                                <?php                                  
                                    if(isset($_SESSION['fullname'])){
                                ?>
                                    <a class=" nav-link" title="Dashboard"
                        id="dashboard"
                                    href="../dashboard/index.php">Dashboard</a>
                                <?php } else {?>    
                                    <a class=" nav-link" title="Login" 
                        id="login"
                                    href="../my_account/login.php">Login</a>
                                    <?php } ?>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
    </div>
</header>
    <header id="Header" class="text-center custom-html-widget">
        <nav class="navbar navbar-light navbar-expand-md">
            <div class="container-fluid">
                <a href="" class="img-fluid-link" rel="home" aria-current="page">
                    <img src="../assets/images/cropped-logo.png" id="main-banner-image" class="img-fluid" alt="Wjcw" /></a>
                <div class="d-flex flex-row order-1 order-lg-2 align-self-start">
                    <div class="text-xl-right fs-15 mt-xl-4 mt-2">
                        <div class="custom-html-widget">
                            <div class="text-success font-italic font-semi-bold text-uppercase lh-2">
                                surely Allah will not change the condition<br /> of a people until they change
                                their own condition. </div>
                            <p class="mb-0 ">Quran 13:11</p>
                        </div>
                    </div>
                </div>

                <div class="collapse navbar-collapse align-self-start ">
                   <ul id="menu-menu-1" class="navbar-nav mx-auto my-2 mt-4">
                        <li class="">
                            <a id="a_one" class="nav-link text-black" title="Home" href="../index.php">Home</a>
                        </li>
                        <li id="menu-item-46" class="">
                            <a id="a_two" href="../pages/how_it_works.php" class="nav-link activePage text-white" title="How It Works">How It Works</a>
                        </li>
                        <li>
                            <a  id="a_three" class="nav-link" title="Join us" href="../my_account/join-us.php">Join us</a>
                        </li>
                        <li>
                            <a  id="a_four" class="nav-link" title="Contact Us" href="../my_account/contact-us.php">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <?php                                  
                                if(isset($_SESSION['fullname'])){
                            ?>
                                <a class=" nav-link" title="Dashboard" href="../dashboard/index.php">Dashboard</a>
                            <?php } else {?>    
                                <a id="a_five" class="nav-link" title="Login" href="../my_account/login.php">Login</a>
                            <?php } ?>
                        </li>
                        
                    </ul>
            </div>
            </div>
            <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-9" id="five_principals_role">
                <?php include"../pages/five_principals.php" ?>
            </div>
            </div>
            
        </nav>

        </header>