<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= h($this->fetch('title', 'Curso - CakePHP')); ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <?= $this->fetch('css') ?>

</head>

<body>
    <div class="container">
        <h2>Curso de CakePHP</h2>
        <?php echo $this->fetch('content') ?>
        <?php echo $this->fetch('sidebar') ?>
    </div>
</body>

<?= $this->fetch('script') ?>

</html>