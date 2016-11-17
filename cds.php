<?php
error_reporting(0);
if(isset($_GET['url']) && isset($_SERVER['HTTP_REFERER'])){
    $url = urldecode($_GET['url']);
    $referer = parse_url($_SERVER['HTTP_REFERER']);
    if(preg_match("/^http/",$url)){//防盗链验证
        $opts = array('http'=>array(
            'method'=>'GET',
            'timeout'=>10
        ));
        $result = file_get_contents($url,FALSE,stream_context_create($opts));
        if($result){
            header("Cache-Control:public;maxage=604800");//设置缓存时间
            echo $result;
        }else{
            header("HTTP/1.1 404 Not Found");
        }
    }else{
        header("HTTP/1.1 400 Bad Request");
    }
}else{
    header("HTTP/1.1 403 Forbidden");
}