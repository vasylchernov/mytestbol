import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

function l() {
    console.log.apply(console, arguments);
}

l(1,2,3,4);
