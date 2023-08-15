// Mobile Navigation
const burger = document.querySelector(".navigation__burger");

const navSlide = () => {
    const nav = document.querySelector(".header__links__container");
    nav.classList.toggle("js__links__open");
    burger.classList.toggle("toggle");
}

burger.addEventListener("click", navSlide);

// Accordion arrow animation

let accordionHeaders = document.querySelectorAll('.accordion__header');
accordionHeaders.forEach(function (header) {
    header.addEventListener('click', function () {
        // Find the arrow icon inside the header
        let arrowIcon = header.querySelector('.accordion__arrow');

        // Toggle the 'rotate' class on the arrow icon
        arrowIcon.classList.toggle('rotate');

        // Find all the other arrow icons and remove the 'rotate' class from them
        let otherArrowIcons = document.querySelectorAll('.accordion__arrow:not(.rotate)');
        otherArrowIcons.forEach(function (icon) {
            icon.classList.remove('rotate');
        });
    });
});

// Blog slider
jQuery(function ($) {

    $('.slider').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        arrows: true,
        prevArrow: false,
        nextArrow: false,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    arrows: false,
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    arrows: false,
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 900,
                settings: {
                    arrows: false,
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            ]
        });

    // Project slider
    $('.projects__slider').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        arrows: true,
        prevArrow: false,
        nextArrow: false,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    arrows: false,
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    arrows: false,
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 900,
                settings: {
                    arrows: false,
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            ]
        });
});

// Scroll project on small cards

// Select all project screenshot containers
const projectScreenshotContainers = document.querySelectorAll(".project__card__screenshot__container");

// Loop over each container and attach the event listener
projectScreenshotContainers.forEach(container => {
    const projectScreenshotImage = container.querySelector(".project__card__screenshot");

    if (projectScreenshotImage) {
        projectScreenshotImage.addEventListener("mouseover", () => {
            const imageHeight = projectScreenshotImage.clientHeight;
            const containerHeight = container.clientHeight;
            const stopScrollPosition = imageHeight - (containerHeight * 1.0);
            container.style.setProperty("--scroll-distance", `${stopScrollPosition}px`);
        });
    }
});


// Scroll project slider

const screenshotContainer = document.querySelector(".project__screenshot__container");
const screenshotImage = document.querySelector(".project__screenshot");

if(screenshotImage){
    screenshotImage.addEventListener("mouseover", () => {
        const imageHeight = screenshotImage.clientHeight;
        const containerHeight = screenshotContainer.clientHeight;
        const stopScrollPosition = imageHeight - (containerHeight * 1.0);
        screenshotContainer.style.setProperty("--scroll-distance", `${stopScrollPosition}px`);
    });
}
