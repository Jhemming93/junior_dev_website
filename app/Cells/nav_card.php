
<div class="card my-2 m-sm-2" style="width: 18rem; filter: drop-shadow(grey 5px 5px 5px);">
  <img src="<?= esc($image) ?>" class="card-img-top" alt="<?= esc($title) ?>">
  <div class="card-body">
    <p class="card-text text-center"><?= esc($description)?></p>
    <div class="d-flex justify-content-center">
      <a href="<?= esc($link) ?>" class="btn btn-custom-prime-green"><?= esc($title) ?></a>  
    </div>
  </div>
</div>