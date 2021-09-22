<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/lib/system.ini');
$list_html = '';

try {
	$list_html = '<table>';

	$stmt = $pdo->prepare("SELECT id, message, updated_at FROM boards WHERE message like :keyword and visible_flag = TRUE ORDER BY id DESC;");
	$stmt->bindValue(':keyword', '%' . $_POST['keyword'] . '%');
	$stmt->execute();

	if($stmt) {
		while ($row = $stmt->fetch()) {
			$list_html .= '<tr><td>' . $row["id"] . '</td><td>' . $row["message"] . '</td><td>' . $row["updated_at"] . '</td></tr>';
		}
	} else {
		echo "SQL ERROR!!!<br />" . $pdo->errorInfo()[2] . '<br />';
	}

	$list_html .= '</table>';

	$stmt = null;
	$pdo = null;
} catch(Exception $e) {
	echo "ERROR!!!<br />";
	echo $e;
}
?>
<html lang="ja">
	<head>
		<meta charset="utf-8" />
		<meta name="robots" content="noindex" />
		<meta http-equiv="Pragma" content="no-cache" />
		<meta http-equiv="Cache-Control" content="no-cache" />
		<title>検索</title>
	</head>
	<body>
		<h1>DIALOGUE+掲示板 検索ページ</h1>
		検索キーワード：
		<form method='post' action='./<?= basename(__FILE__) ?>'>
			<input type="text" name="keyword" size="100" /><br />
			<input type="submit" value="Search" />
		</form>
		<hr />
		<div>「<?= htmlspecialchars($_POST['keyword']) ?>」の検索結果</div>
		<?= $list_html ?>
		<hr />
		このファイルの更新日時：<?= date("Y-m-d H:i:s", filemtime(__FILE__)) ?>
	</body>
</html>

