<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class PasienTest extends DuskTestCase
{
    /**
    * @test testTheHomePage
    */
    public function openHomePage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/pasien')
                ->assertPathIs('/dokter');
        });
    }
}
