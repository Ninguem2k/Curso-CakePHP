<?php $this->layout = 'master'; ?>

<?php $this->start('css'); ?>
<link rel="stylesheet" type="text/css" href="css/my_home.css">
<?php $this->end(); ?>

<?php $this->assign('title', 'My About Teste') ?>

<h1>About - Index</h1>

<?php $this->start('sidebar'); ?>
<?php echo $this->element('sidebar'); ?>
<?php $this->end(); ?>