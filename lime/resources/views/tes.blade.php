<!DOCTYPE html>
<html lang="jp">
    <head>
        <meta charset="UTF-8">
        <title>テスト</title>
        <link rel="stylesheet" href="#">
        <script src="js/app.js"></script>
        <script src="js/tes.js"></script>
    </head>
    
    <body>
           
     <form action="./tes2" method="post">
     @csrf
     <div id="box">
      <div id="box1">
        <li><input type="text" id="user" placeholder="userid" name="user"/></li>
       <p id="usertext" style="color:#c90505;">{{$usererr}}</p> 
        <li><input type="text" id="pw" placeholder="パスワード 英数字６文字以上" name="pw"/></li>
       <p id="pwtext" style="color:#c90505;">{{$pwerr}}</p> 
        <li><input type="text" id="shopcode" placeholder="ショップコード"name="shopcode"/>
       
      
         </li>
         <p id="shopcodetext" style="color:#c90505;">{{$shopcodeerr}}</p>  
      </div>
      <div id="box2">
        <p><a href="#">利用規約</a>・<a href="#">プライバシーポリシー</a>に同意の上ご利用ください</p>
      </div>
      <div id="box3">
      <input type="button" id="btnText" value="ログイン" name="btn"/>
      </div>
      </form>

      </body>
</html>