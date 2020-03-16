		<!-- page content -->
			<main class="page-content-alt-2">
				<div class="grid-row">
					<div class="grid-col grid-col-6">
						<!-- contacts -->
						<div class="contacts">
							<h3>Contact Us</h3>
							<p><span>Address:</span>Plot 2530, Kabalagala, Ggaba Rd,
											3rd Floor, Tirupati Mazima Mall
											Suite 272 & 273, Socent Hub
											P.O. Box 4672, Kampala, Uganda</p>
							<p><span>Phone number:</span>+256 (0) 782 222878<br>+1.917.327.4252</p>
							<p><span>E-mail:</span>info@einsteinrising.com<br></p>
							<p><span>Social links:</span></p>
							<div class="links clearfix">
								<a href="https://www.facebook.com/EinsteinRising/" target="_blank" class="fa fa-facebook"></a>
								<a href="https://twitter.com/EinsteinRising" target="_blank" class="fa fa-twitter"></a>
								<!-- <a href="" class="fa fa-skype"></a>
								<a href="#" class="fa fa-rss"></a>
								<a href="#" class="fa fa-dribbble"></a> -->
							</div>
						</div>
						<!--/ contacts -->
					</div>

					<div class="grid-col grid-col-6">
						<!-- feedback -->
						<div class="feedback">
							<div class="composer">
								<center><h2>Register Enterprenuer</h2></center>
							</div>
							<form action="backend/reg_ent.php" method="post" enctype="multipart/form-data">
								<label>Your Name (required):</label>
								<input type="text" name="name" required>
								<label>Your E-Mail (required):</label>
								<textarea name="description" cols="30" rows="10"></textarea>

								<label>Pitching</label>
								<input type="text" name="pitch">

								<label>Business Development</label>
								<input type="text" name="bssdev" required>

								<label>Market</label>
								<input type="text" name="market" required>

								<div class="col-lg-12">
									<div class="add-dp" id="OpenImgUpload">
									<label>Upload Image</label>
										<input type="file" id="file" name="image" required>
									</div>
								</div>

								<button type="submit" class="button">register</button>
							</form>
						</div>
						<!--/ feedback -->
					</div>
				</div>
			</main>
			<!--/ page content -->
