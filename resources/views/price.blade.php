@extends('layouts.app')
@section('content')
<div id="csrf">{{ csrf_token() }}</div>
<div id="fh5co-main" class="price">
    <div class="container spacing">
        <h2 class="fh5co-heading animate-box" data-animate-effect="fadeInUp">Прайс лист</h2>
        <div class="row">
            @foreach($categories as $category)
                <div class="col-md-6">
                    <div class="fh5co-feature animate-box" data-animate-effect="fadeInUp">
                        <div class="fh5co-icon">
                            <i><a href="" type="button" data-title="{{ $category->title }}" data-id="{{ $category->id }}" data-toggle="modal" data-target=".bd-example-modal-lg"><img src="{{ url('storage/'.$category->image) }}" /></a></i>
                        </div>
                        <div class="fh5co-text">
                            <h3 class="titleForModal">{{ $category->title }}</h3>
                            <p>{{ $category->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <hr>
    <div class="container moduls spacing-fix">
        <h2 class="fh5co-heading animate-box" data-animate-effect="fadeInUp">Модули</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="fh5co-feature animate-box" data-animate-effect="fadeInUp">
                    <div class="card">
                        <img src="images/icons/green.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="fh5co-text"><h3>Комплект <font color="#519830">Липовый цвет</font></h3></div>
                            
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#lipcolor">Купить модуль</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="fh5co-feature animate-box" data-animate-effect="fadeInUp">
                    <div class="card">
                        <img src="images/icons/green.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="fh5co-text"><h3>Комплект <font color="#519830">Березовая роща</font></h3></div>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#berros">Купить модуль</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="fh5co-feature animate-box" data-animate-effect="fadeInUp">
                    <div class="card">
                        <img src="images/icons/green.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="fh5co-text"><h3>Комплект <font color="#519830">Дубовая аллея</font></h3></div>
                            
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#duballe">Купить модуль</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="fh5co-feature animate-box" data-animate-effect="fadeInUp">
                    <div class="card">
                        <img src="images/icons/green.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="fh5co-text"><h3>Комплект <font color="#519830">Кленовый бульвар</font></h3></div>
                            
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#klenbul">Купить модуль</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="fh5co-feature animate-box" data-animate-effect="fadeInUp">
                    <div class="card">
                        <img src="images/icons/green.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="fh5co-text"><h3>Комплект <font color="#519830">Ясеневая аллея</font></h3></div>
                            
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#yasenale">Купить модуль</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="fh5co-feature animate-box" data-animate-effect="fadeInUp">
                    <div class="card">
                        <img src="images/icons/green.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="fh5co-text"><h3>Комплект <font color="#519830">Еловый бор</font></h3></div>
                            
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#elobor">Купить модуль</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="fh5co-feature animate-box" data-animate-effect="fadeInUp">
                    <div class="card">
                        <img src="images/icons/green.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="fh5co-text"><h3>Комплект <font color="#519830">Пихтовый рай</font></h3></div>
                            
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#piht">Купить модуль</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="fh5co-feature animate-box" data-animate-effect="fadeInUp">
                    <div class="card">
                        <img src="images/icons/green.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="fh5co-text"><h3>Комплект <font color="#519830">Сосновый бор</font></h3></div>
                            
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#sosbor">Купить модуль</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="fh5co-feature animate-box" data-animate-effect="fadeInUp">
                    <div class="card">
                        <img src="images/icons/green.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="fh5co-text"><h3>Комплект <font color="#519830">Дивный пруд</font></h3></div>
                            
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#divprud">Купить модуль</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="fh5co-feature animate-box" data-animate-effect="fadeInUp">
                    <div class="card">
                        <img src="images/icons/green.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="fh5co-text"><h3>Комплект <font color="#519830">Лиственная аллея</font></h3></div>
                            
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#listale">Купить модуль</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="fh5co-feature animate-box" data-animate-effect="fadeInUp">
                    <div class="card">
                        <img src="images/icons/green.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="fh5co-text"><h3>Комплект <font color="#519830">Рябиновый вальс</font></h3></div>
                            
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#rubval">Купить модуль</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="fh5co-feature animate-box" data-animate-effect="fadeInUp">
                    <div class="card">
                        <img src="images/icons/green.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="fh5co-text"><h3>Комплект <font color="#519830">Тополинная аллея</font></h3></div>
                            
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#topale">Купить модуль</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="fh5co-feature animate-box" data-animate-effect="fadeInUp">
                    <div class="card">
                        <img src="images/icons/green.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="fh5co-text"><h3>Комплект <font color="#519830">Сосновый рокарий</font></h3></div>
                            
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#sosrock">Купить модуль</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="fh5co-feature animate-box" data-animate-effect="fadeInUp">
                    <div class="card">
                        <img src="images/icons/green.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="fh5co-text"><h3>Комплект <font color="#519830">Отцовский бобарий</font></h3></div>
                            
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#sosrock">Купить модуль</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title modal-title-price" id="exampleModalLongTitle">Овощи</h5>
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
                                    <th scope="col-md-4"><b>Цена розница</b></th>
                                    <th scope="col-md-4"><b>Цена опт</b></th>
                                    <th scope="col-md-4"><b>Количество</b></th>
                                    <th scope="col-md-4"><b>Покупка</b></th>
                                </tr>
                            </thead>
                            <tbody>
                                
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

    <div class="modal fade" id="exampleModalPrice" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Купить <span class="titlePriceItem"></span></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Надо добавить в форму конфигурацию .php -->
                        <form method="POST" action="{{ url('mailPriceList') }}">
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