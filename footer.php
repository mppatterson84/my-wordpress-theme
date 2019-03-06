 <footer class="margin-top">
        <div class="container">
            <div class="row py-5 mt-3">
                <div class="col-md">
                    <?php
                        wp_nav_menu(
                            array(
                                'menu'            => 'footer-menu',
                                'theme_location'  => 'footer-menu',
                                'container'       => 'div',
                                'container_id'    => 'bs4navbarF',
                                'menu_id'         => 'footer-menu',
                                'menu_class'      => 'nav flex-column text-center mx-auto p-0',
                                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                'depth'           => 2,
                                'fallback_cb'     => 'bs4navwalker::fallback',
                                'walker'          => new bs4navwalkerF()
                            )
                        );
                    ?>
                </div>
                <div class="col-md">
                    <ol class="mx-auto p-0">
                        <li>List Item</li>
                        <li>List Item</li>
                        <li>List Item</li>
                        <li>List Item</li>
                        <li>List Item</li>
                        <li>List Item</li>
                        <li>List Item</li>
                    </ol>
                </div>
                <div class="col-md">
                    <dl class="mx-auto p-0">
                        <dt>List Item</dt>
                        <dd>List Item Description</dd>
                        <dt>List Item</dt>
                        <dd>List Item Description</dd>
                        <dt>List Item</dt>
                        <dd>List Item Description</dd>
                    </dl>
                </div>
            </div>
        </div>
    </footer>

    

<!-- bottom of body -->

    <!-- scroll button -->
    <div class="scroll animated"><a href="#"><i class="fas fa-arrow-up"></i></a></div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<?php wp_footer(); ?>
</body>

</html>