<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ContactoTest extends TestCase {

    /*
     * Con esto siempre haremos Rollback a la DB
     */
    use DatabaseTransactions;

    private $routes = [
        '/',
        '/nosotros',
        '/contacto',
        '/gestion-desempeno',
        '/gestion-seleccion',
        '/gestion-talentos',
        '/control-gestion',
        '/gestion-capacitacion'
    ];

    /**
     * Solo llegar y presionar Enviar en el formulario de contacto
     *
     * @return void
     */
    public function testSinNada()
    {
        foreach ($this->routes as $route)
        {
            $this->visit($route)
                ->press('Enviar')
                ->see('Hay algunos problemas con la información ingresada');
        }
    }

    /**
     * Probamos pasando todos los campos requeridos
     */
    public function testCompleto()
    {
        // Aqui solo creamos el objeto, pero no la persistencia
        $contact = factory(App\Contact::class)->make();

        foreach ($this->routes as $route)
        {
            $this->visit($route)
                ->type($contact->first_name, 'first_name')
                ->type($contact->last_name, 'last_name')
                ->type($contact->company, 'company')
                ->type($contact->role, 'role')
                ->type($contact->phone, 'phone')
                ->type($contact->email, 'email')
                ->type($contact->message, 'message')
                ->press('Enviar')
                ->see('Mensaje enviado de manera correcta')
                ->seeInDatabase('contacts', [
                    'first_name' => $contact->first_name,
                    'last_name'  => $contact->last_name,
                    'company'    => $contact->company,
                    'role'       => $contact->role,
                    'phone'      => $contact->phone,
                    'message'    => $contact->message,
                ]);
        }
    }

    /**
     * Prueba desde el formulario que esta en nosotros
     */
    public function testSinNadaNosotros()
    {
        $this->visit('/nosotros')
            ->press('Enviar')
            ->see('Hay algunos problemas con la información ingresada');
    }


}
