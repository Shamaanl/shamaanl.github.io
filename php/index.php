<?php
    $filename = 'template.txt';
    $file = file_get_contents($filename);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Главная Страница</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/media.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand col-sm-12 col-md-6" href="#">МБОУ "СОШ №3 г.Никольское"</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Переключатель навигации">
          <span class="navbar-toggler-icon">
              <img src="/img/menu.png" width="32px">
          </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Главная</a>
            </li>
            <li class="nav-item" style="display: flex; align-items: center">
              <a href="#A">Контакты</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#footer-links" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Информация
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/html/second.html">Для учащихся</a></li>
            <li><a class="dropdown-item" href="/html/second.html">Для родителей</a></li>
            <li><a class="dropdown-item" href="/html/second.html">Для сотрудников</a></li>
            <li><a class="dropdown-item" href="/html/second.html">Прочая информация</a></li> 
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
   
   <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
<!--    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>-->
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/img/1sep.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>С первым сентября!</h5>
        <p>Наша школа рада снова открыть двери для своих учеников.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/img/WIP.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Новый сайт школы</h5>
        <p>Новый сайт школы был запущен в тестовом режиме.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="news"><h5>Новости</h5></div>

<div class = "second">
  <?php echo($file) ?>
</div>

   <div class="schnow">
      <h6>Школа сегодня</h6>
      <p>Школа богата своими традициями — ежегодно проводится театрализованный праздник "Здравствуй, школа!", КВНы, посвященные Дню рождения школы, в котором принимают участие ученики и учителя, субботники по благоустройству города, Никольской больницы, Новогодние праздники, где наравне с учениками выступают учителя, Дни памяти, уход за воинскими захоронениями, еженедельные линейки, Директорские тематические часы, вечера совместно с художественной галереей прикладного творчества, расположенной в здании начальной школы, праздники окончания учебного года, туристический слет и многое другое.</p>
          <p>Ученики школы показывают высокое качество обучения и успехи с районных олимпиадах.</p>
<p>В школе действуют и постоянные творческие коллективы и объединения- театральная студия "Дебют" (руководитель Плетнёва А.В.), центр прикладного творчеста, спортивные объединения.</p>
       <p>В школе работает бесплатные кружки художественно-эстетической и спортивной направленности, 15 факультативов развивающего плана и углубляющие знания учащихся по различным предметам.</p>
<p>Кроме этого школа оказывает дополнительные платные образовательные услуги, востребованные родителями и учащимися.</p>
    <p>Школа полностью укомплектована кадрами, ведутся все предметы базисного учебного плана и предметы регионального компонента. 80% учителей имеют высшее педагогическое образование, 20%-среднее специальное. 70% педагогов>аттестованы на высшую и 1 квалификационную категорию, что говорит о профессиональной компетентности кадров. Школа имеет высокий авторитет в городе и районе, востребована учениками и их родителями.</p>
    <p>Школа постоянно участвует в разного рода конкурсах районного и областного масштаба.</p>
<p>Средний возраст педагогических работников - 45 лет. Ежегодно в школу приходят молодые специалисты.</p> 
<p>В школе комфортная психологическая обстановка, стабильный состав педагогических кадров и вспомогательного персонала.</p>
<p>Выпускники школы практически 100% поступают в средние специальные и высшие учебные заведения.</p>
<p>Педагогический коллектив школы ставит своими задачами сохранить здоровье всех участников учебного процесса, повысить качество обучения, используя дифференциацию учебных маршрутов учеников, гендерный подход.</p>
<p>Школа живет и развивается. И, несмотря на свой почтенный возраст, она молода задором, творчеством и энтузиазмом ее педагогов и детей.</p>
  </div>
    <div align="right" class="info">
       <div float = "right"><h6>Информация</h6></div><div><img src="/img/info%20(1).png" style="width: 25px;"></div>
       <p>Всю прочую информацию вы можете найти по этой <a href="/html/second.html">ссылке</a>.</p>
    
    </div>
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>О нас</h6>
            <p class="text-justify">Муниципальное бюджетное общеобразовательное учреждение "Средняя  общеобразовательная школа №3 г.Никольское" Тосненского района Ленинградской области — старейшее образовательное учреждение г.Никольское и района. Ведёт свой отсчёт времени - после первой реформы Советской власти с 1918 г. </p>
          </div>

          <div class="col-xs-12 col-md-6">
            <h6 id="A">Контакты</h6>
            <ul class="footer-links">
              <p>187026, Ленинградская область, Тосненский район, г.Никольское, ул.Октябрьская д.9а</p>
              <p>Приёмная: тел. (813-61) 527-21</p>
              <p>График работы школы - с 8.00 до 17.00</p>
              <p>Выходные дни - суббота, воскресенье.</p>
              <p>Адрес - 187026, Ленинградская область, Тосненский район, г.Никольское, ул.Октябрьская д.9а</p>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">&copy; Муниципальное бюджетное общеобразовательное учреждение 
"Средняя  общеобразовательная школа №3 г.Никольское" 
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li class="fa"></li>
              <li class="fa"></li>
              <li class="fa"></li>
              <li class="fa"></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>
</body>
</html>