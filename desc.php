	<!-- page content -->
			<main class="page-content-alt-2">
				<div id="portfolio-carousel" class="owl-carousel">
					<div class="item">
						<div class="grid-row">
							<div class="grid-col grid-col-9">
								<!-- portfolio -->
								<div class="portfolio portfolio-1">
									<div class="grid">
										<div class="item">
											<h1><?php echo $info['name'] ?></h1>
											<div class="pic"><div>
												<img src="pic/portfolio/huge-1.jpg" alt="">
											</div></div>
											<div class="share clearfix">
												<p>
													Complete description goes here.
												</p>
											</div>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
								<!--/ portfolio -->
							</div>

							<div class="grid-col grid-col-3">
								<div class="widget-area">
									<!-- widget details -->
									<div class="widget widget-details">
										<div class="head"><i class="blue fa fa-wrench"></i>Entreprenuer Perfomance</div>
										<?php if (!empty($details)): ?>
											<?php foreach ($details as $key ): ?>
												<div class="cont">
													<ul>
														<li><i class="fa fa-angle-right"></i>Pitching - <?php echo $key['pitching'];  ?>%</li>
														<li><i class="fa fa-angle-right"></i>Marketing - <?php echo $key['marketing'];  ?>%</li>
														<li><i class="fa fa-angle-right"></i>Business Development - <?php echo $key['businessDev'];  ?>%</li>

														<li><i class="fa fa-angle-right"></i>WebSite: <a href="#">www."the 8".com</a></li>
													</ul>
													<p>
														A simple description of the ent here
													</p>
												</div>
											<?php endforeach; ?>
										<?php endif; ?>
										<div class="foot">
											<a href="gallery.php?id=<?php echo $info['id']; ?>" class="button button-alt">view Gallery</a>
											<br><br>
										</div>
									</div>
								</div>
								</div>
								<!-- attaching an image to an intreprenuer -->

						</div>
					</div>

		</div>
