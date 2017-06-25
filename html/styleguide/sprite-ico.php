<style>.styleguide__headding01,.styleguide__headding02,.styleguide__headding03,.styleguide__headding04,.styleguide__headding05,.styleguide__headding06,.styleguide__wrapper--ov h1,.styleguide__wrapper--ov h2,.styleguide__wrapper--ov h3,.styleguide__wrapper--ov h4,.styleguide__wrapper--ov h5,.styleguide__wrapper--ov h6{font-weight:700;margin-bottom:1em;padding:10px 10px 0}.styleguide__labelItem,.styleguide__pre:before,.styleguide__preview:before{display:inline-block;padding:3px 1em;background-color:#eee}.styleguide__wrapper--ov h1{font-size:2.5rem}.styleguide__wrapper--ov h2{font-size:2.3rem}.styleguide__wrapper--ov h3{font-size:2rem}.styleguide__wrapper--ov h4{font-size:1.8rem}.styleguide__wrapper--ov h5{font-size:1.4rem}.styleguide__wrapper--ov h6{font-size:1rem}.styleguide__wrapper--ov li,.styleguide__wrapper--ov ol,.styleguide__wrapper--ov ul{list-style:disc inside}.styleguide__wrapper--ov strong{font-weight:700;padding:0 .1em}.styleguide__wrapper--ov blockquote,.styleguide__wrapper--ov q{padding:1em;margin:1em;border-left:2px solid #ddd}.styleguide__wrapper--ov pre{padding:1em;background-color:#eee}.styleguide__headding01{font-size:2rem}.styleguide__headding02{font-size:1.8rem}.styleguide__headding03{font-size:1.6rem}.styleguide__headding04{font-size:1.4rem}.styleguide__headding05{font-size:1.2rem}.styleguide__comment,.styleguide__headding06{font-size:1rem}.styleguide__comment{margin:1em 0;padding:0 10px}.styleguide__file{font-size:.75rem}.styleguide__article{padding:50px 0}.styleguide__article+.styleguide__article{border-top:8px solid #ddd}.styleguide__pre,.styleguide__preview{border-top:2px solid #f0f0f0;background-color:#fff}.styleguide__labelList{margin:1em 0 1em -3px;padding:0 5px}.styleguide__labelList:after{display:block;clear:both;content:''}.styleguide__labelItem{border-radius:3px;margin:3px 0 0 3px}.styleguide__previewIn{padding:15px 0}.styleguide__preview:before{content:'preview'}.styleguide__pre{margin-top:10px;padding:25px 15px;display:block;position:relative}.styleguide__pre:before{position:absolute;top:0;left:0;content:'code'}.styleguide__code{display:block;padding:1em;background-color:#ddd;font-size:1rem;overflow-x:scroll}.styleguide__navi--top{top:0}.styleguide__navi--bottom{bottom:0}.styleguide__navi_item{display:inline-block}.styleguide__navi_item a{text-decoration:none;display:block;padding:.5em 1em;color:#fff;font-weight:700;font-size:1rem;-webkit-transition:all .2s ease;transition:all .2s ease}.styleguide__navi_item a:hover{text-shadow:0 0 3px #fff}.styleguide__navi_item a.styleguide__active{color:#00f}.styleguide__navi--bottom,.styleguide__navi--top{position:fixed;width:100%;left:0;background-color:#bbb;z-index:999999}</style>
<?php $page_id = "home"; ?>
<?php require_once( $_SERVER['DOCUMENT_ROOT'] . '/header.php'); ?>

<div class="test">


<div class="styleguide__wrapper">
	<p class="styleguide__headding01">_sprite-ico</p>
	<i class="styleguide__file">html\_src\scss\04_modules\_sprite-ico.scss</i>
	
	<p class="styleguide__comment">スプライト [ ico ]</p>
	

	
		
		<div class="styleguide__article">
			<p class="styleguide__headding03">mixinに関して</p>
			<ul class="styleguide__labelList">
				
			</ul>
			<p class="styleguide__comment">デフォルトでbeforeに挿入<br>引数にafter指定でafterに挿入<br>falseを指定すればその要素</p>
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
<div class='c_ico-airplane'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-airplane</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-airplane</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-attachment'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-attachment</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-attachment</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-broken-heart'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-broken-heart</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-broken-heart</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-browser'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-browser</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-browser</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-cancel'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-cancel</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-cancel</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-center-alignment'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-center-alignment</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-center-alignment</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-clock-1'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-clock-1</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-clock-1</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-clock'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-clock</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-clock</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-cloud-computing'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-cloud-computing</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-cloud-computing</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-compass'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-compass</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-compass</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-computer'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-computer</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-computer</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-cursor'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-cursor</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-cursor</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-document-1'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-document-1</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-document-1</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-document-2'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-document-2</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-document-2</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-document-3'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-document-3</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-document-3</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-document'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-document</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-document</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-download'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-download</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-download</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-earth-globe'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-earth-globe</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-earth-globe</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-email'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-email</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-email</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-film'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-film</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-film</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-folder'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-folder</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-folder</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-gamepad'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-gamepad</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-gamepad</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-group'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-group</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-group</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-heart'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-heart</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-heart</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-internet'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-internet</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-internet</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-layers'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-layers</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-layers</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-left-alignment'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-left-alignment</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-left-alignment</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-light-bulb-1'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-light-bulb-1</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-light-bulb-1</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-light-bulb'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-light-bulb</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-light-bulb</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-link'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-link</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-link</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-list'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-list</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-list</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-mail'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-mail</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-mail</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-microphone'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-microphone</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-microphone</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-notification'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-notification</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-notification</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-padlock'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-padlock</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-padlock</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-pencil'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-pencil</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-pencil</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-phone-book-1'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-phone-book-1</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-phone-book-1</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-phone-book'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-phone-book</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-phone-book</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-picture-1'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-picture-1</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-picture-1</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-picture'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-picture</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-picture</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-placeholder'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-placeholder</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-placeholder</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-push-pin'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-push-pin</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-push-pin</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-right-alignment'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-right-alignment</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-right-alignment</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-settings'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-settings</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-settings</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-share'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-share</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-share</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-shield-1'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-shield-1</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-shield-1</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-shield-2'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-shield-2</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-shield-2</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-shield'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-shield</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-shield</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-smartphone'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-smartphone</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-smartphone</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-speech-bubble-1'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-speech-bubble-1</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-speech-bubble-1</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-speech-bubble'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-speech-bubble</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-speech-bubble</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-tablet'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-tablet</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-tablet</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-unlock'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-unlock</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-unlock</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-upload'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-upload</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-upload</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-user-1'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-user-1</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-user-1</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-user-2'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-user-2</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-user-2</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-user-3'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-user-3</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-user-3</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-user'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-user</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-user</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-volume'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-volume</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-volume</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-zoom-in'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-zoom-in</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-zoom-in</span>
</td>
</tr>

<tr>
<td>
<div class='c_ico-zoom-out'></div>
</td>
<td>
<span class='styleguide__copy'>c_ico-zoom-out</span>
</td>
<td>
<span class='styleguide__copy'>mix_c_ico-zoom-out</span>
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
&lt;div class=&#39;c_ico-airplane&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-airplane&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-airplane&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-attachment&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-attachment&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-attachment&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-broken-heart&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-broken-heart&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-broken-heart&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-browser&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-browser&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-browser&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-cancel&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-cancel&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-cancel&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-center-alignment&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-center-alignment&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-center-alignment&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-clock-1&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-clock-1&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-clock-1&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-clock&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-clock&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-clock&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-cloud-computing&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-cloud-computing&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-cloud-computing&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-compass&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-compass&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-compass&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-computer&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-computer&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-computer&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-cursor&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-cursor&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-cursor&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-document-1&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-document-1&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-document-1&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-document-2&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-document-2&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-document-2&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-document-3&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-document-3&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-document-3&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-document&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-document&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-document&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-download&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-download&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-download&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-earth-globe&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-earth-globe&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-earth-globe&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-email&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-email&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-email&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-film&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-film&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-film&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-folder&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-folder&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-folder&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-gamepad&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-gamepad&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-gamepad&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-group&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-group&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-group&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-heart&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-heart&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-heart&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-internet&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-internet&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-internet&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-layers&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-layers&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-layers&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-left-alignment&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-left-alignment&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-left-alignment&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-light-bulb-1&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-light-bulb-1&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-light-bulb-1&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-light-bulb&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-light-bulb&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-light-bulb&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-link&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-link&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-link&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-list&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-list&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-list&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-mail&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-mail&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-mail&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-microphone&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-microphone&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-microphone&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-notification&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-notification&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-notification&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-padlock&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-padlock&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-padlock&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-pencil&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-pencil&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-pencil&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-phone-book-1&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-phone-book-1&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-phone-book-1&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-phone-book&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-phone-book&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-phone-book&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-picture-1&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-picture-1&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-picture-1&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-picture&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-picture&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-picture&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-placeholder&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-placeholder&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-placeholder&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-push-pin&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-push-pin&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-push-pin&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-right-alignment&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-right-alignment&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-right-alignment&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-settings&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-settings&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-settings&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-share&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-share&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-share&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-shield-1&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-shield-1&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-shield-1&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-shield-2&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-shield-2&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-shield-2&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-shield&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-shield&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-shield&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-smartphone&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-smartphone&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-smartphone&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-speech-bubble-1&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-speech-bubble-1&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-speech-bubble-1&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-speech-bubble&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-speech-bubble&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-speech-bubble&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-tablet&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-tablet&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-tablet&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-unlock&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-unlock&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-unlock&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-upload&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-upload&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-upload&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-user-1&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-user-1&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-user-1&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-user-2&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-user-2&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-user-2&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-user-3&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-user-3&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-user-3&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-user&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-user&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-user&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-volume&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-volume&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-volume&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-zoom-in&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-zoom-in&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-zoom-in&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;c_ico-zoom-out&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;c_ico-zoom-out&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_c_ico-zoom-out&lt;/span&gt;
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
		
		<li class="styleguide__navi_item"><a class=' styleguide__active' href='sprite-ico.php'>
			スプライト [ ico ]</a></li>
		
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