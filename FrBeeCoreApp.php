<?php
// https://github.com/infiniteloopltd/FrBeeCoreApp.git
// http://51.144.114.84/phpinfo/FrBeeCoreApp.php?cmd=CP357KX
putenv("DOTNET_CLI_HOME=/tmp");
$output = shell_exec('dotnet /var/app/FrBeeCoreApp/bin/Release/net7.0/FrBeeCoreApp.dll ' . $_GET["cmd"] );
echo "$output";
?>