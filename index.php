<?php
    require_once('functions/function.php');
    get_header();
?>
<!-- slider-start -->
<div class="slider-area pos-relative">
	<div class="slider-active">
		<?php
                $sel="SELECT * FROM cs_banner ORDER BY ban_id DESC LIMIT 0,3";
                $Q=mysqli_query($con,$sel);
                while($slider=mysqli_fetch_assoc($Q)){
            ?>
		<div class="single-slider slider-height d-flex align-items-center justify-content-center" style="background-image: url(admin/uploads/<?= $slider['ban_photo']; ?>">
			<div class="container">
				<div class="row">
					<div class="col-xl-9 col-md-12">
						<div class="slider-content slider-content-2">
							<h1 class="white-color f-700" data-animation="fadeInUp" data-delay=".2s"><span>
									<?= $slider['ban_title'];?></span></h1>
							<p data-animation="fadeInUp" data-delay=".4s">
								<?= $slider['ban_subtitle'];?>
							</p>
							<button class="theme-btn" data-animation="fadeInUp" data-delay=".6s"><span class="btn-text">
									<?= $slider['ban_button'];?></span></button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php } ?>
	</div>
</div>
<!-- slider-end -->
<!-- about start -->
<div id="about" class="about-area pt-100 pb-70">
	<div class="container">
		<?php
		$sel="SELECT * FROM cs_content WHERE cont_category_id='1'";
		$Qr=mysqli_query($con,$sel);
		$info=mysqli_fetch_assoc($Qr);
		
		
		?>
		<div class="row">

			<div class="col-xl-7 col-lg-7">
				<div class="about-title-section mb-30">
					<h1>
						<?= $info['cont_title'];?>
					</h1>
					<p>
						<?= $info['cont_details'];?>
					</p>
					<button class="theme-btn blue-bg-border mt-20"><span class="btn-text">
							<?= $info['cont_button'];?></span></button>
				</div>
			</div>
			<div class="col-xl-5 col-lg-5">
				<div class="about-right-img mb-30">
					<img src="admin/uploads/<?= $info['cont_photo'];?>" alt="">
				</div>
			</div>
		</div>

		<div class="row pt-65">
			<?php
			    $i=1;
				$sel="SELECT * FROM cs_facility";
				$Q=mysqli_query($con,$sel);
				while($data=mysqli_fetch_assoc($Q)){
				?>
			<div class="col-xl-4 col-lg-4 col-md-6">

				<div class="feature-wrapper mb-30">
					<div class="feature-title-heading">
						<h3>
							<?= $data['facility_title'];?>
						</h3>
						<span>0
							<?= $i++; ?></span>
					</div>
					<div class="feature-text">
						<p>
							<?= $data['facility_subtitle'];?>
						</p>
					</div>
				</div>

			</div>
			<?php
				}
				?>
		</div>
	</div>
</div>
<!-- about end -->
<!-- courses start -->
<div id="courses" class="courses-area courses-bg-height pt-100 pb-70" style="background-image: url(img/courses/courses_bg.png);">
	<div class="container">
		<div class="row">
			<div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
				<div class="section-title mb-50 text-center">
					<div class="section-title-heading mb-20">
						<h1 class="white-color">Our Latest Courses</h1>
					</div>
					<div class="section-title-para">
						<p class="white-color">Belis nisl adipiscing sapien sed malesu diame lacus eget erat Cras mollis scelerisqu Nullam arcu liquam here was consequat.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="courses-list">
			<div class="row courses-active">
				<?php
					
					$sel="SELECT * FROM cs_course";
					$Qr=mysqli_query($con,$sel);
					while($data=mysqli_fetch_assoc($Qr)){

					?>
				<div class="col-xl-12">

					<div class="courses-wrapper course-radius-none mb-30">
						<div class="courses-thumb">
							<a href="course-details.html"><img src="admin/uploads/<?= $data['course_photo'];?>" alt=""></a>
						</div>
						<div class="courses-author">
							<img src="" alt="">
						</div>
						<div class="course-main-content clearfix">
							<div class="courses-content">
								<div class="courses-category-name">
									<span>
										<a href="#">
											<?= $data['course_btntitle'];?></a>
									</span>
								</div>
								<div class="courses-heading">
									<h1><a href="course_details.html">
											<?= $data['course_title'];?></a></h1>
								</div>
								<div class="courses-para">
									<p>
										<?= $data['course_subtitle'];?>
									</p>
								</div>
							</div>
						</div>
						<div class="courses-wrapper-bottom clearfix">
							<div class="courses-icon d-flex f-left">
								<div class="courses-single-icon">
									<span class="ti-user"></span>
									<span class="user-number">35</span>
								</div>
								<div class="courses-single-icon">
									<span class="ti-heart"></span>
									<span class="user-number">35</span>
								</div>
							</div>
							<div class="courses-button f-right">
								<a href="course-details.php">
									<?= $data['course_button'];?></a>
							</div>
						</div>
					</div>

				</div>
				<?php
					}
					?>

			</div>
		</div>
	</div>
