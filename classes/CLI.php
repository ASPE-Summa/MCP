<?php

final class CLI
{

    function cout_color($content, $color = null)
    {

        if (!empty($color)) {
            if (!is_numeric($color)) {
                //ensure entered color string is lowercase.
                $c = strtolower($color);
            } else {
                // no color was set so lets pick a random one...
                $c = rand(1, 14);
            }
        } else    // no color argument was passed, so lets pick a random one w00t
        {
            $c = rand(1, 14);
        }

        $cheader = '';
        $cfooter = "\033[0m";

        switch ($c) {
            case 1:
            case 'red':
                $cheader .= "\033[31m";
                break;
            case 2:
            case 'green':
                $cheader .= "\033[32m";
                break;
            case 3:
            case 'yellow':
                $cheader .= "\033[33m";
                break;
            case 4:
            case 'blue':
                $cheader .= "\033[34m";
                break;
            case 5:
            case 'magenta':
                $cheader .= "\033[35m";
                break;
            case 6:
            case 'cyan':
                $cheader .= "\033[36m";
                break;
            case 7:
            case 'light grey':
                $cheader .= "\033[37m";
                break;
            case 8:
            case 'dark grey':
                $cheader .= "\033[90m";
                break;
            case 9:
            case 'light red':
                $cheader .= "\033[91m";
                break;
            case 10:
            case 'light green':
                $cheader .= "\033[92m";
                break;
            case 11:
            case 'light yellow':
                $cheader .= "\033[93m";
                break;
            case 12:
            case 'light blue':
                $cheader .= "\033[94m";
                break;
            case 13:
            case 'light magenta':
                $cheader .= "\033[95m";
                break;
        }

        return $cheader . $content . $cfooter;
    }

    public function slowEcho($string, $color)
    {
        for ($i = 0; $i < strlen($string); $i++) {
            echo $this->cout_color($string[$i], $color);
            usleep(6000);
        }
        echo PHP_EOL;
    }
}