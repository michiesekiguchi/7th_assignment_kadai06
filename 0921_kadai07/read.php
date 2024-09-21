<?php
// エラーメッセージ表示設定
ini_set('display_errors', 1);
error_reporting(E_ALL);

// 読み込むCSVファイルのパス
$file = 'survey_data.csv';

// ファイルが存在するかをチェック
if (file_exists($file)) {
    // CSVファイルを読み込んで配列に変換
    $csv = array_map('str_getcsv', file($file));
    
    // テーブルのヘッダーを定義
    echo "<h2>アンケート結果一覧</h2>";
    echo "<table border='1' cellpadding='10' cellspacing='0'>";
    echo "<tr><th>名前</th><th>クラス</th><th>購入有無</th><th>要望</th><th>保護者</th><th>email</th></tr>";
    
    // CSVの各行を表として表示
    foreach ($csv as $row) {
        echo "<tr>";
        foreach ($row as $cell) {
            echo "<td>" . htmlspecialchars($cell) . "</td>"; // セルのデータをエスケープして表示
        }
        echo "</tr>";
    }
    
    // テーブルの終了タグ
    echo "</table>";
} else {
    // ファイルが見つからない場合のメッセージ
    echo "<p>データが見つかりません。アンケートがまだ登録されていない可能性があります。</p>";
}
?>
