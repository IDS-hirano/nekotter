<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href={{asset('assets/stylesheets/tweets.css')}}>
    <title>ねこったー</title>
  </head>
  <body>
    <header>
      <h1>ねこったー</h1>
    </header>
    <div class="contents">
@foreach($tweets as $tweet)
    <div class="message clearfix">
        <img src="{{ asset('assets/images/cat1.png') }}">
        <div class="message_box">
          <p class="user_name">
            野良猫1号
          </p>
          <p class="text">
          <p>{{ $tweet->text }}</p>
          </p>
        </div>
      </div>
@endforeach
      <div class="message clearfix">
        <img src="/assets/images/cat1.png">
        <div class="message_box">
          <p class="user_name">たま
          </p>
          <p class="text">
            家宝は寝て待てにゃー。急がば回れにゃー。蓼食う虫も好き好きにゃー。一念岩をも通すにゃー。千石取れば万石羨むにゃー。
          </p>
        </div>
      </div>
      <div class="message clearfix">
        <img src="/assets/images/cat1.png">
        <div class="message_box">
        </div>
      </div>
      <div class="message clearfix">
        <img src="/assets/images/cat1.png">
        <div class="message_box">
        </div>
      </div>
      <div class="message clearfix">
        <img src="/assets/images/cat1.png">
        <div class="message_box">
        </div>
      </div>
      <div class="message clearfix">
        <img src="/assets/images/cat1.png">
        <div class="message_box">
        </div>
      </div>
      <div class="message clearfix">
        <img src="/assets/images/cat1.png">
        <div class="message_box">
        </div>
      </div>
    </div>
  </body>
</html>
