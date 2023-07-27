<?php $this->layout = 'master'; ?>

<?php $this->start('css'); ?>
<link rel="stylesheet" type="text/css" href="css/my_home.css">
<?php $this->end(); ?>

<h1>Home - Index - <?= $name; ?></h1>

<?php $this->start('sidebar'); ?>
<?php echo $this->element('sidebar'); ?>
<?php $this->end(); ?>

<?php $this->start('script'); ?>
<script>
    alert("Hellou Word");
</script>
<?php $this->end(); ?>