<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TextosVisiblesTest extends TestCase
{
    /**
     * Texto visibles en el Home
     *
     * @return void
     */
    public function testHome()
    {
        $this->visit('/')
             ->see('Soluciones')
             ->see('Misión')
             ->see('Visión')
             ->see('Contáctenos');
    }

    public function testNosotros()
    {
        $this->visit('/')
            ->click('Nosotros')
            ->seePageIs('/nosotros')
            ->see('Misión')
            ->see('Visión')
            ->see('Propuesta de valor');
    }

    public function testContacto()
    {
        $this->visit('/')
            ->click('Contacto')
            ->seePageIs('/contacto')
            ->dontSee('Misión')
            ->dontSee('Visión')
            ->dontSee('Propuesta de valor')
            ->see('Contáctenos');
    }
}
