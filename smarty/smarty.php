<?php
require_once('C:\Users\gurkan\Desktop\smarty-3.1.32\libs\Smarty.class.php');
$smartykullanimi = new Smarty();
$smartykullanimi->template_dir = 'C:\Users\gurkan\Desktop\theme';


$smartykullanimi->compile_dir = 'C:\Users\gurkan\Desktop\theme\compile';

$smartykullanimi->assign('title', 'Smarty Kullanimi Uygulamasi');
$smartykullanimi->assign('content', 'Smarty bir template enginedir.Html ve Php kodlarinin ayristirilmasini saglar.Frontend ve Backend developerlara kolaylik saglar.<br>Konu : -----> <i>Smarty Template Engine Kullanımı</i> <br> Araştıran : -----> <i>Gürkan Hatip</i><h1> Smarty Tutorial Video serisi </h1> <br> <iframe width="560" height="315" src="https://www.youtube.com/embed/ITLx5lNMS-U" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>');

$smartykullanimi->display('index.tpl');
?>