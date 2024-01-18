<?php 
	include ('../settings.php');

	$post = $blogs["posts"]["gasstationcarwash"];
	
	$post1 = "";
	$post2 = "";
	$post3 = "";

	$title = $post['title'];
	$url = "https://aveedsauto.com/blog/" . $post['link'];
	$image = "https://aveedsauto.com/images/blog/" . $post['image'];

	$mainImg = $post['image'];
	$alt = $post['alt'];

	$image1 = "gas-station-with-car-wash";
	$image2 = "professional-car-detailer";
	$image3 = "gas-station-vs-car-detailer";
	
	$image1alt = "Gas Station With Car Wash Comparison";
	$image2alt = "Professional Car Detailer Comparison";
	$image3alt = "Professional Car Detailer Washing A Car";

	$twlink = "https://www.facebook.com/sharer.php?u=$url";
	$fblink = "https://twitter.com/intent/tweet?text=$title&url=$url";
	$ptlink = "https://pinterest.com/pin/create/button/?url=$url&media=$image";
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
      <title><?= $title ?></title>
      <link rel="icon" type="image/png" href="../images/logo.png">
      <link rel="preconnect" href="https://fonts.gstatic.com/">
      <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&amp;display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
      <link rel="stylesheet" href="../css/bootstrap.css">
      <link rel="stylesheet" href="../css/style.css?v=3">
      <link rel="stylesheet" href="../css/colors.css">
      <link rel="stylesheet" href="../css/responsive.css">
      <link rel="stylesheet" href="../css/blog.css">
      <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
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
                     <img src="../images/logo.png" class="img-fluid" alt="Aveed's Auto Detailing Logo" width="100px">
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
										<h1 class="blogTitle text-white font-weight-bold mb-4 h2Large"><?= $post['title'] ?></h1>
										<ul class="list-unstyled cbbPageList text-capitalize d-flex align-items-center justify-content-center flex-wrap mb-0 p-0">
											<li><a href="/">Home</a></li>
											<li><a href="/blog">Blog</a></li>
											<li><?= $post['title'] ?></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<span class="bgCover ibsBgWrap w-100 h-100 position-absolute" style="background-image: url(../images/blog.webp);"></span>
				</article>
			</div>
			<article class="ItemfullBlock blogSinglePost py-8 py-sm-10 py-md-12 py-lg-14 py-xl-22">
				<div class="container">
					<div class="row">
						<div class="col-12 col-lg-8 col-xl-9">
							<div class="pr-xl-14">
								<div class="imgWrap rounded overflow-hidden mb-6 position-relative">
									<img src="../images/blog/<?= $mainImg ?>.webp" class="img-fluid rounded" alt="<?= $alt ?>">
								</div>
								<strong class="d-block fwmMedium title mb-2">
									<i class="far fa-calendar-alt"><span class="sr-only">icon</span></i>
									<time datetime="2011-01-12"><?= $post['created'] ?></time>
									- by 
									<a href="/blog" class="text-lDark">Aveed's Auto</a>
									&nbsp;&nbsp;
								</strong>
								<hr class="mb-5">
								<p class="mb-4"><span class="dropCap rounded-lg text-white bg-secondary d-flex justify-content-center align-items-center mr-2 mt-1 font-weight-bold float-left">W</span>hat's the difference between a gas station with a car wash & a professional auto detailer? <br> Time, money, detail... these all play a part in the decision you should make in taking proper care of your car to ensure it's longevity.!</p>

								<p class="mb-4">If you're torn between hiring a professional detailer & just going to your nearest gas station for a car wash, this article will break down the differences point-by-point!</p>

								<h2 class="h5 pt-5">Your Time Is Money & It Shouldn't Be Wasted!</h2>
								<p class="mb-4">When valuing your time is a concern, gas station car washes are probably not your best bet.</p>

								<p class="mb-4">According to <a target="_blank" href="https://fixautousa.com/blog/choosing-gas-station-car-wash/">Fix Auto USA</a>, you can typically have your car washed within 10 minutes.</p>

								<p class="mb-4">Not bad time-wise right? Well, quality and risk is a whole different story...</p>

								<p class="mb-4">If you've ever been to a car wash at a gas station, there's typically a huge banner that says all the car parts that could be damaged.</p>

								<p class="mb-4">Best of all, they state they won't be held responsible for <strong>ANY</strong> of the repairs.</p>

								<div class="row imgRow mx-sm-n2 mb-4">
									<div class="col-12 col-sm-6 px-sm-2">
										<div class="imgWrap rounded overflow-hidden mb-4">
											<img src="../images/blog/<?= $image1 ?>.webp" class="img-fluid w-100" alt="<?= $image1alt ?>">
										</div>
									</div>
									<div class="col-12 col-sm-6 px-sm-2">
										<div class="imgWrap rounded overflow-hidden mb-4">
											<img src="../images/blog/<?= $image2 ?>.webp" class="img-fluid w-100" alt="<?= $image2alt ?>">
										</div>
									</div>
								</div>

								<p>The repairs could rip you apart in terms of time & money, so choosing the quick 10 minute car wash may not be the best route. Especially if you'd like to keep your car for a long time!</p>

								<p class="mb-6">Now you might be wondering what types of repairs you may have to do with going the cheaper route. Let's take a look at the different "issues" that gas station washes tend not to cover.</p>

								<h3 class="h5 pt-2">Is The Cheaper Route The Way To Go?</h3>
								<p class="mb-4">The most obvious repair that you should be concerned of is your epxensive <strong>PAINT</strong> job.</p>
								
								<p class="mb-4">I've had plenty of friends and family that have taken their car to get a wash at their nearest gas station, and have noticed paint's been chipped off or an outer piece of their car is now loose.</p>

								<p class="mb-4"><i class="fa-solid fa-triangle-exclamation text-danger"></i> Here's a list of a few accessories that car washes state they aren't liable for if damaged: <i class="fa-solid fa-triangle-exclamation text-danger"></i></p>

								<ul>
									<li>Any radio antennas</li>
									<li>Non-OEM add-ons</li>
									<li>License plates</li>
									<li>Side mirrors</li>
									<li>Tailgate</li>
									<li>The list goes on...</li>
								</ul>

								<p class="mb-4">Of course, most of these can be fought with an attorney if your car is damaged, but is it worth it?</p>

								<p class="mb-4">You'll be risking $20 for a 10 minute car wash that could potentially lead you to suing the company if your car is damaged?</p>

								<h6 class="h6 pt-2">What makes a professional detailer different from automated car washes</h6>

								<p class="mb-4">The most important of all, you don't have to hear the car being banged on all ends by jet-speed water or large rotating brushes.</p>
								<p class="mb-4">Detailers take their time with ensuring the perfect end result.</p>
								<p class="mb-4">With many years of experience, they've been able to pin-point what supplies are the best to use to give your car the desired  sparkling finish.</p>

								<p class="mb-4">There's passion behind each car that's serviced. </p>

								<p class="mb-4">Speaking from experience, detailers absolutely love to see customer's happy with the hard work they put in.</p>

								<h4 class="h5 pt-2">Attention To Detail & Cost Efficiency</h4>

								<div class="row imgRow mx-sm-n2 mb-4">
									<div class="col-12 px-sm-2">
										<div class="imgWrap rounded overflow-hidden mb-4">
											<img src="../images/blog/<?= $image3 ?>.webp" class="img-fluid w-100" alt="<?= $image3alt ?>">
										</div>
									</div>
								</div>

								<p class="mb-4">If you're looking to be as cost efficient as possible, you may want to look into a gas station car wash membership.</p>

								<p class="mb-4">In the end... you get what you pay for, so a moderately washed car for <strong>$19.99/month is the best you'll get!</strong></p>

								<p class="mb-4">A professional detailing service consists of many different services that helps to showcase your vehicle.</p>
								
								<p class="mb-4">As well as protect it from most harsh elements that may come it's way.</p>

								<p class="mb-4">In comparison of a gas station car wash price vs a detailing price, the detailing will be more expensive</p>
								
								<h6 class="h6 mb-4">However, here's a list of services that are typically added onto just washing your vehicle:</h6>
								
								<ul class="checkList">
									<li>Ceramic Waxing or Ceramic Coating</li>
									<li>Complete Interior Detailing</li>
									<li>Headlight Restoration</li>
									<li>UV Protection</li>
									<li>Bug & Tar Removal</li>
								</ul>

								<p class="mb-4">There are many extras provided as opposed to your regular schmegular car wash.</p>
								
								<p class="mb-4"><a href="https://aveedsauto.com/#services">Here is an example of all the services I provide</a> if you're looking for more detailing services</p>

								<h5 class="h5 pt-2">Final Comparison Between The 2 Washes</h5>

								<p class="mb-4">To wrap the comparison up, the decision is completely in your hands</p>

								<p class="mb-4">If you're comfortable with a basic wash and spending your time in a car wash, then a gas station car wash is best for you</p>

								<p class="mb-4">However, if you want ease-of-mind that your car will always look brand new after a detail without you lifting a finger</p>

								<p class="mb-4">Then a professional detailer is your best route</p>

								<h6 class="h6 mb-4">How To Find a Professional Detailer Near You:</h6>

								<p class="mb-4">Looking for a detailer in the greater Sacramento, CA area? Feel free to contact me via email or phone!</p>

								<p class="mb-2">Email: <a href="mailto:service@aveedsauto.com">service@aveedsauto.com</a></p>
								<p class="mb-6">Phone: <a href="tel:9165420774">(916) 542-0774</a></p>

								<p class="mb-4">Not in the greater Sacramento, CA area? A quick google search will point you in the right direction! Just search <a target="_blank" href="https://www.google.com/search?q=car+detailers+near+me">"Car detailers near me"</a></p>
								
								<div class="d-sm-flex align-items-center justify-content-between flex-wrap mt-10 mb-8">
									<div class="newsTagWrap widgetTags fontAlter d-flex mb-5 mb-sm-0">
										<strong class="txtDark mr-1">Tags:</strong>
										<ul class="tagList list-unstyled p-0 m-0 d-flex flex-wrap fwMedium">
											<?php foreach($post['tags'] as $tag): ?>
												<li>
													<a href="/blog/tags/<?= $blogs["tags"][$tag]['link'] ?>"><?= $blogs["tags"][$tag]['title'] ?></a>
												</li>
											<?php endforeach; ?>
										</ul>
									</div>

									<aside class="saShareAside text-center">
										<ul class="list-unstyled socialNetworks saSocialNetworks d-flex flex-wrap justify-content-sm-end mb-0">
											<li>
												<a href="<?= $fblink ?>" class="facebook">
													<i class="fab fa-facebook-square" aria-hidden="true"><span class="sr-only">facebook</span></i>
												</a>
											</li>
											<li>
												<a href="<?= $twlink ?>" class="twitter">
													<i class="fab fa-twitter" aria-hidden="true"><span class="sr-only">twitter</span></i>
												</a>
											</li>
											<li>
												<a href="<?= $ptlink ?>" class="pinterest">
													<i class="fab fa-pinterest" aria-hidden="true"><span class="sr-only">pinterest</span></i>
												</a>
											</li>
										</ul>
									</aside>
								</div>

								<div class="widgetProfilerInfo mb-6 bg-white mb-0 shadow rounded">
									<div class=" px-3 px-lg-5 py-8">
										<div class="clearfix cmntWrap">
											<div class="alignleft avatarHolder rounded overflow-hidden mb-4 float-none float-sm-left">
												<img class="img-fluid" src="../images/logo.png" alt="Aveed's Auto Detailing">
											</div>
											<div class="descrWrap overflow-hidden fsSmall">
												<h5 class="h5 mb-2 fwSemibold"><a href="/">Aveed's Auto Detailing</a></h5>
												<p>Experience excellence with Aveed’s Auto Detailing–where every square inch gets the royal treatment.</p>
												<ul class="list-unstyled socialNetworks tmcbSocialNetworks d-flex flex-wrap mt-3 mb-0 p-0">
													<li>
														<a target="_blank" href="https://www.facebook.com/aveedsauto/">
															<i class="fab fa-facebook-square" aria-hidden="true"><span class="sr-only">facebook</span></i>
														</a>
													</li>
													<li>
														<a target="_blank" href="https://www.instagram.com/aveedsauto/">
															<i class="fab fa-instagram" aria-hidden="true"><span class="sr-only">instagram</span></i>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								
								<!-- <h4 class="h4 mb-5 mb-md-8">Related Posts</h4>
								<div class="row mb-5">
									<div class="col-12 col-md-6">
										<article class="blockPostColumn position-relative fontAlter mb-6" data-category="Auto Care">
											<div class="imgWrap overflow-hidden mb-5">
												<img src="../images/" class="img-fluid w-100" alt="image description">
											</div>
											<strong class="d-block fwmMedium title mb-2">
												<i class="far fa-calendar-alt"><span class="sr-only">icon</span></i>
												<time></time>
												- by 
												<a href="/" class="text-lDark">Aveed's Auto</a>
											</strong>
											<h5 class="h5"></h5>
											<a href="/" class="btnLink fwSemi">Read More</a>
										</article>
									</div>
								</div> -->

							</div>
						</div>
						<div class="col-12 col-lg-4 col-xl-3">
							<aside class="sidebar">
								<!-- authorWidget -->
								<div class="authorWidget mb-6 mb-md-8 mb-lg-10 bg-white shadow rounded text-center px-3 py-5">
									<h6 class="h6 mb-2">Share This Post </h6>
									<ul class="list-unstyled socialNetworks tmcbSocialNetworks justify-content-center d-flex flex-wrap mb-0 mt-xl-4">
										<li>
											<a href="<?= $twlink ?>">
												<i class="fab fa-twitter"><span class="sr-only">twitter</span></i>
											</a>
										</li>
										<li>
											<a href="<?= $fblink ?>">
												<i class="fab fa-facebook-square"><span class="sr-only">facebook</span></i>
											</a>
										</li>
										<li>
											<a href="<?= $ptlink ?>">
												<i class="fab fa-pinterest"><span class="sr-only">Pinterest</span></i>
											</a>
										</li>
									</ul>
								</div>

								<?php if(!empty($post1)): ?>
									<div class="recentNewsWidget mb-6 mb-md-8 mb-lg-10">
										<h5 class="fwMedium widgetTitile mb-5 pl-1 position-relative">Recent Posts</h5>
										<ul class="list-unstyled pl-0 mb-7">
											<li>
												<div class="imgHolder flex-shrink-0 mr-4 mt-1">
													<img src="../images/blog/<?= $blogs["posts"][$post]['image'] ?>.webp" class="img-fluid" alt="<?= $blogs[$post]['alt'] ?>">
												</div>
												<div class="descrWrap">
													<h4 class="fwMedium mb-1">
														<a href="/blog<?= $blogs["posts"][$post1]['link'] ?>"><?= $blogs["posts"][$post1]['title'] ?></a>
													</h4>
													<time datetime="2011-01-12" class="d-block"><i class="far fa-calendar-alt icn mr-1"><span class="sr-only">icon</span></i><?= $blogs["posts"][$post1]['created'] ?></time>
												</div>
											</li>
											<?php if(!empty($post1)): ?>
											<li>
												<div class="imgHolder flex-shrink-0 mr-4 mt-1">
													<img src="../images/blog/<?= $blogs["posts"][$post2]['image'] ?>.webp" class="img-fluid" alt="<?= $blogs[$post2]['alt'] ?>">
												</div>
												<div class="descrWrap">
													<h4 class="fwMedium mb-1">
														<a href="/blog<?= $blogs["posts"][$post2]['link'] ?>"><?= $blogs["posts"][$post2]['title'] ?></a>
													</h4>
													<time datetime="2011-01-12" class="d-block"><i class="far fa-calendar-alt icn mr-1"><span class="sr-only">icon</span></i><?= $blogs["posts"][$post2]['created'] ?></time>
												</div>
											</li>
											<?php endif; ?>
											<?php if(!empty($post1)): ?>
											<li>
												<div class="imgHolder flex-shrink-0 mr-4 mt-1">
													<img src="../images/blog/<?= $blogs["posts"][$post3]['image'] ?>.webp" class="img-fluid" alt="<?= $blogs[$post3]['alt'] ?>">
												</div>
												<div class="descrWrap">
													<h4 class="fwMedium mb-1">
														<a href="/blog<?= $blogs["posts"][$post3]['link'] ?>"><?= $blogs["posts"][$post3]['title'] ?></a>
													</h4>
													<time datetime="2011-01-12" class="d-block"><i class="far fa-calendar-alt icn mr-1"><span class="sr-only">icon</span></i><?= $blogs["posts"][$post3]['created'] ?></time>
												</div>
											</li>
											<?php endif; ?>
										</ul>
									</div>
								<?php endif; ?>


								<div class="categoryListWidget mb-6 mb-md-8 mb-lg-10">
									<h5 class="fwMedium widgetTitile mb-5 pl-1 position-relative">Categories</h5>
									<ul class="list-unstyled wCatList pl-0 fontAlter">
										<?php foreach($post["category"] as $category): ?>
										<li>
											<a href="/blog/category/<?= $blogs["categories"][$category]['link'] ?>"><?= $blogs["categories"][$category]['title'] ?></a>
										</li>
										<?php endforeach; ?>
									</ul>
								</div>

								<div class="widgetTags mb-6 mb-md-8 mb-lg-10">
									<h5 class="fwMedium widgetTitile mb-5 pl-1 position-relative">Tags</h5>
									<ul class="list-unstyled pl-0 d-flex flex-wrap fontAlter">
										<?php foreach($post['tags'] as $tag): ?>
										<li>
											<a href="/blog/tags/<?= $blogs["tags"][$tag]['link'] ?>"><?= $blogs["tags"][$tag]['title'] ?></a>
										</li>
										<?php endforeach; ?>
									</ul>
								</div>

								<div class="widget mb-0 widgetHelp bg-primary rounded-lg pt-8 px-6 pb-8 position-relative text-center text-white">
									<div class="captionHolder">
										<i class="icn icomoon-information1 text-secondary d-block mb-3"><span class="sr-only">icon</span></i>
										<h3 class="h3 h3Large text-white mb-2">Need any help?</h3>
										<p>Contact Us Today!</p>
										<a href="mailto:service@aveedsauto.com" class="btn btnThemeAlt text-capitalize position-relative border-0 p-0 btnMinMedium" data-hover="Get In Touch">
											<span class="d-block btnText">Get In Touch</span>
										</a>
										<i class="whWatermarkIcn icomoon-helpc position-absolute"><span class="sr-only">icon</span></i>
									</div>
									<span class="bgCover bgImg w-100 h-100 position-absolute" style="background-image: url(../images/bgPattern03.png);"></span>
								</div>
							</aside>
						</div>
					</div>
				</div>
			</article>
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
			<span class="bgCover bgImg w-100 h-100 position-absolute" style="background-image: url(../images/img12.webp);"></span>
		</div>
		</div>
		<a id="backToTop" class="rounded-circle text-center" href="#"><span class="lnr lnr-chevron-up icn"></span></a>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js" integrity="sha512-TPh2Oxlg1zp+kz3nFA0C5vVC6leG/6mm1z9+mA81MI5eaUVqasPLO8Cuk4gMF4gUfP5etR73rgU/8PNMsSesoQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/jqueryCustom.js"></script>
	<script type="text/javascript" src="../js/bookmark.js"></script>
	<script src="https://unpkg.com/counterup2@2.0.2/dist/index.js">	</script>
</body>
</html>