</div>
<!-- courses end -->
<!-- team start -->
<div class="team-area pt-95 pb-70">
	<div class="container">
		<div class="row">
			<div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
				<div class="section-title mb-50 text-center">
					<div class="section-title-heading mb-20">
						<h1 class="primary-color">Our Experience Advisors</h1>
					</div>
					<div class="section-title-para">
						<p class="gray-color">Belis nisl adipiscing sapien sed malesu diame lacus eget erat Cras mollis scelerisqu Nullam arcu liquam here was consequat.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="team-list">
			<div class="row">
				<?php
                $select="SELECT * FROM cs_team";
                $Qr=mysqli_query($con,$select);
                while($data=mysqli_fetch_assoc($Qr)){
     
                ?>
				<div class="col-xl-3 col-lg-3 col-md-6">
					<div class="team-wrapper mb-30">
						<div class="team-thumb">

							<img src="admin/uploads/<?= $data['team_pic']; ?>" alt="">
						</div>
						<div class="team-social-info text-center">
							<div class="team-social-para">
								<p>
									<?= $data['team_cont'];?>
								</p>
							</div>
							<div class="team-social-icon-list">
								<ul>
									<li><a href="#"><span class="ti-facebook"></span></a></li>
									<li><a href="#"><span class="ti-twitter-alt"></span></a></li>
									<li><a href="#"><span class="ti-google"></span></a></li>
									<li><a href="#"><span class="ti-linkedin"></span></a></li>
								</ul>
							</div>
						</div>
						<div class="team-teacher-info text-center">
							<h1>
								<?= $data['team_name'];?>
							</h1>
							<h2>
								<?= $data['team_des'];?>
							</h2>
						</div>
					</div>
				</div>
				<?php
                }
                    ?>

			</div>
		</div>
	</div>
</div>
<!-- team end -->
<!-- events start -->
<div id="events" class="events-area events-bg-height pt-100 pb-95" style="background-image: url(img/courses/courses_bg.png)">
	<div class="container">
		<div class="row">
			<div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
				<div class="section-title mb-50 text-center">
					<div class="section-title-heading mb-20">
						<h1 class="white-color">Upcoming Events</h1>
					</div>
					<div class="section-title-para">
						<p class="white-color">Belis nisl adipiscing sapien sed malesu diame lacus eget erat Cras mollis scelerisqu Nullam arcu liquam here was consequat.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="events-list mb-30">
		
			<div class="row">
			<?php
			
			$sel="SELECT * FROM cs_event";
			$Qr=mysqli_query($con,$sel);
			While($data=mysqli_fetch_assoc($Qr)){
			
			?>
				<div class="col-xl-6 col-lg-6">
					<div class="single-events mb-30">
						<div class="events-wrapper">
							<div class="events-inner d-flex">
								<div class="events-thumb">
									<img src="admin/uploads/<?= $data['event_photo'];?>" alt="">
								</div>
								<div class="events-text white-bg">
									<div class="event-text-heading mb-20">
										<div class="events-calendar text-center f-left">
											<span class="date">25</span>
											<span class="month">Sep, 2018</span>
										</div>
										<div class="events-text-title clearfix">
											<a href="#">
												<h4><?= $data['event_title'];?></h4>
											</a>
											<div class="time-area">
												<span class="ti-time"></span>
												<span class="published-time">05:23 AM - 09:23 AM</span>
											</div>
										</div>
									</div>
									<div class="events-para">
										<p><?= $data['event_detail'];?></p>
									</div>
									<div class="events-speaker">
										<h2>Speaker : <span>Alexzender</span></h2>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php
			}
				
				?>
			</div>
		</div>
		<div class="events-view-btn">
			<div class="row">
				<div class="col-xl-12">
					<div class="view-all-events text-center">
						<button class="yewello-btn">view all events<span>&rarr;</span></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- events end -->
