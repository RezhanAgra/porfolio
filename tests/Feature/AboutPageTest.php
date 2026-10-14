<?php

test('about page shows profile, skills and experience', function () {
    $response = $this->get('/about');

    $response->assertOk()
        ->assertSee('Alif Getar Ramadhan')
        ->assertSee('Tech Stack Saya')
        ->assertSee('Freelance Web Programmer')
        ->assertSee('id="contact"', false);
});

test('navbar marks the about menu as the current page', function () {
    $this->get('/about')
        ->assertOk()
        ->assertSee('aria-current="page"', false);
});
