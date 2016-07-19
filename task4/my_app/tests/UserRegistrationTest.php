<?php
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserRegistrationTest extends TestCase
{
    /** @test */
    public function emptyAll()
    {
      $this->visit('/')
          ->type('', 'name')
          ->type('', 'email')
          ->type('', 'phone')
          ->press('Register')
          ->seePageIs('/');
    }

}
