<!DOCTYPE html>
<html lang="jp">
    <head>
        <meta charset="UTF-8">
        <title>アレルギー表</title>
        <link rel="stylesheet" href="css/menu.css">
        <script src="js/app.js"></script>
        <script src="js/menu.js"></script>
    </head>

    @if(!is_null($base) && !empty($base->bg_img))
<body style="background-image: url('uploads/{{$base->bg_img}}')"/>   <!--背面画像の切替-->
@else
<body> 
@endif

    <div class="menu-trigger" href="">
    <span></span>
    <span></span>
    <span></span>
  </div>
  <nav>
    <ul>
      <li><a href="./edit">編集開始</a></li>
    </ul>
  </nav>
  <div class="overlay"></div>
   
　　
　　<div id="userimage">
    <!-- データがありかつ画像が登録されている場合 -->
@if(!is_null($base) && !empty($base->top_img))
<img src="uploads/{{$base->top_img}}"/>   <!--トップ画像の切替-->
@else
<p>画像が設定されていません</p> 
@endif
　　</div>
　　
　　<div id="menu">
　　    <h1>〜menu〜</h1>
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
　  <p><input type="text" placeholder="品名"/></p> 
　 </div>
   <div id="price">
　    <p>￥<input type="text" placeholder="値段"/></p> 
　 </div>

<!-- アレルギーアイコン -->
　<div id="allergies">

<div>
      <input type="checkbox" name="" class="allergies_check egg" />
      <div class="mask">
		    <div class="caption">たまご</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="" class="allergies_check milk" />
      <div class="mask">
		    <div class="caption">牛乳</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="" class="allergies_check wheat" />
      <div class="mask">
		    <div class="caption">小麦</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="" class="allergies_check buckwheat" />
      <div class="mask">
		    <div class="caption">そば</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="" class="allergies_check peanut" />
      <div class="mask">
		    <div class="caption">落花生</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="" class="allergies_check shrimp" />
      <div class="mask">
		    <div class="caption">エビ</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="" class="allergies_check crab" />
      <div class="mask">
		    <div class="caption">カニ</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="" class="allergies_check abalone" />
      <div class="mask">
		    <div class="caption">アワビ</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="" class="allergies_check cuttlefish" />
      <div class="mask">
		    <div class="caption">イカ</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="" class="allergies_check salmonrow" />
      <div class="mask">
		    <div class="caption">イクラ</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="" class="allergies_check orange" />
      <div class="mask">
		    <div class="caption">みかん</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="" class="allergies_check cashewnut" />
      <div class="mask">
		    <div class="caption">カシューナッツ</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="" class="allergies_check kiwi" />
      <div class="mask">
		    <div class="caption">キウイ</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="" class="allergies_check beaf" />
      <div class="mask">
		    <div class="caption">牛</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="" class="allergies_check walnut" />
      <div class="mask">
		    <div class="caption">くるみ</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="" class="allergies_check sesame" />
      <div class="mask">
		    <div class="caption">ごま</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="" class="allergies_check salmon" />
      <div class="mask">
		    <div class="caption">さけ</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="" class="allergies_check mackerel" />
      <div class="mask">
		    <div class="caption">さば</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="" class="allergies_check soybean" />
      <div class="mask">
		    <div class="caption">大豆</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="" class="allergies_check chicken" />
      <div class="mask">
		    <div class="caption">にわとり</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="" class="allergies_check banana" />
      <div class="mask">
		    <div class="caption">バナナ</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="" class="allergies_check pork" />
      <div class="mask">
		    <div class="caption">ぶた</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="" class="allergies_check mashroom" />
      <div class="mask">
		    <div class="caption">きのこ</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="" class="allergies_check peach" />
      <div class="mask">
		    <div class="caption">もも</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="" class="allergies_check yam" />
      <div class="mask">
		    <div class="caption">長芋</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="" class="allergies_check apple" />
      <div class="mask">
		    <div class="caption">りんご</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="" class="allergies_check gelatin" />
      <div class="mask">
		    <div class="caption">ゼラチン</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="" class="allergies_check almond" />
      <div class="mask">
		    <div class="caption">アーモンド</div>
	    </div>
    </div>
    
            <!-- カロリー記載　※利用者記載　 -->
　　         <div id="kcal">
　　        <p><input type="text" placeholder="カロリー"/>cal</p>  
　　         </div>
</div>
</div>
　　
　　 <div id="footer">
          <h3>添付URL</h3>
              <a href="#">Twitter</a></li>
              <a href="#">Instagram</a>
    </div>
　　
　　
　　
　　
    </body>