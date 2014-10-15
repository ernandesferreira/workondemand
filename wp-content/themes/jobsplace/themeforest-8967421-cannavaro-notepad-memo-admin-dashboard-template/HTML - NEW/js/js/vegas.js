// makes sure the whole site is loaded
        $('#status').fadeOut(); // will first fade out the loading animation
        $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
        $('body').delay(350).css({
            'overflow': 'visible'
        });
        $.vegas('overlay', {
            src: 'js/vegas/overlays/06.png'
        });


    $(function() {
        $('.slide-out-div').tabSlideOut({
            tabHandle: '.handle', //class of the element that will be your tab
            pathToTabImage: 'img/contact_tab.gif', //path to the image for the tab (optionaly can be set using css)
            imageHeight: '40px', //height of tab image
            imageWidth: '40px', //width of tab image    
            tabLocation: 'right', //side of screen where tab lives, top, right, bottom, or left
            speed: 500, //speed of animation
            action: 'hover', //options: 'click' or 'hover', action to trigger animation
            topPos: '143px', //position from the top
            fixedPosition: true //options: true makes it stick(fixed position) on scroll
        });
    });