<!DOCTYPE html SYSTEM "about:legacy-compat">
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Title here</title>

    <meta name="description" content="UNM IT Application group is here to provide the application development needs of the university."/>
    
    <link href="unm.ico" rel="shortcut icon"/>
    <link href="unm-styles.min.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="https://cloud.typography.com/7254094/6839152/css/fonts.css"/>
    <link href="site-styles.css" rel="stylesheet" media="screen" type="text/css"/>
    <link href="all.min.css" type="text/css" rel="stylesheet">
    <link href="app.css" type="text/css" rel="stylesheet">

    <script src="unm-scripts.min.js" type="text/javascript"></script>
    <script src="site.js" type="text/javascript"></script>
  </head>

  <body id="regions">

    <!-- container to hold menus on collapse -->
    <a accesskey="2" class="sr-only sr-only-focusable skip2content" href="#main">Skip to main content</a>

    <div class="nav-wrapper" id="offcanvas">
      <div class="navbar-header">
        <button class="menu-toggle navbar-toggle collapsed" data-target="#mobile-menu .navbar-collapse" data-toggle="collapse" type="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="fa fa-reorder fa-2x"></span>
        </button>
        <div id="mobile-menu">
          <div class="text-center visible-xs-block" id="mobile-toolbar">
            <ul aria-label="Resource Links" class="list-unstyled btn-group" role="group">
              <li class="btn btn-sm btn-default">
                <a href="//directory.unm.edu/departments/" title="UNM A to Z">UNM A-Z</a>
              </li>
              <li class="btn btn-sm btn-default">
                <a href="//my.unm.edu" title="myUNM">myUNM</a>
              </li>
              <li class="btn btn-sm  btn-default">
                <a href="//directory.unm.edu" title="Directory">Directory</a>
              </li>
              <li class="btn btn-sm  btn-default">
                <a href="//search.unm.edu" title="Search">
                  <span class="fa fa-search"></span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div id="page">
      <!-- start nav -->
      <div class="navbar navbar-unm">
        <div class="container">
          <a class="navbar-brand" href="https://www.unm.edu">The University of New Mexico</a>
          <!-- search form -->
          <form action="//search.unm.edu/search" class="pull-right hidden-xs" id="unm_search_form" method="get" autocomplete="off">
              <div class="input-append search-query">
                  <input accesskey="4" id="unm_search_form_q" maxlength="255" name="q" placeholder="Search" title="input search query here" type="text"/>
                  <button accesskey="s" class="btn" id="unm_search_for_submit" name="submit" title="submit search" type="submit">
                      <span class="fa fa-search"></span>
                  </button>
              </div>
          </form>
          <!-- end search form -->
          <ul class="nav navbar-nav navbar-right hidden-xs" id="toolbar-nav">
            <li>
              <a href="http://directory.unm.edu/departments/" title="UNM A to Z">UNM A-Z</a>
            </li>
            <li>
              <a href="https://my.unm.edu" title="myUNM">myUNM</a>
            </li>
            <li>
              <a href="http://directory.unm.edu" title="Directory">Directory</a>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Help
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a href="https://studentinfo.unm.edu" title="StudentInfo">StudentInfo</a>
              </li>
                <li>
                  <a href="https://fastinfo.unm.edu" title="FastInfo">FastInfo</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <!-- end  nav -->

      <!-- start app-header -->

      <div id="app-header" class="d-flex justify-content-end">
          <div class="container">
              <a href="javascript:history.back()">
				  <h1>Application Title Here</h1> <!-- EDIT HERE -->
              </a>
          </div>
      </div>
      <!-- end app-header -->


      <!-- start redline -->
      <div class="bg-primary">
        <div class="container unm-cherry">
          <div style="padding: 2px; margin: 0;"></div>	
        </div>
      </div>
      <!-- end readline -->

      <!-- start nav -->
      <div id="nav">
        <div class="container">
          <div class="navbar navbar-top" id="horiz-nav">
            <nav aria-label="Horizontal" class="navbar-collapse collapse" id="horz-nav">
              <ul class="nav navbar-nav" role="menubar">
                <li>
                  <a href="javascript:history.back()" title="Home"><i class="fas fa-home"></i> Home</a>
                </li>
                              </ul>
            </nav>
          </div>
        </div>
      </div>
      <!-- end nav -->

      <div class="spacer50"></div>

      <div id="main">
        <div class="container layout" id="c">
          <div class="row">
            <div id="primary">
				<h1>Header</h1>
				<p>Body here</p>
			</div>
		  </div>
        </div>
      </div>

      <div id="lower">
        <div class="container">
            <!--LOWER-->
        </div>
      </div>

      <!-- footer start -->
      <div id="footer">
          <div class="container">
              <hr/>
              <div class="row">
                  <div class="col-md-8">
                      <p>
                          <a href="https://www.unm.edu">
                              <img alt="The University of New Mexico" src="https://webcore.unm.edu/v2/images/unm-transparent-white.png"/>
                          </a>
                      </p>
                      <p>
                          <small>&#169; The University of New Mexico
                              <br/> Albuquerque, NM 87131, (505) 277-0111
                              <br/> New Mexico's Flagship University
                          </small>
                      </p>
                  </div>
				  <div class="col-md-4">
                      <ul class="list-inline">
                          <li>
                              <a href="https://www.facebook.com/universityofnewmexico" title="UNM on Facebook">
                                  <i class="fab fa-facebook-square fa-2x"></i> <span class="sr-only">UNM on Facebook</span>
                              </a>
                          </li>
                          <li>
                              <a href="https://instagram.com/uofnm" title="UNM on Instagram">
                                  <span class="fab fa-instagram fa-2x">
                                      <span class="sr-only">UNM on Instagram</span>
                                  </span>
                              </a>
                          </li>
                          <li>
                              <a href="https://twitter.com/unm" title="UNM on Twitter">
                                  <span class="fab fa-twitter-square fa-2x">
                                      <span class="sr-only">UNM on Twitter</span>
                                  </span>
                              </a>
                          </li>
                          <li>
                              <a href="https://www.youtube.com/user/unmlive" title="UNM on YouTube">
                                  <span class="fab fa-youtube-square fa-2x">
                                      <span class="sr-only">UNM on YouTube</span>
                                  </span>
                              </a>
                          </li>
                      </ul>
                      <p>more at
                          <a href="http://social.unm.edu" title="UNM Social Media Directory &amp; Information">social.unm.edu</a>
                      </p>
                      <ul class="list-inline" id="unm_footer_links">
                          <li>
                              <a href="https://www.unm.edu/accessibility.html">Accessibility</a>
                          </li>
                          <li>
                              <a href="https://www.unm.edu/legal.html">Legal</a>
                          </li>
                          <li>
                              <a href="https://www.unm.edu/contactunm.html">Contact UNM</a>
                          </li>
                          <li>
                              <a href="http://nmhedss2.state.nm.us/Dashboard/index.aspx?ID=21">New Mexico Higher Education Dashboard</a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
      <!-- footer end -->
	</div>

	<div id="totop" style="display: block;">
      <span class="fa fa-arrow-circle-up">
      </span>
    </div>

    <div id="unm_panel" class="hidden-xs hidden-sm"><div class="container"><div class="row">
      <div class="col-sm-4">
          <aside>
            <h1>Quick Links</h1><div class="row quicklinks"><div class="col-lg-6 media"><a href="https://learn.unm.edu/"><span class="pull-left fa fa-graduation-cap fa-3x"></span><div class="media-body"><h2>UNM Learn</h2>
                    Online Classes</div></a></div><div class="col-lg-6 media"><a href="http://lobomail.unm.edu"><span class="pull-left fa fa-envelope fa-3x"></span><div class="media-body"><h2>LoboMail</h2>
                    email and calendar</div></a></div><div class="col-lg-6 media"><a href="http://library.unm.edu"><span class="pull-left fa fa-book fa-3x"></span><div class="media-body"><h2>Library</h2>
                    library services</div></a></div><div class="col-lg-6 media"><a href="http://my.unm.edu"><span class="pull-left fa fa-circle fa-3x"></span><div class="media-body"><h2>MyUNM</h2>
                    campus portal</div></a></div><div class="col-lg-6 media"><a href="http://studentinfo.unm.edu"><span class="pull-left fa fa-support fa-3x"></span><div class="media-body"><h2>StudentInfo</h2>
                    Student Support</div></a></div><div class="col-lg-6 media"><a href="http://fastinfo.unm.edu"><span class="pull-left fa fa-support fa-3x"></span><div class="media-body"><h2>FastInfo</h2>
                    Faculty and Staff support</div></a></div><div class="col-lg-6 media"><a href="http://directory.unm.edu/departments/"><span class="pull-left fa fa-sort-alpha-asc fa-3x"></span><div class="media-body"><h2>UNM A-Z</h2>
                    departments and services</div></a></div><div class="col-lg-6 media"><a href="http://directory.unm.edu"><span class="pull-left fa fa-phone-square fa-3x"></span><div class="media-body"><h2>Directory</h2>
                    student, staff, and faculty</div></a></div><div class="col-lg-6 media"><a href="http://students.unm.edu"><span class="pull-left fa fa-group fa-3x"></span><div class="media-body"><h2>Students.UNM</h2>
                    get started at UNM</div></a></div></div>
          </aside>
          </div>
          <div class="col-sm-4"></div>
          <div class="col-sm-4">
            <aside>
              <h1 class="padlock">LoboAlerts</h1>
              <p><strong><a href="http://www.getrave.com/login/unm">Log into LoboAlerts now!</a></strong><br> <br> <a href="http://loboalerts.unm.edu/faq.html">LoboAlerts FAQ</a><a href="http://loboalerts.unm.edu"><br> More info about LoboAlerts</a></p>
              <h1 class="padlock">Join The Pack</h1>
              <ul class="list-inline">
                <li><a href="https://www.facebook.com/universityofnewmexico" title="UNM on Facebook"><span class="fa fa-facebook-square fa-2x"><span class="sr-only">UNM on Facebook</span></span></a></li>
                <li><a href="http://instagram.com/uofnm" title="UNM on Instagram"><span class="fa fa-instagram fa-2x"><span class="sr-only">UNM on Instagram</span></span></a></li>
                <li><a href="https://twitter.com/unm" title="UNM on Twitter"><span class="fa fa-twitter-square fa-2x"><span class="sr-only">UNM on Twitter</span></span></a></li>
                <li><a href="http://www.youtube.com/user/unmlive" title="UNM on YouTube"><span class="fa fa-youtube-square fa-2x"><span class="sr-only">UNM on YouTube</span></span></a></li>
              </ul>
              <p>more at <a href="http://social.unm.edu">social.unm.edu</a></p>
            </aside>
          </div>
        </div>
      </div>
    </div>
    <script src="app.js" type="text/javascript"></script>
      </body>
</html>
<!-- -->
