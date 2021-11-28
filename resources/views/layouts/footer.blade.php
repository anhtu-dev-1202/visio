
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/owl.carousel.js'></script>
    <script>

        var menu = document.getElementById('menu'),
            // demo defaults
            effect = 'mfb-zoomin',
            pos = 'mfb-component--br';

        function renderMenu() {
            menu.style.display = 'none';
            // ?:-)
            setTimeout(function () {
                menu.style.display = 'block';
                menu.className = pos + effect;
            }, 1);
        }

        var clickOpt = 'click',
            hoverOpt = 'hover',
            toggleMethod = 'data-mfb-toggle',
            menuState = 'data-mfb-state',
            isOpen = 'open',
            isClosed = 'closed',
            mainButtonClass = 'mfb-component__button--main';

        /**
         * Internal references
         */
        var elemsToClick,
            elemsToHover,
            mainButton,
            target,
            currentState;

        /**
         * For every menu we need to get the main button and attach the appropriate evt.
         */
        function attachEvt(elems, evt) {
            for (var i = 0, len = elems.length; i < len; i++) {
                mainButton = elems[i].querySelector('.' + mainButtonClass);
                mainButton.addEventListener(evt, toggleButton, false);
            }
        }

        /**
         * Remove the hover option, set a click toggle and a default,
         * initial state of 'closed' to menu that's been targeted.
         */
        function replaceAttrs(elems) {
            for (var i = 0, len = elems.length; i < len; i++) {
                elems[i].setAttribute(toggleMethod, clickOpt);
                elems[i].setAttribute(menuState, isClosed);
            }
        }

        function getElemsByToggleMethod(selector) {
            return document.querySelectorAll('[' + toggleMethod + '="' + selector + '"]');
        }

        /**
         * The open/close action is performed by toggling an attribute
         * on the menu main element.
         *
         * First, check if the target is the menu itself. If it's a child
         * keep walking up the tree until we found the main element
         * where we can toggle the state.
         */
        function toggleButton(evt) {

            target = evt.target;
            while (target && !target.getAttribute(toggleMethod)) {
                target = target.parentNode;
                if (!target) {
                    return;
                }
            }

            currentState = target.getAttribute(menuState) === isOpen ? isClosed : isOpen;

            target.setAttribute(menuState, currentState);

        }

        /**
         * On touch enabled devices we assume that no hover state is possible.
         * So, we get the menu with hover action configured and we set it up
         * in order to make it usable with tap/click.
         **/
        if (window.Modernizr && Modernizr.touch) {
            elemsToHover = getElemsByToggleMethod(hoverOpt);
            replaceAttrs(elemsToHover);
        }

        elemsToClick = getElemsByToggleMethod(clickOpt);

        attachEvt(elemsToClick, 'click');

        $(window).on('load', function () {
            $('#page').fadeOut().remove();
        });

        $(document).ready(function () {
            $(window).scroll(function () {
                var aTop = $('.header-fix').height();
                if ($(this).scrollTop() >= aTop) {
                    $('.header-fix').css({"opacity": 1, "visibility": "visible"});
                } else {
                    $('.header-fix').css({"opacity": 0, "visibility": "hidden"});
                }
            });

            //Css menu mobile
            $('.menu-mobile').click(function () {
                $('.menu-container').toggleClass('open');
            });

            $('.close').click(function () {
                $('.menu-container').toggleClass('open');
            });

            $('.has-child span').click(function () {
                $('.has-child.active').removeClass('active');
                $('.has-child.active .menu-child .block').removeClass('block').slideToggle('fast');
                $(this).parent().toggleClass('active');
                $('.has-child.active .menu-child').addClass('block').slideToggle('fast');
                $('.has-child.active span').toggleClass('rorate');
            });

            $('#icon-search').click(function () {
                $('.mb-search-box').fadeIn();
            });

            $('#close-box-search').click(function () {
                $('.mb-search-box').fadeOut();
            });
        });
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>
</html>
