<?php
// 登録処理
$data_json = $_POST['data'];

// JSON形式のデータをデコードして連想配列の形式にする
$data = json_decode($data_json);

// DBに登録
