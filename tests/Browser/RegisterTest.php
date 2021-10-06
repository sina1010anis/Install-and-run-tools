<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;
use Illuminate\Support\Str;
class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function ($browser , $second) {
            $browser->visit('/')
                ->pause(3000)
                ->click('.test');
                // ->assertSee('Register')
                // ->value('#name' , 'sina')
                // ->value('#email' , Str::random(10).'@gmail.com')
                // ->value('#password' , '123456789')
                // ->value('#password-confirm' , '123456789')
                // ->click('button[type="submit"]')
                // ->assertPathIs('/home')
                // ->refresh()
                // ->script('alert("ok")');
        });
    }
}
