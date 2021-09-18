
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
     <a href="./home"><img class="icon" src="images/LIME.png" alt="アイコン"/></a>
        <h1>ログイン</h1>
        <div id="box">
            <div id="box1">
              <input type="text" placeholder="メールアドレス" id="loginmail" name="loginmail"/>
             <p id="loginmailtext" style="color:#c90505;"></p> 
              <input type="text" placeholder="パスワード" id="loginpw" name="loginpw"/>
             <p id="loginpwtext" style="color:#c90505;"></p> 
             
            </div>
            <div id="box2">
              <p><a href="#">パスワードをお忘れですか？</p></a>
            </div>
            <div id="box3">
            <input type="button" id="btn1Text" value="ログイン" name="btn1"/> 
            </div>
        </div>

        

        <h1>新規登録</h1>
        <div id="box">
            <div id="box1">
              <input type="text" placeholder="メールアドレス info@example.jp" id="mail" name="mail"/>
             <p id="matext" style="color:#c90505;"></p> 
              <input type="text" placeholder="パスワード 英数字６文字以上" id="pw" name="pw"/>
             <p id="pwtext" style="color:#c90505;"></p> 
              <input type="text" placeholder="サイトURL（３文字以上）" id="url" name="url"/>
             <p id="urltext" style="color:#c90505;"></p>  
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
            <input type="button" id="btn2Text" value="無料でサイトを開設する" name="btn2"/>
             
            </div>
        </div>
</from>
    
    </body>
</html>