<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Mega Menu</title>
        <link rel="stylesheet" href="bootstrap-3.3.4/css/bootstrap.min.css" type='text/css'>
        <link rel="stylesheet" href="css/style.css" type="text/css">
       
    </head>
    <body>
        <header>
            <nav class="navbar main-menu navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#" title="logo"></a> </div>
                    <div class="navbar-collapse collapse pull-left">
                        <ul class="nav navbar-nav menu" id="menu">

                            <li class="dropdown mega-dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mega Menu <span class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <div class="container">
                                        <div class="mega-dropdown-menu">
                                            <div class="tabbable tabs-left">
                                                <ul class="nav nav-tabs">
                                                                                                        
                                                    @foreach($menus as $menu)
                                                   
                                                    <li class=""><a href="#{{$menu->slug}}" data-toggle="tab">{{$menu->name}} <i class="arrow_carrot-right"></i></a></li>
                                                    
                                                    @endforeach
                                                                                                   </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="Photography">
                                                        <div class="col-sm-6 col-xs-12 col-md-3">
                                                            <div class="thumbnail">
                                                                <a href="single.html"><img src="assets/images/feature-posts/feature-post1.png" alt="Generic placeholder thumbnail"></a>
                                                                <div class="caption">
                                                                    <h3>Travel The World</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-xs-12 col-md-3">
                                                            <div class="thumbnail">
                                                                <a href="single.html"><img src="assets/images/feature-posts/feature-post6.png" alt="Generic placeholder thumbnail"></a>
                                                                <div class="caption">
                                                                    <h3>Google Play Music</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-xs-12 col-md-3">
                                                            <div class="thumbnail">
                                                                <a href="single.html"><img src="assets/images/feature-posts/feature-post4.png" alt="Generic placeholder thumbnail"></a>
                                                                <div class="caption">
                                                                    <h3>Business Plan</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-xs-12 col-md-3">
                                                            <div class="thumbnail">
                                                                <a href="single.html"><img src="assets/images/feature-posts/feature-post8.png" alt="Generic placeholder thumbnail"></a>
                                                                <div class="caption">
                                                                    <h3>Best Mobile Apps</h3>
                                                                </div>
                                                            </div>
                                                        </div>       
                                                    </div>
                                                    
                                                    
                                                    
                                                    
                                                    <div class="tab-pane" id="Travel">
                                                        <div class="col-sm-6 col-xs-12 col-md-3">
                                                            <div class="thumbnail">
                                                                <a href="single.html"><img src="assets/images/feature-posts/feature-post5.png" alt="Generic placeholder thumbnail"></a>
                                                                <div class="caption">
                                                                    <h3>LifeStyle</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-xs-12 col-md-3">
                                                            <div class="thumbnail">
                                                                <a href="single.html"><img src="assets/images/feature-posts/feature-post2.png" alt="Generic placeholder thumbnail"></a>
                                                                <div class="caption">
                                                                    <h3>Mobile reviews</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-xs-12 col-md-3">
                                                            <div class="thumbnail">
                                                                <a href="single.html"><img src="assets/images/feature-posts/feature-post7.png" alt="Generic placeholder thumbnail"></a>
                                                                <div class="caption">
                                                                    <h3>Apple Probook</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-xs-12 col-md-3">
                                                            <div class="thumbnail">
                                                                <a href="single.html"><img src="assets/images/feature-posts/feature-post4.png" alt="Generic placeholder thumbnail"></a>
                                                                <div class="caption">
                                                                    <h3>Business Call</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>  
                                                    <div class="tab-pane" id="Music">
                                                        <div class="col-sm-6 col-xs-12 col-md-3">
                                                            <div class="thumbnail">
                                                                <a href="single.html"><img src="assets/images/feature-posts/feature-post6.png" alt="Generic placeholder thumbnail"></a>
                                                                <div class="caption">
                                                                    <h3>Android Music</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-xs-12 col-md-3">
                                                            <div class="thumbnail">
                                                                <a href="single.html"><img src="assets/images/feature-posts/feature-post1.png" alt="Generic placeholder thumbnail"></a>
                                                                <div class="caption">
                                                                    <h3>Canan Digital Cam</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-xs-12 col-md-3">
                                                            <div class="thumbnail">
                                                                <a href="single.html"><img src="assets/images/feature-posts/feature-post3.png" alt="Generic placeholder thumbnail"></a>
                                                                <div class="caption">
                                                                    <h3>Classical Music</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-xs-12 col-md-3">
                                                            <div class="thumbnail">
                                                                <a href="single.html"><img src="assets/images/feature-posts/feature-post8.png" alt="Generic placeholder thumbnail"></a>
                                                                <div class="caption">
                                                                    <h3>IPhone Tunes</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="Apps">
                                                        <div class="col-sm-6 col-xs-12 col-md-3">
                                                            <div class="thumbnail">
                                                                <a href="single.html"><img src="assets/images/feature-posts/feature-post1.png" alt="Generic placeholder thumbnail"></a>
                                                                <div class="caption">
                                                                    <h3>Android Music</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-xs-12 col-md-3">
                                                            <div class="thumbnail">
                                                                <a href="single.html"><img src="assets/images/feature-posts/feature-post6.png" alt="Generic placeholder thumbnail"></a>
                                                                <div class="caption">
                                                                    <h3>Canan Digital Cam</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-xs-12 col-md-3">
                                                            <div class="thumbnail">
                                                                <a href="single.html"><img src="assets/images/feature-posts/feature-post8.png" alt="Generic placeholder thumbnail"></a>
                                                                <div class="caption">
                                                                    <h3>Classical Music</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-xs-12 col-md-3">
                                                            <div class="thumbnail">
                                                                <a href="single.html"><img src="assets/images/feature-posts/feature-post3.png" alt="Generic placeholder thumbnail"></a>
                                                                <div class="caption">
                                                                    <h3>IPhone Tunes</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>   
                                        </div>
                                    </div>
                                </div>				
                            </li>
                        </ul>
                    </div>
                    
                </div>
            </nav>
        </header>
        <script src="js/jquery-1.11.2.min.js"></script>
        <script src="bootstrap-3.3.4/js/bootstrap.min.js"></script>
        <script src="js/modernizr.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>