<!-- testimonials start -->
<div class="testimonilas-area pt-100 pb-90">
	<div class="container">
		<div class="row">
			<div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
				<div class="section-title mb-50 text-center">
					<div class="section-title-heading mb-20">
						<h1 class="primary-color">What Our Students Say</h1>
					</div>
					<div class="section-title-para">
						<p class="gray-color">Belis nisl adipiscing sapien sed malesu diame lacus eget erat Cras mollis scelerisqu Nullam arcu liquam here was consequat.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="testimonilas-list">
			<div class="row testimonilas-active">
				<div class="col-xl-12">
					<div class="testimonilas-wrapper mb-110">
						<div class="testimonilas-heading d-flex">
							<div class="testimonilas-author-thumb">
								<img src="img/testimonials/testimonilas_author_thumb1.png" alt="">
							</div>
							<div class="testimonilas-author-title">
								<h1>Lisa McClanahan</h1>
								<h2>CSE Student</h2>
							</div>
						</div>
						<div class="testimonilas-para">
							<p>But also the leap into electronic type reman see essentially unchanged. It was popul arised thew with the release of letraset sheets.</p>
						</div>
						<div class="testimonilas-rating">
							<ul>
								<li><span class="ti-star"></span></li>
								<li><span class="ti-star"></span></li>
								<li><span class="ti-star"></span></li>
								<li><span class="ti-star"></span></li>
								<li><span class="ti-star"></span></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-xl-12">
					<div class="testimonilas-wrapper">
						<div class="testimonilas-heading d-flex">
							<div class="testimonilas-author-thumb">
								<img src="img/testimonials/testimonilas_author_thumb1.png" alt="">
							</div>
							<div class="testimonilas-author-title">
								<h1>Lisa McClanahan</h1>
								<h2>CSE Student</h2>
							</div>
						</div>
						<div class="testimonilas-para">
							<p>But also the leap into electronic type reman see essentially unchanged. It was popul arised thew with the release of letraset sheets.</p>
						</div>
						<div class="testimonilas-rating">
							<ul>
								<li><span class="ti-star"></span></li>
								<li><span class="ti-star"></span></li>
								<li><span class="ti-star"></span></li>
								<li><span class="ti-star"></span></li>
								<li><span class="ti-star"></span></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-xl-12">
					<div class="testimonilas-wrapper">
						<div class="testimonilas-heading d-flex">
							<div class="testimonilas-author-thumb">
								<img src="img/testimonials/testimonilas_author_thumb2.png" alt="">
							</div>
							<div class="testimonilas-author-title">
								<h1>Trevor J. Angelo</h1>
								<h2>Englisg Student</h2>
							</div>
						</div>
						<div class="testimonilas-para">
							<p>But also the leap into electronic type reman see essentially unchanged. It was popul arised thew with the release of letraset sheets.</p>
						</div>
						<div class="testimonilas-rating">
							<ul>
								<li><span class="ti-star"></span></li>
								<li><span class="ti-star"></span></li>
								<li><span class="ti-star"></span></li>
								<li><span class="ti-star"></span></li>
								<li><span class="ti-star"></span></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-xl-12">
					<div class="testimonilas-wrapper">
						<div class="testimonilas-heading d-flex">
							<div class="testimonilas-author-thumb">
								<img src="img/testimonials/testimonilas_author_thumb1.png" alt="">
							</div>
							<div class="testimonilas-author-title">
								<h1>Marquita Brown</h1>
								<h2>CSE Student</h2>
							</div>
						</div>
						<div class="testimonilas-para">
							<p>But also the leap into electronic type reman see essentially unchanged. It was popul arised thew with the release of letraset sheets.</p>
						</div>
						<div class="testimonilas-rating">
							<ul>
								<li><span class="ti-star"></span></li>
								<li><span class="ti-star"></span></li>
								<li><span class="ti-star"></span></li>
								<li><span class="ti-star"></span></li>
								<li><span class="ti-star"></span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- testimonials end -->
