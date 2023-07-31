<?php
error_reporting(0);
include('../system/inc.php');
include('cms_check.php');
include('model/system.php');?>
<?php include('inc_header.php') ?>
<script type='text/javascript'>
KindEditor.ready(function(K) {
	K.create('#s_copyright');
	var editor = K.editor();
	K('#picture').click(function() {
		editor.loadPlugin('image', function() {
			editor.plugin.imageDialog({
			imageUrl : K('#s_logo').val(),
			clickFn : function(url, title, width, height, border, align) {
				K('#s_logo').val(url);
				editor.hideDialog();
				}
			});
		});
	});
		K('#beijing').click(function() {
		editor.loadPlugin('image', function() {
			editor.plugin.imageDialog({
			imageUrl : K('#s_beijing').val(),
			clickFn : function(url, title, width, height, border, align) {
				K('#s_beijing').val(url);
				editor.hideDialog();
				}
			});
		});
	});
});
</script>
		<div class="container-fluid content">	
			<div class="row">
			<?php include('inc_left.php') ?>
				<div class="main ">
					<div class="page-header">
						<div class="pull-left">
							<ol class="breadcrumb visible-sm visible-md visible-lg">								
								<li><a href="cms_welcome.php"><i class="icon fa fa-home"></i>首页</a></li>
							</ol>						
						</div>
						<div class="pull-right">
							<h2>系统设置</h2>
						</div>					
					</div>														
			<div class="row">						
					<div class="col-lg-12">
						<div class="panel bk-bg-white">
							<div class="panel-heading bk-bg-primary">
								<h6><i class="fa fa-tags red"></i>系统设置</h6>
							</div>
							<div class="panel-body">
							<div class="wizard-type1">
							<?php $result = mysqli_query($conn,'select * from mkcms_system where id = 1');
							if( $row = mysqli_fetch_array($result)){?>
							
					<form method="post"><div class="tab-content">
					    <div class="tab-pane1">
							 <div class="form-group">
								 <div class="row">
									 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
								     <div class="form-group has-feedback">
									 <label for="name-w1">网站名称</label>
									 <?php echo'<input id="s_name" class="form-control" name="s_name" type="text" size="60" value="'.$row['s_name'].'" />';?>
									 </div>
									 </div>

									 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
									 <div class="form-group has-feedback">
									 <label for="name-w1">域名</label>
									 <div class="form-group has-feedback">
									 <?php echo'<input id="s_domain" class="form-control" name="s_domain" type="text" size="60" value="'.$row['s_domain'].'" />';?>
									 <span style="color:red; font-weight: bold;help-block"> *系统检查域名应填：http://<?php echo $_SERVER['HTTP_HOST']?>/  一定要以/结尾</span>
									 </div>
									 </div>
									 </div>
									
									 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
									 <div class="form-group has-feedback">
									 <label for="name-w1">模板选择</label>
									 <?php $fff=scandir('../template/');?>
									 <select class="form-control" name="s_bdyun">
                                     <?php for($m=2;$m<count($fff);$m++){$mname=file_get_contents('../template/'.$fff[$m].'/name.txt');if(empty($mname)){$mname=$fff[$m];}
									 if($fff[$m]===$row['s_bdyun']){$sec='selected = "selected"';}echo '<option value="'.$fff[$m].'" '.$sec.'>'.$mname.'</option>';unset($sec);unset($mname);}?>
                                     </select>
									 </div>
									 </div>
								 </div>
								
							 <div class="form-group">
								<div class="row">
									 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
									 <div class="form-group has-feedback">
									 <label for="name-w1">优化标题</label>
									 <?php echo'<input id="s_seoname" class="form-control" name="s_seoname" type="text" size="60" value="'.$row['s_seoname'].'" />';?>
									 </div>
									 </div>
									
								     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
								     <div class="form-group has-feedback">
								     <label for="name-w1">关键字</label>
									 <?php echo'<input id="s_keywords" class="form-control" name="s_keywords" type="text" size="60" value="'.$row['s_keywords'].'" />';?>
									 </div>
									 </div>
									
									 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
									 <div class="form-group has-feedback">
									 <label for="name-w1">关键描述</label>
									 <?php echo'<input id="s_description" class="form-control" name="s_description" type="text" size="60" value="'.$row['s_description'].'" />';?>
									 </div>
								     </div>
								</div>
						     </div>
						
						     <div class="form-group">
							     <div class="row">
									 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
									 <label for="name-w1">播放前广告秒数</label>
									 <?php echo'<input id="s_miaoshu" class="form-control" name="s_miaoshu" type="text" size="60" value="'.$row['s_miaoshu'].'" />';?>
									 </div>
									 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
									 <label for="name-w1">网站背景</label>
									 <?php echo'<div class="input-group">
									 <input id="s_beijing" class="form-control" name="s_beijing" type="text" size="40" value="'.$row['s_beijing'].'" />
									 <span class="input-group-btn">
									 <button type="button" class="btn btn-success" id="beijing">UP</button>
									 </span>
									 </div>';?>
									 </div>
									
									 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
									 <label for="name-w1">网站LOGO</label>
									 <?php echo'<div class="input-group">
									 <input id="s_logo" class="form-control" name="s_logo" type="text" size="40" value="'.$row['s_logo'].'" />
									 <span class="input-group-btn">
									 <button type="button" class="btn btn-success" id="picture">UP</button>
									 </span>
									 </div>';?>
									 </div>
								 </div>
							 </div>
							 <div class="form-group">
								 <div class="row">
									 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
								     <label for="name-w1">是否开启抢先看<span style="color:red; font-weight: bold;help-block">[*未取得版权和相关许可禁止开启,否则后果自负]</span></label><br>
									 <?php echo'<div class="radio-custom radio-inline" style="float:left">
									 <input type="radio" id="inline-radio7" name="s_qianxian" value="1"'; if( $row['s_qianxian'] == 1 ){ echo'checked="checked"' ;} echo'>
									 <label for="inline-radio7">开启</label>
									 </div>
									 <div class="radio-custom radio-inline" style="float:left">
									 <input type="radio" id="inline-radio8" name="s_qianxian" value="0"'; if( $row['s_qianxian'] == 0 ){echo'checked="checked"';}  echo'>
									 <label for="inline-radio8">关闭</label>
									 </div>';?>
									 </div>
									 
									 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
									 <label for="name-w1">是否开启首页电影</label><br>
									 <?php echo'<div class="radio-custom radio-inline" style="float:left">
									 <input type="radio" id="inline-radio9" name="s_dianying" value="1"'; if( $row['s_dianying'] == 1 ){ echo'checked="checked"' ;} echo'>
									 <label for="inline-radio9">开启</label>
									 </div>
									 <div class="radio-custom radio-inline" style="float:left">
									 <input type="radio" id="inline-radio10" name="s_dianying" value="0"'; if( $row['s_dianying'] == 0 ){echo'checked="checked"';}  echo'>
									 <label for="inline-radio10">关闭</label>
									 </div>';?>
									 </div>
									 
									 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
									 <label for="name-w1">是否开启首页剧集</label><br>
									 <?php echo'<div class="radio-custom radio-inline" style="float:left">
									 <input type="radio" id="inline-radio13" name="s_dianshi" value="1"'; if( $row['s_dianshi'] == 1 ){ echo'checked="checked"' ;} echo'>
									 <label for="inline-radio13">开启</label>
									 </div>
									 <div class="radio-custom radio-inline" style="float:left">
									 <input type="radio" id="inline-radio14" name="s_dianshi" value="0"'; if( $row['s_dianshi'] == 0 ){echo'checked="checked"';}  echo'>
									 <label for="inline-radio14">关闭</label>
									 </div>';?>
									 </div>
								 </div>
							 </div>
							 <div class="form-group">
				    			 <div class="row">
							   		 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
									 <label for="name-w1">是否开启首页MV</label><br>
									 <?php echo'<div class="radio-custom radio-inline" style="float:left">
									 <input type="radio" id="inline-radio35" name="s_mv" value="1"'; if( $row['s_mv'] == 1 ){ echo'checked="checked"' ;} echo'>
									 <label for="inline-radio35">开启</label>
									 </div>
									 <div class="radio-custom radio-inline" style="float:left">
									 <input type="radio" id="inline-radio36" name="s_mv" value="0"'; if( $row['s_mv'] == 0 ){echo'checked="checked"';}  echo'>
									 <label for="inline-radio36">关闭</label>
									 </div>';?>
									 </div>
													
									 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
									 <label for="name-w1">是否开启首页综艺</label><br>
									 <?php echo'<div class="radio-custom radio-inline" style="float:left">
									 <input type="radio" id="inline-radio15" name="s_zongyi" value="1"'; if( $row['s_zongyi'] == 1 ){ echo'checked="checked"' ;} echo'> 
									 <label for="inline-radio15">开启</label>
									 </div>
									 <div class="radio-custom radio-inline" style="float:left">
									 <input type="radio" id="inline-radio16" name="s_zongyi" value="0"'; if( $row['s_zongyi'] == 0 ){echo'checked="checked"';}  echo'> 
									 <label for="inline-radio16">关闭</label>
									 </div>';?>
									 </div>
									 
									 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
									 <label for="name-w1">是否开启首页YY</label><br>
									 <?php echo'<div class="radio-custom radio-inline" style="float:left">
									 <input type="radio" id="inline-radio39" name="s_yy" value="1"'; if( $row['s_yy'] == 1 ){ echo'checked="checked"' ;} echo'> 
									 <label for="inline-radio39">开启</label>
									 </div>
									 <div class="radio-custom radio-inline" style="float:left">
									 <input type="radio" id="inline-radio40" name="s_yy" value="0"'; if( $row['s_yy'] == 0 ){echo'checked="checked"';}  echo'> 
									 <label for="inline-radio40">关闭</label>
									 </div>';?>
									 </div>
								 </div>
							 </div>
							 <div class="form-group">
								 <div class="row">
								     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
									 <label for="name-w1">是否开启首页动漫</label><br>
									 <?php echo'<div class="radio-custom radio-inline" style="float:left">
									 <input type="radio" id="inline-radio19" name="s_dongman" value="1"'; if( $row['s_dongman'] == 1 ){ echo'checked="checked"' ;} echo'> 
									 <label for="inline-radio19">开启</label>
									 </div>
									 <div class="radio-custom radio-inline" style="float:left">
									 <input type="radio" id="inline-radio20" name="s_dongman" value="0"'; if( $row['s_dongman'] == 0 ){echo'checked="checked"';}  echo'> 
									 <label for="inline-radio20">关闭</label>
									 </div>';?>
									 </div>
									 
									 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
									 <label for="name-w1">是否开启首页合作伙伴</label><br>
									 <?php echo'<div class="radio-custom radio-inline" style="float:left">
									 <input type="radio" id="inline-radio25" name="s_hz" value="1"'; if( $row['s_hz'] == 1 ){ echo'checked="checked"' ;} echo'> 
									 <label for="inline-radio25">开启</label>
									 </div>
									 <div class="radio-custom radio-inline" style="float:left">
									 <input type="radio" id="inline-radio26" name="s_hz" value="0"'; if( $row['s_hz'] == 0 ){echo'checked="checked"';}  echo'> 
									 <label for="inline-radio26">关闭</label>
									 </div>';?>
									 </div>
									 
									 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
									 <label for="name-w1">是否开启首页友情链接</label><br>
									 <?php echo'<div class="radio-custom radio-inline" style="float:left">
									 <input type="radio" id="inline-radio27" name="s_yq" value="1"'; if( $row['s_yq'] == 1 ){ echo'checked="checked"' ;} echo'> 
									 <label for="inline-radio27">开启</label>
									 </div>
									 <div class="radio-custom radio-inline" style="float:left">
									 <input type="radio" id="inline-radio28" name="s_yq" value="0"'; if( $row['s_yq'] == 0 ){echo'checked="checked"';}  echo'> 
									 <label for="inline-radio28">关闭</label>
									 </div>';?>
									 </div>
								 </div>
							 </div>
							 <div class="form-group">
							     <div class="row">
									 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
									 <label for="name-w1">是否开启首页手动幻灯</label><br>
									 <span class="help-block">开启手动幻灯后首页自动幻灯失效</span>
									 <?php echo'<div class="radio-custom radio-inline" style="float:left">
									 <input type="radio" id="inline-radio31" name="s_slow" value="1"'; if( $row['s_slow'] == 1 ){ echo'checked="checked"' ;} echo'> 
									 <label for="inline-radio31">开启</label>
									 </div>
									 <div class="radio-custom radio-inline" style="float:left">
									 <input type="radio" id="inline-radio32" name="s_slow" value="0"'; if( $row['s_slow'] == 0 ){echo'checked="checked"';}  echo'> 
									 <label for="inline-radio28">关闭</label>
									 </div>';?>
									 </div>
									 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
									 <label for="name-w1">全站弹窗定时弹出</label>
									 <?php echo'<input id="s_tanchuangfenzhong" class="form-control" name="s_tanchuangfenzhong" type="text" size="60" value="'.$row['s_tanchuangfenzhong'].'" /><span class="help-block">多少分钟后再次弹窗，单位：1 = 1分钟</span>';?>
									 </div>
									 
									 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
									 <div class="form-group has-feedback">
									 <label for="name-w1">全站弹窗设置点击跳转</label>
									 <?php echo'<input id="s_tancurl" class="form-control" name="s_tancurl" type="text" size="60" value="'.$row['s_tancurl'].'" />
									 <span class="help-block">弹窗公告的第一个点击地址</span>';?>
									 </div>
									 </div>
								 </div>
						     </div>
								<div class="form-group">
							     <div class="row">
								     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
									 <label for="name-w1">是否开启大淘客</label><br>
									 <?php echo'<div class="radio-custom radio-inline" style="float:left">
									 <input type="radio" id="inline-radio29" name="s_tk" value="1"'; if( $row['s_tk'] == 1 ){ echo'checked="checked"' ;} echo'> 
									 <label for="inline-radio29">开启</label>
									 </div>
									 <div class="radio-custom radio-inline" style="float:left">
									 <input type="radio" id="inline-radio30" name="s_tk" value="0"'; if( $row['s_tk'] == 0 ){echo'checked="checked"';}  echo'> 
									 <label for="inline-radio30">关闭</label>
									 </div>';?>
									 </div>
									 
									 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
									 <div class="form-group has-feedback">
									 <label for="name-w1">大淘客域名</label>
									 <?php echo'<input id="s_dataoke" class="form-control" name="s_dataoke" type="text" size="60" placeholder="http://demo.dataoke.com/" value="'.$row['s_dataoke'].'" />';?>
									 <span class="help-block">请填写大淘客域名,例：http://tao.micool.net/  一定要/结尾</span>
									 </div>
									 </div>
									 
									 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
									 <div class="form-group has-feedback">
									 <label for="name-w1">大淘客ID</label>
									 <div class="form-group has-feedback">
									 <?php echo'<input id="s_dataokeid" class="form-control" name="s_dataokeid" type="text" size="60" laceholder="21263183" value="'.$row['s_dataokeid'].'" />';?>
									 </div>
									 </div>
									 </div>
								 </div>
							 </div>
							 <div class="form-group">
							 <div class="row">
							    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
									 <label for="name-w1">大淘客appkey</label>
									 <div class="form-group has-feedback">
									 <?php echo'<input id="s_dataokekey" class="form-control" name="s_dataokekey" type="text" size="60" laceholder="" value="'.$row['s_dataokekey'].'" />';?>
									 </div>
									 </div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
									 <label for="name-w1">大淘客appsecret</label>
									 <div class="form-group has-feedback">
									 <?php echo'<input id="s_dataokesecret" class="form-control" name="s_dataokesecret" type="text" size="60" laceholder="" value="'.$row['s_dataokesecret'].'" />';?>
									 </div>
									 </div>
							  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
									 <label for="name-w1">自动尝鲜列表</label>
									 <div class="form-group has-feedback">
									 <select class="form-control" name="s_cxzy" default="http://v8.tiankongzy.cc/inc/feifei3/">
									 <option value="https://cj.bajiecaiji.com/inc/feifei3/" <?php echo ($row['s_cxzy']=='https://cj.bajiecaiji.com/inc/feifei3/' ? 'selected="selected"':'');?>>八戒资源</option>
									 </select>
									 </div>
									 </div>
								</div>
							</div>
							     <div class="row">
								     <div class="col-sm-12">
									 <div class="form-group has-feedback">
									 <label for="name-w1">全站弹窗内容</label>
									 <?php echo'<textarea id="s_tancgonggao" class="form-control" name="s_tancgonggao" style="height:100px;" />'.htmlspecialchars($row['s_tancgonggao']).'</textarea>';?>
									 </div>
									 </div>
									 </div>
							     <div class="row">
								     <div class="col-sm-12">
									 <div class="form-group has-feedback">
									 <label for="name-w1">默认接口<span style="color:red; font-weight: bold;help-block">[*未取得版权和相关许可设置为空采用官方链接,否则后果自负]</span></label>
									 <?php echo'<input id="s_mjk" class="form-control" name="s_mjk" type="text" size="60" value="'.$row['s_mjk'].'" />
									 <span class="help-block">自动播放时的接口</span>';?>
									 </div>
									 </div>
								 </div>
									 
								 <div class="row">
									 <div class="col-sm-12">
									 <div class="form-group has-feedback">
									 <label for="name-w1">解析接口<span style="color:red; font-weight: bold;help-block">[*未取得版权和相关许可设置为空采用官方链接,否则后果自负]</span></label>
									 <?php echo'<textarea class="form-control" name="s_jiekou" style="height:200px;" />'.$row['s_jiekou'].'</textarea>
									 <span class="help-block">多个解析请用“回车”分开，如：<br>MM解析$http://xxx.com/jk.php?url=<br>MM解析$http://xxx.com/jk.php?url=</span>';?>
									 </div>
									 </div>
								 </div>
								 
								 <div class="row">
								     <div class="col-sm-12">
									 <div class="form-group has-feedback">
									 <label for="name-w1">侵权视频下架</label>
									 <?php echo'<textarea class="form-control" name="s_shoufei" />'.$row['s_shoufei'].'</textarea>
									 <span class="help-block">这里输入全名称即可，多个请用逗号隔开 比如输入 鸭王,鸭王2, 提交保存。</span>';?>
									 </div>
									 </div>
								 </div>
								 
								 <div class="row">
								     <div class="col-sm-12">
									 <div class="form-group has-feedback">
									 <label for="name-w1">公告</label>
									 <?php echo'<textarea id="s_gonggao" class="form-control" name="s_gonggao" />'.htmlspecialchars($row['s_gonggao']).'</textarea>';?>
									 </div>
									 </div>
						  		 </div>
								 
								 <div class="row">  
								     <div class="col-sm-12">
									 <div class="form-group has-feedback">
									 <label for="name-w1">版权信息</label>
									 <?php echo'<textarea class="form-control" name="s_copyright" style="height:100px;" />'.htmlspecialchars($row['s_copyright']).'</textarea>';?>
									 </div>
									 </div>
								 </div>
								 
								 <div class="row">
								     <div class="col-sm-12">
									 <div class="form-group has-feedback">
									 <label for="name-w1">统计代码</label>
									 <?php echo'<textarea  class="form-control" name="s_tongji" size="60"/>'.$row['s_tongji'].'</textarea>';?>
									 </div>
									 </div>
								 </div>
							 </div>
						 </div>
						 <div class="actions">								
						 <input type="submit" class="btn btn-info button-previous" name="save" value="提交" />
						 </div>
					</form>
					<?php }?>
								 </div>
							 </div>
						 </div>
					 </div>
				 </div>
			</div>	
<?php include('inc_footer.php') ?>