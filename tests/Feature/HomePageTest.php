<?php

test('home page shows the portfolio owner and dummy projects', function () {
    $response = $this->get('/');

    $response->assertOk()
        ->assertSee('Alif Getar Ramadhan')
        ->assertSee('AGR')
        ->assertSee('Sistem Informasi Akademik')
        ->assertSee('id="contact"', false);
});
