import './bootstrap';
import 'bootstrap';

import AOS from 'aos';

document.addEventListener("DOMContentLoaded", function () {
    
    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                AOS.init();
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1 
    });

    document.querySelectorAll('[data-aos]').forEach(element => {
        observer.observe(element);
    });
});