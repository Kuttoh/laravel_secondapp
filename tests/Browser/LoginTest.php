<?php

namespace Tests\Browser;

use App\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testCheckIfLogInPageIsReachable()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->assertSee('Forgot Your Password?');
        });
    }

    public function testUserIsRedirectedToHomeWhenLoggedIn()
    {
        $newUser = factory(User::class)->make();

        $this->actingAs($newUser)
            ->get('/login')
            ->assertRedirect('/home');
    }

    public function testUserNotInDatabaseCannotLogIn()
    {
        $user = factory(User::class)->make();

        $this->browse(function ($browser) use ($user) {
            $browser->visit('/login')
                ->type('email', $user->email)
                ->type('password', $user->password)
                ->press('Login')
                ->assertPathIs('/login')
                ->assertSee('These credentials do not match our records.');
        });
    }

    public function testUserInDatabaseCanLogIn()
    {
        $this->browse(function ($browser) {
            $browser->visit('/login')
                ->type('email', 'kuttohisaac@gmail.com')
                ->type('password', '13iS6ylWmhP1')
                ->press('Login')
                ->assertPathIs('/home');
        });
    }
}
