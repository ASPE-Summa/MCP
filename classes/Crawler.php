<?php

final class Crawler
{
    public function canAccess(string $string): bool
    {
        if (is_readable($string) || is_writable($string) || is_executable($string)) {
            return true;
        }

        return false;
    }
}
?>





