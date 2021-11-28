<!DOCTYPE html>
<html lang="jp">
  <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LIME(ライム) | 食品のアレルギーサイトを無料で簡単に作成</title>
        <link rel="title icon" href="images/favicon.ico">
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet"><!-- pwの表示非表示切替 -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
        <link rel="stylesheet" href="css/home.css">

        <script src="js/app.js"></script>
        <script src="js/home.js"></script>
  </head>
    
  <body>
      
     <form action="./new" method="post">
     @csrf
     <div class="example">
  <img src= "images/home2.jpg" id="bgtitle" alt="タイトル"/>
  <p></i>〜安心した食事を〜<br>食物アレルギーの情報も掲載できる<br>メニュー表を作れるサイト</p>	
</div>

<header>
      <p class="btn-gnavi">
        <span></span>
        <span></span>
        <span></span>
      </p>
      <nav id="global-navi">
        <ul class="menu">
          <img class="icon" src="images/LIME.png" >
          <li><a href="#" class="item"></a>    </li>
          <li><a href="./login" class="item">新規登録</a></li>
          <li><a href="./login" class="item">ログイン</a></li>
          <li> <a href="#" class="item">機能紹介</a></li>
        </ul>
      </nav>
    </header>    

      
      <!-- 新規登録１ -->
      <!-- <div id="box">
      <div id="box1">
        <input type="text" id="mail1" placeholder="メールアドレス info@example.jp" name="mail"/>
       <p id="matext" style="color:#c90505;"></p> 
       <span class="input-wrap">
          <input type="password" id="pw1" placeholder="パスワード 英数字６文字以上" name="pw"/>
          <i class="toggle-pass fa fa-eye-slash"></i>
        </span>
       <p id="pwtext" style="color:#c90505;"></p> 
        <input type="text" id="url1" placeholder="サイトURL（３文字以上）"name="url"/>
       
       <select id="urlselect" name="domain">
       <option value="lime.shop" selected>lime.shop</option>
       <option value="shopselect.net">shopselect.net</option>
       <option value="lime.ec" >lime.ec</option>
       <option value="theshop.jp">theshop.jp</option>
         </select>
         
         <p id="urltext" style="color:#c90505;"></p>  
      </div>
      <div id="box2">
        <p><a href="#">利用規約</a>・<a href="#">プライバシーポリシー</a>に同意の上ご利用ください</p>
      </div>
      <div id="box3">
      <input type="button" id="btn1Text" value="無料でサイトを開設する" name="btn1"/>
      </div>
     </div> -->


      </form>
     <div class="explanation">
      <div class="descriptio">
  <img src= "images/smile.png"  alt=""/>
  <p>よりお客様が安心しんて<br>食事できるように<br>Limeは<br>提供している食品の詳細を<br>簡単に作成できます</p>	
 </div>

      <div id="function">
        <p>機能紹介</p>
        <ul class="horizontal-list">
    <li class="Introduction">
      <div><img src= "images/home2.jpg" id="Introductionimg" alt="タイトル"/></div>
      <div>コンテンツ1</div>
    </li>
    <li class="Introduction">
    <div><img src= "images/home2.jpg" id="Introductionimg" alt="タイトル"/></div>
      <div>コンテンツ2</div>
    </li>
    <li class="Introduction">
    <div><img src= "images/home2.jpg" id="Introductionimg" alt="タイトル"/></div>
      <div>コンテンツ3</div>
    </li>
    <li class="Introduction">
    <div><img src= "images/home2.jpg" id="Introductionimg" alt="タイトル"/></div>
      <div>コンテンツ4</div>
    </li>
  </ul>
    
      </div>
        　　　
      <div id="procedure">
        <p>どうやってサイトを作るの？</p>
      <iframe width="1100" height="550" src="https://www.youtube.com/embed/bPJuQI5Wdz0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <p><a href="./#">動画が見れない方はこちらから</a></p>
      </div>
      </div>
      

     <div id="box">
      <h2>早速サイトを作ろう！！</h2>
    
     <form action="./new" method="post">
      @csrf
      <!-- 新規登録２ -->
     <div id="box">
      <div id="box1">
        <input type="text" id="mail2" placeholder="メールアドレス info@example.jp" name="mail"/>
       <p id="ma2text" style="color:#c90505;"></p> 
       <span class="input-wrap">
          <input type="password" id="pw2" placeholder="パスワード 英数字６文字以上" name="pw"/>
          <i class="toggle-pass fa fa-eye-slash"></i>
        </span>
       <p id="pw2text" style="color:#c90505;"></p> 
        <input type="text" id=url2 placeholder="サイトURL（３文字以上）"name="url"/>
       
       <select id="urlselect">
       <option>lime.shop</option>
       <option>shopselect.net</option>
       <option>lime.ec</option>
       <option>theshop.jp</option>
         </select>

         <p id="url2text" style="color:#c90505;"></p>  
      </div>
      <div id="box2">
        <p><a href="#">利用規約</a>・<a href="#">プライバシーポリシー</a>に同意の上ご利用ください</p>
      </div>
      <div id="box3">
      <input type="button" id="btn2Text" value="無料でサイトを開設する" name="btn2"/>
      </div>
　　　 </div>
      </div>
      
      <!-- 上に戻るボタン -->
      <div id="page_top"><a href="#">TOP</a></div>

      </form>

      <div id="footer">
      <div class="twitter">
              <a class="twitter-timeline" data-lang="ja" data-width="300" data-height="250" data-theme="light" href="https://twitter.com/home?ref_src=twsrc%5Etfw">Tweets by home</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8" ></script>
              </div>
          <h3>サービス紹介</h3>
              <li><a href="./login">新規登録</a></li>
              <li><a href="./login">ログイン</a></li>
              <li><a href="#">利用規約</a></li>
              <li><a href="#">プライバシーポリシー</a></li>
              
      </div>

      <div class="start">
    <p><img src="images/LIME.png"  alt="スタート画面"></p>
</div>
      
</div>

    </body>
</html>