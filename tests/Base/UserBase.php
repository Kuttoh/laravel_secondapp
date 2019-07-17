<?php


namespace Tests\Base;


use App\User;

trait UserBase
{
    public function getUser()
    {
        $newUser = factory(User::class)->create();

        return $newUser;
    }
}
