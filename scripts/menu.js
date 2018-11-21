function toggleMenu() {
    let $spring = $(".hamburger--spring");
    let $menu = $("nav ul");
    let $nav = $("nav");
    if ($spring.hasClass("is-active")) {
        $spring.removeClass("is-active");
        $nav.removeClass("menu-open");
        $menu.fadeOut(300, function() {
            $nav.css("z-index", "-1");
        });
    } else {
        $spring.addClass("is-active");
        $nav.addClass("menu-open");
        $nav.css("z-index", "999");
        $menu.fadeIn(300);
    }
}