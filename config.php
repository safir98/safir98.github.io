<?php
	//////////////////////////////////////////////////////////////////
	//配置文件
	header('Content_type:text/html; charset = utf-8;');
	error_reporting(E_ALL);
	//////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////
	//常量定义-------------------------
	//数据库连接类----------------
	@define('HOST', 'localhost');
	@define('USER', 'root');
	@define('PWD', 'safir');
	@define('SQLNAME', 'NETSHOP');
	@define('TABLE_USERS', 'users');
	//////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////
	/////////////////////////////////////////////////////////////////////////////////////////////////////
	//自定义检查SQL语句函数
	function my_error($links,$sql){
		//执行sql
		$res = mysqli_query($links,$sql);
		//判断可能存在的错误
		if(!$res){
			echo 'sql执行错误，错误编号为： '.mysqli_errno($link).'<br/>';
			echo 'sql执行错误，错误描述为： '.mysqli_error($link).'<br/>';

			exit;
		}
		return $res;
	}
	/////////////////////////////////////////////////////////////////////////////////////////////////////

	//连接语句
	$link = mysqli_connect(HOST,USER,PWD) or die("safir的数据库连接未，错误类型是".mysqli_error($link));
	/////////////////////////////////////////////////////////////////////////////////////////////////////
	//匹配数据库
	$sql_select_res = mysqli_select_db($link,SQLNAME) or die("数据库匹配错误，错误的类型是：".mysqli_error($link));
	/////////////////////////////////////////////////////////////////////////////////////////////////////
	//设置与SQL连接的编码
	my_error($link,"set names utf8;");
	/////////////////////////////////////////////////////////////////////////////////////////////////////
	
	//echo "SAFIR!";




?>