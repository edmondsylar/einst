<div class="grid-row">
  <section id="portfolio" class="portfolio portfolio-4">
    <h2>Gallery <span><?php echo $info['name'] ?></span> </h2>
    <div class="grid">

      <!-- this is the object to return our information  -->
     	<?php if (!empty($gallery)): ?>
       <?php foreach ($gallery as $gala): ?>
          <?php
            $img = base64_encode($gala['image']);
            $value = "data:image/jpg;charset=utf8;base64,<?php echo $img ?>"
          ?>
          <div class="item item-art">
            <div class="pic"><div>
              <img src="data:image/jpg;charset=utf8;base64,<?php echo $img ?>" alt="">
              <span></span>
              <ul>
                <li><a href="data:image/jpg;charset=utf8;base64,<?php echo $img ?>" class="fa fa-eye fancybox"></a></li>
                <br>
                <p class="module">
                  <?php echo $gala['description']; ?>
                </p>
              </ul>
            </div>
            </div>
            <p class="module">
            <?php echo $gala['description']; ?>
            </p>
          </div>
        <?php endforeach; ?>

       <?php else: ?>
       <h1>No images attached to this entreprenuer</h1>

    <?php endif; ?>
    </div>

        <?php if($_SESSION['role'] == 'admin'): ?>
          <div class="grid-row">
                    <br><br>
                    <div class="grid-col grid-col-3">
                      <div class="widget-area">
                        <!-- widget details -->
                        <div class="widget widget-details">
                          <div class="head"><i class="blue fa fa-upload"></i>Attach Images</div>

                            <form action="backend/gallery.php" method="POST" enctype="multipart/form-data">
                              <input type="hidden" name="userid" value="<?php echo $_GET['id']; ?>">
                                <textarea placeholder="Image Description" name="description" cols="25" rows="10"></textarea>
                                <input type="file" id="file" name="image">
                              <div class="foot">
                              <button type="submit" class="button">Add to gallery</button>
                            </div>
                          </form>
                        </div>
                      </div>
                      </div>
                    </div>
                  <?php endif; ?>
  </section>
  <!--/ portfolio -->
</div>
</main>
