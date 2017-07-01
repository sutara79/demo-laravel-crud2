<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
            $text = $browser->visit('/')
                            ->text('.flex-center');
            $browser->visit('/')
                    // ->assertSee('Laravel');
                    ->assertSee($text);
        });
    }
}
