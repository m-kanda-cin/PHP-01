<?php
// 連想配列のkey
// name, age, genderに
// 山田,  20,  女性
// という値を格納し、

// 山田
// 20歳・女性

// という形で出力してください。

$lesson3_arr = [

    'name'   => '山田',

    'age'    => '20',

    'gender' => '女性'

];

echo $lesson3_arr['name'] . '<br/>';
echo $lesson3_arr['age'] . '歳・' . $lesson3_arr['gender'];
