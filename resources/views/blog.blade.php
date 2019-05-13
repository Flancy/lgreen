@extends('layouts.app')
@section('content')
<div id="fh5co-main" class="portfolio blog">
	<div class="container spacing">
		<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInUp">Школа садовода</h2>
		<div class="row row-bottom-padded-md">
			@foreach($blog as $article)
				<div class="col-md-12 col-padding animate-box" data-animate-effect="fadeInUp">
					<div class="blog-entry">
						<a href="" data-toggle="modal" data-target=".bd-example-modal-xl" class="blog-img"><img src="storage\{{ $article->image }}" class="img-responsive-portfolio" alt=""></a>
						<div class="desc">
							<h3><a href="" data-toggle="modal" data-target=".bd-example-modal-xl">{{ $article->title }}</a></h3>
							<span><small>{{ $article->subtitle }} <i class="icon-comment"></i> 1</small></span>
							<font color="#519830"><div style="margin-bottom: 20px;">{{ $article->subdescription }}</div></font>
							<p><a class="btn btn-primary btn-demo popup-vimeo" href="blog/{{ $article->id }}"> </i>Подробнее</a></p>
						</div>
						<hr>
						<div class="views">
							<p class="views__item"><img src="img/view.png" alt=""> <span>{{ $article->views }}</span></p>
						</div>
					</div>
				</div>
			@endforeach
			<!--
			<div class="col-md-12 col-padding animate-box" data-animate-effect="fadeInUp">
				<div class="blog-entry">
					<a href="" data-toggle="modal" data-target=".bd-example-modal-xl" class="blog-img"><img src="images/portfolio/1.jpg" class="img-responsive-portfolio" alt=""></a>
					<div class="desc">
						<h3><a href="" data-toggle="modal" data-target=".bd-example-modal-xl">Объёкт №1</a></h3>
						<span><small>Руководство L-Green.ru </small> / <small>Посадка - ландшафтный дизайн </small> / <small> <i class="icon-comment"></i> 1</small></span>
						<font color="#519830"><p>МО - Новорижское шоссе п. Павлово</p></font>
						<p><a class="btn btn-primary btn-demo popup-vimeo" href="#"> </i>Подробнее</a></p>
					</div>
					<hr>
					<div class="views">
						<p class="views__item"><img src="img/view.png" alt=""> <span>12</span></p>
						<p class="views__item"><img src="img/comment.png" alt=""> <span>43</span></p>
					</div>
				</div>
			</div>
			<div class="col-md-12 col-padding animate-box" data-animate-effect="fadeInUp">
				<div class="blog-entry">
					<a href="" data-toggle="modal" data-target=".bd-example-modal-xl" class="blog-img"><img src="images/portfolio/2.jpg" class="img-responsive-portfolio" alt=""></a>
					<div class="desc">
						<h3><a href="" data-toggle="modal" data-target=".bd-example-modal-xl">Объёкт №2</a></h3>
						<span><small>Руководство L-Green.ru </small> / <small>Посадка - ландшафтный дизайн </small> / <small> <i class="icon-comment"></i> 2</small></span>
						<font color="#519830"><p>Москва - Ботанический сад</p></font>
						<p><a class="btn btn-primary btn-demo popup-vimeo" href="#"> </i>Подробнее</a></p>
					</div>
					<hr>
					<div class="views">
						<p class="views__item"><img src="img/view.png" alt=""> <span>12</span></p>
						<p class="views__item"><img src="img/comment.png" alt=""> <span>43</span></p>
					</div>
				</div>
			</div>
			<div class="col-md-12 col-padding animate-box" data-animate-effect="fadeInUp">
				<div class="blog-entry">
					<a href="" data-toggle="modal" data-target=".bd-example-modal-xl" class="blog-img"><img src="images/portfolio/3.jpg" class="img-responsive-portfolio" alt=""></a>
					<div class="desc">
						<h3><a href="" data-toggle="modal" data-target=".bd-example-modal-xl">Объёкт №3</a></h3>
						<span><small>Руководство L-Green.ru </small> / <small>Посадка - ландшафтный дизайн </small> / <small> <i class="icon-comment"></i> 3</small></span>
						<font color="#519830"><p>Москва - Кутузовский проспект</p></font>
						<p><a class="btn btn-primary btn-demo popup-vimeo" href="#"> </i>Подробнее</a></p>
					</div>
					<hr>
					<div class="views">
						<p class="views__item"><img src="img/view.png" alt=""> <span>12</span></p>
						<p class="views__item"><img src="img/comment.png" alt=""> <span>43</span></p>
					</div>
				</div>
			</div>
			<div class="col-md-12 col-padding animate-box" data-animate-effect="fadeInUp">
				<div class="blog-entry">
					<a href="" data-toggle="modal" data-target=".bd-example-modal-xl" class="blog-img"><img src="images/portfolio/4.jpg" class="img-responsive-portfolio" alt=""></a>
					<div class="desc">
						<h3><a href="" data-toggle="modal" data-target=".bd-example-modal-xl">Объёкт №4</a></h3>
						<span><small>Руководство L-Green.ru </small> / <small>Посадка - ландшафтный дизайн </small> / <small> <i class="icon-comment"></i> 4</small></span>
						<font color="#519830"><p>МО - Поселок Рогачево</p></font>
						<p><a class="btn btn-primary btn-demo popup-vimeo" href="#"> </i>Подробнее</a></p>
					</div>
					<hr>
					<div class="views">
						<p class="views__item"><img src="img/view.png" alt=""> <span>12</span></p>
						<p class="views__item"><img src="img/comment.png" alt=""> <span>43</span></p>
					</div>
				</div>
			</div>
			<div class="col-md-12 col-padding animate-box" data-animate-effect="fadeInUp">
				<div class="blog-entry">
					<a href="" data-toggle="modal" data-target=".bd-example-modal-xl" class="blog-img"><img src="images/portfolio/5.jpg" class="img-responsive-portfolio" alt=""></a>
					<div class="desc">
						<h3><a href="" data-toggle="modal" data-target=".bd-example-modal-xl">Объёкт №5</a></h3>
						<span><small>Руководство L-Green.ru </small> / <small>Посадка - ландшафтный дизайн </small> / <small> <i class="icon-comment"></i> 5</small></span>
						<font color="#519830"><p>Москва - Жуковский</p></font>
						<p><a class="btn btn-primary btn-demo popup-vimeo" href="#"> </i>Подробнее</a></p>
					</div>
					<hr>
					<div class="views">
						<p class="views__item"><img src="img/view.png" alt=""> <span>12</span></p>
						<p class="views__item"><img src="img/comment.png" alt=""> <span>43</span></p>
					</div>
				</div>
			</div>
			<div class="col-md-12 col-padding animate-box" data-animate-effect="fadeInUp">
				<div class="blog-entry">
					<a href="" data-toggle="modal" data-target=".bd-example-modal-xl" class="blog-img"><img src="images/portfolio/6.jpg" class="img-responsive-portfolio" alt=""></a>
					<div class="desc">
						<h3><a href="" data-toggle="modal" data-target=".bd-example-modal-xl">Объёкт №6</a></h3>
						<span><small>Руководство L-Green.ru </small> / <small>Посадка - ландшафтный дизайн </small> / <small> <i class="icon-comment"></i> 6</small></span>
						<font color="#519830"><p>Москва - Куркино</p></font>
						<p><a class="btn btn-primary btn-demo popup-vimeo" href="#"> </i>Подробнее</a></p>
					</div>
					<hr>
					<div class="views">
						<p class="views__item"><img src="img/view.png" alt=""> <span>12</span></p>
						<p class="views__item"><img src="img/comment.png" alt=""> <span>43</span></p>
					</div>
				</div>
			</div>
			<div class="col-md-12 col-padding animate-box" data-animate-effect="fadeInUp">
				<div class="blog-entry">
					<a href="" data-toggle="modal" data-target=".bd-example-modal-xl" class="blog-img"><img src="images/portfolio/7.jpg" class="img-responsive-portfolio" alt=""></a>
					<div class="desc">
						<h3><a href="" data-toggle="modal" data-target=".bd-example-modal-xl">Объёкт №7</a></h3>
						<span><small>Руководство L-Green.ru </small> / <small>Посадка - ландшафтный дизайн </small> / <small> <i class="icon-comment"></i> 7</small></span>
						<font color="#519830"><p>Москва - Москва Набережная</p></font>
						<p><a class="btn btn-primary btn-demo popup-vimeo" href="#"> </i>Подробнее</a></p>
					</div>
					<hr>
					<div class="views">
						<p class="views__item"><img src="img/view.png" alt=""> <span>12</span></p>
						<p class="views__item"><img src="img/comment.png" alt=""> <span>43</span></p>
					</div>
				</div>
			</div>
			<div class="col-md-12 col-padding animate-box" data-animate-effect="fadeInUp">
				<div class="blog-entry">
					<a href="" data-toggle="modal" data-target=".bd-example-modal-xl" class="blog-img"><img src="images/portfolio/8.jpg" class="img-responsive-portfolio" alt=""></a>
					<div class="desc">
						<h3><a href="" data-toggle="modal" data-target=".bd-example-modal-xl">Объёкт №8</a></h3>
						<span><small>Руководство L-Green.ru </small> / <small>Посадка - ландшафтный дизайн </small> / <small> <i class="icon-comment"></i> 8</small></span>
						<font color="#519830"><p>МО - Химки Старбеево</p></font>
						<p><a class="btn btn-primary btn-demo popup-vimeo" href="#"> </i>Подробнее</a></p>
					</div>
					<hr>
					<div class="views">
						<p class="views__item"><img src="img/view.png" alt=""> <span>12</span></p>
						<p class="views__item"><img src="img/comment.png" alt=""> <span>43</span></p>
					</div>
				</div>
			</div>-->
		</div>
	</div>
</div>
@endsection