var scroll = window.requestAnimationFrame || function(callback) { window.setTimeout(callback, 1000/6) };
var elementsToShow = document.querySelectorAll('.show-on-scroll');

function loop() {
    elementsToShow.forEach(function (element) {
        if(isElementInViewport(element)) {
            element.classList.add('animate__animated');
            element.classList.add('animate__fadeInDown');
        }
        else {
            element.classList.remove('animate__animated');
            element.classList.remove('animate__fadeInDown');
        }
    });
    scroll(loop);
}

loop();

function isElementInViewport(el) {
    if(typeof jQuery === "function" && el instanceof jQuery) {
        el = el[0];
    }
    var rect = el.getBoundingClientRect();
    return (
        (rect.top <= 0 && rect.bottom >= 0) ||
        (rect.bottom >= (window.innerHeight || document.documentElement.clientHeight) && rect.top <= (window.innerHeight || document.documentElement.clientHeight)) ||
        (rect.top >= 0 && rect.bottom <= (window.innerHeight || document.documentElement.clientHeight))
    );
}