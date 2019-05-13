@extends('layouts.app')
@section('content')
<div id="fh5co-main" class="contact">
    <div class="container spacing">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="fh5co-feature fh5co-feature-sm animate-box" data-animate-effect="fadeInUp">
                        <div class="fh5co-icon">
                            <i class="icon-info"></i>
                        </div>
                        <div class="fh5co-text">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Полное наименование организации</th>
                                        <th scope="col">Питомник растений "Любава"</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Индивидуальный предприниматель</th>
                                        <th scope="col">Байдакова Н.Н.</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">ОГРН</th>
                                        <th scope="col">31633280086605</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">ИНН</th>
                                        <th scope="col">330301696332</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Юридический адрес</th>
                                        <th scope="col">601440, Владимирская обл., г. Вязники, ул. Шорникова, д. 20</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">P/C</th>
                                        <th scope="col">4080281020289000129</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">К/С</th>
                                        <th scope="col">30101810200000000593</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">БИК</th>
                                        <th scope="col">044525593</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 contact-col-md">
                    <div class="fh5co-feature fh5co-feature-sm animate-box" data-animate-effect="fadeInUp">
                        <div class="fh5co-icon">
                            <i class="icon-globe"></i>
                        </div>
                        <div class="fh5co-text">
                            <p><a href="#">info@plan-dacha.ru</a></p>
                        </div>
                    </div>
					 <div class="fh5co-feature fh5co-feature-sm animate-box" data-animate-effect="fadeInUp">
                        <div class="fh5co-icon">
                            <i class="icon-phone"></i>
                        </div>
                        <div class="fh5co-text">
                            <p><a href="tel://">8 (926) 349-99-32</a></p>
                        </div>
                </div>
                </div>
                <div class="col-md-6">
                    <div class="fh5co-feature fh5co-feature-sm animate-box" data-animate-effect="fadeInUp">
                        <div class="fh5co-icon">
                            <i class="icon-map"></i>
                        </div>
                        <div class="fh5co-text">
                            <p>1. «Центральный рынок», Соборная площадь, г. Вязники, Владимирская область</p>
                            <p>2. «Рынок меркурий», Пограничная улица 28, Сергиев Посад, Московская область</p>
                            <p>3. Добавить 3 участок</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<hr>
	<div class="container">
        <div class="row">
            <div class="col-md-5">
                <h2 class="fh5co-heading">Связаться с нами</h2>
            </div>
        </div>
        <form method="POST" action="{{ url('mailContact') }}">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Имя">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="tel" name="phone" class="form-control" placeholder="Номер телефона">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea name="comment" id="message" cols="30" rows="7" class="form-control" placeholder="Комментарий"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-md" value="Связаться">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
  </div>
    <hr>
    <div id="map"></div>
</div>
</div>
@endsection