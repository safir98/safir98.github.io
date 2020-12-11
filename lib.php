<?php
	include_once 'config.php';
	error_reporting(E_ALL & ~E_NOTICE);
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
	<title>主机游戏商城</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="css\lib.css">
</head>
<body>
	
	<div class="index-content">
		<div class="index-middle">
			<dl class="index-list">

				<dt>热门</dt>
				<dd>
					<a href="#" rel="" name="hot" class="all on">不限</a>
					<?php
						$lib_search = "select * from hostsearch order by search_id desc;";
						$result_lib_search = my_error($link,$lib_search);
						$i=0;
						while (($i++<7) && ($row_search = mysqli_fetch_array($result_lib_search))) {
					?>		<a href="search.php?search = <?php echo($row_search['search_name_hotsearch']) ?>">
								<?php echo $row_search['search_name_hotsearch']; ?>
							</a>
						
					<?php } ?>
				</dd>
			</dl>
			<dl class="index-list">

				<dt>主机游戏</dt>
				<dd>
					<a href="#" rel="" name="hot" class="all on">不限</a>
					<?php
						$lib_search = "select * from hostsearch order by search_id asc;";
						$result_lib_search = my_error($link,$lib_search);
						$i=0;
						while (($i++<7) && ($row_search = mysqli_fetch_array($result_lib_search))) {
					?>		<a href="search.php?search = <?php echo($row_search['search_name_console-game']) ?>">
								<?php echo $row_search['search_name_console-game']; ?>
							</a>
						
					<?php } ?>
				</dd>
			</dl>
			<dl class="index-list">

				<dt>3A大作</dt>
				<dd>
					<a href="#" rel="" name="hot" class="all on">不限</a>
					<?php
						$lib_search = "select * from hostsearch order by search_id asc;";
						$result_lib_search = my_error($link,$lib_search);
						$i=0;
						while (($i++<7) && ($row_search = mysqli_fetch_array($result_lib_search))) {
					?>		<a href="search.php?search = <?php echo($row_search['search_name_3A']) ?>">
								<?php echo $row_search['search_name_3A']; ?>
							</a>
						
					<?php } ?>
				</dd>
			</dl>
			<dl class="index-list">

				<dt>经典游戏</dt>
				<dd>
					<a href="#" rel="" name="hot" class="all on">不限</a>
					<?php
						$lib_search = "select * from hostsearch order by search_id asc;";
						$result_lib_search = my_error($link,$lib_search);
						$i=0;
						while (($i++<7) && ($row_search = mysqli_fetch_array($result_lib_search))) {
					?>		<a href="search.php?search = <?php echo($row_search['search_name_classic-name']) ?>">
								<?php echo $row_search['search_name_classic-name']; ?>
							</a>
						
					<?php } ?>
				</dd>
			</dl>
		</div>
	</div>

</body>
</html>