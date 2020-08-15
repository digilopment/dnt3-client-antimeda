<!doctype html>
<html lang="en">
    <head>
        <!-- Basic Page Needs==================================================-->
        <title>Job Stock - Responsive Job Portal Bootstrap Template | ThemezHub</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- CSS==================================================-->
        <link rel="stylesheet" href="<?php echo $data['media_path']; ?>css/plugins.css">
        <link href="<?php echo $data['media_path']; ?>css/style.css" rel="stylesheet">
        <link type="text/css" rel="stylesheet" id="jssDefault" href="<?php echo $data['media_path']; ?>css/green-style.css">
    </head>
    <body>
        <div class="Loader"></div>
        <div class="wrapper">
            <nav class="navbar navbar-default navbar-fixed navbar-light white bootsnav">
                <div class="container">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"><i class="fa fa-bars"></i></button>
                    <div class="navbar-header">
                        <a class="navbar-brand" href="index.html"><img src="https://codeminifier.com/job-stock-5.3/job-stock/assets/img/logo.png" class="logo logo-scrolled" alt=""></a>
                    </div>
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-left" data-in="fadeInDown" data-out="fadeOutUp">
                            <li class="active">
                                <input type="text" class="form-control" placeholder="Find Freelancer">
                            </li>
                            <li class="dropdown">
                                <a href="login.html" class="dropdown-toggle" data-toggle="dropdown">Home</a>
                                <ul class="dropdown-menu animated fadeOutUp">
                                    <li><a href="index.html">Home Page 1</a></li>
                                    <li><a href="index-2.html">Home Page 2</a></li>
                                    <li><a href="index-3.html">Home Page 3</a></li>
                                    <li><a href="index-4.html">Home Page 4</a></li>
                                    <li><a href="index-5.html">Home Page 5</a></li>
                                    <li><a href="index-6.html">Home Page 6</a></li>
                                    <li><a href="freelancing.html">Freelancing</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="login.html" class="dropdown-toggle" data-toggle="dropdown">Jobs</a>
                                <ul class="dropdown-menu animated fadeOutUp">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Job Listing</a>
                                        <ul class="dropdown-menu animated fadeOutUp">
                                            <li><a href="browse-jobs.html">Browse Jobs</a></li>
                                            <li><a href="browse-jobs-list.html">Browse Jobs With Sidebar</a></li>
                                            <li><a href="browse-jobs-grid.html">Job In Grid</a></li>
                                            <li><a href="search-new.html">Search Job</a></li>
                                            <li><a href="popular-jobs.html">Popular Jobs</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Job Detail</a>
                                        <ul class="dropdown-menu animated fadeOutUp">
                                            <li><a href="job-detail-1.html">Job Detail 1</a></li>
                                            <li><a href="job-detail-2.html">Job Detail 2</a></li>
                                            <li><a href="job-detail-3.html">Job Detail 3</a></li>
                                            <li><a href="advance-search.html">Advance Search Job</a></li>
                                            <li><a href="advance-search-2.html">Advance Search Job 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="job-with-map.html">Job With Map</a></li>
                                    <li><a href="register.html">SignUp Page</a></li>
                                    <li><a href="dashboard/index.html">Dashboard</a></li>
                                </ul>
                            </li>
                            <li class="dropdown megamenu-fw">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Brows</a>
                                <ul class="dropdown-menu megamenu-content" role="menu">
                                    <li>
                                        <div class="row">
                                            <div class="col-menu col-md-3">
                                                <h6 class="title">Main Pages</h6>
                                                <div class="content">
                                                    <ul class="menu-col">
                                                        <li><a href="login.html">New Login</a></li>
                                                        <li><a href="signin-signup.html">Sign In / Sign Up</a></li>
                                                        <li><a href="search-job.html">Search Job</a></li>
                                                        <li><a href="accordion.html">Accordion</a></li>
                                                        <li><a href="tab.html">Tab Style</a></li>
                                                        <li><a href="blog.html">Blog</a></li>
                                                        <li><a href="pricing.html">Pricing</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- end col-3 -->
                                            <div class="col-menu col-md-3">
                                                <h6 class="title">For Candidate</h6>
                                                <div class="content">
                                                    <ul class="menu-col">
                                                        <li><a href="candidate-dashboard.html">Candidate Dashboard</a></li>
                                                        <li><a href="browse-candidate-list.html">Browse Candidates</a></li>
                                                        <li><a href="manage-candidate.html">Browse Candidate</a></li>
                                                        <li><a href="top-candidate.html">Top candidate</a></li>
                                                        <li><a href="candidate-profile.html">Candidate Detail</a></li>
                                                        <li><a href="candidate-detail.html">New Candidate Detail</a></li>
                                                        <li><a href="browse-resume-grid.html">Browse Candidate Grid</a></li>
                                                        <li><a href="browse-candidate-map.html">Browse Candidate With Map</a></li>
                                                        <li><a href="browse-resume.html">Browse Resume</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- end col-3 -->
                                            <div class="col-menu col-md-3">
                                                <h6 class="title">For Employer</h6>
                                                <div class="content">
                                                    <ul class="menu-col">
                                                        <li><a href="dashboard.html">Employer Dashboard</a></li>
                                                        <li><a href="browse-employer-list.html">Employer With Sidebar</a></li>
                                                        <li><a href="browse-company.html">Browse Companies</a></li>
                                                        <li><a href="company-detail.html">Company Detail</a></li>
                                                        <li><a href="create-job.html">Create Job</a></li>
                                                        <li><a href="create-company.html">Create Company</a></li>
                                                        <li><a href="manage-company.html">Manage Company</a></li>
                                                        <li><a href="manage-employee.html">Manage Employee</a></li>
                                                        <li><a href="employer-profile.html">Employer Profile</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-menu col-md-3">
                                                <h6 class="title">Extra Pages <span class="new-offer">New</span></h6>
                                                <div class="content">
                                                    <ul class="menu-col">
                                                        <li><a href="top-candidate-detail.html">Top Candidate detail</a></li>
                                                        <li><a href="payment-methode.html">Payment Methode</a></li>
                                                        <li><a href="new-login-signup.html">New LogIn / SignUp</a></li>
                                                        <li><a href="top-candidate-2.html">Top candidate 2</a></li>
                                                        <li><a href="premium-candidate.html">Premium Candidate</a></li>
                                                        <li><a href="premium-candidate-detail.html">Premium Candidate Detail</a></li>
                                                        <li><a href="contact.html">Get in Touch</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- end col-3 -->
                                        </div>
                                        <!-- end row -->
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                            <li><a href="login.html"><i class="fa fa-pencil" aria-hidden="true"></i>SignUp</a></li>
                            <li class="left-br"><a href="javascript:void(0)" data-toggle="modal" data-target="#signup" class="signin">Sign In Now</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="clearfix"></div>
            <div class="simple-banner" style="background-image:url(assets/img/simple-banner.jpg);">
                <div class="container">
                    <div class="simple-banner-caption">
                        <div class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1 banner-text">
                            <h3>We Are Available On</h3>
                            <h1>Job <span>Stock</span></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <section class="bottom-search-form">
                <div class="container">
                    <form class="bt-form">
                        <div class="col-md-4 col-sm-6">
                            <input type="text" class="form-control" placeholder="Skills, Designations, Keyword">
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <select id="choose-city" class="form-control">
                                <option>Choose City</option>
                                <option>Chandigarh</option>
                                <option>London</option>
                                <option>England</option>
                                <option>Pratapcity</option>
                                <option>Ukrain</option>
                                <option>Wilangana</option>
                            </select>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <input type="text" class="form-control" id="companies" placeholder="Companies">
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <input type="text" class="form-control" id="location" placeholder="Searc By location">
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <select class="form-control" id="choose-category">
                                <option>By Category</option>
                                <option>Information Technology</option>
                                <option>Mechanical</option>
                                <option>Hardware</option>
                            </select>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <button type="submit" class="btn btn-primary">Search Job</button>
                        </div>
                    </form>
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="main-heading">
                            <h2>Browse Jobs By <span>Category</span></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="category-box" data-aos="fade-up">
                                <div class="category-desc">
                                    <div class="category-icon"><i class="icon-bargraph" aria-hidden="true"></i><i class="icon-bargraph abs-icon" aria-hidden="true"></i></div>
                                    <div class="category-detail category-desc-text">
                                        <h4> <a href="browse-jobs-grid.html">Accounting & Finance</a></h4>
                                        <p>122 Jobs</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="category-box" data-aos="fade-up">
                                <div class="category-desc">
                                    <div class="category-icon"><i class="icon-tools-2" aria-hidden="true"></i><i class="icon-tools-2 abs-icon" aria-hidden="true"></i></div>
                                    <div class="category-detail category-desc-text">
                                        <h4> <a href="browse-jobs-grid.html">Automotive Jobs</a></h4>
                                        <p>155 Jobs</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="category-box" data-aos="fade-up">
                                <div class="category-desc">
                                    <div class="category-icon"><i class="icon-briefcase" aria-hidden="true"></i><i class="icon-briefcase abs-icon" aria-hidden="true"></i></div>
                                    <div class="category-detail category-desc-text">
                                        <h4> <a href="browse-jobs-grid.html">Business</a></h4>
                                        <p>300 Jobs</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="category-box" data-aos="fade-up">
                                <div class="category-desc">
                                    <div class="category-icon"><i class="icon-edit" aria-hidden="true"></i><i class="icon-edit abs-icon" aria-hidden="true"></i></div>
                                    <div class="category-detail category-desc-text">
                                        <h4> <a href="browse-jobs-grid.html">Education Training</a></h4>
                                        <p>80 Jobs</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="category-box" data-aos="fade-up">
                                <div class="category-desc">
                                    <div class="category-icon"><i class="icon-heart" aria-hidden="true"></i><i class="icon-heart abs-icon" aria-hidden="true"></i></div>
                                    <div class="category-detail category-desc-text">
                                        <h4> <a href="browse-jobs-grid.html">Healthcare</a></h4>
                                        <p>120 Jobs</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="category-box" data-aos="fade-up">
                                <div class="category-desc">
                                    <div class="category-icon"><i class="icon-wine" aria-hidden="true"></i><i class="icon-wine abs-icon" aria-hidden="true"></i></div>
                                    <div class="category-detail category-desc-text">
                                        <h4> <a href="browse-jobs-grid.html">Restaurant & Food</a></h4>
                                        <p>78 Jobs</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="category-box" data-aos="fade-up">
                                <div class="category-desc">
                                    <div class="category-icon"><i class="icon-map" aria-hidden="true"></i><i class="icon-map abs-icon" aria-hidden="true"></i></div>
                                    <div class="category-detail category-desc-text">
                                        <h4> <a href="browse-jobs-grid.html">Transportation</a></h4>
                                        <p>90 Jobs</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="category-box" data-aos="fade-up">
                                <div class="category-desc">
                                    <div class="category-icon"><i class="icon-desktop" aria-hidden="true"></i><i class="icon-desktop abs-icon" aria-hidden="true"></i></div>
                                    <div class="category-detail category-desc-text">
                                        <h4> <a href="browse-jobs-grid.html">Telecommunications</a></h4>
                                        <p>210 Jobs</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="video-sec dark" id="video" style="background-image:url(assets/img/banner-10.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="main-heading">
                            <p>Best For Your Projects</p>
                            <h2>Watch Our <span>video</span></h2>
                        </div>
                    </div>
                    <div class="video-part"><a href="#" data-toggle="modal" data-target="#my-video" class="video-btn"><i class="fa fa-play"></i></a></div>
                </div>
            </section>
            <section class="wp-process">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="main-heading">
                                <p>Most View Jobs</p>
                                <h2>Hot & Featured <span>Jobs</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="popular-jobs-container">
                                <div class="popular-jobs-box">
                                    <span class="popular-jobs-status bg-success">hourly</span>
                                    <h4 class="flc-rate">$17/hr</h4>
                                    <div class="popular-jobs-box">
                                        <div class="popular-jobs-box-detail">
                                            <h4>Google Inc</h4>
                                            <span class="desination">Software Designer</span>
                                        </div>
                                    </div>
                                    <div class="popular-jobs-box-extra">
                                        <ul>
                                            <li>Php</li>
                                            <li>Android</li>
                                            <li>Html</li>
                                            <li class="more-skill bg-primary">+3</li>
                                        </ul>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui.</p>
                                    </div>
                                </div>
                                <a href="new-job-detail.html" class="btn btn-popular-jobs bt-1">View Detail</a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="popular-jobs-container">
                                <div class="popular-jobs-box">
                                    <span class="popular-jobs-status bg-warning">Monthly</span>
                                    <h4 class="flc-rate">$570/Mo</h4>
                                    <div class="popular-jobs-box">
                                        <div class="popular-jobs-box-detail">
                                            <h4>Duff Beer</h4>
                                            <span class="desination">Marketting</span>
                                        </div>
                                    </div>
                                    <div class="popular-jobs-box-extra">
                                        <ul>
                                            <li>Php</li>
                                            <li>Android</li>
                                            <li>Html</li>
                                            <li class="more-skill bg-primary">+3</li>
                                        </ul>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui.</p>
                                    </div>
                                </div>
                                <a href="new-job-detail.html" class="btn btn-popular-jobs bt-1">View Detail</a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="popular-jobs-container">
                                <div class="popular-jobs-box">
                                    <span class="popular-jobs-status bg-info">Weekly</span>
                                    <h4 class="flc-rate">$200/We</h4>
                                    <div class="popular-jobs-box">
                                        <div class="popular-jobs-box-detail">
                                            <h4>Cyberdyne Systems</h4>
                                            <span class="desination">Human Resource</span>
                                        </div>
                                    </div>
                                    <div class="popular-jobs-box-extra">
                                        <ul>
                                            <li>Php</li>
                                            <li>Android</li>
                                            <li>Html</li>
                                            <li class="more-skill bg-primary">+3</li>
                                        </ul>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui.</p>
                                    </div>
                                </div>
                                <a href="new-job-detail.html" class="btn btn-popular-jobs bt-1">View Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="text-center"><a href="freelancing-jobs.html" class="btn btn-primary">Load More</a></div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="clearfix"></div>
            <section class="testimonial" id="testimonial">
                <div class="container">
                    <div class="row">
                        <div class="main-heading">
                            <p>What Say Our Client</p>
                            <h2>Our Success <span>Stories</span></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div id="client-testimonial-slider" class="owl-carousel">
                            <div class="client-testimonial">
                                <div class="pic"><img src="https://codeminifier.com/job-stock-5.3/job-stock/assets/img/client-1.jpg" alt=""></div>
                                <p class="client-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor et dolore magna aliqua.</p>
                                <h3 class="client-testimonial-title">Lacky Mole</h3>
                                <ul class="client-testimonial-rating">
                                    <li class="fa fa-star-o"></li>
                                    <li class="fa fa-star-o"></li>
                                    <li class="fa fa-star"></li>
                                </ul>
                            </div>
                            <div class="client-testimonial">
                                <div class="pic"><img src="https://codeminifier.com/job-stock-5.3/job-stock/assets/img/client-4.jpg" alt=""></div>
                                <p class="client-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor et dolore magna aliqua.</p>
                                <h3 class="client-testimonial-title">Karan Wessi</h3>
                                <ul class="client-testimonial-rating">
                                    <li class="fa fa-star-o"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                </ul>
                            </div>
                            <div class="client-testimonial">
                                <div class="pic"><img src="https://codeminifier.com/job-stock-5.3/job-stock/assets/img/client-2.jpg" alt=""></div>
                                <p class="client-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor et dolore magna aliqua.</p>
                                <h3 class="client-testimonial-title">Roul Pinchai</h3>
                                <ul class="client-testimonial-rating">
                                    <li class="fa fa-star-o"></li>
                                    <li class="fa fa-star-o"></li>
                                    <li class="fa fa-star"></li>
                                </ul>
                            </div>
                            <div class="client-testimonial">
                                <div class="pic"><img src="https://codeminifier.com/job-stock-5.3/job-stock/assets/img/client-3.jpg" alt=""></div>
                                <p class="client-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor et dolore magna aliqua.</p>
                                <h3 class="client-testimonial-title">Adam Jinna</h3>
                                <ul class="client-testimonial-rating">
                                    <li class="fa fa-star-o"></li>
                                    <li class="fa fa-star-o"></li>
                                    <li class="fa fa-star"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ========== Begin: Brows job Category ===============  -->
            <section class="brows-job-category">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>We found 477 matches jobs, you are watching 7 to 27</h2>
                        </div>
                    </div>
                    <!--/.row-->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Single Job List -->
                            <div class="item-click">
                                <article>
                                    <div class="brows-job-list">
                                        <div class="brows-job-half">
                                            <div class="item-fl-box">
                                                <div class="brows-job-company-img">
                                                    <a href="job-detail-2.html"><img src="https://codeminifier.com/job-stock-5.3/job-stock/assets/img/com-1.jpg" class="img-responsive" alt="" /></a>
                                                </div>
                                                <div class="brows-job-position">
                                                    <h3 class="jb-approved"><a href="job-detail-1.html">Digital Marketing Manager</a></h3>
                                                    <p>
                                                        <a class="theme-cl nlsb-link" href="company-detail.html">Autodesk</a>
                                                        <span class="job-type cl-success bg-trans-success">Full Time</span>
                                                    </p>
                                                    <div class="njsb-location"><i class="ti-location-pin"></i>4565  Gandy Street</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="njsb-link">
                                            <div class="brows-job-link">
                                                <a href="job-detail-1.html" class="btn btn-default">Apply Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="tg-themetag tg-featuretag">Premium</span>
                                </article>
                            </div>
                            <!-- Single Job List -->
                            <div class="item-click">
                                <article>
                                    <div class="brows-job-list">
                                        <div class="brows-job-half">
                                            <div class="item-fl-box">
                                                <div class="brows-job-company-img">
                                                    <a href="job-detail-2.html"><img src="https://codeminifier.com/job-stock-5.3/job-stock/assets/img/com-2.jpg" class="img-responsive" alt="" /></a>
                                                </div>
                                                <div class="brows-job-position">
                                                    <h3 class="jb-approved"><a href="job-detail-1.html">Gas station attendant</a></h3>
                                                    <p>
                                                        <a class="theme-cl nlsb-link" href="company-detail.html">Apple LTD</a>
                                                        <span class="job-type bg-trans-primary cl-primary">Freelancer</span>
                                                    </p>
                                                    <div class="njsb-location"><i class="ti-location-pin"></i>QBL Park, C40</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="njsb-link">
                                            <div class="brows-job-link">
                                                <a href="job-detail-1.html" class="btn btn-default">Apply Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <!-- Single Job List -->
                            <div class="item-click">
                                <article>
                                    <div class="brows-job-list">
                                        <div class="brows-job-half">
                                            <div class="item-fl-box">
                                                <div class="brows-job-company-img">
                                                    <a href="job-detail-2.html"><img src="https://codeminifier.com/job-stock-5.3/job-stock/assets/img/com-3.jpg" class="img-responsive" alt="" /></a>
                                                </div>
                                                <div class="brows-job-position">
                                                    <h3 class="jb-approved"><a href="job-detail-1.html">Customs officer</a></h3>
                                                    <p>
                                                        <a class="theme-cl nlsb-link" href="company-detail.html">Twitter Talk</a>
                                                        <span class="job-type bg-trans-warning cl-warning">Part Time</span>
                                                    </p>
                                                    <div class="njsb-location"><i class="ti-location-pin"></i>1579  Stanley Avenue</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="njsb-link">
                                            <div class="brows-job-link">
                                                <a href="job-detail-1.html" class="btn btn-default">Apply Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="tg-themetag tg-featuretag">Premium</span>
                                </article>
                            </div>
                            <!-- Single Job List -->
                            <div class="item-click">
                                <article>
                                    <div class="brows-job-list">
                                        <div class="brows-job-half">
                                            <div class="item-fl-box">
                                                <div class="brows-job-company-img">
                                                    <a href="job-detail-2.html"><img src="https://codeminifier.com/job-stock-5.3/job-stock/assets/img/com-4.jpg" class="img-responsive" alt="" /></a>
                                                </div>
                                                <div class="brows-job-position">
                                                    <h3 class="jb-approved"><a href="job-detail-1.html">Tailor/ Seamstress</a></h3>
                                                    <p>
                                                        <a class="theme-cl nlsb-link" href="company-detail.html">Sliver City</a>
                                                        <span class="job-type cl-success bg-trans-success">Full Time</span>
                                                    </p>
                                                    <div class="njsb-location"><i class="ti-location-pin"></i>2881  Sharon Lane</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="njsb-link">
                                            <div class="brows-job-link">
                                                <a href="job-detail-1.html" class="btn btn-default">Apply Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <!-- Single Job List -->
                            <div class="item-click">
                                <article>
                                    <div class="brows-job-list">
                                        <div class="brows-job-half">
                                            <div class="item-fl-box">
                                                <div class="brows-job-company-img">
                                                    <a href="job-detail-2.html"><img src="https://codeminifier.com/job-stock-5.3/job-stock/assets/img/com-5.jpg" class="img-responsive" alt="" /></a>
                                                </div>
                                                <div class="brows-job-position">
                                                    <h3 class="jb-approved"><a href="job-detail-1.html">Computer programmer</a></h3>
                                                    <p>
                                                        <a class="theme-cl nlsb-link" href="company-detail.html">Autodesk</a>
                                                        <span class="job-type bg-trans-primary cl-primary">Freelancer</span>
                                                    </p>
                                                    <div class="njsb-location"><i class="ti-location-pin"></i>1992 Buick Century</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="njsb-link">
                                            <div class="brows-job-link">
                                                <a href="job-detail-1.html" class="btn btn-default">Apply Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="tg-themetag tg-featuretag">Premium</span>
                                </article>
                            </div>
                            <!-- Single Job List -->
                            <div class="item-click">
                                <article>
                                    <div class="brows-job-list">
                                        <div class="brows-job-half">
                                            <div class="item-fl-box">
                                                <div class="brows-job-company-img">
                                                    <a href="job-detail-2.html"><img src="https://codeminifier.com/job-stock-5.3/job-stock/assets/img/com-6.jpg" class="img-responsive" alt="" /></a>
                                                </div>
                                                <div class="brows-job-position">
                                                    <h3 class="jb-approved"><a href="job-detail-1.html">Real estate agent</a></h3>
                                                    <p>
                                                        <a class="theme-cl nlsb-link" href="company-detail.html">Facebook</a>
                                                        <span class="job-type cl-success bg-trans-success">Full Time</span>
                                                    </p>
                                                    <div class="njsb-location"><i class="ti-location-pin"></i>1746  Viking Drive</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="njsb-link">
                                            <div class="brows-job-link">
                                                <a href="job-detail-1.html" class="btn btn-default">Apply Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <ul class="pagination">
                            <li><a href="#"><i class="ti-arrow-left"></i></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#"><i class="ti-arrow-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- ========== Begin: Brows job Category End ===============  -->
            <div class="clearfix"></div>
            <!-- ============================ Call To Action ================================== -->
            <section class="theme-bg call-to-act-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="call-to-act">
                                <div class="call-to-act-head">
                                    <h3>Want to Become a Success Employers?</h3>
                                    <span>We'll help you to grow your career and growth.</span>
                                </div>
                                <a href="#" class="btn btn-call-to-act">SignUp Today</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ============================ Call To Action End ================================== -->
            <!-- ============================ Before Footer ================================== -->
            <div class="before-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="jb4-form-fields">
                                <div class="input-group">
                                    <input type="email" class="form-control" placeholder="Enter your email address">
                                    <span class="input-group-btn">
                                        <button class="btn theme-bg" type="submit"><span class="fa fa-paper-plane-o"></span></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 hill">
                            <ul class="job stock-facts">
                                <li><span>2744</span></br>Jobs Posted</li>
                                <li><span>2365</span></br>Jobs Posted</li>
                                <li><span>2021</span></br>Freelancer</li>
                                <li><span>7542</span></br>Companies</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================ Before Footer ================================== -->
            <!-- ============================ Footer Start ================================== -->
            <footer class="dark-footer skin-dark-footer">
                <div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-3">
                                <div class="footer-widget">
                                    <img src="https://codeminifier.com/job-stock-5.3/job-stock/assets/img/logo-white.png" class="img-footer" alt="" />
                                    <div class="footer-add">
                                        <p>Collins Street West, Victoria,</br> Australia (AU4578).</p>
                                        <p><strong>Email:</strong></br>hello@jobstock.com</p>
                                        <p><strong>Call:</strong></br>91 855 742 62548</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2">
                                <div class="footer-widget">
                                    <h4 class="widget-title">Navigations</h4>
                                    <ul class="footer-menu">
                                        <li><a href="home-6.html">New Home Design</a></li>
                                        <li><a href="browse-candidate-list.html">Browse Candidates</a></li>
                                        <li><a href="browse-employer-list.html">Browse Employers</a></li>
                                        <li><a href="advance-search-2.html">Advance Search</a></li>
                                        <li><a href="checkout.html">Job With Map</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2">
                                <div class="footer-widget">
                                    <h4 class="widget-title">The Highlights</h4>
                                    <ul class="footer-menu">
                                        <li><a href="index-2.html">Home Page 2</a></li>
                                        <li><a href="index-3.html">Home Page 3</a></li>
                                        <li><a href="index-4.html">Home Page 4</a></li>
                                        <li><a href="index-5.html">Home Page 5</a></li>
                                        <li><a href="login.html">LogIn</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2">
                                <div class="footer-widget">
                                    <h4 class="widget-title">My Account</h4>
                                    <ul class="footer-menu">
                                        <li><a href="candidate-dashboard.html">Dashboard</a></li>
                                        <li><a href="applications.html">Applications</a></li>
                                        <li><a href="packages.html">Packages</a></li>
                                        <li><a href="candidate-resume.html">resume.html</a></li>
                                        <li><a href="register.html">SignUp Page</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="footer-widget">
                                    <h4 class="widget-title">Download Apps</h4>
                                    <a href="#" class="other-store-link">
                                        <div class="other-store-app">
                                            <div class="os-app-icon">
                                                <i class="ti-android theme-cl"></i>
                                            </div>
                                            <div class="os-app-caps">
                                                Google Play
                                                <span>Get It Now</span>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="other-store-link">
                                        <div class="other-store-app">
                                            <div class="os-app-icon">
                                                <i class="ti-apple theme-cl"></i>
                                            </div>
                                            <div class="os-app-caps">
                                                App Store
                                                <span>Now it Available</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6">
                                <p class="mb-0">© 2020 Job Stock. Designd By <a href="https://themezhub.com">Themez Hub</a> All Rights Reserved</p>
                            </div>
                            <div class="col-lg-6 col-md-6 text-right">
                                <ul class="footer-bottom-social">
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter"></i></a></li>
                                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                                    <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- ============================ Footer End ================================== -->
            <!-- Signin Window Code -->
            <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="new-logwrap">
                                <div class="form-group">
                                    <label>Username</label>
                                    <div class="input-with-icon">
                                        <input type="text" class="form-control" placeholder="Enter Your Username">
                                        <i class="theme-cl ti-user"></i>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <div class="input-with-icon">
                                        <input type="email" class="form-control" placeholder="Enter Your Email">
                                        <i class="theme-cl ti-email"></i>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <div class="input-with-icon">
                                        <input type="password" class="form-control" placeholder="Enter Your Password">
                                        <i class="theme-cl ti-lock"></i>
                                    </div>
                                </div>
                                <div class="form-groups">
                                    <button type="submit" class="btn btn-primary theme-bg full-width">Register</button>
                                </div>
                                <div class="forget-account text-center">
                                    <a class="theme-cl" href="#">Forget Password?</a>
                                </div>
                                <div class="social-devider">
                                    <span class="line"></span>
                                    <span class="circle">Or</span>
                                </div>
                                <div class="social-login row">
                                    <div class="col-md-6">
                                        <a href="#" class="jb-btn-icon social-login-facebook"><i class="fa fa-facebook"></i>Facebook</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="#" class="jb-btn-icon social-login-google"><i class="fa fa-google-plus"></i>Google</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="#" class="jb-btn-icon social-login-twitter"><i class="fa fa-twitter"></i>Twitter</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="#" class="jb-btn-icon social-login-linkedin"><i class="fa fa-linkedin"></i>Linkedin</a>
                                    </div>
                                </div>
                                <div class="register-account text-center">
                                    Don't have an account? <a class="theme-cl" href="register.html">Register</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Signin Window -->
            <button class="w3-button w3-teal w3-xlarge w3-right" onclick="openRightMenu()"><i class="spin fa fa-cog" aria-hidden="true"></i></button>
            <div class="w3-sidebar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;" id="rightMenu">
                <button onclick="closeRightMenu()" class="w3-bar-item w3-button w3-large">Close &times;</button>
                <ul id="styleOptions" title="switch styling">
                    <li>
                        <a href="javascript: void(0)" class="cl-box blue" data-theme="colors/blue-style"></a>
                    </li>
                    <li>
                        <a href="javascript: void(0)" class="cl-box red" data-theme="colors/red-style"></a>
                    </li>
                    <li>
                        <a href="javascript: void(0)" class="cl-box purple" data-theme="colors/purple-style"></a>
                    </li>
                    <li>
                        <a href="javascript: void(0)" class="cl-box green" data-theme="colors/green-style"></a>
                    </li>
                    <li>
                        <a href="javascript: void(0)" class="cl-box dark-red" data-theme="colors/dark-red-style"></a>
                    </li>
                    <li>
                        <a href="javascript: void(0)" class="cl-box orange" data-theme="colors/orange-style"></a>
                    </li>
                    <li>
                        <a href="javascript: void(0)" class="cl-box sea-blue" data-theme="colors/sea-blue-style "></a>
                    </li>
                    <li>
                        <a href="javascript: void(0)" class="cl-box pink" data-theme="colors/pink-style"></a>
                    </li>
                </ul>
            </div>
            <!-- Scripts
               ================================================== -->
            <script type="text/javascript" src="<?php echo $data['media_path']; ?>js/jquery.min.js"></script>
            <script type="text/javascript" src="<?php echo $data['media_path']; ?>js/viewportchecker.js"></script>
            <script type="text/javascript" src="<?php echo $data['media_path']; ?>js/bootstrap.min.js"></script>
            <script type="text/javascript" src="<?php echo $data['media_path']; ?>js/bootsnav.js"></script>
            <script type="text/javascript" src="<?php echo $data['media_path']; ?>js/select2.min.js"></script>
            <script type="text/javascript" src="<?php echo $data['media_path']; ?>js/wysihtml5-0.3.0.js"></script>
            <script type="text/javascript" src="<?php echo $data['media_path']; ?>js/bootstrap-wysihtml5.js"></script>
            <script type="text/javascript" src="<?php echo $data['media_path']; ?>js/datedropper.min.js"></script>
            <script type="text/javascript" src="<?php echo $data['media_path']; ?>js/dropzone.js"></script>
            <script type="text/javascript" src="<?php echo $data['media_path']; ?>js/loader.js"></script>
            <script type="text/javascript" src="<?php echo $data['media_path']; ?>js/owl.carousel.min.js"></script>
            <script type="text/javascript" src="<?php echo $data['media_path']; ?>js/slick.min.js"></script>
            <script type="text/javascript" src="<?php echo $data['media_path']; ?>js/gmap3.min.js"></script>
            <script type="text/javascript" src="<?php echo $data['media_path']; ?>js/jquery.easy-autocomplete.min.js"></script>
            <!-- Custom Js -->
            <script src="<?php echo $data['media_path']; ?>js/custom.js"></script><script type="text/javascript" src="<?php echo $data['media_path']; ?>js/counterup.min.js"></script>
            <script src="<?php echo $data['media_path']; ?>js/jQuery.style.switcher.js"></script>
            <script type="text/javascript">
                   $(document).ready(function () {
                       $('#styleOptions').styleSwitcher();
                   });
            </script>
            <script>
                function openRightMenu() {
                    document.getElementById("rightMenu").style.display = "block";
                }

                function closeRightMenu() {
                    document.getElementById("rightMenu").style.display = "none";
                }
            </script>
        </div>
    </body>
</html>