<!-- video start -->
<div class="video-area">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="video-wrapper text-center">
					<div class="video-content">
						<a class="popup-video" href="https://www.youtube.com/watch?v=i8nLrvcNcrg"><img src="img/video/play_icon.png" alt=""></a>
						<span>Watch Our Latest Video</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- video end -->
<!-- counter start -->
<div class="counter-area">
	<div class="container pt-90 pb-65">
		<div class="row">
			<div class="col-xl-3 col-lg-3 col-md-3">
				<div class="couter-wrapper mb-30 text-center">
					<img src="img/counter/counter_icon1.png" alt="">
					<span class="counter">10532</span>
					<h3>Satisfied Students</h3>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3">
				<div class="couter-wrapper mb-30 text-center">
					<img src="img/counter/counter_icon2.png" alt="">
					<span class="counter">7985</span>
					<h3>Courses Complated</h3>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3">
				<div class="couter-wrapper mb-30 text-center">
					<img src="img/counter/counter_icon3.png" alt="">
					<span class="counter">5382</span>
					<h3>Satisfied Students</h3>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3">
				<div class="couter-wrapper mb-30 text-center">
					<img src="img/counter/counter_icon4.png" alt="">
					<span class="counter">354</span>
					<h3>Expert Advisors</h3>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- counter end -->
<!-- latest_news start -->
<div id="blog" class="latest_news-area gray-bg pt-100 pb-70">
	<div class="container">
		<div class="row">
			<div class="col-xl-6 offset-xl-3 col-md-8 offset-md-2">
				<div class="section-title mb-50 text-center">
					<div class="section-title-heading mb-20">
						<h1 class="primary-color">Latest News</h1>
					</div>
					<div class="section-title-para">
						<p class="gray-color">Belis nisl adipiscing sapien sed malesu diame lacus eget erat Cras mollis scelerisqu Nullam arcu liquam here was consequat.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<?php
                $select="SELECT * FROM cs_news ORDER BY news_id DESC";
                $Qr=mysqli_query($con,$select);
                while($data=mysqli_fetch_assoc($Qr)){
     
                ?>
			<div class="col-xl-4 col-lg-4 col-md-6">
				<div class="blog-wrapper mb-30">
					<div class="blog-thumb mb-25">
						<a href="news_details.html"><img src="admin/uploads/<?= $data['news_img']; ?>" alt=""></a>
						<span class="blog-category">news</span>
					</div>
					<div class="blog-content">
						<div class="blog-meta">
							<span>Auguest 25, 2018</span>
						</div>
						<h5><a href="news_details.html">
								<?= $data['news_title'];?></a></h5>
						<p>
							<?= $data['news_subtitle'];?>
						</p>
						<div class="read-more-btn">
							<button>
								<?= $data['news_button'];?></button>
						</div>
					</div>
				</div>
			</div>
			<?php
                
                }
                ?>

		</div>
	</div>
</div>
<!-- latest_blog end -->

<?php
get_footer();

?>
