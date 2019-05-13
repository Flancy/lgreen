@extends('layouts.app')
@section('content')
<div id="fh5co-main" class="portfolio blog">
	<div class="container spacing">
		<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInUp">Школа садовода</h2>
		<div class="row row-bottom-padded-md">
			<div class="col-md-12 col-padding animate-box" data-animate-effect="fadeInUp">
				<div class="blog-entry blog-entry_full">
					<a href="" data-toggle="modal" data-target=".bd-example-modal-xl" class="blog-img"><img src="{{ url('storage/'.$article->image) }}" class="img-responsive-portfolio" alt=""></a>
					<div class="desc">
						<h3><a href="" data-toggle="modal" data-target=".bd-example-modal-xl">{{ $article->title }}</a></h3>
						<span><small>{{ $article->subtitle }} <i class="icon-comment"></i> 1</small></span>
						<font color="#519830"><div style="margin-bottom: 20px;">{{ $article->subdescription }}</div></font>
						<div class="description">{{ $article->description }}</div>
					</div>
					<hr>
					<div class="views">
						<p class="views__item"><img src="{{ url('img/view.png') }}" alt=""> <span>{{ $article->views }}</span></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection