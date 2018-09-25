<?php
 require_once("container.php");
 require_once("social.php");
 $cont=new horzContainer("title");
$news1=new quickNews(1, "Pellentesque habitant", "Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum eu laoreet ipsum, id convallis urna. In non porttitor nulla. In leo purus, sodales ac dictum vitae, sodales quis dui. Praesent rhoncus interdum fermentum. Nulla a vehicula libero. Sed dictum fringilla dolor, quis pharetra eros dictum non. <br><br> Suspendisse vitae urna ut felis auctor consequat. Proin bibendum luctus magna vel laoreet. Cras lacinia ullamcorper rutrum. Morbi turpis arcu, venenatis sit amet mi non, rhoncus lacinia risus. Proin eu diam condimentum, lacinia ipsum id, pulvinar mi. Vivamus vulputate varius sapien ac finibus. Fusce id elit ipsum. Aliquam lobortis nibh sit amet faucibus tristique. Maecenas lobortis tortor erat, a semper urna.");
$news2=new quickNews(2, "Nullam justo tellus", "Interdum a sem in, pharetra condimentum libero. Nullam bibendum, urna nec pretium pretium, dolor tellus lacinia elit, a egestas mauris risus nec ipsum. Nam congue, purus quis venenatis pretium, lorem arcu interdum nibh, nec porta ligula sapien a leo. Proin porta molestie turpis, interdum placerat tortor dignissim et. Nam tempor dignissim nunc, posuere tempus ipsum feugiat vel. Ut finibus faucibus condimentum. Donec massa erat, interdum at pretium id, rutrum vitae purus. Vivamus risus arcu, pellentesque id vulputate eu, porttitor quis sapien. Suspendisse ac posuere ante. In egestas leo at mi semper egestas. Aenean tempus volutpat arcu non sollicitudin. In hac habitasse platea dictumst. Fusce nisl quam, posuere sed mattis at, imperdiet ut enim. Suspendisse elementum magna sed magna egestas, a ultrices mauris malesuada.");
$news3=new quickNews(3, "In laoreet pretium", "Sed congue nibh sodales non. In leo nibh, suscipit a mattis id, volutpat sed diam. Mauris consectetur ornare nibh nec mollis. Maecenas efficitur dictum mi, hendrerit feugiat felis efficitur ac. Morbi commodo metus mollis nibh euismod, sit amet maximus est iaculis. Mauris ullamcorper, dui sed pulvinar sagittis, erat orci facilisis ante, non sollicitudin eros dui at nisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus porttitor metus lectus, sit amet porta enim pretium quis.<br><br> Efficitur et orci ut, dictum posuere risus. Curabitur in pulvinar lectus. Maecenas id nisi scelerisque, placerat eros a, semper arcu. Cras et euismod massa, eu aliquet eros. Donec vel pellentesque ligula. Praesent sit amet ullamcorper arcu, ac porta nisl. ");
$news4=new picNews(4, "Sed tellus metus", "Efficitur et orci ut, dictum posuere risus. Curabitur in pulvinar lectus. Maecenas id nisi scelerisque, placerat eros a, semper arcu. Cras et euismod massa, eu aliquet eros. Donec vel pellentesque ligula. Aenean sodales a libero in dictum. Ut nunc turpis, molestie sed feugiat at, tincidunt nec ex. Praesent sit amet ullamcorper arcu, ac porta nisl. Aliquam erat volutpat. In egestas leo at mi semper egestas. Aenean tempus volutpat arcu non sollicitudin. In hac habitasse platea dictumst.", "https://picsum.photos/350/150/?random");
$cont->addNews($news1);
$cont->addNews($news2);
$cont->addNews($news3);
$cont->addNews($news4);
$cont2= new vertContainer("bad news");
$news5=new picNews(5, "Fusce id elit ipsum", "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.", "https://picsum.photos/g/350/150/?random");
$cont2->addNews($news5);
//echo($cont->listNews());
?>

<html>
<head>
<title>kodutöö Kärol</title>
</head>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<link rel='stylesheet' type='text/css' href='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
<header>
<h1>Lorem Ipsum</h1>
</header>
<body class="text-justify">
<?php
echo($cont->render());
echo($cont2->render());
?>
</body>
</html>
