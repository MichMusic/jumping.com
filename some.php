<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" 
            crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <link rel="stylesheet" href="style.css">
</head>
<body>
        <form action="index.html">
                <button type="submit">Вернуться на главную</button>
        </form>

        <section>
                <a name="Catalog"></a>
                        <div class="container">
                                <div class="left-side">
                                    <div class="title">
                                        <h1>Отзывы наших клиентов</h1>
                                    </div>
                                </div>
                        </div>
                <?php

                $connection = mysqli_connect('127.0.0.1','marina', 'tf##.,coDdl');
                $connection->query('use `marina`');

                try {
                        $message_client_about_things;
                        $rewies = mysqli_query($connection, "SELECT * FROM `Reviews`");
                        $rewies = mysqli_fetch_all($rewies);

                        foreach($rewies as $rewi) {
                                echo 
                                        '
                                                <div class="card-container">
                                                        <div class="card card-1">
                                                        <div class="rotation">
                                                        <h1 name="user_name">'
                                                        .$rewi[1].
                                                        '</h1>
                                                        </div>
                                                        <div name="message_client_about_things" class="color2">'
                                                        .$rewi[3].
                                                        '</div>
                                                        </div>
                                                </div>
                                        ';
                }

                
        }      
        catch(Exception $exeption) {
                echo "$exeption";
        }
?>

        </section>


        <section class="footer-section">
                <div class="container" style="padding-bottom:5rem;">
                    <img src="./img/general_logotip.png" alt="" class="star star-s5">
                    <div class="left-side">
                        <div class="title">
                            <h1>Покупайте у нас</h1>
                            <h2>и питомцы скажут вам спасибо</h2>
                        </div>
                    </div>
                    <div class="right-side">
                        <p class="txt">
                            Для нас <span>качество превышего всего</span>
                            наш магазин сконцентирован <span>на удовольствиии</span>
                            для ваших питомцев.
                        </p>
                    </div>
                </div>
        
                <div class="line"></div>
        
                <div class="container sides">
                    <div class="left-side">
                        <div class="logo">
                            <img src="./img/general_logotip.png" class="star" alt="">
                            <div>Хвостик</div>
                        </div>
        
                        <p class="p">
                            Мы располагаемся по всей России,<br>
                            наш ассартимент самый крупный в стране
                        </p>
        
                        <ul class="menu-items">
                            <li><a href="index.html#We">О нас</a></li>
                            <li><a href="index.html#Catalog">Каталог</a></li>
                            <li><a href="index.html#Contackts">Контакты</a></li>
                            <li><a href="index.html#Manufactory">Наше производство</a></li>
                        </ul>
        
        
                    </div>
                    <div class="right-side">
                        <ul class="menu">
                            <li><a href="https://t.me/chirgadzik">Telegram</a></li>
                            <br>
                            <p></p>
                            <li><a href="https://vk.com/saundpoop2">VK</a></li>
                        </ul>
        
                        <form action="index.html">
                            <button type="submit">Вернуться на главную</button>
                        </form>
                    </div>
                </div>
        </section>
        
        <footer>
                <a name="Contackts"></a>
        
                <div class="container">
                    <div class="left-side">
                        <p> &copy; Copyright Чиргадзе.М.Т 2023 . ИС-4-2</p>
                    </div>
                </div>
        </footer>
</body>
</html>