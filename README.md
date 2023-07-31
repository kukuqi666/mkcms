# mkcms
一、环境要求
Php>7.0 建议7.4 
SQL>5.5
Nginx/Apache

二、安装步骤（以宝塔为例）

1、安装php7.3及扩展

fileinfo  opcache

2、创建网站

3、设置伪静态规则

MKCMS v7.3伪静态规则参见 伪静态规则.txt

4、上传upload.zip 到网站根目录，解压upload.zip

5、在浏览器运行安装网址http://你的域名/install
填写数据库信息，设置登录账号密码，一直下一步直到成功。

6、登录后台进行设置
影视后台管理地址：   http://你的域名admin
全能搜索解析管理地址：  http://你的域名/ck/jx/admin 
全能搜索解析用户名：admin 密码admin888
使用你安装时设置的账号和密码登陆影视后台，设置基本信息，清理缓存

7、提示
安装完毕后登陆后台，设置网址和基本信息后，更新缓存！更新缓存！更新缓存！重要的事情说3次！

# 伪静态规则

Nginx伪静态：

rewrite ^/sitemap.xml$ /sitemap.php;

rewrite ^/mv.html$ /mv.php;

rewrite ^/dy.html$ /dy.php;

rewrite ^/hy.html$ /hy.php;

rewrite ^/tv.html$ /tv.php;

rewrite ^/cx.html$ /cx.php;

rewrite ^/yy.html$ /yy.php;

rewrite ^/app.html$ /app.php;

rewrite ^/top.html$ /top.php;

rewrite ^/xjj.html$ /xjj.php;

rewrite ^/star.html /star.php;

rewrite ^/book.html$ /book.php;

rewrite ^/hall.html$ /hall.php;

rewrite ^/fuli.html$ /fuli.php;

rewrite ^/shop.html$ /shop.php;

rewrite ^/news.html$ /news.php;

rewrite ^/index.html$ /index.php;

rewrite ^/actor.html$ /actor.php;

rewrite ^/music.html$ /music.php;

rewrite ^/movie.html$ /movie.php;

rewrite ^/zongyi.html$ /zongyi.php;

rewrite ^/dongman.html$ /dongman.php;

rewrite ^/ucenter/reg.html$ /ucenter/reg.php;

rewrite ^/ucenter/fav.html$ /ucenter/fav.php;

rewrite ^/ucenter/exit.html$ /ucenter/exit.php;

rewrite ^/ucenter/kami.html$ /ucenter/kami.php;

rewrite ^/ucenter/login.html$ /ucenter/login.php;

rewrite ^/ucenter/index.html$ /ucenter/index.php;

rewrite ^/ucenter/mingxi.html$ /ucenter/mingxi.php;

rewrite ^/ucenter/repass.html$ /ucenter/repass.php;

rewrite ^/ucenter/yaoqing.html$ /ucenter/yaoqing.php;

rewrite ^/ucenter/userinfo.html$ /ucenter/userinfo.php;

rewrite ^/vod(.*)$ /play.php?play=$1;

rewrite ^/jx-(.*).html$ /jx.php?wd=$1;

rewrite ^/yy_(.*).html$ /yy.php?list=$1;

rewrite ^/mvplay/(.*).html$ /mv.php?v=$1;

rewrite ^/gb_(.*).html$ /book.php?page=$1;

rewrite ^/mvseacher-(.*).html /mv.php?ac=$1;

rewrite ^/shop_(.*).html$ /shop.php?page=$1;

rewrite ^/hyplay_(.*).html$ /hyplay.php?id=$1;

rewrite ^/cxplay/(.*).html$ /cxplay.php?id=$1;

rewrite ^/yplay/(.*).html$ /yplay.php?post=$1;

rewrite ^/seacher-(.*).html /seacher.php?wd=$1;

rewrite ^/news_([0-9]+).html$ /news.php?page=$1;

rewrite ^/hy_(.*)_(.*).html$ /hy.php?cid=$1&page=$2;

rewrite ^/cx_(.*)_([0-9]+).html$ /cx.php?cid=$1&page=$2;

rewrite ^/mv_([0-9]+)_([0-9]+).html$ /mv.php?mlist=$1&m=$2;

rewrite ^/mxstar_(.*)_(.*)_(.*).html /star.php?wd=$1&tab=$2&pageno=$3;

rewrite ^/content-([0-9]+)-([0-9]+).html$ /content.php?dz=/$1/$2.shtml;

rewrite ^/actor-(.*)-(.*)-(.*).html$ /actor.php?sex=$1&area=$2&page=$3;

rewrite ^/movie_(.*)_(.*)_(.*)_(.*)_(.*)_(.*).html$ /movie.php?cat=$1&year=$2&area=$3&act=$4&rank=$5&pageno=$6;

