<?php
//ajax.php

//POSTパラメータを取得
$id   = $_GET["id"];
$mode = $_GET["mode"];
$type = $_GET["type"];

sleep(5);
echo "<div>あああああ</div><div>いいいいい</div><div>ううううう</div>";


//簡易的なものであればphpでapiサーバーが作れてしまう　apiサーバーって何だっけ
$json = '[
    {
      "id":"'.$id.'",
      "mode":"'.$mode.'",
      "type":"'.$type.'"
    },
    {
     "id":"'.$id.'",
     "mode":"'.$mode.'",
     "type":"'.$type.'"
    }
]';

//作成したJSON文字列をリクエストしたファイルに返す
echo $json;
exit;
?>
