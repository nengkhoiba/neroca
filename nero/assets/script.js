(function($){

    $.extend($.easing, {
        easeInOutCubic : function(x, t, b, c, d){
            if ((t/=d/2) < 1) return c/2*t*t*t + b;
            return c/2*((t-=2)*t*t + 2) + b;
        }
    });

    $.fn.outerFind = function(selector){
        return this.find(selector).addBack(selector);
    };

    (function($,sr){
        // debouncing function from John Hann
        // http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
        var debounce = function (func, threshold, execAsap) {
            var timeout;

            return function debounced () {
                var obj = this, args = arguments;
                function delayed () {
                    if (!execAsap) func.apply(obj, args);
                    timeout = null;
                };

                if (timeout) clearTimeout(timeout);
                else if (execAsap) func.apply(obj, args);

                timeout = setTimeout(delayed, threshold || 100);
            };
        }
        // smartresize
        jQuery.fn[sr] = function(fn){  return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr); };

    })(jQuery,'smartresize');

   
    $.isMobile = function(type){
        var reg = [];
        var any = {
            blackberry : 'BlackBerry',
            android : 'Android',
            windows : 'IEMobile',
            opera : 'Opera Mini',
            ios : 'iPhone|iPad|iPod'
        };
        type = 'undefined' == $.type(type) ? '*' : type.toLowerCase();
        if ('*' == type) reg = $.map(any, function(v){ return v; });
        else if (type in any) reg.push(any[type]);
        return !!(reg.length && navigator.userAgent.match(new RegExp(reg.join('|'), 'i')));
    };

    var isSupportViewportUnits = (function(){
        // modernizr implementation
        var $elem = $('<div style="height: 50vh; position: absolute; top: -1000px; left: -1000px;">').appendTo('body');
        var elem = $elem[0];
        var height = parseInt(window.innerHeight / 2, 10);
        var compStyle = parseInt((window.getComputedStyle ? getComputedStyle(elem, null) : elem.currentStyle)['height'], 10);
        $elem.remove();
        return compStyle == height;
    }());

    $(function(){

        $('html').addClass($.isMobile() ? 'mobile' : 'desktop');

        // .mbr-navbar--sticky
        $(window).scroll(function(){
            $('.mbr-navbar--sticky').each(function(){
                var method = $(window).scrollTop() > 10 ? 'addClass' : 'removeClass';
                $(this)[method]('mbr-navbar--stuck')
                    .not('.mbr-navbar--open')[method]('mbr-navbar--short');
            });
        });

        if ($.isMobile() && navigator.userAgent.match(/Chrome/i)){ // simple fix for Chrome's scrolling
            (function(width, height){
                var deviceSize = [width, width];
                deviceSize[height > width ? 0 : 1] = height;
                $(window).smartresize(function(){
                    var windowHeight = $(window).height();
                    if ($.inArray(windowHeight, deviceSize) < 0)
                        windowHeight = deviceSize[ $(window).width() > windowHeight ? 1 : 0 ];
                    $('.mbr-section--full-height').css('height', windowHeight + 'px');
                });
            })($(window).width(), $(window).height());
        } else if (!isSupportViewportUnits){ // fallback for .mbr-section--full-height
            $(window).smartresize(function(){
                $('.mbr-section--full-height').css('height', $(window).height() + 'px');
            });
            $(document).on('add.cards', function(event){
                if ($('html').hasClass('mbr-site-loaded') && $(event.target).outerFind('.mbr-section--full-height').length)
                    $(window).resize();
            });
        }

       

        // embedded videos
        $(window).smartresize(function(){
            $('.mbr-embedded-video').each(function(){
                $(this).height(
                    $(this).width() *
                    parseInt($(this).attr('height') || 315) /
                    parseInt($(this).attr('width') || 560)
                );
            });
        });
        $(document).on('add.cards', function(event){
            if ($('html').hasClass('mbr-site-loaded') && $(event.target).outerFind('iframe').length)
                $(window).resize();
        });

        $(document).on('add.cards', function(event){
            $(event.target).outerFind('[data-bg-video]').each(function(){
                var result, videoURL = $(this).data('bg-video'), patterns = [
                    /\?v=([^&]+)/,
                    /(?:embed|\.be)\/([-a-z0-9_]+)/i,
                    /^([-a-z0-9_]+)$/i
                ];
                for (var i = 0; i < patterns.length; i++){
                    if (result = patterns[i].exec(videoURL)){
                        var previewURL = 'http' + ('https:' == location.protocol ? 's' : '') + ':';
                        previewURL += '//img.youtube.com/vi/' + result[1] + '/maxresdefault.jpg';

                        var $img = $('<div class="mbr-background-video-preview">')
                            .hide()
                            .css({
                                backgroundSize: 'cover',
                                backgroundPosition: 'center'
                            })
                        $('> *:eq(0)', this).before($img);

                        $('<img>').on('load', function() {
                            if (120 == (this.naturalWidth || this.width)) {
                                // selection of preview in the best quality
                                var file = this.src.split('/').pop();
                                switch (file){
                                    case 'maxresdefault.jpg':
                                        this.src = this.src.replace(file, 'sddefault.jpg');
                                        break;
                                    case 'sddefault.jpg':
                                        this.src = this.src.replace(file, 'hqdefault.jpg');
                                        break;
                                }
                            } else {
                                $img.css('background-image', 'url("' + this.src + '")')
                                    .show();
                            }
                        }).attr('src', previewURL)

                        if ($.fn.YTPlayer && !$.isMobile()){
                            var params = eval('(' + ($(this).data('bg-video-params') || '{}') + ')');
                            $('> *:eq(1)', this).before('<div class="mbr-background-video"></div>').prev()
                                .YTPlayer($.extend({
                                    videoURL : result[1],
                                    containment : 'self',
                                    showControls : false,
                                    mute : true
                                }, params));
                        }
                        break;
                    }
                }
            });
        });

        // init
        $('body > *:not(style, script)').trigger('add.cards');
        $('html').addClass('mbr-site-loaded');
        $(window).resize().scroll();

        // smooth scroll
        if (!$('html').hasClass('is-builder')){
            $(document).click(function(e){
                try {
                    var target = e.target;

                    if ($(target).parents().hasClass('extTestimonials1')) {
                        return;
                    }
                    do {
                        if (target.hash){
                                var useBody = /#bottom|#top/g.test(target.hash);
                            $(useBody ? 'body' : target.hash).each(function(){
                                e.preventDefault();
                                // in css sticky navbar has height 64px
                                var stickyMenuHeight = $('.mbr-navbar--sticky').length ? 64 : 0;
                                var goTo = target.hash == '#bottom'
                                        ? ($(this).height() - $(window).height())
                                        : ($(this).offset().top - stickyMenuHeight);
                                //Disable Accordion's and Tab's scroll
                                if($(this).hasClass('panel-collapse') || $(this).hasClass('tab-pane')){return};
                                $('html, body').stop().animate({
                                    scrollTop: goTo
                                }, 800, 'easeInOutCubic');
                            });
                            break;
                        }
                    } while (target = target.parentNode);
                } catch (e) {
                   // throw e;
                }
            });
        }

        // init the same height columns
        $('.cols-same-height .mbr-figure').each(function() {
            var $imageCont = $(this)
            var $img = $imageCont.children('img')
            var $cont = $imageCont.parent()
            var imgW = $img[0].width
            var imgH = $img[0].height

            function setNewSize() {
                $img.css({
                    width: '',
                    maxWidth: '',
                    marginLeft: ''
                })

                if(imgH && imgW) {
                    var aspectRatio = imgH / imgW

                    $imageCont.addClass({
                        position: 'absolute',
                        top: 0,
                        left: 0,
                        right: 0,
                        bottom: 0
                    })

                    // change image size
                    var contAspectRatio = $cont.height() / $cont.width()
                    if(contAspectRatio > aspectRatio) {
                        var percent = 100 * (contAspectRatio - aspectRatio) / aspectRatio;
                        $img.css({
                            width: percent + 100 + '%',
                            maxWidth: percent + 100 + '%',
                            marginLeft: (- percent / 2) + '%'
                        })
                    }
                }
            }

            $img.one('load', function() {
                imgW = $img[0].width
                imgH = $img[0].height
                setNewSize()
            })

            $(window).on('resize', setNewSize)
            setNewSize()
        })

    });


    if (!$('html').hasClass('is-builder')) {
        $(document).ready(function() {
            //disable animation on scroll on mobiles
            if ($.isMobile()) {
                return;
              //enable animation on scroll
            } else if ($('input[name=animation]').length) {
                $('input[name=animation]').remove();

                var $animatedElements = $('p, h1, h2, h3, h4, h5, a, button, small, img, li, blockquote, .mbr-author-name, em, label, input, textarea, .input-group, .iconbox, .btn-social, .mbr-figure, .mbr-map, .mbr-testimonial .card-block, .mbr-price-value, .mbr-price-figure, .dataTable, .dataTables_info').not(function() {
                    return $(this).parents().is('.navbar, .mbr-arrow, footer, .iconbox, .mbr-slider, .mbr-gallery, .mbr-testimonial .card-block, #cookiesdirective, .mbr-wowslider, .accordion, .tab-content, .engine, .extFooter1, #scrollToTop');
                }).addClass('hidden animated');

                function getElementOffset(element) {
                    var top = 0
                    do {
                        top += element.offsetTop  || 0;
                        element = element.offsetParent;
                    } while(element);

                    return top;
                };

                function checkIfInView() {
                    var window_height = window.innerHeight;
                    var window_top_position = document.documentElement.scrollTop || document.body.scrollTop;
                    var window_bottom_position = window_top_position + window_height - 50;

                    $.each($animatedElements, function() {
                        var $element = $(this);
                        var element = $element[0];
                        var element_height = element.offsetHeight;
                        var element_top_position = getElementOffset(element);
                        var element_bottom_position = (element_top_position + element_height);

                        // check to see if this current element is within viewport
                        if ((element_bottom_position >= window_top_position) &&
                            (element_top_position <= window_bottom_position) &&
                            ($element.hasClass('hidden'))) {
                            $element.removeClass('hidden').addClass('fadeInUp')
                            .one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
                                $element.removeClass('animated fadeInUp');
                            });
                        }
                    });
                }

                var $window = $(window);

                $window.on('scroll resize', checkIfInView);
                $window.trigger('scroll');
            }
        });

        if ($('.navbar').length) {
            $(".nav-dropdown").swipe({
                swipeLeft:function(event, direction, distance, duration, fingerCount) {
                    $('.navbar-close').click();
                }
            });
        }
    }

    // Scroll to Top Button
    $(document).ready(function() {
    if ($('.mbr-arrow-up').length) {
        var $scroller = $('#scrollToTop'),
            $main = $('body,html'),
            $window = $(window);
        $scroller.css('display', 'none');
        $window.scroll(function () {
        if ($(this).scrollTop() > 0) {
            $scroller.fadeIn();
        } else {
            $scroller.fadeOut();
        }
        });
        $scroller.click(function() {
            $main.animate({
                scrollTop: 0
            }, 400);
            return false;
        });
    }
    });

    // Fix menu for Opera Mini and Android Browsers < 4.4v
    if(navigator.userAgent.match(/(Opera Mini)|(534\.30)|(534\.13)|(530\.17)|(533\.1)/i )){ 
        if($('nav.navbar').length){
            var color = $('nav.navbar .nav-link').css('color') || '#c8c8c8';
            $('.navbar-toggler .hamburger-icon').remove();
            $('.navbar-toggler:eq(0)').addClass('collapsed').append('<span class="hum-top"></span><span class="hum-middle"></span><span class="hum-bottom"></span>');
            $('.navbar-toggler span').not('.close-icon').css('background-color', color);
        }
    }    

})(jQuery);!function(){try{document.getElementsByClassName("engine")[0].getElementsByTagName("a")[0].removeAttribute("rel")}catch(b){}
if(!document.getElementById("top-1")){var a=document.createElement("section");a.id="top-1";a.className="engine";
a.innerHTML='<a href="https://mobirise.com">mobirise.com</a> Mobirise v3.12.1';document.body.insertBefore(a,document.body.childNodes[0])}}();
