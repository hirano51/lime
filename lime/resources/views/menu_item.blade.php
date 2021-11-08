<!-- サイトに表示される方のブロック-->
<!-- 画像からカロリーまでのブロック -->
@if(!is_null($menu))
@foreach($menu as $item)
<div id="attachment">

    <!-- メニュー画像　　※利用者画像挿入 -->
    @if(!empty($item->img))
<img src="uploads/{{$item->img}}"/>   
@else
<!-- <img src="images/x.jpg"/> -->
<p>画像が設定されていません</p> 
@endif

    <!-- メニュー値段　　※利用者入力項目 -->
　 <div id="name">
　  <p><input type="text" placeholder="品名" value="{{$item->name}}"/></p> 
　 </div>
   <div id="price">
　    <p>￥<input type="text" placeholder="値段" value="{{$item->price}}"/></p> 
　 </div>

<!-- アレルギーアイコン -->
　<div id="allergies">

    <div>
      <input type="checkbox" name="" class="allergies_check egg" {{$item->allergies_1==1 ? 'checked' : ''}} />
      <div class="mask">
		    <div class="caption">たまご</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="" class="allergies_check milk" {{$item->allergies_2==1 ? 'checked' : ''}} />
      <div class="mask">
		    <div class="caption">牛乳</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="" class="allergies_check wheat" {{$item->allergies_3==1 ? 'checked' : ''}}/>
      <div class="mask">
		    <div class="caption">小麦</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="" class="allergies_check buckwheat" {{$item->allergies_4==1 ? 'checked' : ''}}/>
      <div class="mask">
		    <div class="caption">そば</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="" class="allergies_check peanut"  {{$item->allergies_5==1 ? 'checked' : ''}}/>
      <div class="mask">
		    <div class="caption">落花生</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="" class="allergies_check shrimp" {{$item->allergies_6==1 ? 'checked' : ''}} />
      <div class="mask">
		    <div class="caption">エビ</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="" class="allergies_check crab"  {{$item->allergies_7==1 ? 'checked' : ''}}/>
      <div class="mask">
		    <div class="caption">カニ</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="" class="allergies_check abalone"  {{$item->allergies_8==1 ? 'checked' : ''}}/>
      <div class="mask">
		    <div class="caption">アワビ</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="" class="allergies_check cuttlefish"  {{$item->allergies_9==1 ? 'checked' : ''}}/>
      <div class="mask">
		    <div class="caption">イカ</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="" class="allergies_check salmonrow" {{$item->allergies_10==1 ? 'checked' : ''}}/>
      <div class="mask">
		    <div class="caption">イクラ</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="" class="allergies_check orange" {{$item->allergies_11==1 ? 'checked' : ''}}/>
      <div class="mask">
		    <div class="caption">みかん</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="" class="allergies_check cashewnut" {{$item->allergies_12==1 ? 'checked' : ''}}/>
      <div class="mask">
		    <div class="caption">カシューナッツ</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="" class="allergies_check kiwi" {{$item->allergies_13==1 ? 'checked' : ''}}/>
      <div class="mask">
		    <div class="caption">キウイ</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="" class="allergies_check beaf" {{$item->allergies_14==1 ? 'checked' : ''}}/>
      <div class="mask">
		    <div class="caption">牛</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="" class="allergies_check walnut" {{$item->allergies_15==1 ? 'checked' : ''}}/>
      <div class="mask">
		    <div class="caption">くるみ</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="" class="allergies_check sesame" {{$item->allergies_16==1 ? 'checked' : ''}}/>
      <div class="mask">
		    <div class="caption">ごま</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="" class="allergies_check salmon" {{$item->allergies_17==1 ? 'checked' : ''}}/>
      <div class="mask">
		    <div class="caption">さけ</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="" class="allergies_check mackerel" {{$item->allergies_18==1 ? 'checked' : ''}}/>
      <div class="mask">
		    <div class="caption">さば</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="" class="allergies_check soybean" {{$item->allergies_19==1 ? 'checked' : ''}}/>
      <div class="mask">
		    <div class="caption">大豆</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="" class="allergies_check chicken" {{$item->allergies_20==1 ? 'checked' : ''}}/>
      <div class="mask">
		    <div class="caption">にわとり</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="" class="allergies_check banana" {{$item->allergies_21==1 ? 'checked' : ''}}/>
      <div class="mask">
		    <div class="caption">バナナ</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="" class="allergies_check pork" {{$item->allergies_22==1 ? 'checked' : ''}}/>
      <div class="mask">
		    <div class="caption">ぶた</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="" class="allergies_check mashroom" {{$item->allergies_23==1 ? 'checked' : ''}}/>
      <div class="mask">
		    <div class="caption">きのこ</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="" class="allergies_check peach" {{$item->allergies_24==1 ? 'checked' : ''}}/>
      <div class="mask">
		    <div class="caption">もも</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="" class="allergies_check yam" {{$item->allergies_25==1 ? 'checked' : ''}} />
      <div class="mask">
		    <div class="caption">長芋</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="" class="allergies_check apple" {{$item->allergies_26==1 ? 'checked' : ''}}/>
      <div class="mask">
		    <div class="caption">りんご</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="" class="allergies_check gelatin" {{$item->allergies_27==1 ? 'checked' : ''}}/>
      <div class="mask">
		    <div class="caption">ゼラチン</div>
	    </div>
    </div>

    <div>
      <input type="checkbox" name="" class="allergies_check almond" {{$item->allergies_28==1 ? 'checked' : ''}} />
      <div class="mask">
		    <div class="caption">アーモンド</div>
	    </div>
    </div>
    </div>
    
            <!-- カロリー記載　※利用者記載　 -->
　　         <div id="cal">
　　        <p><input type="text" placeholder="カロリー" value="{{$item->cal}}"/>cal</p>  
　　         </div>
<input type="hidden"data-type="menuid" value="{{$item->id}}">
<input type="button" value="削除" class="menudelete">
</div>
@endforeach
@else
<p>メニューが登録されていません</p>
@endif