

$(document).ready(function () {
    $("#lightSlider").lightSlider({
        item: 3,
        slideMove: 3,
        easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
        speed: 600,
        slideMargin: 6,
        responsive: [
            {
                breakpoint: 800,
                settings: {
                    item: 2,
                    slideMove: 1,
                    slideMargin: 6,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    item: 1,
                    slideMove: 1
                }
            }
        ]
    });
});

$(document).ready(function () {
    $("#slidertimeline").lightSlider({
        item: 2,
        slideMove: 2,
        easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
        speed: 600,
        slideMargin: 6,
        responsive: [
            {
                breakpoint: 800,
                settings: {
                    item: 2,
                    slideMove: 1,
                    slideMargin: 6,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    item: 1,
                    slideMove: 1
                }
            }
        ]
    });
});

$(document).ready(function () {
    $("#sliderprojetos").lightSlider({
        item: 1,
        slideMove: 1,
        easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
        speed: 600,
        slideMargin: 60,
        responsive: [
            {
                breakpoint: 800,
                settings: {
                    item: 1,
                    slideMove: 1,
                    slideMargin: 6,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    item: 1,
                    slideMove: 1
                }
            }
        ]
    });
});
$(document).ready(function () {
    $("#sliderportfoliosingle").lightSlider({
        item: 3,
        slideMove: 3,
        easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
        speed: 600,
        slideMargin: 0,
        responsive: [
            {
                breakpoint: 800,
                settings: {
                    item: 2,
                    slideMove: 2,
                    slideMargin: 0,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    item: 2,
                    slideMove: 2,
                    slideMargin: 0,
                }
            }
        ]
    });
});



