<?php
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserRegistrationTest extends TestCase
{
    /** @test */
    public function emptyBoth()
    {
      $this->visit('/')
          ->type('', 'name')
          ->type('', 'email')
          ->press('Register')
          ->seePageIs('/');
    }

}
