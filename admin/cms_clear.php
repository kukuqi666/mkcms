<?php
include('../system/inc.php');
include('cms_check.php');
    //清理cache缓存
    $handle = opendir('../cache/index');  
    while (($file=readdir($handle))) {
            unlink("../cache/index/"."$file");
    }closedir($handle);
	$handle = opendir('../cache/runtime');  
    while (($file=readdir($handle))) {
            unlink("../cache/runtime/"."$file");
    }closedir($handle);
    $handle = opendir('../json/cache/runtime');  
    while (($file=readdir($handle))) {
            unlink("../json/cache/runtime/"."$file");
    }closedir($handle);
	alert_href('清除缓存成功!','cms_welcome.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include('inc_head.php') ?>
<script type="text/javascript">
KindEditor.ready(function(K) {
	K.create('#l_picture');
	var editor = K.editor();

});
</script>
</head>
<body>
</body>
</html>