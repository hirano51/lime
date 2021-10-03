<!DOCTYPE html>
<html lang="jp">
    <head>
        <meta charset="UTF-8">
        <title>アレルギー表</title>
        <link rel="stylesheet" href="css/menu.css">
        <script src="js/app.js"></script>
        <script src="js/menu.js"></script>
    </head>
    <body>
    <div id="header">
    <ul>
    <a href="#">確定</a>
    <a href="./edit">編集</a>
    <a href="#">閉鎖</a>
　　</div>
　　
　　<div id="userimage">
　　<img src="images/coffee.jpg"/>    
　　</div>
　　
　　<div id="menu">
　　    <h1>〜menu一覧〜</h1>
<select id="menuselect">  <!-- メニューの種類　※利用者入力項目　　 -->
       <option>メイン</option>
       <option>ドリンク</option>
       <option>デザート</option>
       <option>#</option>
       <option>#</option>
         </select> 
         
　　　<!-- メニュー検索 -->
    <input type="text" id="search" placeholder="メニュー検索" name="search"/>
    <input type="button" id="searchbtn" value="検索" name="searchbtn"/>
　　</div>

　　<!-- 画像からカロリーまでのブロック -->
　　<div id="attachment">

    <!-- メニュー画像　　※利用者画像挿入 -->
    <img src="images/x.jpg"/>

    <!-- メニュー値段　　※利用者入力項目 -->
　<div id="name">
　<p><input type="text" placeholder="品名・値段"/></p> 
　</div>

<!-- アレルギーアイコン -->
　<div id="allergies">
<div class="egg">
<img src="images/egg.gif" id="ico" alt="卵"/>
    <div class="mask">
		<div class="caption">たまご</div>
	</div> 
</div>

<div class="milk">
<img src="images/milk.gif" id="ico" alt="牛乳"/>
    <div class="mask">
		<div class="caption">牛乳</div>
	</div> 
</div>

<div class="wheat">
<img src="images/wheat.gif" id="ico" alt="小麦"/>
    <div class="mask">
		<div class="caption">小麦</div>
	</div> 
</div>
<div class="buckwheat">
<img src="images/buckwheat.gif" id="ico" alt="そば"/>
    <div class="mask">
		<div class="caption">そば</div>
	</div> 
</div>
<div class="peanut">
<img src="images/peanut.gif" id="ico" alt="落花生"/>
    <div class="mask">
		<div class="caption">落花生</div>
	</div> 
</div>
<div class="shrimp">
<img src="images/shrimp.gif" id="ico" alt="エビ"/>
    <div class="mask">
		<div class="caption">エビ</div>
	</div> 
</div>
<div class="crab">
<img src="images/crab.gif" id="ico" alt="カニ"/>
    <div class="mask">
		<div class="caption">カニ</div>
	</div> 
</div>
<div class="abalone">
<img src="images/abalone.gif" id="ico" alt="アワビ"/>
    <div class="mask">
		<div class="caption">アワビ</div>
	</div> 
</div>
<div class="cuttlefish">
<img src="images/cuttlefish.gif" id="ico" alt="イカ"/>
    <div class="mask">
		<div class="caption">イカ</div>
	</div> 
</div>
<div class="salmonrow">
<img src="images/salmonrow.gif" id="ico" alt="イクラ"/>
    <div class="mask">
		<div class="caption">イクラ</div>
	</div> 
</div>
<div class="orange">
<img src="images/orange.gif" id="ico" alt="みかん"/>
    <div class="mask">
		<div class="caption">みかん</div>
	</div> 
</div>
<div class="cashewnut">
<img src="images/cashewnut.gif" id="ico" alt="カシューナッツ"/>
    <div class="mask">
		<div class="caption">カシューナッツ</div>
	</div> 
</div>
<div class="kiwi">
<img src="images/kiwi.gif" id="ico" alt="キウイ"/>
    <div class="mask">
		<div class="caption">キウイ</div>
	</div> 
</div>
<div class="beaf">
<img src="images/beaf.gif" id="ico" alt="牛"/>
    <div class="mask">
		<div class="caption">牛</div>
	</div> 
</div>
<div class="walnut">
<img src="images/walnut.gif" id="ico" alt="くるみ"/>
    <div class="mask">
		<div class="caption">くるみ</div>
	</div> 
</div>
<div class="sesame">
<img src="images/sesame.gif" id="ico" alt="ごま"/>
    <div class="mask">
		<div class="caption">ごま</div>
	</div> 
</div>
<div class="salmon">
<img src="images/salmon.gif" id="ico" alt="鮭"/>
    <div class="mask">
		<div class="caption">さけ</div>
	</div> 
</div>
<div class="mackerel">
<img src="images/mackerel.gif" id="ico" alt="さば"/>
    <div class="mask">
		<div class="caption">さば</div>
	</div> 
</div>
<div class="soybean">
<img src="images/soybean.gif" id="ico" alt="大豆"/>
    <div class="mask">
		<div class="caption">大豆</div>
	</div> 
</div>
<div class="chicken">
<img src="images/chicken.gif" id="ico" alt="鶏"/>
    <div class="mask">
		<div class="caption">にわとり</div>
	</div> 
</div>
<div class="banana">
<img src="images/banana.gif" id="ico" alt="バナナ"/>
    <div class="mask">
		<div class="caption">バナナ</div>
	</div> 
</div>
<div class="pork">
<img src="images/pork.gif" id="ico" alt="豚"/>
    <div class="mask">
		<div class="caption">ぶた</div>
	</div> 
</div>
<div class="mashroom">
<img src="images/mashroom.gif" id="ico" alt="松茸"/>
    <div class="mask">
		<div class="caption">きのこ</div>
	</div> 
</div>
<div class="peach">
<img src="images/peach.gif" id="ico" alt="もも"/>
    <div class="mask">
		<div class="caption">もも</div>
	</div> 
</div>
<div class="yam">
<img src="images/yam.gif" id="ico" alt="長芋"/>
    <div class="mask">
		<div class="caption">長芋</div>
	</div> 
</div>
<div class="apple">
<img src="images/apple.gif" id="ico" alt="りんご"/>
    <div class="mask">
		<div class="caption">りんご</div>
	</div> 
</div>
<div class="gelatin">
<img src="images/gelatin.gif" id="ico" alt="ゼラチン"/>
    <div class="mask">
		<div class="caption">ゼラチン</div>
	</div> 
</div>
<div class="almond">
<img src="images/almond.gif" id="ico" alt="アーモンド"/>
    <div class="mask">
		<div class="caption">アーモンド</div>
	</div> 
</div>
</div>
    
<!-- カロリー記載　※利用者記載　 -->
　　<div id="kcal">
　　  <p><input type="text" placeholder="カロリー"/>Kcal</p>  
　　</div>
　　
　　 <div id="footer">
          <h3>添付URL</h3>
              <a href="#">Twitter</a></li>
              <a href="#">Instagram</a>
    </div>
　　
　　
　　
　　
    </body>