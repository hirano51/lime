<!DOCTYPE html>
<html lang="jp">
    <head>
        <meta charset="UTF-8">
        <title>アレルギー表</title>
        <link rel="stylesheet" href="css/menu.css">
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css"> <!--背面画像の切替-->
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

        <script src="js/app.js"></script>
        <script src="js/menu.js"></script>
    </head>

    @if(!is_null($base) && !empty($base->bg_img))
<body style="background-image: url('uploads/{{$base->bg_img}}')"/>   <!--背面画像の切替-->
@else
<body> 
@endif

    <div class="menu-trigger" href="">
      
    <img src="images/pen.png"  alt="編集ボタン"/>
  </div>

  <form id="imgform"> 
  <nav>
    <ul>
    <li>
      <p>背景画像:</p>
      <input type="file" name="bgimg">
      <input type="button" id="bgimgbtn" value="アップロード">
      
  </li>
    <li>
      <p>トップ画像:</p>
      <input type="file" name="topimg">
      <input type="button" id="topimgbtn" value="アップロード">
  </li>
  <li>
      <p>カテゴリー</p>
      <input type="text" id="category">
      <input type="button" id="categorybtn" value="追加">
  </li>
  <li>
  <input type="button" id="menubtn" value="メニュー追加">
  </li>
    </ul>
  </nav>
</form>

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
<!-- メニューのカテゴリー -->
<select id="menuselect">
@foreach($category as $item)
<option value="{{$item->id}}">{{$item->name}}</option>
@endforeach
       
  </select> 
        
　　</div>

<div id="response">

</div>
　　
　　 <div id="footer">
          <h3>添付URL</h3>
              <a href="#">Twitter</a></li>
              <a href="#">Instagram</a>
    </div>
　　
　　<div id="menuinput">
<div id="background"></div>
<div class="dialog">
<!-- 画像からカロリーまでのブロック -->
<form id="menuform">
<div id="attachment">

    <!-- メニュー画像　　※利用者画像挿入 -->
    <label for="menuimage">
    <div id="image">
    <input type="file" id="menuimage" accept="image/*" name="menuimage">
    <img id="prev">
    </div>
    </label>
    <!-- メニューの種類　※利用者入力項目　　 -->
    <div>
    <select name="menucategory">  
@foreach($category as $item)
<option value="{{$item->id}}">{{$item->name}}</option>
@endforeach
   </div>
    <!-- メニュー値段　　※利用者入力項目 -->
　 <div id="name">
　  <p><input type="text" placeholder="品名" name="menuname" /></p> 
　 </div>
   <div id="price">
　    <p>￥<input type="text" placeholder="値段" name="menuprice" /></p> 
　 </div>

<!-- アレルギーアイコン -->
　<div id="allergies">

    <div>
      <input type="checkbox" name="allergies1" class="allergies_check egg" value="1"  />
      <div class="mask">
		    <div class="caption">たまご</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="allergies2" class="allergies_check milk" value="1" />
      <div class="mask">
		    <div class="caption">牛乳</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="allergies3" class="allergies_check wheat" value="1" />
      <div class="mask">
		    <div class="caption">小麦</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="allergies4" class="allergies_check buckwheat" value="1"/>
      <div class="mask">
		    <div class="caption">そば</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="allergies5" class="allergies_check peanut" value="1" />
      <div class="mask">
		    <div class="caption">落花生</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="allergies6" class="allergies_check shrimp" value="1" />
      <div class="mask">
		    <div class="caption">エビ</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="allergies7" class="allergies_check crab" value="1" />
      <div class="mask">
		    <div class="caption">カニ</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="allergies8" class="allergies_check abalone" value="1" />
      <div class="mask">
		    <div class="caption">アワビ</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="allergies9" class="allergies_check cuttlefish" value="1" />
      <div class="mask">
		    <div class="caption">イカ</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="allergies10" class="allergies_check salmonrow" value="1" />
      <div class="mask">
		    <div class="caption">イクラ</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="allergies11" class="allergies_check orange" value="1"/>
      <div class="mask">
		    <div class="caption">みかん</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="allergies12" class="allergies_check cashewnut"value="1" />
      <div class="mask">
		    <div class="caption">カシューナッツ</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="allergies13" class="allergies_check kiwi" value="1"/>
      <div class="mask">
		    <div class="caption">キウイ</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="allergies14" class="allergies_check beaf" value="1"/>
      <div class="mask">
		    <div class="caption">牛</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="allergies15" class="allergies_check walnut" value="1"/>
      <div class="mask">
		    <div class="caption">くるみ</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="allergies16" class="allergies_check sesame"value="1" />
      <div class="mask">
		    <div class="caption">ごま</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="allergies17" class="allergies_check salmon" value="1"/>
      <div class="mask">
		    <div class="caption">さけ</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="allergies18" class="allergies_check mackerel" value="1"/>
      <div class="mask">
		    <div class="caption">さば</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="allergies19" class="allergies_check soybean" value="1" />
      <div class="mask">
		    <div class="caption">大豆</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="allergies20" class="allergies_check chicken" value="1"/>
      <div class="mask">
		    <div class="caption">にわとり</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="allergies21" class="allergies_check banana" value="1"/>
      <div class="mask">
		    <div class="caption">バナナ</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="allergies22" class="allergies_check pork" value="1"/>
      <div class="mask">
		    <div class="caption">ぶた</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="allergies23" class="allergies_check mashroom" value="1" />
      <div class="mask">
		    <div class="caption">きのこ</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="allergies24" class="allergies_check peach" value="1"/>
      <div class="mask">
		    <div class="caption">もも</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="allergies25" class="allergies_check yam" value="1" />
      <div class="mask">
		    <div class="caption">長芋</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="allergies26" class="allergies_check apple"value="1" />
      <div class="mask">
		    <div class="caption">りんご</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="allergies27" class="allergies_check gelatin" value="1" />
      <div class="mask">
		    <div class="caption">ゼラチン</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="allergies28" class="allergies_check almond" value="1"  />
      <div class="mask">
		    <div class="caption">アーモンド</div>
	    </div>
    </div>
    </div>
    
            <!-- カロリー記載　※利用者記載　 -->
　　         <div id="cal">
　　        <p><input type="text" placeholder="カロリー" name="menucal"/>kcal</p>  
　　         </div>
<div>
  <input type="button" id="menuentry" value="追加する">
</div>
</div>
</form>
</div>
</div>
　　
　　
    </body>