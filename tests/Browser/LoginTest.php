<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test for login.
     * @group login
     */
    public function testUserCanLogin(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Log in') 
                    ->clickLink('Log in') 
                    ->assertPathIs('/login') 
                    ->type('email', 'email@gmail.com')
                    ->type('password', 'password')
                    ->press('LOG IN'); 
        });
    }
}
