<?php
// https://github.com/infiniteloopltd/FrYabExe (Eurofil branch)
// http://51.144.114.84/phpinfo/Eurofil.php?cmd=CP357KX
putenv("DOTNET_CLI_HOME=/tmp");
$output = shell_exec('dotnet /var/app/FrYabExe/bin/Release/net7.0/FrYabTestHarness.dll ' . $_GET["cmd"] );
echo "$output";
?>