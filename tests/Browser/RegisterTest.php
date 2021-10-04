<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->clickLink('Register')
            ->assertSee('Register')
            ->value('#name' , 'sina')
            ->value('#email' , 'sina1010anis@gmail.com')
            ->value('#password' , '123456789')
            ->value('#password-confirm' , '123456789')
            ->click('button[type="submit"]');
        });
    }
}
