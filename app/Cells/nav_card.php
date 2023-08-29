<?php $image = "/img-defaults/placeholder.png"; ?>

<div class="card my-2" style="width: 18rem;">
  <img src="<?= esc($image) ?>" class="card-img-top" alt="<?= esc($title) ?>">
  <div class="card-body">
    <p class="card-text text-center"><?= esc($description)?></p>
    <div class="d-flex justify-content-center">
      <a href="<?= esc($link) ?>" class="btn btn-custom-prime-green"><?= esc($title) ?></a>  
    </div>
  </div>
</div>