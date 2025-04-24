<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class PendaftaranTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group registrasi
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink(link: 'Register')
                    ->assertPathIs(path: '/register')
                    ->type(field: 'name', value: "name")
                    ->type(field: 'email', value: "email@gmail.com")
                    ->type(field: 'password', value: "password")
                    ->type(field: 'password_confirmation', value: "password")
                    ->press(button: "REGISTER")
                    ->assertPathIs(path: '/dashboard');
        });
    }
}
