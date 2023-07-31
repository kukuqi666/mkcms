<?php  
include 'head.php';
$url= $_GET['wd'];
?>
<title>智能解析 - <?php echo $mkcms_seoname;?></title>
<meta name="keywords" content="影视,影视搜索,影视智能解析">
<meta name="description" content="影视搜索，<?php echo $mkcms_description;?>">
</head>
<body>
<?php include 'header.php'; ?>
<div class="container">
	<div class="row"><?php echo $mkcms_ad17; ?>
		<div class="stui-pannel stui-pannel-bg clearfix">
			<div class="stui-pannel_hd">
				<div class="stui-pannel__head active bottom-line clearfix">
				<span class="more text-muted pull-right hidden-xs">VIP视频在线解析</span>
					<ul class="nav nav-tabs">
					<li class="active"><a href="#">资源搜索</a></li>
					</ul>
				</div>
			</div>
			<div class="stui-pannel_bd">
				<ul class="stui-vodlist clearfix">
				<?php echo '<iframe class="jx-jx" src="/ck/jx/so.php?wd=',$url,'" allowfullscreen="true" width="100%" height="800px" scrolling="no" frameborder="0"></iframe>';?>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php  include 'footer.php';?>