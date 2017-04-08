<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>{{$title}}</title>
  <link href="/public/static/11/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/public/static/common/css/nprogress.css">
	<link rel="stylesheet" href="/public/static/11/css/font-awesome.min.css">
  <script src="/public/static/11/js/jquery-2.1.1.min.js"></script>
  </head>
  <style>
  body{font-family: '微软雅黑'}
  </style>
  <body>
	<header>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
        <div>
            <ul class="nav navbar-nav pjax-a">
              @foreach ($cate as $cate1)
                @if (isset($cate1['children']) && !empty($cate1['children']))
                <li class="dropdown">
                    <a href="jacascript:;" class="dropdown-toggle" data-toggle="dropdown">
                        {{$cate1['name']}}<b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                      @foreach ($cate1['children'] as $cate2)
                        <li><a href="/index/{{$cate2['en']}}">{{$cate2['name']}}</a></li>
                        <li class="divider"></li>
                      @endforeach
                    </ul>
                </li>
                @else
                  <li><a href="/index/{{$cate1['en']}}">{{$cate1['name']}}</a></li>
                @endif
              @endforeach
                <li>&nbsp;&nbsp;&nbsp;</li>
                <li><input type="text" class="form-control" name="kw" placeholder="输入后按enter键" id="s"></li>
            </ul>
        </div>
        </div>
    </nav>
	</header>
