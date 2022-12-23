window.initModal = function(modal, button) {
    let isHidden = true;

    button.onclick = () => {
        modal.classList.remove("hidden");
        isHidden = false;
    };

    window.addEventListener("click", (event) => {
        if (isHidden) {
            return;
        }

        if (event.target == modal) {
            isHidden = false;
            modal.classList.add("hidden");
        }
    });
}

window.initHeaderFolder =  function(header, offset = 20) {
    const callback = () => {
        if (document.body.scrollTop > offset || document.documentElement.scrollTop > offset) {
            header.classList.replace("nav-bar", "nav-bar-folded");
            header.classList.replace("f32", "f20");
        }
        else {
            header.classList.replace("nav-bar-folded", "nav-bar");
            header.classList.replace("f20", "f32");
        }
    }

    callback();

    window.addEventListener("scroll", callback);
}

var slideIndex = 1;

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("slide");
    var dots = document.getElementsByClassName("dot");

    if (n > slides.length) {
        slideIndex = 1;
    }
    if (n < 1) {
        slideIndex = slides.length;
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].classList.add("hidden");
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace("active", "");
    }
    slides[slideIndex - 1].classList.remove("hidden");
    dots[slideIndex - 1].classList.add("active");

}

function initMenu(menu, button) {
    menu.classList.add("hidden");

    let isActive = false;

    const hide = () => {
        menu.classList.add("hidden");
        isActive = false;
    };

    hide();

    button.onclick = () => {
        if (isActive) {
            hide();
            return;
        }

        menu.classList.remove("hidden");

        let targetRect = button.getBoundingClientRect();

        const top = targetRect.bottom + document.documentElement.scrollTop;
        const left = targetRect.left;


        menu.style.top = `${top}px`;
        menu.style.left = `${left}px`;

        isActive = true;
    };
}
