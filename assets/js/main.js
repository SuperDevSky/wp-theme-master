(function ($){
    'use strict';

    $(document).ready(function ($) {
        $('.header__toogle').click(function(event) {
            event.preventDefault()
            $(this).toggleClass('active')
            $('.header').toggleClass('shown-nav')
        })

        $('.main-navigation .menu-item-has-children').append('<span class="toogle-sub-menu"></span>')

        $('.main-navigation .menu-item-has-children').on('click', '> .toogle-sub-menu', function(event) {
            event.preventDefault()
            let parent = $(this).closest('.menu-item-has-children')
            parent.toggleClass('shown-sub')
        })
    })
})(jQuery)