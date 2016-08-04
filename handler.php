
<?php
//echo '<pre>';
//print_r($_GET);
//echo '</ pre>';
$result=0;
switch ($_GET['answer']) {
    case 'plus':
        $result = $_GET['first']+$_GET['second'];
        echo 'Результат - ' . $result;
        break;
    case 'minus':
        echo $_GET['first']-$_GET['second'];
        break;
    case 'multiplay':
        echo $_GET['first']*$_GET['second'];
        break;
    case 'devide':
        echo $_GET['first']/$_GET['second'];
        break;
}