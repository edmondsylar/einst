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
								<center><h2>Register</h2>
                                <?php if(isset($_GET['error'])):?>
                                    <label for="error"><span style="color: red;"><?php echo $_GET['error']; ?> </span></label>
								<?php endif; ?>
                                </center>
							</div>
							<form action="backend/register.php" method="post" enctype="multipart/form-data">
								<label>Your Name (required):</label>
								<input type="text" name="name" required>

                                <label>Your E-Mail (required):</label>
                                <input type="email" name="email" id="">

								<label>Telephone Number (required):</label>
                                <input type="text" name="tel" id="">

								<label>Password:</label>
                                <input type="password" name="password" id="">

								<label>confirm Password</label>
                                <input type="password" name="repeat-password" id="">
								<button type="submit" class="button">SignUp</button>
							</form>
						</div>
						<!--/ feedback -->
					</div>
				</div>
			</main>
			<!--/ page content -->
