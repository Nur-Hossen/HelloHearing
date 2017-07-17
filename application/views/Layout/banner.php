<div class="banner margin_top">
    <div class="container">
        <script src="<?php echo base_url('assets/js/responsiveslides.min.js')?>"></script>
        <script>
            $(function () {
                $("#slider").responsiveSlides({
                    auto: true,
                    nav: true,
                    speed: 500,
                    namespace: "callbacks",
                    pager: true,
                });
            });
        </script>
        <div id="top" class="callbacks_container">
            <ul class="rslides" id="slider">
                <li>

                    <div class="banner-text">
                        <h3>Site Under Construction........... </h3>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                            classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                            Latin professor .</p>
                        <a href="<?php echo base_url('welcome/index')?>">Learn More</a>
                    </div>

                </li>
                <li>

                    <div class="banner-text">
                        <h3>Site Under Construction...........</h3>
                        <p></p>
                        <a href="<?php echo base_url('welcome/index')?>">Learn More</a>

                    </div>

                </li>
                <li>
                    <div class="banner-text">
                        <h3>Site Under Construction...........</h3>
                        <p></p>
                        <a href="<?php echo base_url('welcome/index')?>">Learn More</a>

                    </div>

                </li>
            </ul>
        </div>

    </div>
</div>
