function scrollToElement(element) {
    let $oldOffset = $('html').offset().top;
    let $newOffset = $(element).offset().top-110;
    $([document.documentElement, document.body]).animate({
        scrollTop: $newOffset
    }, $newOffset-$oldOffset);
}