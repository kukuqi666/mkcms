<?php
include('../system/inc.php');
include('cms_check.php');
error_reporting(0);
include('model/hallcode.php');?>
<?php include('inc_header.php') ?>

		<!-- Start: Content -->
		<div class="container-fluid content">	
			<div class="row">
<?php include('inc_left.php') ?>
				<!-- Main Page -->
				<div class="main ">
					<!-- Page Header -->
					<div class="page-header">
						<div class="pull-left">
							<ol class="breadcrumb visible-sm visible-md visible-lg">								
								<li><a href="cms_welcome.php"><i class="icon fa fa-home"></i>首页</a></li>
							</ol>						
						</div>
						<div class="pull-right">
							<h2>移动页面</h2>
						</div>					
					</div>
					<!-- End Page Header -->								
										
<div class="row">						
						<div class="col-lg-12">
							<div class="panel bk-bg-white">
								<div class="panel-heading bk-bg-primary">
									<h6><i class="fa fa-tags red"></i>大厅代码自定义</h6>
								</div>
								<div class="panel-body">
									<div class="wizard-type1">
									<?php
$result = mysqli_query($conn,'select * from mkcms_diy where id = 1');
					if( $row = mysqli_fetch_array($result)){
					?>
										<form method="post"><div class="tab-content">
												<div class="tab-pane1">
													<div class="form-group">
													<div class="row">
														<div class="col-sm-12">
															<div class="form-group has-feedback">
	<?php echo'<textarea id="s_hallcode" class="form-control" name="s_hallcode" style="height:500px;" />'.htmlspecialchars($row['s_hallcode']).'</textarea>';
	?><span class="help-block">支持HTML格式。</span>
															</div>
														</div>
													</div>
												
												</div>
											</div>
											<div class="actions">								
												<input type="submit" class="btn btn-info button-previous" name="save" value="提交" />
											</div>
											</form>
											<?php
}
?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Main Page -->			
<?php include('inc_footer.php') ?>