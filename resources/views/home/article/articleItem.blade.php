
@if (!isset($data))
<div class="col-md-8 list-group">
  <h1>NOT FOUND</h1>
</div>
@else
@if (Session::get('uid') > 0)
<a href="/bj" target="_blank">新增</a>
@endif
<div class="col-md-8 list-group">
  @if (isset($data['title']))
  <div id="phtml">
    <h3>{{$data['title']}}</h3>
    {!!$data['info']!!}
  </div>
  <div style="margin-left:115px;margin-top:20px;color:#ff0000"><a href="javascript:;" onclick="Preview()">打印这篇文章</a></div>
  <div style="margin-left:115px;color:#ff0000"><a href="/home/article.article/export_word/id/{{$data['id']}}">导出为word</a></div>
  <div style="margin-left:115px;color:#ff0000"><a href="/home/article.article/export_pdf/id/{{$data['id']}}">导出为pdf</a></div>
  @else

  @foreach ($data as $vo)
   <div class="list-group-item">
       <div class="row">
           <div class="col-xs-12 col-sm-10" style="width:650px">
               @if (empty($vo['curl']))
               <a href='/detail/{{$vo["id"]}}' class="pjax-no" target="_blank">
               @else
               <a href='{{$vo["curl"]}}' class="pjax-no" target="_blank">
               @endif
               <h4><b>{{$vo['title']}}</b></h4>
               @if (!empty($vo['img1']))
               <img src="{{$vo['img1']}}" style="width:150px;height:110px;margin-right:5px">
               @endif
               @if (!empty($vo['img2']))
               <img src="{{$vo['img2']}}" style="width:150px;height:110px;margin-right:5px">
               @endif            
               @if (!empty($vo['img3']))
               <img src="{{$vo['img3']}}" style="width:150px;height:110px;margin-right:5px">
               @endif
               @if (!empty($vo['img4']))
               <img src="{{$vo['img4']}}" style="width:150px;height:110px;margin-right:5px">
               @endif
               </a>
               <p>{{$vo['profile']}}</p>
           </div>
       </div>
   </div>
   @endforeach
   <div class="pjax-a">{{$data->links()}}</div>
   @endif
</div>
@endif
