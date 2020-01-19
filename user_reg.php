		<!-- page content -->
        <main class="page-content-alt-2">					
				<div class="grid-row">					
					<div class="grid-col grid-col-6">
						<!-- contacts -->
						<div class="contacts">
							<h3>Contact Us</h3>
							<p><span>Address:</span>EinsteinRising locations and bla bla bla</p>
							<p><span>Phone number:</span>(123) 456-7890<br>(123) 456-7891</p>
							<p><span>E-mail:</span>info@einsteinrising.com<br></p>
							<!-- <p><span>Social links:</span></p> -->
							<div class="links clearfix">
                            <a class="twitter-timeline" data-height="350" href="https://twitter.com/EinsteinRising?ref_src=twsrc%5Etfw"></a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
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