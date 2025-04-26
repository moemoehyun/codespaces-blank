<?php
// env_loader.php

// .env ファイルのパス
$envFilePath = __DIR__ . '/.env';

// .env ファイルが存在する場合に読み込む
if (file_exists($envFilePath)) {
    $lines = file($envFilePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        // '=' で分割してキーと値に分ける
        list($key, $value) = explode('=', $line, 2);
        // 配列や空白の無い行を無視
        if (!empty($key) && !empty($value)) {
            // 環境変数に設定
            $_ENV[$key] = $value;
        }
    }
} else {
    die('.env ファイルが見つかりません');
}
