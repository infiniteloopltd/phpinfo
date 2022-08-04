<?php
putenv("DOTNET_CLI_HOME=/tmp");
$output = shell_exec('dotnet run --project "/home/ec2-user/HelloWorld" 2>&1');
echo "$output";
?>