<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class MakeNotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group makenotes
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/') 
                    ->clickLink('Log in') 
                    ->assertPathIs('/login') 
                    ->type('email', 'email@gmail.com')
                    ->type('password', 'password')
                    ->press('LOG IN')
                    ->assertPathIs('/dashboard')
                    ->waitForText('Notes')
                    ->clickLink('Notes') 
                    ->assertPathIs('/notes') 
                    ->clickLink('Create Note')
                    ->type(field: 'title', value: "judul")
                    ->type(field: 'description', value: "deskripsi")
                    ->clickLink('Create Note');
        });
    }
}
