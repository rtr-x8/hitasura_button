<style>.styleguide__headding01,.styleguide__headding02,.styleguide__headding03,.styleguide__headding04,.styleguide__headding05,.styleguide__headding06,.styleguide__wrapper--ov h1,.styleguide__wrapper--ov h2,.styleguide__wrapper--ov h3,.styleguide__wrapper--ov h4,.styleguide__wrapper--ov h5,.styleguide__wrapper--ov h6{font-weight:700;margin-bottom:1em;padding:10px 10px 0}.styleguide__labelItem,.styleguide__pre:before,.styleguide__preview:before{display:inline-block;padding:3px 1em;background-color:#eee}.styleguide__wrapper--ov h1{font-size:2.5rem}.styleguide__wrapper--ov h2{font-size:2.3rem}.styleguide__wrapper--ov h3{font-size:2rem}.styleguide__wrapper--ov h4{font-size:1.8rem}.styleguide__wrapper--ov h5{font-size:1.4rem}.styleguide__wrapper--ov h6{font-size:1rem}.styleguide__wrapper--ov li,.styleguide__wrapper--ov ol,.styleguide__wrapper--ov ul{list-style:disc inside}.styleguide__wrapper--ov strong{font-weight:700;padding:0 .1em}.styleguide__wrapper--ov blockquote,.styleguide__wrapper--ov q{padding:1em;margin:1em;border-left:2px solid #ddd}.styleguide__wrapper--ov pre{padding:1em;background-color:#eee}.styleguide__headding01{font-size:2rem}.styleguide__headding02{font-size:1.8rem}.styleguide__headding03{font-size:1.6rem}.styleguide__headding04{font-size:1.4rem}.styleguide__headding05{font-size:1.2rem}.styleguide__comment,.styleguide__headding06{font-size:1rem}.styleguide__comment{margin:1em 0;padding:0 10px}.styleguide__file{font-size:.75rem}.styleguide__article{padding:50px 0}.styleguide__article+.styleguide__article{border-top:8px solid #ddd}.styleguide__pre,.styleguide__preview{border-top:2px solid #f0f0f0;background-color:#fff}.styleguide__labelList{margin:1em 0 1em -3px;padding:0 5px}.styleguide__labelList:after{display:block;clear:both;content:''}.styleguide__labelItem{border-radius:3px;margin:3px 0 0 3px}.styleguide__previewIn{padding:15px 0}.styleguide__preview:before{content:'preview'}.styleguide__pre{margin-top:10px;padding:25px 15px;display:block;position:relative}.styleguide__pre:before{position:absolute;top:0;left:0;content:'code'}.styleguide__code{display:block;padding:1em;background-color:#ddd;font-size:1rem;overflow-x:scroll}.styleguide__navi--top{top:0}.styleguide__navi--bottom{bottom:0}.styleguide__navi_item{display:inline-block}.styleguide__navi_item a{text-decoration:none;display:block;padding:.5em 1em;color:#fff;font-weight:700;font-size:1rem;-webkit-transition:all .2s ease;transition:all .2s ease}.styleguide__navi_item a:hover{text-shadow:0 0 3px #fff}.styleguide__navi_item a.styleguide__active{color:#00f}.styleguide__navi--bottom,.styleguide__navi--top{position:fixed;width:100%;left:0;background-color:#bbb;z-index:999999}</style>
<?php $page_id = "home"; ?>
<?php require_once( $_SERVER['DOCUMENT_ROOT'] . '/header.php'); ?>

<div class="test">


<div class="styleguide__wrapper">
	<p class="styleguide__headding01">_sprite-pc</p>
	<i class="styleguide__file">html\_src\scss\04_modules\_sprite-pc.scss</i>
	
	<p class="styleguide__comment">スプライト [ pc ]</p>
	

	
		
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
<div class='icon--pc_airplane'></div>
</td>
<td>
<span class='styleguide__copy'>icon--pc_airplane</span>
</td>
<td>
<span class='styleguide__copy'>mix_icon--pc_airplane</span>
</td>
</tr>

<tr>
<td>
<div class='icon--pc_attachment'></div>
</td>
<td>
<span class='styleguide__copy'>icon--pc_attachment</span>
</td>
<td>
<span class='styleguide__copy'>mix_icon--pc_attachment</span>
</td>
</tr>

<tr>
<td>
<div class='icon--pc_broken-heart'></div>
</td>
<td>
<span class='styleguide__copy'>icon--pc_broken-heart</span>
</td>
<td>
<span class='styleguide__copy'>mix_icon--pc_broken-heart</span>
</td>
</tr>

<tr>
<td>
<div class='icon--pc_browser'></div>
</td>
<td>
<span class='styleguide__copy'>icon--pc_browser</span>
</td>
<td>
<span class='styleguide__copy'>mix_icon--pc_browser</span>
</td>
</tr>

<tr>
<td>
<div class='icon--pc_cancel'></div>
</td>
<td>
<span class='styleguide__copy'>icon--pc_cancel</span>
</td>
<td>
<span class='styleguide__copy'>mix_icon--pc_cancel</span>
</td>
</tr>

<tr>
<td>
<div class='icon--pc_clock-1'></div>
</td>
<td>
<span class='styleguide__copy'>icon--pc_clock-1</span>
</td>
<td>
<span class='styleguide__copy'>mix_icon--pc_clock-1</span>
</td>
</tr>

<tr>
<td>
<div class='icon--pc_clock'></div>
</td>
<td>
<span class='styleguide__copy'>icon--pc_clock</span>
</td>
<td>
<span class='styleguide__copy'>mix_icon--pc_clock</span>
</td>
</tr>

<tr>
<td>
<div class='icon--pc_cloud-computing'></div>
</td>
<td>
<span class='styleguide__copy'>icon--pc_cloud-computing</span>
</td>
<td>
<span class='styleguide__copy'>mix_icon--pc_cloud-computing</span>
</td>
</tr>

<tr>
<td>
<div class='icon--pc_compass'></div>
</td>
<td>
<span class='styleguide__copy'>icon--pc_compass</span>
</td>
<td>
<span class='styleguide__copy'>mix_icon--pc_compass</span>
</td>
</tr>

<tr>
<td>
<div class='icon--pc_computer'></div>
</td>
<td>
<span class='styleguide__copy'>icon--pc_computer</span>
</td>
<td>
<span class='styleguide__copy'>mix_icon--pc_computer</span>
</td>
</tr>

<tr>
<td>
<div class='icon--pc_cursor'></div>
</td>
<td>
<span class='styleguide__copy'>icon--pc_cursor</span>
</td>
<td>
<span class='styleguide__copy'>mix_icon--pc_cursor</span>
</td>
</tr>

<tr>
<td>
<div class='icon--pc_document-1'></div>
</td>
<td>
<span class='styleguide__copy'>icon--pc_document-1</span>
</td>
<td>
<span class='styleguide__copy'>mix_icon--pc_document-1</span>
</td>
</tr>

<tr>
<td>
<div class='icon--pc_document-2'></div>
</td>
<td>
<span class='styleguide__copy'>icon--pc_document-2</span>
</td>
<td>
<span class='styleguide__copy'>mix_icon--pc_document-2</span>
</td>
</tr>

<tr>
<td>
<div class='icon--pc_document-3'></div>
</td>
<td>
<span class='styleguide__copy'>icon--pc_document-3</span>
</td>
<td>
<span class='styleguide__copy'>mix_icon--pc_document-3</span>
</td>
</tr>

<tr>
<td>
<div class='icon--pc_document'></div>
</td>
<td>
<span class='styleguide__copy'>icon--pc_document</span>
</td>
<td>
<span class='styleguide__copy'>mix_icon--pc_document</span>
</td>
</tr>

<tr>
<td>
<div class='icon--pc_download'></div>
</td>
<td>
<span class='styleguide__copy'>icon--pc_download</span>
</td>
<td>
<span class='styleguide__copy'>mix_icon--pc_download</span>
</td>
</tr>

<tr>
<td>
<div class='icon--pc_earth-globe'></div>
</td>
<td>
<span class='styleguide__copy'>icon--pc_earth-globe</span>
</td>
<td>
<span class='styleguide__copy'>mix_icon--pc_earth-globe</span>
</td>
</tr>

<tr>
<td>
<div class='icon--pc_email'></div>
</td>
<td>
<span class='styleguide__copy'>icon--pc_email</span>
</td>
<td>
<span class='styleguide__copy'>mix_icon--pc_email</span>
</td>
</tr>

<tr>
<td>
<div class='icon--pc_film'></div>
</td>
<td>
<span class='styleguide__copy'>icon--pc_film</span>
</td>
<td>
<span class='styleguide__copy'>mix_icon--pc_film</span>
</td>
</tr>

<tr>
<td>
<div class='icon--pc_folder'></div>
</td>
<td>
<span class='styleguide__copy'>icon--pc_folder</span>
</td>
<td>
<span class='styleguide__copy'>mix_icon--pc_folder</span>
</td>
</tr>

<tr>
<td>
<div class='icon--pc_gamepad'></div>
</td>
<td>
<span class='styleguide__copy'>icon--pc_gamepad</span>
</td>
<td>
<span class='styleguide__copy'>mix_icon--pc_gamepad</span>
</td>
</tr>

<tr>
<td>
<div class='icon--pc_group'></div>
</td>
<td>
<span class='styleguide__copy'>icon--pc_group</span>
</td>
<td>
<span class='styleguide__copy'>mix_icon--pc_group</span>
</td>
</tr>

<tr>
<td>
<div class='icon--pc_heart'></div>
</td>
<td>
<span class='styleguide__copy'>icon--pc_heart</span>
</td>
<td>
<span class='styleguide__copy'>mix_icon--pc_heart</span>
</td>
</tr>

<tr>
<td>
<div class='icon--pc_internet'></div>
</td>
<td>
<span class='styleguide__copy'>icon--pc_internet</span>
</td>
<td>
<span class='styleguide__copy'>mix_icon--pc_internet</span>
</td>
</tr>

<tr>
<td>
<div class='icon--pc_layers'></div>
</td>
<td>
<span class='styleguide__copy'>icon--pc_layers</span>
</td>
<td>
<span class='styleguide__copy'>mix_icon--pc_layers</span>
</td>
</tr>

<tr>
<td>
<div class='icon--pc_left-alignment'></div>
</td>
<td>
<span class='styleguide__copy'>icon--pc_left-alignment</span>
</td>
<td>
<span class='styleguide__copy'>mix_icon--pc_left-alignment</span>
</td>
</tr>

<tr>
<td>
<div class='icon--pc_light-bulb'></div>
</td>
<td>
<span class='styleguide__copy'>icon--pc_light-bulb</span>
</td>
<td>
<span class='styleguide__copy'>mix_icon--pc_light-bulb</span>
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
&lt;div class=&#39;icon--pc_airplane&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;icon--pc_airplane&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_icon--pc_airplane&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;icon--pc_attachment&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;icon--pc_attachment&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_icon--pc_attachment&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;icon--pc_broken-heart&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;icon--pc_broken-heart&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_icon--pc_broken-heart&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;icon--pc_browser&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;icon--pc_browser&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_icon--pc_browser&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;icon--pc_cancel&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;icon--pc_cancel&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_icon--pc_cancel&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;icon--pc_clock-1&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;icon--pc_clock-1&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_icon--pc_clock-1&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;icon--pc_clock&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;icon--pc_clock&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_icon--pc_clock&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;icon--pc_cloud-computing&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;icon--pc_cloud-computing&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_icon--pc_cloud-computing&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;icon--pc_compass&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;icon--pc_compass&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_icon--pc_compass&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;icon--pc_computer&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;icon--pc_computer&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_icon--pc_computer&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;icon--pc_cursor&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;icon--pc_cursor&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_icon--pc_cursor&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;icon--pc_document-1&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;icon--pc_document-1&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_icon--pc_document-1&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;icon--pc_document-2&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;icon--pc_document-2&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_icon--pc_document-2&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;icon--pc_document-3&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;icon--pc_document-3&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_icon--pc_document-3&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;icon--pc_document&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;icon--pc_document&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_icon--pc_document&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;icon--pc_download&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;icon--pc_download&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_icon--pc_download&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;icon--pc_earth-globe&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;icon--pc_earth-globe&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_icon--pc_earth-globe&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;icon--pc_email&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;icon--pc_email&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_icon--pc_email&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;icon--pc_film&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;icon--pc_film&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_icon--pc_film&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;icon--pc_folder&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;icon--pc_folder&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_icon--pc_folder&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;icon--pc_gamepad&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;icon--pc_gamepad&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_icon--pc_gamepad&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;icon--pc_group&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;icon--pc_group&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_icon--pc_group&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;icon--pc_heart&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;icon--pc_heart&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_icon--pc_heart&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;icon--pc_internet&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;icon--pc_internet&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_icon--pc_internet&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;icon--pc_layers&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;icon--pc_layers&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_icon--pc_layers&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;icon--pc_left-alignment&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;icon--pc_left-alignment&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_icon--pc_left-alignment&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
&lt;div class=&#39;icon--pc_light-bulb&#39;&gt;&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;icon--pc_light-bulb&lt;/span&gt;
&lt;/td&gt;
&lt;td&gt;
&lt;span class=&#39;styleguide__copy&#39;&gt;mix_icon--pc_light-bulb&lt;/span&gt;
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
		
		<li class="styleguide__navi_item"><a class=' styleguide__active' href='sprite-pc.php'>
			スプライト [ pc ]</a></li>
		
		<li class="styleguide__navi_item"><a class='' href='sprite-sp.php'>
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