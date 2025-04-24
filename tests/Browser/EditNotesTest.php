<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditNotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group editnotes
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
                    ->clickLink('Edit') 
                    ->type(field: 'title', value: "juduledit")
                    ->type(field: 'description', value: "deskripsiedit")
                    ->press('Update');
        });
    }
}
