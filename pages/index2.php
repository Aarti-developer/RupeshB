<!DOCTYPE html>
<html lang="en">
<?php include_once "../api/_config.php"; ?>

<head>

    <?php
    include_once $_SERVER['DOCUMENT_ROOT'] . "../components/head.php";
    $meta["title"] = "Rupesh Basutkar"; ?>
    <meta property="og:title" content="<?php echo $meta["title"]; ?>">
    <meta property="og:image" content="">
    <title><?php echo $meta["title"]; ?></title>
    <meta property="og:description" content="">
    <meta property="twitter:title" content="Rupesh Basutkar">
    <meta property="twitter:description" content="">

</head>

<body>
    <?php include_once "../components/nav.php"; ?>
    <main class="home-page">
        <!--  -->
        <section class="slides">

            <section class="slides-nav">
                <nav class="slides-nav__nav">
                    <button class="slides-nav__prev js-prev">Prev</button>
                    <button class="slides-nav__next js-next">Next</button>
                </nav>
            </section>

            <section class="slide is-active">
                <div class="slide__content">
                    <figure class="slide__figure">
                        <div class="slide__img" style="background-image: url(https://source.unsplash.com/nfTA8pdaq9A/2000x1100)"></div>
                    </figure>
                    <header class="slide__header">
                        <h2 class="slide__title">
                            <span class="title-line"><span>Click, Key</span></span>
                            <span class="title-line"><span>Or Scroll Fool</span></span>
                        </h2>
                    </header>
                </div>
            </section>

            <section class="slide">
                <div class="slide__content">
                    <figure class="slide__figure">
                        <div class="slide__img" style="background-image: url(https://source.unsplash.com/okmtVMuBzkQ/2000x1100)"></div>
                    </figure>
                    <header class="slide__header">
                        <h2 class="slide__title">
                            <span class="title-line"><span>Slide Two</span></span>
                            <span class="title-line"><span>Dood Mood</span></span>
                        </h2>
                    </header>
                </div>
            </section>

            <section class="slide">
                <div class="slide__content">
                    <figure class="slide__figure">
                        <div class="slide__img" style="background-image: url(https://source.unsplash.com/WuQME0I_oZA/2000x1100)"></div>
                    </figure>
                    <header class="slide__header">
                        <h2 class="slide__title">
                            <span class="title-line"><span>This Right</span></span>
                            <span class="title-line"><span>Here Makes Three</span></span>
                        </h2>
                    </header>
                </div>
            </section>

            <section class="slide">
                <div class="slide__content">
                    <figure class="slide__figure">
                        <div class="slide__img" style="background-image: url(https://source.unsplash.com/NsWcRlBT_74/2000x1100)"></div>
                    </figure>
                    <header class="slide__header">
                        <h2 class="slide__title">
                            <span class="title-line"><span>How Now</span></span>
                            <span class="title-line"><span>Part Four More</span></span>
                        </h2>
                    </header>
                </div>
            </section>
        </section>
    </main>
    <?php include_once "../components/footer.php"; ?>
    <script>
        (function($) {

            var SliceSlider = {

                /**
                 * Settings Object
                 */
                settings: {
                    delta: 0,
                    currentSlideIndex: 0,
                    scrollThreshold: 40,
                    slides: $('.slide'),
                    numSlides: $('.slide').length,
                    navPrev: $('.js-prev'),
                    navNext: $('.js-next'),
                },

                /**
                 * Init
                 */
                init: function() {
                    s = this.settings;
                    this.bindEvents();
                },

                /**
                 * Bind our click, scroll, key events
                 */
                bindEvents: function() {

                    // Scrollwheel & trackpad
                    s.slides.on({
                        'DOMMouseScroll mousewheel': SliceSlider.handleScroll
                    });
                    // On click prev
                    s.navPrev.on({
                        'click': SliceSlider.prevSlide
                    });
                    // On click next
                    s.navNext.on({
                        'click': SliceSlider.nextSlide
                    });
                    // On Arrow keys
                    $(document).keyup(function(e) {
                        // Left or back arrows
                        if ((e.which === 37) || (e.which === 38)) {
                            SliceSlider.prevSlide();
                        }
                        // Down or right
                        if ((e.which === 39) || (e.which === 40)) {
                            SliceSlider.nextSlide();
                        }
                    });
                },

                /** 
                 * Interept scroll direction
                 */
                handleScroll: function(e) {

                    // Scrolling up
                    if (e.originalEvent.detail < 0 || e.originalEvent.wheelDelta > 0) {

                        s.delta--;

                        if (Math.abs(s.delta) >= s.scrollThreshold) {
                            SliceSlider.prevSlide();
                        }
                    }

                    // Scrolling Down
                    else {

                        s.delta++;

                        if (s.delta >= s.scrollThreshold) {
                            SliceSlider.nextSlide();
                        }
                    }

                    // Prevent page from scrolling
                    return false;
                },

                /**
                 * Show Slide
                 */
                showSlide: function() {
                    // reset
                    s.delta = 0;
                    // Bail if we're already sliding
                    if ($('main').hasClass('is-sliding')) {
                        return;
                    }
                    // Loop through our slides
                    s.slides.each(function(i, slide) {

                        // Toggle the is-active class to show slide
                        $(slide).toggleClass('is-active', (i === s.currentSlideIndex));
                        $(slide).toggleClass('is-prev', (i === s.currentSlideIndex - 1));
                        $(slide).toggleClass('is-next', (i === s.currentSlideIndex + 1));

                        // Add and remove is-sliding class
                        $('main').addClass('is-sliding');

                        setTimeout(function() {
                            $('main').removeClass('is-sliding');
                        }, 1000);
                    });
                },

                /**
                 * Previous Slide
                 */
                prevSlide: function() {

                    // If on first slide, loop to last
                    if (s.currentSlideIndex <= 0) {
                        s.currentSlideIndex = s.numSlides;
                    }
                    s.currentSlideIndex--;

                    SliceSlider.showSlide();
                },

                /**
                 * Next Slide
                 */
                nextSlide: function() {

                    s.currentSlideIndex++;

                    // If on last slide, loop to first
                    if (s.currentSlideIndex >= s.numSlides) {
                        s.currentSlideIndex = 0;
                    }

                    SliceSlider.showSlide();
                },
            };
            SliceSlider.init();
        })(jQuery);
    </script>
</body>

</html>