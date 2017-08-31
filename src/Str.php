<?php
//***************************************
//感谢使用米兔CMS
//官网：http://www.metooweb.com
//作者：米兔网络 QQ：1058776960
//时间：2017年4月15日 下午2:00:51
//***************************************
namespace metooweb\helper;

class Str {
	
	public static function isInt($str){
		
		return is_null($str) === false && is_numeric($str) && (int)$str == $str;
	}
	
	
	public static function isNumeric($str){
		
		return is_numeric($str);
	}
	
}
