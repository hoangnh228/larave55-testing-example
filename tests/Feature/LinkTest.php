<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class LinkTest extends TestCase
{
	use DatabaseMigrations;

	public function setUp()
	{
	    parent::setUp();
	    $this->link = factory('App\Link')->create();
	}

    /** @test */
    public function people_can_browser_links()
    {
        $this->get('/links')->assertSee($this->link->title);
    }

	/** @test */
    public function people_can_read_single_link()
    {
        $this->get($this->link->path)->assertSee($this->link->title);
    }

	/** @test */
	public function people_can_go_to_create_link_page()
	{
	    $this->get('links/create')->assertStatus(200);
	}

	/** @test */
	public function people_can_insert_new_link()
	{
	    $this->call('POST', '/links/insert', [
	    	'title' => 'test',
		    'url' => 'http://test.com',
		    'description' => 'description test'
	    ])->assertStatus(302);
	}

	/** @test */
	public function people_can_go_to_edit_a_link()
	{
		$this->get('/links/edit/' . $this->link->id)->assertSee($this->link->title);
	}

	/** @test */
	public function people_can_update_a_link()
	{
	    $this->call('POST', '/links/update/' . $this->link->id, [
	    	'title' => 'test',
		    'url' => 'example.com',
		    'description' => 'update description'
	    ])->assertStatus(302);
	}

	/** @test */
	public function people_can_remove_a_link()
	{
	    $this->get('/links/delete/' . $this->link->id)
	        ->assertStatus(302);
	}
}
