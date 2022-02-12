<?php
echo "<h1><a href='#' >自动部署的开始...</a></h1>";
echo "<h2>试试</h2>";
echo "<hr/>";
echo "<h3>syt0592@sohu.com</h3>";
$path = "D:\WebRoot\cs";
shell_exec("d: >d:/1.txt && cd {$path} > d:/2.txt && git reset --hard origin/master >d:/3.txt && git clean -f > d:/4.txt && git pull >5.txt")
?>

