import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

window.l = function () {
    console.log.apply(console, arguments);
}

var l = window.l;
