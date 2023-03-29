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

$cli->slowEcho("Congratulations, you got rid of the MCP. In order to be done with him forever, we might want to create an instruction manual for future users. create a file named result.txt and fill it with your command history. (The last 50 commands should be enough)", 'cyan');
$cli->slowEcho("Lever het bestand result.txt in, op basis hiervan wordt je beoordeeld.", 'green');
