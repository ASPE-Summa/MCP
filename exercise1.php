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
$cli->slowEcho(sprintf("MCP: I will start by scanning all your files. Oh? What's this? '/wallet/doge.png'. Your crypto wallet is now mine!"), "red");
$cli->slowEcho('Tron: The MCP can access your files and folders under the username www-data. Make sure he can no longer read/write or execute your doge.png!', 'cyan');
$cli->slowEcho('Hint, you will need to change the owner and group to root as well as change the access modifiers.', 'white');
