<section class="container" style="position: relative">
<div class="">
  <div style="color: <?php block_field('colore'); ?>; position: relative; height: 100%;">
    <h1 class="text-center" style="position: absolute; left: 50%; top: 60%; transform:translate(-50%);"><?php block_field('titolo'); ?></h1>
    <h5 class="text-center" style="position: absolute; left: 50%; top: 80%; transform:translate(-50%);"><?php block_field('testo'); ?></h5>
    <iframe width="100%" height="550px" src="https://www.youtube.com/embed/<?php block_field('link'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
   </div>
  </div>
</div>
</section>

 <!-- Inizio zona TEST -->

<section class="container">
  <div style="position: relative; background-image: url('<?php block_field('immagine'); ?>'); background-size: cover; background-position: top center; height: 500px;">
    <div style="color: <?php block_field('colore'); ?>; background-color: rgba(0,0,0,0.4); height: 100%;">
      <h1 class="text-center" style="position: absolute; left: 50%; top: 60%; transform:translate(-50%);"><?php block_field('titolo'); ?></h1>
      <h5 class="text-center" style="position: absolute; left: 50%; top: 80%; transform:translate(-50%);"><?php block_field('testo'); ?></h5>
      <a href="https://www.youtube.com/watch?v=<?php block_field('link'); ?>"><img class="icona-genitore" src="<?php echo get_stylesheet_directory_uri()?>/img/play.svg" style="position: absolute; left: 50%; top: 30%; transform:translate(-50%); max-width: 128px; height: auto;"></a>
    </div>
  </div>
</section>

<script type="text/javascript">

  var container = document.querySelector('#container');

    container.addEventListener('mouseenter', function(){
        this.classList.remove('first');
        this.classList.add('second');
  })
    container.addEventListener('mouseleave', function(){
        this.classList.add('first');
        this.classList.remove('second');
  })
</script>