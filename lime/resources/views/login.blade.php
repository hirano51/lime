
<!DOCTYPE html>
<html lang="jp">
    <head>
        <meta charset="UTF-8">
        <title>ログイン | LIME</title>
        <link rel="title icon" href="images/favicon.ico">
        <link rel="stylesheet" href="css/login.css">
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet"><!-- pwの表示非表示切替 -->
        <script src="js/app.js"></script>
        <script src="js/login.js"></script>
    </head>

    <body>

     <form action="login.php" method="post">
     <div id="backhome">
     <a href="./home"><img class="icon" src="images/LIME.png" alt="アイコン"/></a>   
     </div>
     
     <input type="button" id="loginbtn" value="ログイン">
     <input type="button" id="newbtn" value="新規登録">
     <!-- ログイン -->
     <div id="loginbox">
            <div id="box1">
              <input type="text" placeholder="メールアドレス" id="loginmail" name="loginmail"/>
             <p id="loginmailtext" style="color:#c90505;"></p> 
             <span class="input-wrap">
          <input type="password" id="pw" placeholder="パスワード" id="loginpw" name="loginpw"/>
          <i class="toggle-pass fa fa-eye-slash"></i>
        </span>
              
             <p id="loginpwtext" style="color:#c90505;"></p> 
             
            </div>
            <div id="box2">
              <p><a href="#">パスワードをお忘れですか？</p></a>
            </div>
            <div id="box3">
            <input type="button" id="btn1Text" value="ログイン" name="btn1"/> 
            </div>
        </div>

        

        <!-- 新規登録 -->
        <div id="newbox" style="display:none;">
            <div id="box1">
              <input type="text" placeholder="メールアドレス info@example.jp" id="mail" name="mail"/>
             <p id="matext" style="color:#c90505;"></p> 
             <span class="input-wrap">
          <input type="password" id="pw" placeholder="パスワード 英数字６文字以上" name="pw"/>
          <i class="toggle-pass fa fa-eye-slash"></i>
        </span>
             <p id="pwtext" style="color:#c90505;"></p> 
              <input type="text" placeholder="サイトURL（３文字以上）" id="url" name="url"/>
             <p id="urltext" style="color:#c90505;"></p>  
             <select id="urlselect">
                      <option>lime.shop</option>
                      <option>shopselect.net</option>
                      <option>lime.ec</option>
                      <option>theshop.jp</option>
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