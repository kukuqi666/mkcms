<?php  include 'head.php';$zb='active';$fl='active';?>
<title>电视直播-<?php echo $mkcms_seoname;?></title>
<meta name="keywords" content="电视直播,湖南卫视,<?php echo $mkcms_keywords;?>">
<meta name="description" content="<?php echo $mkcms_description;?>">
<link href="/template/jingpin/css/tv.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php include 'header.php'; ?>
<div class="container">
	<div class="row">
		<?php echo $mkcms_ad20; ?>
		<div class="stui-pannel stui-pannel-bg clearfix">
			<div class="stui-pannel-box">
				<div class="stui-pannel_hd">
					<div class="stui-pannel__head active bottom-line clearfix">
					<span class="more text-muted pull-right hidden-xs" style="color:red">未取得许可证禁止转播</span>
					<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-list"></use></svg>电视直播</h3>
					</div>
				</div>
				</div>
			</div>
			<?php echo $mkcms_zbcode;?>
						</div>
					</div>
				</div>
				<div class="zb-plays">
					<div class="zb-play"><a href="javascript:;" class="close">x</a>
						<div class="ipcon" id="ipcon">
						<iframe id="frmLive" frameborder="0" allowfullscreen="true" width="100%" src="http://demo.micool.net/uploadfile/image/20200424/20200424194826_66787.jpg"></iframe>
						</div>
					</div>
    			</div>
				<script>
				var $a = $('.zb-nav a'),
				$ul = $('.zb-con ul'),
				$alast = $('.sitenav a:last-child'),
				$abtn = $('.zb-list li a');
				$alast.addClass('cur');
				$a.click(function() {
				var $this = $(this);
				var $t = $this.index();
				$a.removeClass();
				$this.addClass('cur');
				$ul.addClass('hide').removeClass('show');
				$ul.eq($t).addClass('show');
				});
				$abtn.on('click', function(e) {
				var vurl = $(this).attr("data-url");
				var w = document.documentElement ? document.documentElement.clientWidth : document.body.clientWidth;
				$('#frmLive').attr('src', vurl);
				if (w < 767) {
				$('#frmLive').height = 260;
				} else {
				$('#frmLive').height = 600;
				};
				$('html').addClass('show');
				e.stopPropagation();
				});
				$('.zb-plays .close').on('click', function() {
				$('html').removeClass('show');
				document.getElementById('frmLive').src = '';
				})
				$('.izbs').addClass('cur');
				$('.iapp').removeClass('cur');
				</script>
			</div>
		</div>
	</div>
</div>
<?php include 'footer.php';?>