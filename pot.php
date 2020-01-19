<?php 

$all = $db->all_ents();

?>

<div class="grid-row">
	<section id="portfolio" class="portfolio portfolio-4">
		<h2>All Entreprenuers</h2>
		<div class="grid">
			<!-- this is the object to return our information  -->
			<?php foreach ($all as $ent): ?>
				<?php $img = base64_encode($ent['image']); ?>
				<div class="item item-art">
					<div class="pic"><div>
						<img src="pic/portfolio/small-1.jpg" alt="">
						<img src="data:image/jpg;charset=utf8;base64,<?php echo $img ?>" alt="entreprenuer image here.	">
						<ul>
							<li><a href="data:image/jpg;charset=utf8;base64,<?php echo $img ?>" class="fa fa-eye fancybox"></a></li>
							<li><a href="single.php?view=<?php echo $ent['id'];?>" class="fa fa-info"></a></li>
						</ul>
					</div>
					</div>
					<h3><?php echo $ent['name']; ?></h3>
					<p class="desc"><?php echo $ent['description']; ?></p>
				</div>
			<?php endforeach; ?>
		</div>
	</section>
	<!--/ portfolio -->
	</div>
</main>
