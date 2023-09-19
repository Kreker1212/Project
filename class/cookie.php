<?php


class cookie
{
    public $user = 'user';
    public $userId = 'user_id';

    public function setUserCookie($meaning, $time, $where)
    {
        return setcookie($this->user, $meaning, time() + $time, "$where");
    }

    public function setUserIdCookie($meaning, $time, $where)
    {
        return setcookie($this->userId, $meaning, time() + $time, "$where");
    }

    public function getUsername(): ?string
    {
        return $_COOKIE[$this->user];
    }

    public function getUserId(): ?string
    {
        return $_COOKIE[$this->userId];
    }
}