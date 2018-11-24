    import { tns } from "../../../node_modules/tiny-slider/src/tiny-slider"


$(function () {

    var slider = tns({
        container: '.my-slider',
        items: 1,
        controls: false,
        slideBy: 'page',
        autoplay: true
    });

});