@extends('home.layout')
@section('article')

<section class="container" style="margin-top:65px">
			<div class="blog">
					<div class="row">
						@include('home.article.articleItem')
					</div>
			</div>
</section>

@if (isset($data['title']))
@include('home.public.lodop')
@endif

@if (Session::get('uid') > 0)
<script>
	var delete_article = function(e,id,en){
		$.get('/delete/id/'+id+'/en/'+en,function(res){
			if(res.s)$(e).parents('.list-group-item').remove();
		})
	}
</script>
@endif
@endsection