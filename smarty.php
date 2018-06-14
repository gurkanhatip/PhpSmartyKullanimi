<?php
require_once('C:\Users\gurkan\Desktop\smarty-3.1.32\libs\Smarty.class.php');
$smartykullanimi = new Smarty();
$smartykullanimi->template_dir = 'C:\Users\gurkan\Desktop\tema';


$smartykullanimi->compile_dir = 'C:\Users\gurkan\Desktop\tema\derleme';

$smartykullanimi->assign('title', 'Smarty Kullanimi Uygulamasi');


$smartykullanimi->assign('head', 'Smarty bir template enginedir.Html ve Php kodlarinin ayristirilmasini saglar.Frontend ve Backend developerlara kolaylik saglar.');

$smartykullanimi->display('index.tpl');
?>