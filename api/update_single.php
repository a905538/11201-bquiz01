<?php
include_once "../base.php";
//文字的更新
//dd($_POST);
$table = $_POST['table'];
$db = ucfirst($table);
$row=$$db->find(1);
//dd($_POST);
// switch ($table) {
//     case 'total':
//         $row['total'] = $_POST['total'];
//         break;
//     case 'bottom':
//         $row['bottom'] = $_POST['bottom'];
//         break;
// }
$row[$table]=$_POST[$table];
$$db->save($row);
to("../backend.php?do=$table");
