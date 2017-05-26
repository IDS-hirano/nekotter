<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/stylesheets/style.css')}}">
    <title>ねこったー</title>
  </head>
  <body>
    <header>
      <h1>ねこったー</h1>
    </header>
    <div class="contents">
      <h2>投稿する</h2>
      {{ Form::open(array('url' => '/tweets','method'=>'post','class'=>'clearfix')) }}
        <img src="{{asset('assets/images/cat1.png')}}">
        <div class="input-box">
          <textarea name="text" rows="4" cols="40">今日も疲れたにゃー</textarea>
        </div>
        <div class="button-box">
          <input type="submit" class="submit-button">
        </div>
      {{ Form::close() }}
    </div>
  </body>
</html>
