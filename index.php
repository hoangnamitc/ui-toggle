<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ui toggle</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>

    <?php require 'functions.php'; ?>

    <div class="container">

        <div class="checkbox">
            <label>Kích hoạt:</label>
            <?= checkbox_field([
                'name'    => 'enable',
                'id'      => 'input1',
                'class'   => 'ui-toggle',
                'checked' => true
            ]); ?>
        </div>

        <div class="checkbox">
            <label>Thông báo:</label>
            <?= checkbox_field([
                'name'    => 'notification',
                'id'      => 'input2',
                'class'   => 'ui-toggle',
                'checked' => false
            ]); ?>
        </div>

    </div><!-- /.container -->

</body>
</html>