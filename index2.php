
<?php include'superglobal.php'?>
<!DOCTYPE html>

<head>
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
</head>
<body>

<div class="container">
    <h1>Server File Info</h1> 

    <?php if($server): ?>

    <ul class="list-group">
       <?php foreach ($server as $key => $value):  ?>
        <li class="list-group-item">
            <strong><?php echo $key?></strong>
            <?php echo $value; ?>
        </li>
       <?php endforeach; ?>
    </ul>

    <?php endif ;?>
</div>
</body>
</html>