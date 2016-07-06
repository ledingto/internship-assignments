<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserRegistrationTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUserRegistration()
    {
      $this->visit('/')
          ->type('Laura', 'name')
          ->type('laura@email.com', 'email')
          ->press('Register')
          ->seePageIs('/userSuccess');
    }
}
