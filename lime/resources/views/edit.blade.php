<!DOCTYPE html>
<html lang="jp">
    <head>
        <meta charset="UTF-8">
        <title>編集開始画面</title>
        <link rel="stylesheet" href="#">
        <script src="js/app.js"></script>
        <script src="js/edit.js"></script>
    </head>

    <body>
   
   <form action="edit.php" method="post">
        <div id="box">
            <div id="box1">
              <input type="text" placeholder="メールアドレス" name="loginmail"/>
             <p id="idtext" style="color:#c90505;"></p> 
              <input type="text" placeholder="パスワード" name="loginpw"/>
             <p id="pwtext" style="color:#c90505;"></p> 
             <input type="text" placeholder="編集終了予定時間" name="time"/>
             <p id="text" style="color:#c90505;"></p> 
             
            </div>
           
            <div id="box3">
            <input type="submit" id="btnText" value="編集を開始する" name="btn"/>
             <p id="logintext" style="color:#c90505;"></p>  
            </div>
        </div>
    </body>