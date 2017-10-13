<?php 

include 'db_connect.php';

$limit = (intval($_GET['limit']) != 0 ) ? $_GET['limit'] : 10;
$offset = (intval($_GET['offset']) != 0 ) ? $_GET['offset'] : 0;

$sql = "SELECT * FROM student_info WHERE id ORDER BY id ASC LIMIT $limit OFFSET $offset";
show_data($sql,$con);
?>