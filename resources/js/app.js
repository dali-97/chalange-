import Alpine from 'alpinejs'
import Focus from '@alpinejs/focus'
import FormsAlpinePlugin from '../../vendor/filament/forms/dist/module.esm'
import NotificationsAlpinePlugin from '../../vendor/filament/notifications/dist/module.esm'

Alpine.plugin(Focus)
Alpine.plugin(FormsAlpinePlugin)
Alpine.plugin(NotificationsAlpinePlugin)

window.Alpine = Alpine

Alpine.start()
//  create a function to scroll smothli when I target the link
document.addEventListener("DOMContentLoaded", function () {
    // Add smooth scrolling to all links
    var links = document.querySelectorAll('a[href^="#"]');

    links.forEach(function (link) {
        link.addEventListener("click", function (event) {
            event.preventDefault();

            var targetId = this.getAttribute("href").substring(1);
            var targetElement = document.getElementById(targetId);

            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: "smooth"
                });
            }
        });
    });
});
