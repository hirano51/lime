<!DOCTYPE html>
<html lang="jp">
    <head>
        <meta charset="UTF-8">
        <title>ログイン | LIME</title>
        <link rel="title icon" href="images/favicon.ico">
        <link rel="stylesheet" href="css/login.css">
        <script src="js/app.js"></script>
        <script src="js/login.js"></script>
    </head>

    <body>

     <form action="login.php" method="post">
     <div id="backhome">
     <a href="./home"><img class="icon" src="images/LIME.png" alt="アイコン"/></a>   
     </div>

    <div class="login_box">
      <div class="tab">
        <span id="tabLogin" class="item selected">ログイン</span>
        <span id="tabEntry" class="item">新規登録</span>
      </div>

      <div id="loginForm" style="margin-top:30px;">
        <div class="input_field">
          <input type="text" placeholder="メールアドレス" id="loginmail" name="loginmail"/>
          <p id="loginmailtext" class="error_label"></p> 
        </div>
        <div class="input_field">
          <input type="text" placeholder="パスワード" id="loginpw" name="loginpw"/>
          <p id="loginpwtext" class="error_label"></p> 
        </div>
        <div style="margin-top: 50px;">
          <p><a href="#">パスワードをお忘れですか？</p></a>
        </div>

        <div>
            <input type="button" class="login_btn" id="btn1Text" value="ログイン" name="btn1"/> 
        </div>
      </div>

      <div id="entryForm" style="margin-top:30px; display: none;">
        <div class="input_field">
          <input type="text" placeholder="メールアドレス info@example.jp" id="mail" name="mail"/>
          <p id="matext" class="error_label"></p> 
        </div>
        <div class="input_field">
          <input type="text" placeholder="パスワード 英数字６文字以上" id="pw" name="pw"/>
          <p id="pwtext" class="error_label"></p> 
        </div>
        <div class="input_field">
          <input type="text" placeholder="サイトURL（３文字以上）" id="url" name="url"/>
          <p id="urltext" class="error_label"></p> 
        </div>

        <div class="input_field">
          <select id="urlselect">
	          <option>lime.shop</option>
	          <option>shopselect.net</option>
	          <option>lime.ec</option>
	          <option>theshop.jp</option>
          </select>
        </div>

        <div style="margin-top: 50px;">
          <p><a href="#">利用規約</a>・<a href="#">プライバシーポリシー</a>に同意の上ご利用ください</p>
        </div>

        <div>
            <input type="button" class="login_btn" id="btn2Text" value="無料でサイトを開設する" name="btn2"/> 
        </div>
      </div>

    </div>
</from>
    
    </body>
</html>