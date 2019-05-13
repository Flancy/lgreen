<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>L-Green - Питомник растений "Любава"</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('public') }}/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
    
    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ asset('public') }}/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{ asset('public') }}/css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{ asset('public') }}/css/bootstrap.css">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{ asset('public') }}/css/flexslider.css">
    <!-- Theme style  -->
    <link rel="stylesheet" href="{{ asset('public') }}/css/style.css">
    <!-- Modernizr JS -->
    <script src="{{ asset('public/') }}/js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <header>
        <div class="container-navbar">
            <button type="button" class="btn-navbar active" data-toggle="modal" data-target="#helper" >Оставить заявку</button>
            <a class="pload" href="php/prezentation.pdf" download>
                <span >Скачать презентацию</span>
            </a>
            <a class="pload" href="#test">
                <span>Просмотреть все модули</span>
            </a>
            <div class="phone">
                <i class="icon-phone flip-horizontal"></i>&nbsp;&nbsp;<a href="tel:+7 (926) 349 99 32">8 926 349 99 32</a>
            </div>
            
        </div>
    </header>
    <div id="fh5co-page">
        <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
        <aside id="fh5co-aside" role="complementary" class="border">
            <h1 id="fh5co-logo"><a href="/"><img src="{{ asset('public') }}/images/logo.png" /></a></h1>
            <nav id="fh5co-main-menu" role="navigation">
                <ul>
                    <li class="fh5co-active"><a href="/">Главная</a></li>
                    <li><a href="/catalog">Каталог</a></li>
                    <li><a href="/price">Прайс-лист</a></li>
                    <li><a href="/blog">Школа садовода</a></li>
                    <li><a href="/portfolio">Наши работы</a></li>
                    <li><a href="/about">О нас</a></li>
                    <li><a href="/contact">Контакты</a></li>
                </ul>
            </nav>
            <div class="fh5co-footer">
                <p><small>© 2019 Питомник - "Любава"</small></p>
                <ul>
                    <li><a href="#">
                        <i class="icon-facebook2"></i>
                    </a></li>
                    <li><a href="#">
                        <i class="icon-vk"></i>
                    </a></li>
                    <li><a href="#">
                        <i class="icon-instagram"></i>
                    </a></li>
                </ul>
            </div>
        </aside>
        
        @yield('content')
        <!-- jQuery -->
        <script src="{{ asset('public') }}/js/jquery.min.js"></script>
        <!-- jQuery Easing -->
        <script src="{{ asset('public') }}/js/jquery.easing.1.3.js"></script>
        <!-- Bootstrap -->
        <script src="{{ asset('public') }}/js/bootstrap.min.js"></script>
        <!-- Waypoints -->
        <script src="{{ asset('public') }}/js/jquery.waypoints.min.js"></script>
        <!-- Flexslider -->
        <script src="{{ asset('public') }}/js/jquery.flexslider-min.js"></script>
        <!-- Google Map -->
        <script src="https://api-maps.yandex.ru/2.1/?apikey=1ff71f13-657d-4345-8f6f-11e21ccb039b&lang=ru_RU" type="text/javascript"></script>
        <script src="js/yandex_map.js"></script>
        <!-- MAIN JS -->
        <script src="{{ asset('public') }}/js/main.js"></script>
        <script src="{{ asset('public') }}/js/jquery.localScroll.js"></script>
        <script src="{{ asset('public') }}/js/jquery.localScroll.min.js"></script>
        <!-- Modal -->
        <div class="modal fade modalBuy" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalBuyTitle">Овощи</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <table class="table table-bordered">
                                <thead class="thead">
                                    <tr>
                                        <th scope="col-md-4"><b>Наименование товара</b></th>
                                        <th scope="col-md-4"><b>Количество</b></th>
                                        <th scope="col-md-4"><b>Покупка</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="modal-title-price"></td>
                                        <td><input type="text" class="form-control" id="col" placeholder="Кол-во"></td>
                                        <td><center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalOrderCatalog">
                                            Сделать заказ
                                        </button></center></td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Выйти</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Заказ обратного звонка</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Надо добавить в форму конфигурацию .php -->
                        <form>
                            <label for="name">Имя <font color="red">*</font></label>
                            <input type="text" class="form-control" id="name" placeholder="Ваше имя">
                            <br>
                            <label for="email">Email <font color="red">*</font></label>
                            <input type="email" class="form-control" id="email" placeholder="Ваш Email">
                            <br>
                            <label for="phone">Номер телефона <font color="red">*</font></label>
                            <input type="phone" class="form-control" id="phone" placeholder="Ваш номер телефона">
                            <hr>
                            <p>Пункты отмеченные <font color="red">*</font> обязательны к заполнению.</p>
                            <hr>
                            <p>Наш сотрудник свяжется с вами в кротчайшие сроки.</p>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Выйти</button>
                        <button type="button" class="btn btn-primary">Заказать звонок</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="helper" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Заявка</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Надо добавить в форму конфигурацию .php -->
                        <form method="POST" action="{{ url('mailHelper') }}">
                            @csrf
                            <label for="name">Имя <font color="red">*</font></label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Ваше имя">
                            <br>
                            <label for="email">Email <font color="red">*</font></label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Ваш Email">
                            <br>
                            <label for="phone">Номер телефона <font color="red">*</font></label>
                            <input type="phone" name="phone" class="form-control" id="phone" placeholder="Ваш номер телефона">
                            <br>
                            <label for="comment">Комментарии</label>
                            <textarea class="form-control" name="comment" id="comment" placeholder="Ваши комментарии"></textarea>
                            <hr>
                            <p>Пункты отмеченные <font color="red">*</font> обязательны к заполнению.</p>
                            <hr>
                            <p>Наш сотрудник свяжется с вами в кротчайшие сроки.</p>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Выйти</button>
                                <button type="submit" class="btn btn-primary">Отправить заявку</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="video-banner" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Промо-ролик</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <iframe class="video-banner" src="https://www.youtube.com/embed/p9wHugkLNCo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>