<?php
// dotnet publish -c release --self-contained --runtime linux-x64
putenv("DOTNET_CLI_HOME=/tmp");

var $output = shell_exec("dotnet --version");
// $output = shell_exec('sudo /tmp/HelloWorld/bin/Release/netcoreapp3.1/linux-x64/HelloWorld 2>&1');
var_dump($output);
?>