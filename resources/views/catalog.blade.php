@extends('layouts.app')
@section('content')
<div id="fh5co-main" class="catalog">
    <div class="container spacing">
        <h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Каталог</h2>
        <div class="row row-bottom-padded-md">
            <div class="col-md-4 col-padding text-center animate-box">
                <a href="" type="button" data-toggle="modal" data-target=".modalDecor" class="work image-popup" style="background-image: url(images/catalog-img/list-kust.jpg);">
                    <div class="desc">
                        <h3>Декоративные <br />кустарники</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-padding text-center animate-box">
                <a href="" type="button" data-toggle="modal" data-target=".modalPlod" class="work image-popup" style="background-image: url(images/catalog-img/yag.jpg);">
                    <div class="desc">
                        <h3>Плодовые</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-padding text-center animate-box">
                <a href="" type="button" data-toggle="modal" data-target=".modalRose" class="work image-popup" style="background-image: url(images/catalog-img/rose.jpg);">
                    <div class="desc">
                        <h3>Розы</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-padding text-center animate-box">
                <a href="" type="button" data-toggle="modal" data-target=".modalTree" class="work image-popup" style="background-image: url(images/catalog-img/list.jpg);">
                    <div class="desc">
                        <h3>Лиственные деревья</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-padding text-center animate-box">
                <a href="" type="button" data-toggle="modal" data-target=".modalHvoi" class="work image-popup" style="background-image: url(images/catalog-img/hvoi.jpg);">
                    <div class="desc">
                        <h3>Хвойные</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-padding text-center animate-box">
                <a href="" type="button" data-toggle="modal" data-target=".modalBonsan" class="work image-popup" style="background-image: url(images/catalog-img/bonsai.jpg);">
                    <div class="desc">
                        <h3>Бонсаи</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-padding text-center animate-box">
                <a href="" type="button" data-toggle="modal" data-target=".modalLian" class="work image-popup" style="background-image: url(images/catalog-img/liana.jpg);">
                    <div class="desc">
                        <h3>Лианы</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-padding text-center animate-box">
                <a href="" type="button" data-toggle="modal" data-target=".modalGason" class="work image-popup" style="background-image: url(images/catalog-img/gazon.jpg);">
                    <div class="desc">
                        <h3>Газон</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-padding text-center animate-box">
                <a href="" type="button" data-toggle="modal" data-target=".modalMnogo" class="work image-popup" style="background-image: url(images/catalog-img/mnogolet.jpg);">
                    <div class="desc">
                        <h3>Многолетники</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-padding text-center animate-box">
                <a href="" type="button" data-toggle="modal" data-target=".modalClub" class="work image-popup" style="background-image: url(images/catalog-img/strawberry.jpg);">
                    <div class="desc">
                        <h3>Клубника</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-padding text-center animate-box">
                <a href="" type="button" data-toggle="modal" data-target=".modalIzgor" class="work image-popup" style="background-image: url(images/catalog-img/izgorodi.jpg);">
                    <div class="desc">
                        <h3>Изгороди</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-padding text-center animate-box">
                <a href="" type="button" data-toggle="modal" data-target=".modalEco" class="work image-popup" style="background-image: url(images/catalog-img/ecodesing.jpg);">
                    <div class="desc">
                        <h3>Экодизайн</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-padding text-center animate-box">
                <a href="" type="button" data-toggle="modal" data-target=".modalModule" class="work image-popup" style="background-image: url(images/catalog-img/ozelen.jpg);">
                    <div class="desc">
                        <h3>Модули</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-padding text-center animate-box">
                <a href="" type="button" data-toggle="modal" data-target=".modalSoput" class="work image-popup" style="background-image: url(images/catalog-img/sop.jpg);">
                    <div class="desc">
                        <h3>Сопутствующие товары</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="modal fade bd-example-modal-lg modalDecor" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Декоративные кустарники</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Надо добавить в форму конфигурацию .php -->
                    <form>
                        <table class="table table-bordered">
                            <thead class="thead">
                                <tr>
                                    <th scope="col-md-4">Наименование товара</th>
                                    <th scope="col-md-4">Описание</th>
                                    <th scope="col-md-4">Фото</th>
                                    <th scope="col-md-4">Покупка</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    @if($product->category_id == 1)
                                    <tr>
                                        <td class="titleProduct">{{$product->title}}</td>
                                        <td>@markdown($product->description)</td>
                                        <td><img src="storage\{{$product->image}}" /></td>
                                        <td><center><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modalBuy">
                                            Сделать заказ
                                        </button></center></td>
                                    </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bd-example-modal-lg modalPlod" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Плодовые</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Надо добавить в форму конфигурацию .php -->
                    <form>
                        <table class="table table-bordered">
                            <thead class="thead">
                                <tr>
                                    <th scope="col-md-4">Наименование товара</th>
                                    <th scope="col-md-4">Описание</th>
                                    <th scope="col-md-4">Фото</th>
                                    <th scope="col-md-4">Покупка</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    @if($product->category_id == 2)
                                    <tr>
                                        <td class="titleProduct">{{$product->title}}</td>
                                        <td>@markdown($product->description)</td>
                                        <td><img src="storage\{{$product->image}}" /></td>
                                        <td><center><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modalBuy">
                                            Сделать заказ
                                        </button></center></td>
                                    </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bd-example-modal-lg modalRose" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Розы</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Надо добавить в форму конфигурацию .php -->
                    <form>
                        <table class="table table-bordered">
                            <thead class="thead">
                                <tr>
                                    <th scope="col-md-4">Наименование товара</th>
                                    <th scope="col-md-4">Описание</th>
                                    <th scope="col-md-4">Фото</th>
                                    <th scope="col-md-4">Покупка</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    @if($product->category_id == 3)
                                    <tr>
                                        <td class="titleProduct">{{$product->title}}</td>
                                        <td>@markdown($product->description)</td>
                                        <td><img src="storage\{{$product->image}}" /></td>
                                        <td><center><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modalBuy">
                                            Сделать заказ
                                        </button></center></td>
                                    </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bd-example-modal-lg modalTree" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Лиственные деревья</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Надо добавить в форму конфигурацию .php -->
                    <form>
                        <table class="table table-bordered">
                            <thead class="thead">
                                <tr>
                                    <th scope="col-md-4">Наименование товара</th>
                                    <th scope="col-md-4">Описание</th>
                                    <th scope="col-md-4">Фото</th>
                                    <th scope="col-md-4">Покупка</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    @if($product->category_id == 7)
                                    <tr>
                                        <td class="titleProduct">{{$product->title}}</td>
                                        <td>@markdown($product->description)</td>
                                        <td><img src="storage\{{$product->image}}" /></td>
                                        <td><center><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modalBuy">
                                            Сделать заказ
                                        </button></center></td>
                                    </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bd-example-modal-lg modalMnogo" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Многолетники</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Надо добавить в форму конфигурацию .php -->
                    <form>
                        <table class="table table-bordered">
                            <thead class="thead">
                                <tr>
                                    <th scope="col-md-4">Наименование товара</th>
                                    <th scope="col-md-4">Описание</th>
                                    <th scope="col-md-4">Фото</th>
                                    <th scope="col-md-4">Покупка</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    @if($product->category_id == 5)
                                    <tr>
                                        <td class="titleProduct">{{$product->title}}</td>
                                        <td>@markdown($product->description)</td>
                                        <td><img src="storage\{{$product->image}}" /></td>
                                        <td><center><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modalBuy">
                                            Сделать заказ
                                        </button></center></td>
                                    </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bd-example-modal-lg modalClub" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Клубника</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Надо добавить в форму конфигурацию .php -->
                    <form>
                        <table class="table table-bordered">
                            <thead class="thead">
                                <tr>
                                    <th scope="col-md-4">Наименование товара</th>
                                    <th scope="col-md-4">Описание</th>
                                    <th scope="col-md-4">Фото</th>
                                    <th scope="col-md-4">Покупка</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    @if($product->category_id == 6)
                                    <tr>
                                        <td class="titleProduct">{{$product->title}}</td>
                                        <td>@markdown($product->description)</td>
                                        <td><img src="storage\{{$product->image}}" /></td>
                                        <td><center><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modalBuy">
                                            Сделать заказ
                                        </button></center></td>
                                    </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalOrderCatalog" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Купить <span class="titlePriceItem"></span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ url('mailCatalog') }}">
                        @csrf
                        <input type="hidden" name="item">
                        <input type="hidden" name="count">
                        <label for="name">Имя <font color="red">*</font></label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Ваше имя">
                        <br>
                        <label for="email">Email <font color="red">*</font></label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Ваш Email">
                        <br>
                        <label for="phone">Номер телефона <font color="red">*</font></label>
                        <input type="phone" name="phone" class="form-control" id="phone" placeholder="Ваш номер телефона">
                        <hr>
                        <p>Пункты отмеченные <font color="red">*</font> обязательны к заполнению.</p>
                        <hr>
                        <p>Наш сотрудник свяжется с вами в кротчайшие сроки.</p>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Выйти</button>
                            <button type="submit" class="btn btn-primary">Заказать звонок</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection