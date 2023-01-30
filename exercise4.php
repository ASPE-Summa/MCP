<?php
$currentDirectory = __DIR__;
//This automatically includes everything in the classes subdirectory.
foreach (scandir($currentDirectory . '/classes') as $fileToInclude) {
    if (in_array($fileToInclude, ['.', '..']) == false) {
        include 'classes/' . $fileToInclude;
    }
}
$user = new User();
$cli = new CLI();

$cli->slowEcho("Tron: Phew, you've averted the threat of the MCP. Only one thing remains to be done. If the MCP ever tries to access our server again via HTTP, and we don't want him to. Which HTTP code should we respond with?", 'cyan');
$cli->slowEcho('Hint! We already know the MCP\'s identity, but we want to refuse him access anyway. Please enter your response (just the number of the code) and then hit the `enter` button', 'white');
$fin = fopen("php://stdin", "r");
$line = fgets($fin);
file_put_contents('assets/response.txt', $line);

