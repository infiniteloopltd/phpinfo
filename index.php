<?php
$output = shell_exec(' dotnet run --project "/home/ec2-user/HelloWorld"');
echo "$output";
?>