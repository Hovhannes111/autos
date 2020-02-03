$(document).ready(function () {
    let url = window.location.pathname;
    let home = document.getElementById('home');
    let about = document.getElementById('about');
    let services = document.getElementById('services');
    let pricing = document.getElementById('pricing');
    let cars = document.getElementById('cars');
    let blog = document.getElementById('blog');
    let contact = document.getElementById('contact');

    if (url === '/') {
        home.setAttribute('class', 'nav-item active');
    } else if (url === '/about') {
        about.setAttribute('class', 'nav-item active');
    } else if (url === '/services') {
        services.setAttribute('class', 'nav-item active');
    } else if (url === '/pricing') {
        pricing.setAttribute('class', 'nav-item active');
    } else if (url === '/cars') {
        cars.setAttribute('class', 'nav-item active');
    } else if (url === '/blog') {
        blog.setAttribute('class', 'nav-item active');
    } else if (url === '/contact') {
        contact.setAttribute('class', 'nav-item     active');
    }

});
