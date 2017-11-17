<?php
	$url = 'https://api.instagram.com/v1/users/xxxxxxxxxx/media/recent/?access_token=xxxxxxxxxx.1677ed0.3643c230de264648a8cc35991b08bbe7&count=5';
	$content = file_get_contents($url);
	$json = json_decode($content, true);
?>
<div class="jcarousel-wrapper jc_vertical" id="jc_instagram">
	<div class="jcarousel">
		<ul>
			<?php foreach($json["data"] as $image){ ?>
			<li>
				<img src="<?php echo $image["images"]["standard_resolution"]["url"]; ?>" alt="" />
			</li>
			<?php } ?>
		</ul>
	</div>
	<a href="#" class="jcarousel-control-prev hidden-lg"></a>
	<a href="#" class="jcarousel-control-next hidden-lg"></a>
</div>