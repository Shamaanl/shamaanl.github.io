<?php
var_dump($_GET);
var_dump( isset($_GET['headn'],$_GET['textn']));
var_dump($_GET['headn'] !== '');
var_dump($_GET['headn'] !== '');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/media.css">
    <title>Шаблон новостей</title>
</head>
<body>
    <?php if(isset($_GET['headn'],$_GET['textn']) AND $_GET['headn'] !== '' AND $_GET['textn'] !== ''){
        $header = $_GET['headn'];
        $text = $_GET['textn'];
        echo('<div class="card">\n
        <div class="card-body">\n
        <h5 class="card-title">$header</h5>\n
        <p>$textn</p>\n
        </div>\n
        </div>\n');
    }
?>
</body>
</html>