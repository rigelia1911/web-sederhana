(function () {
    const navToggle = document.querySelector(".nav-toggle");
    const nav = document.querySelector("#site-nav");

    if (navToggle && nav) {
        navToggle.addEventListener("click", function () {
            const open = nav.classList.toggle("is-open");
            navToggle.setAttribute("aria-expanded", String(open));
            navToggle.setAttribute("aria-label", open ? "Close menu" : "Open menu");
        });

        nav.querySelectorAll("a").forEach(function (link) {
            link.addEventListener("click", function () {
                nav.classList.remove("is-open");
                navToggle.setAttribute("aria-expanded", "false");
                navToggle.setAttribute("aria-label", "Open menu");
            });
        });
    }

    const carousel = document.querySelector("[data-carousel]");
    if (!carousel) {
        return;
    }

    const slides = Array.from(carousel.querySelectorAll("[data-slide]"));
    const dotsWrap = carousel.querySelector("[data-dots]");
    const prev = carousel.querySelector("[data-prev]");
    const next = carousel.querySelector("[data-next]");
    let index = 0;
    let timer;

    slides.forEach(function (_, i) {
        const dot = document.createElement("button");
        dot.type = "button";
        dot.className = "dot" + (i === 0 ? " is-active" : "");
        dot.setAttribute("aria-label", "Go to slide " + (i + 1));
        dot.addEventListener("click", function () {
            goTo(i);
        });
        dotsWrap.appendChild(dot);
    });

    const dots = Array.from(dotsWrap.querySelectorAll(".dot"));

    function goTo(nextIndex) {
        slides[index].classList.remove("is-active");
        dots[index].classList.remove("is-active");
        index = (nextIndex + slides.length) % slides.length;
        slides[index].classList.add("is-active");
        dots[index].classList.add("is-active");
        restart();
    }

    function restart() {
        clearInterval(timer);
        timer = setInterval(function () {
            goTo(index + 1);
        }, 6500);
    }

    prev.addEventListener("click", function () {
        goTo(index - 1);
    });

    next.addEventListener("click", function () {
        goTo(index + 1);
    });

    carousel.addEventListener("mouseenter", function () {
        clearInterval(timer);
    });

    carousel.addEventListener("mouseleave", restart);

    restart();
})();
