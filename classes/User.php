<?php

final class User{

    public function getUserName(): string
    {
        return trim(shell_exec('whoami'));
    }
}

