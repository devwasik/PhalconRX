<?= $this->tag->linkTo(['index/home', 'Home', 'class' => 'btn btn-primary', 'id' => 'menuButton', 'role' => 'button' ]) ?>

<?= $this->tag->linkTo(['index/test', 'Test Page', 'class' => 'btn btn-primary', 'id' => 'menuButton', 'role' => 'button']) ?>


<?= $this->tag->linkTo(['index/todo', 'To Do', 'class' => 'btn btn-primary', 'id' => 'menuButton', 'role' => 'button']) ?>

<?= $this->tag->linkTo(['#', 'Profile', 'class' => 'btn btn-primary', 'id' => 'menuButton', 'role' => 'button', 'data-toggle' => 'collapse' ]) ?>



<div id='profilemenu' class='collapse'>
    <?= $this->tag->linkTo(['index/index', 'My Profile', 'class' => 'btn btn-primary', 'id' => 'submenuButton', 'role' => 'button' ]) ?>
    <?= $this->tag->linkTo(['index/index', 'Account Settings', 'class' => 'btn btn-primary', 'id' => 'submenuButton', 'role' => 'button' ]) ?>
</div>


