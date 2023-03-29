<?php
$currentDirectory = __DIR__;
//This automatically includes everything in the classes subdirectory.
foreach(scandir($currentDirectory . '/classes') as $fileToInclude){
    if(in_array($fileToInclude,['.','..']) == false){
        include 'classes/' . $fileToInclude;
    }
}
$user = new User();
$cli = new CLI();

echo $cli->cout_color("     .-\"\"\"\"\"\"-.
   .'          '.
  /   O      O   \
 :                :
 |                |
 : ',          ,' :
  \  '-......-'  /
   '.          .'
     '-......-'" . PHP_EOL . PHP_EOL . PHP_EOL, 'red');

$cli->slowEcho(sprintf("MCP: Hello %s, I am the Master Control Program. But you may refer to me as the MCP. And I am going to take over this system. Only an expert Linux user has the power to stop me. MWUHAHAHAHAHA!", $user->getUserName()), "red");
$cli->slowEcho('Tron: Hey user, we have to work together to stop the MCP. I can tell you what needs to be done, but only you can input the commands to stop the MCT!', 'cyan');

for($i = 0; $i < 50; $i++){
    $fileName = sprintf("spamFile_%d.txt", $i);
    touch($fileName);
}

$cli->slowEcho("MCP: I Have created 50 viruses in your current directory. I wonder how you will handle this?", "red");
$cli->slowEcho("Tron: use wildcards to remove all files starting with the word spam!", 'cyan');