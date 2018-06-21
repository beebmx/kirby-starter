<?php
c::set('panel.install', env('KIRBY_PANEL_INSTALL', false));
c::set('license', env('KIRBY_LICENSE', 'put your license in here'));
c::set('email.from', 'contacto@domain.com');
c::set('email.subject', 'Contacto via formulario DOMAIN');
c::set('debug', env('KIRBY_DEBUG', false));

c::set('blade.directives', [
    'kirbytext' => function ($text) {
        return "<?= kirbytext($text) ?>";
    }
]);
