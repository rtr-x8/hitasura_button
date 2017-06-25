<style>.styleguide__headding01,.styleguide__headding02,.styleguide__headding03,.styleguide__headding04,.styleguide__headding05,.styleguide__headding06,.styleguide__wrapper--ov h1,.styleguide__wrapper--ov h2,.styleguide__wrapper--ov h3,.styleguide__wrapper--ov h4,.styleguide__wrapper--ov h5,.styleguide__wrapper--ov h6{font-weight:700;margin-bottom:1em;padding:10px 10px 0}.styleguide__labelItem,.styleguide__pre:before,.styleguide__preview:before{display:inline-block;padding:3px 1em;background-color:#eee}.styleguide__wrapper--ov h1{font-size:2.5rem}.styleguide__wrapper--ov h2{font-size:2.3rem}.styleguide__wrapper--ov h3{font-size:2rem}.styleguide__wrapper--ov h4{font-size:1.8rem}.styleguide__wrapper--ov h5{font-size:1.4rem}.styleguide__wrapper--ov h6{font-size:1rem}.styleguide__wrapper--ov li,.styleguide__wrapper--ov ol,.styleguide__wrapper--ov ul{list-style:disc inside}.styleguide__wrapper--ov strong{font-weight:700;padding:0 .1em}.styleguide__wrapper--ov blockquote,.styleguide__wrapper--ov q{padding:1em;margin:1em;border-left:2px solid #ddd}.styleguide__wrapper--ov pre{padding:1em;background-color:#eee}.styleguide__headding01{font-size:2rem}.styleguide__headding02{font-size:1.8rem}.styleguide__headding03{font-size:1.6rem}.styleguide__headding04{font-size:1.4rem}.styleguide__headding05{font-size:1.2rem}.styleguide__comment,.styleguide__headding06{font-size:1rem}.styleguide__comment{margin:1em 0;padding:0 10px}.styleguide__file{font-size:.75rem}.styleguide__article{padding:50px 0}.styleguide__article+.styleguide__article{border-top:8px solid #ddd}.styleguide__pre,.styleguide__preview{border-top:2px solid #f0f0f0;background-color:#fff}.styleguide__labelList{margin:1em 0 1em -3px;padding:0 5px}.styleguide__labelList:after{display:block;clear:both;content:''}.styleguide__labelItem{border-radius:3px;margin:3px 0 0 3px}.styleguide__previewIn{padding:15px 0}.styleguide__preview:before{content:'preview'}.styleguide__pre{margin-top:10px;padding:25px 15px;display:block;position:relative}.styleguide__pre:before{position:absolute;top:0;left:0;content:'code'}.styleguide__code{display:block;padding:1em;background-color:#ddd;font-size:1rem;overflow-x:scroll}.styleguide__navi--top{top:0}.styleguide__navi--bottom{bottom:0}.styleguide__navi_item{display:inline-block}.styleguide__navi_item a{text-decoration:none;display:block;padding:.5em 1em;color:#fff;font-weight:700;font-size:1rem;-webkit-transition:all .2s ease;transition:all .2s ease}.styleguide__navi_item a:hover{text-shadow:0 0 3px #fff}.styleguide__navi_item a.styleguide__active{color:#00f}.styleguide__navi--bottom,.styleguide__navi--top{position:fixed;width:100%;left:0;background-color:#bbb;z-index:999999}</style>
<?php $page_id = "home"; ?>
<?php require_once( $_SERVER['DOCUMENT_ROOT'] . '/header.php'); ?>

<div class="test">


<div class="styleguide__wrapper">
	<p class="styleguide__headding01">_sprite-sp</p>
	<i class="styleguide__file">html\_src\scss\04_modules\_sprite-sp.scss</i>
	
	<p class="styleguide__comment">スプライト [ sp ]</p>
	

	
		
		<div class="styleguide__article">
			<p class="styleguide__headding03">ディレクトリ名が「sp」だとすべて半分のサイズになります。　　　　</p>
			<ul class="styleguide__labelList">
				
			</ul>
			<p class="styleguide__comment">あらかじめ2倍の画像を入れるように。<br>mixinに関して<br>デフォルトでbeforeに挿入<br>引数にafter指定でafterに挿入<br>falseを指定すればその要素</p>
			<div class="styleguide__preview">
				<div class="styleguide__previewIn">
<table class='dev_table'>
<tr>
<th>アイコン</th>
<th>クラス名</th>
<th>mixin名</th>
</tr>

<tr>
<td>
<div class='icon--sp_list'></div>
</td>
<td>
<span class='styleguide__copy'>icon--sp_list</span>
</td>
<td>
<span class='styleguide__copy'>mix_icon--sp_list</span>
</td>
</tr>

<tr>
<td>
<div class='icon--sp_mail'></div>
</td>
<td>
<span class='styleguide__copy'>icon--sp_mail</span>
</td>
<td>
<span class='styleguide__copy'>mix_icon--sp_mail</span>
</td>
</tr>

<tr>
<td>
<div class='icon--sp_microphone'></div>
</td>
<td>
<span class='styleguide__copy'>icon--sp_microphone</span>
</td>
<td>
<span class='styleguide__copy'>mix_icon--sp_microphone</span>
</td>
</tr>

<tr>
<td>
<div class='icon--sp_notification'></div>
</td>
<td>
<span class='styleguide__copy'>icon--sp_notification</span>
</td>
<td>
<span class='styleguide__copy'>mix_icon--sp_notification</span>
</td>
</tr>

<tr>
<td>
<div class='icon--sp_padlock'></div>
</td>
<td>
<span class='styleguide__copy'>icon--sp_padlock</span>
</td>
<td>
<span class='styleguide__copy'>mix_icon--sp_padlock</span>
</td>
</tr>

<tr>
<td>
<div class='icon--sp_pencil'></div>
</td>
<td>
<span class='styleguide__copy'>icon--sp_pencil</span>
</td>
<td>
<span class='styleguide__copy'>mix_icon--sp_pencil</span>
</td>
</tr>

<tr>
<td>
<div class='icon--sp_phone-book-1'></div>
</td>
<td>
<span class='styleguide__copy'>icon--sp_phone-book-1</span>
</td>
<td>
<span class='styleguide__copy'>mix_icon--sp_phone-book-1</span>
</td>
</tr>

<tr>
<td>
<div class='icon--sp_phone-book'></div>
</td>
<td>
<span class='styleguide__copy'>icon--sp_phone-book</span>
</td>
<td>
<span class='styleguide__copy'>mix_icon--sp_phone-book</span>
</td>
</tr>

<tr>
<td>
<div class='icon--sp_picture-1'></div>
</td>
<td>
<span class='styleguide__copy'>icon--sp_picture-1</span>
</td>
<td>
<span class='styleguide__copy'>mix_icon--sp_picture-1</span>
</td>
</tr>

<tr>
<td>
<div class='icon--sp_picture'></div>
</td>
<td>
<span class='styleguide__copy'>icon--sp_picture</span>
</td>
<td>
<span class='styleguide__copy'>mix_icon--sp_picture</span>
</td>
</tr>

<tr>
<td>
<div class='icon--sp_placeholder'></div>
</td>
<td>
<span class='styleguide__copy'>icon--sp_placeholder</span>
</td>
<td>
<span class='styleguide__copy'>mix_icon--sp_placeholder</span>
</td>
</tr>

<tr>
<td>
<div class='icon--sp_push-pin'></div>
</td>
<td>
<span class='styleguide__copy'>icon--sp_push-pin</span>
</td>
<td>
<span class='styleguide__copy'>mix_icon--sp_push-pin</span>
</td>
</tr>

<tr>
<td>
<div class='icon--sp_right-alignment'></div>
</td>
<td>
<span class='styleguide__copy'>icon--sp_right-alignment</span>
</td>
<td>
<span class='styleguide__copy'>mix_icon--sp_right-alignment</span>
</td>
</tr>

<tr>
<td>
<div class='icon--sp_settings'></div>
</td>
<td>
<span class='styleguide__copy'>icon--sp_settings</span>
</td>
<td>
<span class='styleguide__copy'>mix_icon--sp_settings</span>
</td>
</tr>

<tr>
<td>
<div class='icon--sp_share'></div>
</td>
<td>
<span class='styleguide__copy'>icon--sp_share</span>
</td>
<td>
<span class='styleguide__copy'>mix_icon--sp_share</span>
</td>
</tr>

<tr>
<td>
<div class='icon--sp_shield-1'></div>
</td>
<td>
<span class='styleguide__copy'>icon--sp_shield-1</span>
</td>
<td>
<span class='styleguide__copy'>mix_icon--sp_shield-1</span>
</td>
</tr>

<tr>
<td>
<div class='icon--sp_shield-2'></div>
</td>
<td>
<span class='styleguide__copy'>icon--sp_shield-2</span>
</td>
<td>
<span class='styleguide__copy'>mix_icon--sp_shield-2</span>
</td>
</tr>

<tr>
<td>
<div class='icon--sp_shield'></div>
</td>
<td>
<span class='styleguide__copy'>icon--sp_shield</span>
</td>
<td>
<span class='styleguide__copy'>mix_icon--sp_shield</span>
</td>
</tr>

<tr>
<td>
<div class='icon--sp_smartphone'></div>
</td>
<td>
<span class='styleguide__copy'>icon--sp_smartphone</span>
</td>
<td>
<span class='styleguide__copy'>mix_icon--sp_smartphone</span>
</td>
</tr>

<tr>
<td>
<div class='icon--sp_speech-bubble-1'></div>
</td>
<td>
<span class='styleguide__copy'>icon--sp_speech-bubble-1</span>
</td>
<td>
<span class='styleguide__copy'>mix_icon--sp_speech-bubble-1</span>
</td>
</tr>

<tr>
<td>
<div class='icon--sp_speech-bubble'></div>
</td>
<td>
<span class='styleguide__copy'>icon--sp_speech-bubble</span>
</td>
<td>
<span class='styleguide__copy'>mix_icon--sp_speech-bubble</span>
</td>
</tr>

<tr>
<td>
<div class='icon--sp_tablet'></div>
</td>
<td>
<span class='styleguide__copy'>icon--sp_tablet</span>
</td>
<td>
<span class='styleguide__copy'>mix_icon--sp_tablet</span>
</td>
</tr>

<tr>
<td>
<div class='icon--sp_unlock'></div>
</td>
<td>
<span class='styleguide__copy'>icon--sp_unlock</span>
</td>
<td>
<span class='styleguide__copy'>mix_icon--sp_unlock</span>
</td>
</tr>

<tr>
<td>
<div class='icon--sp_upload'></div>
</td>
<td>
<span class='styleguide__copy'>icon--sp_upload</span>
</td>
<td>
<span class='styleguide__copy'>mix_icon--sp_upload</span>
</td>
</tr>

<tr>
<td>
<div class='icon--sp_user-1'></div>
</td>
<td>
<span class='styleguide__copy'>icon--sp_user-1</span>
</td>
<td>
<span class='styleguide__copy'>mix_icon--sp_user-1</span>
</td>
</tr>

<tr>
<td>
<div class='icon--sp_user-2'></div>
</td>
<td>
<span class='styleguide__copy'>icon--sp_user-2</span>
</td>
<td>
<span class='styleguide__copy'>mix_icon--sp_user-2</span>
</td>
</tr>

<tr>
<td>
<div class='icon--sp_user-3'></div>
</td>
<td>
<span class='styleguide__copy'>icon--sp_user-3</span>
</td>
<td>
<span class='styleguide__copy'>mix_icon--sp_user-3</span>
</td>
</tr>

<tr>
<td>
<div class='icon--sp_user'></div>
</td>
<td>
<span class='styleguide__copy'>icon--sp_user</span>
</td>
<td>
<span class='styleguide__copy'>mix_icon--sp_user</span>
</td>
</tr>

<tr>
<td>
<div class='icon--sp_volume'></div>
</td>
<td>
<span class='styleguide__copy'>icon--sp_volume</span>
</td>
<td>
<span class='styleguide__copy'>mix_icon--sp_volume</span>
</td>
</tr>

<tr>
<td>
<div class='icon--sp_zoom-in'></div>
</td>
<td>
<span class='styleguide__copy'>icon--sp_zoom-in</span>
</td>
<td>
<span class='styleguide__copy'>mix_icon--sp_zoom-in</span>
</td>
</tr>

<tr>
<td>
<div class='icon--sp_zoom-out'></div>
</td>
<td>
<span class='styleguide__copy'>icon--sp_zoom-out</span>
</td>
<td>
<span class='styleguide__copy'>mix_icon--sp_zoom-out</span>
</td>
</tr>

</table>
</div>
			</div>
			<pre class="styleguide__pre">
				<code class="styleguide__code styleguide__copy">
&lt;table class=&#39;dev_table&#39;&gt;
&lt;tr&gt;
&lt;th&gt;アイコン&lt;/th&gt;
&lt;th&gt;クラス名&lt;/th&gt;
&lt;th&gt;mixin名&lt;/th&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;icon--sp_list&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;icon--sp_list&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_icon--sp_list&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;icon--sp_mail&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;icon--sp_mail&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_icon--sp_mail&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;icon--sp_microphone&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;icon--sp_microphone&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_icon--sp_microphone&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;icon--sp_notification&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;icon--sp_notification&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_icon--sp_notification&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;icon--sp_padlock&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;icon--sp_padlock&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_icon--sp_padlock&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;icon--sp_pencil&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;icon--sp_pencil&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_icon--sp_pencil&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;icon--sp_phone-book-1&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;icon--sp_phone-book-1&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_icon--sp_phone-book-1&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;icon--sp_phone-book&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;icon--sp_phone-book&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_icon--sp_phone-book&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;icon--sp_picture-1&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;icon--sp_picture-1&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_icon--sp_picture-1&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;icon--sp_picture&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;icon--sp_picture&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_icon--sp_picture&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;icon--sp_placeholder&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;icon--sp_placeholder&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_icon--sp_placeholder&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;icon--sp_push-pin&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;icon--sp_push-pin&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_icon--sp_push-pin&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;icon--sp_right-alignment&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;icon--sp_right-alignment&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_icon--sp_right-alignment&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;icon--sp_settings&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;icon--sp_settings&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_icon--sp_settings&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;icon--sp_share&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;icon--sp_share&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_icon--sp_share&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;icon--sp_shield-1&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;icon--sp_shield-1&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_icon--sp_shield-1&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;icon--sp_shield-2&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;icon--sp_shield-2&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_icon--sp_shield-2&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;icon--sp_shield&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;icon--sp_shield&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_icon--sp_shield&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;icon--sp_smartphone&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;icon--sp_smartphone&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_icon--sp_smartphone&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;icon--sp_speech-bubble-1&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;icon--sp_speech-bubble-1&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_icon--sp_speech-bubble-1&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;icon--sp_speech-bubble&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;icon--sp_speech-bubble&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_icon--sp_speech-bubble&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;icon--sp_tablet&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;icon--sp_tablet&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_icon--sp_tablet&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;icon--sp_unlock&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;icon--sp_unlock&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_icon--sp_unlock&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;icon--sp_upload&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;icon--sp_upload&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_icon--sp_upload&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;icon--sp_user-1&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;icon--sp_user-1&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_icon--sp_user-1&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;icon--sp_user-2&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;icon--sp_user-2&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_icon--sp_user-2&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;icon--sp_user-3&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;icon--sp_user-3&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_icon--sp_user-3&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;icon--sp_user&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;icon--sp_user&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_icon--sp_user&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;icon--sp_volume&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;icon--sp_volume&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_icon--sp_volume&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;icon--sp_zoom-in&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;icon--sp_zoom-in&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_icon--sp_zoom-in&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;icon--sp_zoom-out&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;icon--sp_zoom-out&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_icon--sp_zoom-out&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;/table&gt;
</code>
			</pre>
		</div>
		
	
</div>

<div class="styleguide__navi--bottom">
	<ul class="styleguide__navi_list">
		<li class="styleguide__navi_item"><a href="./index.php">スタイルガイド - Overview</a></li>
		
		<li class="styleguide__navi_item"><a class='' href='bg.php'>
			背景</a></li>
		
		<li class="styleguide__navi_item"><a class='' href='box.php'>
			Box、装飾、table</a></li>
		
		<li class="styleguide__navi_item"><a class='' href='button.php'>
			ボタン</a></li>
		
		<li class="styleguide__navi_item"><a class='' href='head.php'>
			head</a></li>
		
		<li class="styleguide__navi_item"><a class='' href='helper.php'>
			汎用クラス</a></li>
		
		<li class="styleguide__navi_item"><a class='' href='icon.php'>
			アイコン</a></li>
		
		<li class="styleguide__navi_item"><a class='' href='iconfont.php'>
			アイコンフォント</a></li>
		
		<li class="styleguide__navi_item"><a class='' href='includeParts.php'>
			_includeParts</a></li>
		
		<li class="styleguide__navi_item"><a class='' href='pager.php'>
			ページャー</a></li>
		
		<li class="styleguide__navi_item"><a class='' href='sprite-pc.php'>
			スプライト [ pc ]</a></li>
		
		<li class="styleguide__navi_item"><a class=' styleguide__active' href='sprite-sp.php'>
			スプライト [ sp ]</a></li>
		
		<li class="styleguide__navi_item"><a class='' href='table.php'>
			テーブル</a></li>
		
		<li class="styleguide__navi_item"><a class='' href='text.php'>
			テキスト</a></li>
		
		<li class="styleguide__navi_item"><a class='' href='title.php'>
			タイトルまとめ</a></li>
		
		<li class="styleguide__navi_item"><a class='' href='wrap.php'>
			Box、装飾、table</a></li>
		
	</ul>
</div>

</div></main>

<?php require_once( $_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>

<script src="//code.jquery.com/jquery-1.12.4.min.js"></script>

<script>(function(){var t,e,n;$(document).ready(function(){return n()}),$(window).on("resize",function(){return n()}),$(".styleguide__copy").on("click",function(){return e(this)}),n=function(){var t;return $(".styleguide__navi--top").length?(t=$(".styleguide__navi--top").innerHeight()+"px",$("html").css({"padding-top":t})):(t=$(".styleguide__navi--bottom").innerHeight()+"px",$("html").css({"padding-bottom":t}))},e=function(e){var n,o,i;return n=document.createRange(),n.selectNodeContents(e),i=window.getSelection(),i.removeAllRanges(),i.addRange(n),o=document.execCommand("copy"),t("Copied"),o},t=function(t){var e;return e='<p id="styleguide__alert" style="position: fixed; top: 45%; left: 50%; margin-left: -100px; padding: 1em; font-size: 15px; background-color: red; color: #eee; width: 200px; text-align: center; letter-spacing: 0.1em">'+t+"</p>",$("body").append(e),setTimeout(function(){return $("#styleguide__alert").fadeOut().remove()},1e3)}}).call(this);</script>