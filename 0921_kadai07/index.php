<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>卒業アルバムに関するアンケート</title>
</head>
<body>
    <h2>稲城第七小学校<br>卒業アルバム作成に関するアンケート</h2>
    <form action="write.php" method="POST">
        <label for="chiid_name">お子さまのお名前</label><br>
        <input type="text" id="chiid_name" name="chiid_name" required><br>

        <label for="class">お子さまのクラス</label><br>
        <select id="class" name="class" required>
            <option value="c1">６年１組</option>
            <option value="c2">６年２組</option>
            <option value="c3">６年３組</option>
        </select><br>

        <label for="purchase">卒業アルバムを購入しますか？（約2,000円の予定）</label><br>
        <select id="purchase" name="purchase" required>
            <option value="Yes">はい、購入します</option>
            <option value="No">いいえ、購入しません</option>
        </select><br>
    
        <label for="request">卒業アルバム制作についてご要望があれば記載してください</label><br>
        <input type="text" id="request" name="request" required><br>
        
        <label for="adult_name">保護者のお名前</label><br>
        <input type="text" id="adult_name" name="adult_name" required><br>       
        
        <label for="email">E‐mail</label><br>
        <input type="email" id="email" name="email" required><br>
        

        

        
        <input type="submit" value="送信">
    </form>
</body>
</html>
