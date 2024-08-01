<?php
    $most_entrusted = get_field('most_entrusted_home');
    $title = $most_entrusted['title'];
    $description = $most_entrusted['description'];
    $outstanding_numbers = $most_entrusted['outstanding_numbers'];
  ?>
<section id="most__entrusted">
  <h2 class="title__linear__gradient">
    <?php echo $title ?>
  </h2>
  <div class="description__most__entrusted">
    <?php echo $description ?>
  </div>
  <div style="width: 100%; height: 20.9375rem; margin-top: 3rem">
    <div class="item__slide"></div>
  </div>
</section>
<section id="numbers">
  <?php
  $total_items = count($outstanding_numbers);
  foreach ($outstanding_numbers as $index => $item){
  ?>
    <div class="box__numbers">
      <span class="count__numbers">
        <?php echo $item['numbers'] ?>
      </span>
      <div>
        <span class="item__description__for">
          <?php echo $item['content'] ?>
        </span>
      </div>
    </div>
    <?php 
    if ($index < $total_items - 1) {
    ?>
      <div class="line__horizontal__numbers"></div>
    <?php 
    }
    ?>
  <?php } ?>
</section>