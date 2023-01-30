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

echo $cli->cout_color("      _.-'''''-._
    .'  _     _  '.
   /   (o)   (o)   \
  |                 |
  |  \           /  |
   \  '.       .'  /
    '.  `'---'`  .'
      '-._____.-'" . PHP_EOL . PHP_EOL . PHP_EOL, 'red');

$cli->slowEcho("MCP: Unbelievable! You would deny your files to me? Oh well. This is far from over. You may have won the battle, but I will win the war!", "red");
$cli->slowEcho(sprintf("MCP: I don't even need to access your files %s, I already know everything about you. Your favourite food is cookies isn't it?", $user->getUserName()), "red");
$cli->slowEcho('Tron: This is weird.... it seems unhinged. Maybe it\'s confused the word cookies for cookies on the web. Oh well. It can\'t hurt to stop him from getting to your cookies. Replace all instances of the word "Cookie" in the /assets/food.txt file with your actual favourite food. Prove him wrong!', 'cyan');
