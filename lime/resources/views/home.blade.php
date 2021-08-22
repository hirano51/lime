<!DOCTYPE html>
<html lang="jp">
    <head>
        <meta charset="UTF-8">
        <title>サイトホーム</title>
        <link rel="stylesheet" href="css/home.css">
    </head>
    
    <body>
      
     <form action="home.php" method="post">
      <div id="header">
       <a href="home.php"><img class="icon" src="images/LIME.png" alt="アイコン"/></a>

       <ul class="ham">
        <id class="ham_line ham_line1"><a href="#">新規登録</a>
        <id class="ham_line ham_line2"><a href="#">ログイン</a>
        <id class="ham_line ham_line3"><a href="#">機能紹介</a>
        </ul>
      </div>
      
      <div id="sample1">
       <img src="images/sample.jpg" alt="タイトル"/>
      </div>
      
     <div id="box">
      <div id="box1">
        <li><input type="text" placeholder="メールアドレス info@example.jp" name="mail"/></li>
       <p id="matext" style="color:#c90505;"></p> 
        <li><input type="text" placeholder="パスワード 英数字６文字以上" name="pw"/></li>
       <p id="pwtext" style="color:#c90505;"></p> 
        <li><input type="text" placeholder="サイトURL（３文字以上）"name="url"/>
       
       <select id="urlselect">
                <option>tes0</option>
                <option>tes1</option>
                <option>tes2</option>
                <option>tes3</option>
                <option>tes4</option>
         </select>
         </li>
         <p id="urltext" style="color:#c90505;"></p>  
      </div>
      <div id="box2">
        <p><a href="#">利用規約</a>・<a href="#">プライバシーポリシー</a>に同意の上ご利用ください</p>
      </div>
      <div id="box3">
      <input type="submit" id="btn1Text" value="無料でサイトを開設する" name="btn1"/>
      <p id="msgtext" style="color:#c90505;"></p>  
      </div>
      </form>
     
      <div id="descriptio1">
          <h2>●●は<br>提供している食品の詳細を<br>簡単に作成できます</h2>
          <h3>こんな時はありませんか？</h3>
          <p>
              メニュー表にアレルギー表示をしたら見づらくなってしまった
              <br>お客様に聞かれる度に調べたり、説明しないといけない
              <br>海外のお客様にどう説明したら良いか分からない
              <br>などなど・・・
          </p>
          <h2>よりお客様が安心しんて<br>食事できるように</h2>
      </div>
      
      <div id="function">
          <div class="point1">
          <h3>商品別に区分ける事ができる</h3>
          <img src="images/x.jpg"/>
          <p>最大２０まで区分け<br>１０００品登録が可能</p>
          </div>
          <div class="point2">
          <h3>全２7種類のアレルギー表記に対応</h3>
          <img src="images/x.jpg"/>
          <p>使用している食材に色が付いて分かりやすい</p>
          </div>
          <div class="point3">
          <h3>カロリー表記も可能</h3>
          <img src="images/x.jpg"/>
          <p>食事制限している人にも安心</p>
          </div>
      </div>
      
      <div id="make">
        <h2>サイトを作る３ステップ！</h2>
        <div=class="step1">
          <h3>ステップ１</h3>
          <h3>●●する！</h3>
          <img src="images/x.jpg"/>
          <p>備考欄</p>
        </div>
        <div=class="step2">
          <h3>ステップ2</h3>
          <h3>●●する！</h3>
          <img src="images/x.jpg"/>
          <p>備考欄</p>
          <div=class="step3">
          <h3>ステップ3</h3>
          <h3>●●する！</h3>
          <img src="images/x.jpg"/>
          <p>備考欄</p>
          <li><a href="#">他にも詳しい機能についてはこちらから</a></li>
      </div>
          
     <div id="box">
      <h2>今すぐサイトを作ろう</h2>
    
     <form action="home.php" method="post">
      
     <div id="box">
      <div id="box1">
        <li><input type="text" placeholder="メールアドレス info@example.jp" name="mail"/></li>
       <p id="matext" style="color:#c90505;"></p> 
        <li><input type="text" placeholder="パスワード 英数字６文字以上" name="pw"/></li>
       <p id="pwtext" style="color:#c90505;"></p> 
        <li><input type="text" placeholder="サイトURL（３文字以上）"name="url"/>
       
       <select id="urlselect">
                <option>tes0</option>
                <option>tes1</option>
                <option>tes2</option>
                <option>tes3</option>
                <option>tes4</option>
         </select>
         </li>
         <p id="urltext" style="color:#c90505;"></p>  
      </div>
      <div id="box2">
        <p><a href="#">利用規約</a>・<a href="#">プライバシーポリシー</a>に同意の上ご利用ください</p>
      </div>
      <div id="box3">
      <input type="submit" id="btn2Text" value="無料でサイトを開設する" name="btn2"/>
      <p id="msgtext" style="color:#c90505;"></p>  
      </div>
      </form>

      <div id="footer">
          <h3>サービス紹介</h3>
              <li><a href="login.php">新規登録</a></li>
              <li><a href="#">ログイン</a></li>
              <li><a href="#">利用規約</a></li>
              <li><a href="#">プライバシーポリシー</a></li>
              <li><a href="#">機能紹介</a></li>
              <li><a href="#">QRコード作成</a></li>
      </div>


    </body>
</html>