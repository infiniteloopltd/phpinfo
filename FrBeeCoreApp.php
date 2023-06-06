<?php
putenv("DOTNET_CLI_HOME=/tmp");
$output = shell_exec('dotnet /var/app/FrBeeCoreApp/bin/Release/net7.0/FrBeeCoreApp.dll ' . $_GET["cmd"] );
echo "$output";
?>