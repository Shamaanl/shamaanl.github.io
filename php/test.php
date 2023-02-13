<?php
if (isset($_POST['textn']) && !empty(trim($_POST['textn'])) && isset($_POST['headn']) && !empty(trim($_POST['headn']))) {
    $path ='../img/news/'.$_FILES['filename']['name'];
    $head = $_POST['headn'];
    $text = $_POST['textn'];
    $filename = 'template.txt';
    if(move_uploaded_file($_FILES['filename']['tmp_name'], '../img/news/'.$_FILES['filename']['name'])){
        echo('файл скопирован на сервер');
        $fileText = '<div class="card card1">
    <div class="card-body">
        <img src="'.$path.'" class="d-block w-100" alt="...">
        <h5 class="card-title">'.$head.'</h5>
        <p class="card-text">'.$text.'</p>
    </div>
</div>';
    }else{
        echo('файл не скопирован на сервер');
        $fileText = '<div class="card card1">
    <div class="card-body">
        <h5 class="card-title">'.$head.'</h5>
        <p class="card-text">'.$text.'</p>
    </div>
</div>';
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Генератор новостей</title>
</head>
<body>
    <form action="#" enctype="multipart/form-data" method="POST">
    <textarea type="text" name="headn" rows="10" cols="45" placeholder="Введите заголовок"> </textarea>
    <textarea type="text" name="textn" rows="10" cols="45" placeholder="Введите текст"> </textarea>
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    Отправить этот файл: <input name="filename" type="file" accept="image/*"/>
    <input type="submit" value="Отправить файл" />
    </form>
    <a href="index.php">Тык</a>
</body>
</html>
