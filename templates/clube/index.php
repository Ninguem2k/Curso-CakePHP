<?php $this->layout = 'master'; ?>

<?php $this->start('css'); ?>
<link rel="stylesheet" type="text/css" href="css/my_home.css">
<?php $this->end(); ?>

<?php $this->assign('title', 'My Clube Teste') ?>

<h1>Clube - Index</h1>

<ul>
    <?php foreach ($users as $user) : ?>
        <li>
            <?= $user->id ?> : <?= $user->firstName ?>
        </li>
    <?php endforeach; ?>
</ul>

<?php $this->start('sidebar'); ?>
<?php echo $this->element('sidebar'); ?>
<?php $this->end(); ?>