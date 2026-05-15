<!DOCTYPE html>
<html class="is-large" lang="zh-tw">
<head>
	<meta charset="UTF-8" />
	
	<!-- Style -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tocas/4.2.4/tocas.min.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tocas/4.2.4/tocas.min.js"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@400;500;700&display=swap" rel="stylesheet" />
	<style type="text/css">
		html {
			/** 設定領銜主色 */
			--ts-accent-color: #00ADEA;
		}
	</style>

	<title>教案三 刑法分則 | 臺北大學 法律系 夏令營</title>
	
	<!-- Style -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tocas/4.0.4/tocas.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tocas/4.0.4/tocas.min.js"></script>
	
	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@400;500;700&display=swap" rel="stylesheet" />
</head>
<body>
<div class="ts-wrap is-vertical">

<div class="ts-container is-narrow">
	<div class="ts-segment">
		<div class="ts-header">臺北大學法律營</div>
		<div class="ts-header is-big">刑法分則</div>
	</div>
</div>

	<div class="ts-container is-narrow"><div class="ts-box">

<?php
$data_arr=array(
	array("簡報","slides0711.pdf"),
	array("110 台上 30","https://judgment.judicial.gov.tw/FJUD/data.aspx?ty=JD&id=TPSM,110%2c%e5%8f%b0%e4%b8%8a%2c30%2c20211007%2c1"),
	array("112 憲判 8","https://cons.judicial.gov.tw/docdata.aspx?fid=38&id=340775"),
	array("南高112上易177刑","TNH-112上易177刑.pdf"),
	array("補充 7/9","more0709.pdf")
);
foreach ($data_arr as $da){
	echo '<div class="ts-grid"><div class="column is-12-wide"><div class="ts-content"><p>';
	echo $da[0];
	echo '</p></div></div><div class="column is-4-wide"><a href="';
	echo $da[1];
	echo '" target="_blank"><button class="ts-button is-accent">點我!</button></a></div></div><div class="ts-divider"></div>';
	echo "\n";
}

?>
</div></div>

<div class="ts-container is-narrow">
	<div class="ts-segment">
		<div class="ts-text">Latest updated on 2023-07-11. Layout: <a href="https://v4.tocas-ui.com/zh-tw/getting-started.html" target="_blank">Tocas UI</a></div>
	</div>
</div>

</div><!-- wrap end -->
	
</body>
</html>