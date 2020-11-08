$(function () {
    const navigationHeight = $('.navbar-container').outerHeight(true);

    AOS.init({
        delay: 5,
    });

    $('.nav-link, .navbar-brand').click(function (e) {
        e.preventDefault();

        if (!$(this).data('scroll-item')) {
            return
        }

        const scrollTo = $(this).attr('href');

        if (!scrollTo) {
            return;
        }

        const offset = $(this).outerHeight(true);
        const scrollTop = $(scrollTo).offset().top - (offset + navigationHeight)

        $('html, body').animate({
            scrollTop
        }, 1500);
    });

    const topMenu = $('.navbar-nav'),
        menuItems = topMenu.find("a"),
        scrollItems = menuItems.map(function () {
            if (!$(this).data('scroll-item')) {
                return
            }

            const item = $($(this).attr("href"));

            if (item.length) {
                return item;
            }
        });

    $(window).scroll(function () {
        const fromTop = $(this).scrollTop() + navigationHeight + 60;
        var scrollHeight = $(document).height();
        var scrollPosition = $(window).height() + $(window).scrollTop();

        let currentItem = scrollItems.map(function () {
            if ($(this).offset().top < fromTop) {
                return this;
            }
        });

        currentItem = currentItem[currentItem.length - 1];

        if ((scrollHeight - scrollPosition) / scrollHeight === 0) {
            currentItem = scrollItems[scrollItems.length - 1];
        }

        const id = currentItem && currentItem.length ? currentItem[0].id : "";
        menuItems.parent().removeClass("active");

        if (id) {
            menuItems.filter("[href='#" + id + "']").parent().addClass("active");
        }

    });
});