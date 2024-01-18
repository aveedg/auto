<?php 
	include ('settings.php');
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Google tag (gtag.js) -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-B02NPNMPGE"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());
         
         gtag('config', 'G-B02NPNMPGE');
      </script>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Aveed's Auto Detailing, providing professional mobile car washing & auto detailing services. Currently serving the greater Sacramento, CA area!">
      <title>Aveed's Auto Detailing - Serving The Greater Sacramento Area</title>
      <link rel="icon" type="image/png" href="images/logo.png">
      <link rel="preconnect" href="https://fonts.gstatic.com/">
      <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&amp;display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/style.css?v=3">
      <link rel="stylesheet" href="css/colors.css">
      <link rel="stylesheet" href="css/responsive.css">
      <link rel="icon" type="image/x-icon" href="images/favicon.ico">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   </head>

   <body>
      <div id="pageWrapper">
      <div class="phStickyWrap">
         <div class="headerFixer">
            <header id="pageHeader" class="bg-white">
               <div class="container-fluid clearfix">
                  <div class="logo">
                     <a href="/">
                     <img src="images/logo.png" class="img-fluid" alt="Aveed's Auto Detailing Logo" width="100px">
                     </a>
                  </div>
                  <nav id="pageNav" class="navbar navbar-expand-lg navbar-light justify-content-end justify-content-lg-start position-static">
                     <div class="collapse navbar-collapse pageMainNavCollapse" id="pageMainNavCollapse">
                        <ul class="navbar-nav mainNavigation fontAlter fwMedium pl-lg-3 pl-xlwd-9 pl-xxl-18">
                           <li class="nav-item">
                              <a class="nav-link" href="/">Home</a>
                           </li>
                           <li class="nav-item dropdown ddohOpener">
                              <a class="nav-link" href="/#services" id="servicesDropdown" role="button">Services</a>
                           </li>
                           <li class="nav-item dropdown ddohOpener">
                              <a class="nav-link" href="/#about" id="aboutDropdown" role="button">About</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="/#gallery">Gallery</a>
                           </li>
                           <!-- <li class="nav-item">
                              <a class="nav-link" href="/#reviews">Reviews</a>
                              </li> -->
                        </ul>
                     </div>
                     <div class="hdActionsWrap flex-shrink-0 d-flex justify-content-end align-items-center">
                        <a href="tel:9165420774" class="btnHdLink fontAlter fwMedium d-none d-xl-inline">
                        <i class="icomoon-whatsapp icn"><span class="sr-only">icon</span></i>
                        (916) 542-0774
                        </a>
                        <button class="navbar-toggler pgNaveOpener border-0 ml-3 position-relative" type="button" data-toggle="collapse" data-target="#pageMainNavCollapse" aria-controls="pageMainNavCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <a href="tel:9165420774" class="btn btnThemeAlt border-0 p-0 ml-lg-3 ml-xxl-6 btnHd" data-hover="Book Appointment">
                        <span class="d-block btnText">Book Appointment</span>
                        </a>
                     </div>
                  </nav>
               </div>
            </header>
         </div>
         <main>
            <div class="introBlock innerPagesBanner">
               <article class="ibsColumn text-center d-flex w-100 position-relative text-white fontAlter">
                  <div class="alignHolder w-100 d-flex align-items-center">
                     <div class="align w-100 py-8 py-md-14 py-lg-20">
                        <div class="container">
                           <div class="row">
                              <div class="col-12">
                                 <h1 class="text-white font-weight-bold mb-4 h2Large">Blogs</h1>
                                 <ul class="list-unstyled cbbPageList text-capitalize d-flex align-items-center justify-content-center flex-wrap mb-0 p-0">
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/blog.php">Blogs</a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <span class="bgCover ibsBgWrap w-100 h-100 position-absolute" style="background-image: url(images/blog.webp);"></span>
               </article>
            </div>
			
            <div class="blogListingSection py-10 py-md-14 py-lgwd-18 py-xl-22">
               <div class="container">
                  <div class="row">
					<?php foreach($blogs["posts"] as $key => $post): 
                  $category = $post['category'][0];   
               ?>
						<div class="col-12 col-sm-6 col-lg-4 col">
							<article class="blockPostColumn position-relative fontAlter mb-6">
								<div class="blogCategory">
									<a href="/blog/category/<?= $blogs["categories"][$category]['link'] ?>"><?= $blogs["categories"][$category]['title'] ?></a>
								</div>
								<div class="imgWrap overflow-hidden mb-5">
									<a href="/blog/<?= $post['link'] ?>"><img src="images/blog/<?= $post['image'] ?>.webp" class="img-fluid w-100" alt="<?= $post['alt'] ?>"></a>
								</div>
								<strong class="d-block fwmMedium title mb-2">
									<i class="far fa-calendar-alt"><span class="sr-only">icon</span></i>
									<time datetime="2011-01-12"><?= $post['created'] ?></time>
									- by 
									<a href="/blog/<?= $post['link'] ?>" class="text-lDark">Aveed's Auto</a>
								</strong>
								<h5 class="h5"><?= $post['title'] ?></h5>
								<a href="/blog/<?= $post['link'] ?>" class="btnLink fwSemi">Read More</a>
							</article>
						</div>
					<?php endforeach; ?>

				</div>
				<!-- <nav aria-label="Page navigation">
					<ul class="pagination justify-content-center mt-4 mt-md-8 mb-0 pb-0">
						<li class="page-item active" aria-current="page">
						<a class="page-link" href="javascript:void(0);">1 <span class="sr-only">(current)</span></a>
						</li>
						<li class="page-item">
						<a class="page-link" href="javascript:void(0);">2</a>
						</li>
						<li class="page-item">
						<a class="page-link" href="javascript:void(0);">Next <i class="fas fa-chevron-right icn" aria-hidden="true"><span class="sr-only">icon</span></i></a>
						</li>
					</ul>
				</nav> -->
               </div>
            </div>
         </main>
         <!-- Footer -->
         <div class="ftAreaWrap bg-light">
            <div class="footerAsideInnerWrap position-relative">
               <aside class="footerAside pt-10 pb-sm-2 pt-xl-15 pb-lg-10 py-lgwd-14 pb-xl-19">
                  <div class="container">
                     <div class="row">
                        <div class="col-12 col-sm-6 col-lg-4 mb-10 mb-lg-0">
                           <h5 class="h5 ftHeading text-white mb-4">Aveed's Auto Detailing</h5>
                           <span class="d-block">Experience excellence with Aveed’s Auto Detailing–where every square inch gets the royal treatment.</span>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 mb-10 mb-lg-0">
                           <h5 class="h5 ftHeading text-white mb-4">Business Hours</h5>
                           <ul class="list-unstyled ftpScheduleList mb-0">
                              <li>
                                 <span class="d-block">Monday - Sunday</span>
                                 <span class="d-block">8:00 AM - 5:00 PM</span>
                              </li>
                           </ul>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 mb-10 mb-lg-0">
                           <h5 class="h5 ftHeading text-white mb-4">Contact</h5>
                           <ul class="list-unstyled ftpScheduleList mb-0">
                              <li>
                                 <span class="d-block"><a href="tel:9165420774">(916) 542-0774</a></span>
                                 <span class="d-block"><a href="mailto:service@aveedsauto.com">service@aveedsauto.com</a></span>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </aside>
               <footer id="pageFooter" class="text-center pt-6 pb-3 pt-md-8 pb-md-5">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-6">
                           <p><a href="javascript:bookmarkscroll.scrollTo('home')">Aveed's Auto Detailing</a> &copy; 2023. <br class="d-md-none">All Rights Reserved.</p>
                        </div>
                        <div class="col-md-6">
                           <p><a href="https://allanrivers.com">Designed & Developed by allanrivers.com</p>
                        </div>
                     </div>
                  </div>
               </footer>
               <span class="bgCover bgImg w-100 h-100 position-absolute" style="background-image: url(images/img12.webp);"></span>
            </div>
         </div>
         <a id="backToTop" class="rounded-circle text-center" href="#"><span class="lnr lnr-chevron-up icn"></span></a>
      </div>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js" integrity="sha512-TPh2Oxlg1zp+kz3nFA0C5vVC6leG/6mm1z9+mA81MI5eaUVqasPLO8Cuk4gMF4gUfP5etR73rgU/8PNMsSesoQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/jqueryCustom.js"></script>
      <script type="text/javascript" src="js/bookmark.js"></script>
      <script src="https://unpkg.com/counterup2@2.0.2/dist/index.js">	</script>
   </body>
</html>