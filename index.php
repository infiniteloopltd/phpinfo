<?php
putenv("DOTNET_CLI_HOME=/tmp");
$output = shell_exec('dotnet run --project "/tmp/HelloWorld" 2>&1');
echo "$output";
?>