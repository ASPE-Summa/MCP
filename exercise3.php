<?php
$currentDirectory = __DIR__;
//This automatically includes everything in the classes subdirectory.
foreach(scandir($currentDirectory . '/classes') as $fileToInclude){
    if(in_array($fileToInclude,['.','..']) == false){
        include 'classes/' . $fileToInclude;
    }
}
$user = new User();
$crawler = new Crawler();
$cli = new CLI();

echo $cli->cout_color("     .-\"\"\"\"\"\"-.
   .'  \\\\  //  '.
  /   O      O   \
 :                :
 |                |  
 :       __       :
  \  .-\"`  `\"-.  /
   '.          .'
     '-......-'" . PHP_EOL . PHP_EOL . PHP_EOL, 'red');
$cli->slowEcho(sprintf("MCP: The cookies, they're gone! Curse you %s, curse you and all users like you!", $user->getUserName()), "red");
$cli->slowEcho("Tron: Great job so far! His anger has exposed the MCP's core. He's HIDDEN his master code files within this very directory. Delete him forever user I know you can do it!", 'cyan');