rewrite ^/tv_(.*)_(.*)_(.*)_(.*)_(.*)_(.*).html$ /tv.php?cat=$1&year=$2&area=$3&act=$4&rank=$5&pageno=$6;

rewrite ^/dongman_(.*)_(.*)_(.*)_(.*)_(.*).html$ /dongman.php?cat=$1&year=$2&area=$3&rank=$4&pageno=$5;

rewrite ^/zongyi_(.*)_(.*)_(.*)_(.*)_(.*).html$ /zongyi.php?cat=$1&act=$2&area=$3&rank=$4&pageno=$5;





Apache伪静态(复制保存到网站根目录 新建文件.htaccess内)：

RewriteEngine On

RewriteRule  ^sitemap.xml$ sitemap.php

RewriteRule ^mv.html$ mv.php

RewriteRule ^dy.html$ dy.php

RewriteRule ^hy.html$ hy.php

RewriteRule ^tv.html$ tv.php

RewriteRule ^cx.html$ cx.php

RewriteRule ^yy.html$ yy.php

RewriteRule ^app.html$ app.php

RewriteRule ^top.html$ top.php

RewriteRule ^xjj.html$ xjj.php

RewriteRule ^star.html star.php

RewriteRule ^book.html$ book.php

RewriteRule ^hall.html$ hall.php

RewriteRule ^fuli.html$ fuli.php

RewriteRule ^shop.html$ shop.php

RewriteRule ^news.html$ news.php

RewriteRule ^index.html$ index.php

RewriteRule ^actor.html$ actor.php

RewriteRule ^music.html$ music.php

RewriteRule ^movie.html$ movie.php

RewriteRule ^zongyi.html$ zongyi.php

RewriteRule ^dongman.html$ dongman.php

RewriteRule ^ucenter/reg.html$ ucenter/reg.php

RewriteRule ^ucenter/fav.html$ ucenter/fav.php

RewriteRule ^ucenter/exit.html$ ucenter/exit.php

RewriteRule ^ucenter/kami.html$ ucenter/kami.php

RewriteRule ^ucenter/login.html$ ucenter/login.php

RewriteRule ^ucenter/index.html$ ucenter/index.php

RewriteRule ^ucenter/mingxi.html$ ucenter/mingxi.php

RewriteRule ^ucenter/repass.html$ ucenter/repass.php

RewriteRule ^ucenter/yaoqing.html$ ucenter/yaoqing.php

RewriteRule ^ucenter/userinfo.html$ ucenter/userinfo.php

RewriteRule ^vod(.*)$ play.php?play=$1

RewriteRule ^jx-(.*).html$ jx.php?wd=$1

RewriteRule ^yy_(.*).html$ yy.php?list=$1

RewriteRule ^mvplay/(.*).html$ mv.php?v=$1

RewriteRule ^gb_(.*).html$ book.php?page=$1

RewriteRule ^mvseacher-(.*).html mv.php?ac=$1

RewriteRule ^shop_(.*).html$ shop.php?page=$1

RewriteRule ^hyplay_(.*).html$ hyplay.php?id=$1

RewriteRule ^cxplay/(.*).html$ cxplay.php?id=$1

RewriteRule ^yplay/(.*).html$ yplay.php?post=$1

RewriteRule ^seacher-(.*).html seacher.php?wd=$1

RewriteRule ^news_([0-9]+).html$ news.php?page=$1

RewriteRule ^hy_(.*)_(.*).html$ hy.php?cid=$1&page=$2

RewriteRule ^cx_(.*)_([0-9]+).html$ cx.php?cid=$1&page=$2

RewriteRule ^mv_([0-9]+)_([0-9]+).html$ mv.php?mlist=$1&m=$2

RewriteRule ^mxstar_(.*)_(.*)_(.*).html star.php?wd=$1&tab=$2&pageno=$3

RewriteRule ^content-([0-9]+)-([0-9]+).html$ content.php?dz=/$1/$2.shtml

RewriteRule ^actor-(.*)-(.*)-(.*).html$ actor.php?sex=$1&area=$2&page=$3

RewriteRule ^movie_(.*)_(.*)_(.*)_(.*)_(.*)_(.*).html$ movie.php?cat=$1&year=$2&area=$3&act=$4&rank=$5&pageno=$6

RewriteRule ^tv_(.*)_(.*)_(.*)_(.*)_(.*)_(.*).html$ tv.php?cat=$1&year=$2&area=$3&act=$4&rank=$5&pageno=$6

RewriteRule ^dongman_(.*)_(.*)_(.*)_(.*)_(.*).html$ dongman.php?cat=$1&year=$2&area=$3&rank=$4&pageno=$5

RewriteRule ^zongyi_(.*)_(.*)_(.*)_(.*)_(.*).html$ zongyi.php?cat=$1&act=$2&area=$3&rank=$4&pageno=$5

