<section class="container" style="position: relative">
<div style="transform:translateY(-16px);">
  <div style="color: <?php block_field('colore'); ?>; position: relative; height: 525px;">
   <div id="testone" class="visibile">
    <h1 class="text-center" style="position: absolute; left: 50%; top: 60%; transform:translate(-50%);"><?php block_field('titolo'); ?></h1>
    <h5 class="text-center" style="position: absolute; left: 50%; top: 80%; transform:translate(-50%);"><?php block_field('testo'); ?></h5>
    <iframe width="100%" height="550px" src="https://www.youtube.com/embed/<?php block_field('link'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
   </div>
  </div>
</div>
</section>

 <!-- Inizio zona TEST -->

<script type="text/javascript">

  var container = document.querySelector('#testone');

    container.addEventListener('mouseenter', function(){
        this.classList.remove('visibile');
        this.classList.add('nascosto');
  })
    container.addEventListener('mouseleave', function(){
        this.classList.add('visibile');
        this.classList.remove('nascosto');
  })
</script>