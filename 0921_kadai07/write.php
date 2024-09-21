<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $chiid_name = htmlspecialchars($_POST['chiid_name']);
    $class = htmlspecialchars($_POST['class']);
    $purchase = htmlspecialchars($_POST['purchase']);
    $request = htmlspecialchars($_POST['request']);
    $adult_name = htmlspecialchars($_POST['adult_name']);
    $email = htmlspecialchars($_POST['email']);

    // CSVファイルのパス
    $file = 'survey_data.csv';

    // ファイルが存在しない場合、ヘッダー行を含む新しいファイルを作成
    if (!file_exists($file)) {
        file_put_contents($file, "名前,クラス,購入有無,要望,保護者,email\n", FILE_APPEND | LOCK_EX);
    }

    // データをCSVファイルに保存
    $data = "$chiid_name, $class, $purchase, $request, $adult_name, $email\n";
    
    // ファイルにデータを書き込む
    if (file_put_contents($file, $data, FILE_APPEND | LOCK_EX) === false) {
        echo "<p>データの保存に失敗しました。書き込み権限を確認してください。</p>";
    } else {
        echo "<p>アンケートを受け付けました。ありがとうございます！</p>";
        echo '<a href="read.php">結果を表示</a>';
    }
} else {
    echo "<p>不正なアクセスです。</p>";
}
?>
