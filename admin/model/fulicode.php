<?php
if (isset($_POST['save'])) {
	$_data['s_fulicode'] = $_POST['s_fulicode'];
	$sql = 'update mkcms_diy set ' . arrtoupdate($_data) . ' where id = 1';
	if (mysqli_query($conn,$sql)) {
		alert_href('直播页面配置成功!', 'cms_fulicode.php');
	} else {
		alert_back('配置成功!');
	}
}