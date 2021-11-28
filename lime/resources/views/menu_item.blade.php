<!-- サイトに表示される方のブロック-->
<!-- 画像からカロリーまでのブロック -->
@if(!is_null($menu))
@foreach($menu as $item)
<div id="attachment">
  
<form id="menuform{{$item->id}}">
    <!-- メニュー画像　　※利用者画像挿入 -->
    @if(!empty($item->img))
<img src="uploads/{{$item->img}}"/>   
@else
<!-- <img src="images/x.jpg"/> -->
<p>画像が設定されていません</p> 
@endif

    <!-- メニュー値段　　※利用者入力項目 -->
　 <div id="name">
　  <p><input type="text" placeholder="品名" value="{{$item->name}}" name="menuname"/></p> 
　 </div>
   <div id="price">
　    <p>￥<input type="text" placeholder="値段" value="{{$item->price}}" name="menuprice"/></p> 
　 </div>

<!-- アレルギーアイコン -->
　<div id="allergies">

    <div>
      <input type="checkbox" name="allergies1" class="allergies_check egg" value="1" {{$item->allergies_1==1 ? 'checked' : ''}} />
      <div class="mask">
		    <div class="caption">たまご</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="allergies2" class="allergies_check milk" value="1" {{$item->allergies_2==1 ? 'checked' : ''}} />
      <div class="mask">
		    <div class="caption">牛乳</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="allergies3" class="allergies_check wheat" value="1" {{$item->allergies_3==1 ? 'checked' : ''}}/>
      <div class="mask">
		    <div class="caption">小麦</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="allergies4" class="allergies_check buckwheat" value="1" {{$item->allergies_4==1 ? 'checked' : ''}}/>
      <div class="mask">
		    <div class="caption">そば</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="allergies5" class="allergies_check peanut" value="1" {{$item->allergies_5==1 ? 'checked' : ''}}/>
      <div class="mask">
		    <div class="caption">落花生</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="allergies6" class="allergies_check shrimp" value="1" {{$item->allergies_6==1 ? 'checked' : ''}} />
      <div class="mask">
		    <div class="caption">エビ</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="allergies7" class="allergies_check crab" value="1" {{$item->allergies_7==1 ? 'checked' : ''}}/>
      <div class="mask">
		    <div class="caption">カニ</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="allergies8" class="allergies_check abalone" value="1"  {{$item->allergies_8==1 ? 'checked' : ''}}/>
      <div class="mask">
		    <div class="caption">アワビ</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="allergies9" class="allergies_check cuttlefish" value="1"  {{$item->allergies_9==1 ? 'checked' : ''}}/>
      <div class="mask">
		    <div class="caption">イカ</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="allergies10" class="allergies_check salmonrow" value="1" {{$item->allergies_10==1 ? 'checked' : ''}}/>
      <div class="mask">
		    <div class="caption">イクラ</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="allergies11" class="allergies_check orange" value="1" {{$item->allergies_11==1 ? 'checked' : ''}}/>
      <div class="mask">
		    <div class="caption">みかん</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="allergies12" class="allergies_check cashewnut" value="1" {{$item->allergies_12==1 ? 'checked' : ''}}/>
      <div class="mask">
		    <div class="caption">カシューナッツ</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="allergies13" class="allergies_check kiwi" value="1" {{$item->allergies_13==1 ? 'checked' : ''}}/>
      <div class="mask">
		    <div class="caption">キウイ</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="allergies14" class="allergies_check beaf" value="1" {{$item->allergies_14==1 ? 'checked' : ''}}/>
      <div class="mask">
		    <div class="caption">牛</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="allergies15" class="allergies_check walnut" value="1" {{$item->allergies_15==1 ? 'checked' : ''}}/>
      <div class="mask">
		    <div class="caption">くるみ</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="allergies16" class="allergies_check sesame"  value="1"{{$item->allergies_16==1 ? 'checked' : ''}}/>
      <div class="mask">
		    <div class="caption">ごま</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="allergies17" class="allergies_check salmon" value="1" {{$item->allergies_17==1 ? 'checked' : ''}}/>
      <div class="mask">
		    <div class="caption">さけ</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="allergies18" class="allergies_check mackerel" value="1" {{$item->allergies_18==1 ? 'checked' : ''}}/>
      <div class="mask">
		    <div class="caption">さば</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="allergies19" class="allergies_check soybean" value="1" {{$item->allergies_19==1 ? 'checked' : ''}}/>
      <div class="mask">
		    <div class="caption">大豆</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="allergies20" class="allergies_check chicken" value="1" {{$item->allergies_20==1 ? 'checked' : ''}}/>
      <div class="mask">
		    <div class="caption">にわとり</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="allergies21" class="allergies_check banana" value="1" {{$item->allergies_21==1 ? 'checked' : ''}}/>
      <div class="mask">
		    <div class="caption">バナナ</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="allergies22" class="allergies_check pork" value="1" {{$item->allergies_22==1 ? 'checked' : ''}}/>
      <div class="mask">
		    <div class="caption">ぶた</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="allergies23" class="allergies_check mashroom" value="1" {{$item->allergies_23==1 ? 'checked' : ''}}/>
      <div class="mask">
		    <div class="caption">きのこ</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="allergies24" class="allergies_check peach" value="1" {{$item->allergies_24==1 ? 'checked' : ''}}/>
      <div class="mask">
		    <div class="caption">もも</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="allergies25" class="allergies_check yam" value="1" {{$item->allergies_25==1 ? 'checked' : ''}} />
      <div class="mask">
		    <div class="caption">長芋</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="allergies26" class="allergies_check apple" value="1" {{$item->allergies_26==1 ? 'checked' : ''}}/>
      <div class="mask">
		    <div class="caption">りんご</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="allergies27" class="allergies_check gelatin" value="1" {{$item->allergies_27==1 ? 'checked' : ''}}/>
      <div class="mask">
		    <div class="caption">ゼラチン</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="allergies28" class="allergies_check almond" value="1" {{$item->allergies_28==1 ? 'checked' : ''}} />
      <div class="mask">
		    <div class="caption">アーモンド</div>
	    </div>
    </div>
    </div>
    
            <!-- カロリー記載　※利用者記載　 -->
　　         <div id="cal">

  <!-- メニューカロリー　　※利用者入力項目 -->
　　        <p><input type="text" placeholder="カロリー" value="{{$item->cal}}" name="menucal"/>cal</p>  
　　         </div>

<!-- メニュー編集　　※利用者入力項目 -->
<input type="button" value="編集" class="menuupdata">

<!-- メニュー削除　　※利用者入力項目 -->
<input type="hidden"data-type="menuid" name="menuid" value="{{$item->id}}">
<input type="button" value="削除" class="menudelete">
</form>
</div>
@endforeach
@else
<p>メニューが登録されていません</p>
@endif