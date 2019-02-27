<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class SingleRoutesTest extends TestCase
{   
   
    /** @test */
    public function check_if_root_route_loads()
    {
       $response = $this->get('/');
       
       $response->assertStatus(200);

    }

    /** @test */
   public function check_if_about_route_loads()
   {
        $response =$this->get("/about");

        $response->assertOk();
        $response->assertSeeText('About');
   }
    
     /** @test */
     public function check_if_contact_route_need_login()
     {  
          $response =$this->get("/contact");
  
          $response->assertStatus(302);
     }

}
