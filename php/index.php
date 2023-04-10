<?php

$acs = $_GET['cas'];


echo '123456789';

return;

$zhengli = array(
	array(
		"name"=>"官网",
		"links"=>array(
			array("name"=>"Vue","link"=>'https://cn.vuejs.org/'),
			array("name"=>"uni-app","link"=>'https://uniapp.dcloud.io/'),
			array("name"=>"uview","link"=>'https://www.uviewui.com'),
			array("name"=>"bootstrap","link"=>'https://www.bootcss.com/'),
			array("name"=>"Swiper","link"=>'https://www.swiper.com.cn/'),
			array("name"=>"typescript","link"=>'https://www.tslang.cn/'),
			array("name"=>"nodejs","link"=>'http://nodejs.cn/'),
			array("name"=>"git","link"=>'https://git-scm.com/'),
			array("name"=>"thinkphp","link"=>'http://www.thinkphp.cn/'),
			array("name"=>"fastadmin","link"=>'https://doc.fastadmin.net/'),
			array("name"=>"17素材","link"=>'https://www.17sucai.com/'),
			array("name"=>"echarts","link"=>'https://echarts.apache.org/zh/index.html'),
		)
	),
	array(
		"name"=>"文档",
		"links"=>array(
			array("name"=>"Vue","link"=>'https://cn.vuejs.org/'),
			array("name"=>"uni-app","link"=>'https://uniapp.dcloud.io/'),
			array("name"=>"uview","link"=>'https://www.uviewui.com'),
			array("name"=>"bootstrap","link"=>'https://www.bootcss.com/')
		)
	),
);

// 文档
// 教程
// 云
// 翻译
// 查询
// 模板
// 微信
// 支付宝
// 源码站
// 蓝墨
// 地图

$arr = array(
	array("type_id"=>"1","name"=>"Vue","link"=>'https://cn.vuejs.org/'),
	array("type_id"=>"1","name"=>"uni-app","link"=>'https://uniapp.dcloud.io/'),
	array("type_id"=>"1","name"=>"uview","link"=>'https://www.uviewui.com'),
	array("type_id"=>"1","name"=>"bootstrap","link"=>'https://www.bootcss.com/')
);

class Response {
	public static function json($code,$message, $data){
		#判断参数有效性及错误处理
		 // code. . .
		#结果(最终数组)
		$result = [
			"code" => $code,
			"message" => $message,
			"data" => $data
		];
		#转换为json并打印测试
		echo json_encode($result);
		exit;
	}
}

if(!$acs){
	Response::json('200','数据返回成功',$zhengli);
}else{
	
	
	Response::json('2','数据返回成功',$zhengli);
}







