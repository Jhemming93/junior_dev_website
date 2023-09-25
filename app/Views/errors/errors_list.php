<?php if (! empty($errors)): ?>
    <div class="alert alert-danger" role="alert">
        <ul class="list-unstyled">
        <?php foreach ($errors as $error): ?>
            <li class="fw-bold"><?= esc($error) ?></li>
        <?php endforeach ?>
        </ul>
    </div>
<?php endif ?>