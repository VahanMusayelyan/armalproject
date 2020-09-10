<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="mapouter">
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe width="598" height="600" id="gmap_canvas" src="https://www.google.com/maps/embed/v1/place?q=17+Garegin+Nzhdeh+St&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                        </iframe>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>    




<div class="nav_menu">
    <div class="footer-wrap">
        <footer class="navbar nav-footer navbar-inverse" role="navigation">
            <div class="footer_div">
                <ul class="footer-ul">
                    <li><i class="fas fa-phone-alt"></i><a href="tel:<?=$information['phone']?>">Phone: <?=$information['phone']?></a></li>
                    <li data-toggle="modal" data-target="#myModal" style="cursor: pointer">
                        <i class="fas fa-map-marker-alt"></i><a data-toggle="modal" data-target="#exampleModal">Address: <?=$information['address']?></a>
                    </li>
                    <li><i class="fab fa-viber"></i><a href="tel:<?=$information['watsapp']?>">Watsapp: <?=$information['watsapp']?></a></li>
                    <li><i class="fas fa-at"></i><a href="mailto:<?=$information['email']?>">Email: <?=$information['email']?></a></li>
                    <li><i class="fab fa-whatsapp"></i><a href="tel:<?=$information['viber']?>">Viber: <?=$information['viber']?></a></li>
                </ul>
            </div>
        </footer>

    </div>
</div>


<script>
    $(window).bind('scroll', function () {
        if ($(window).scrollTop() > 50) {
            $('.scroll_div').addClass('fixed');
            $('.main-logo').css('position','fixed');
            $('.main-logo').addClass('fixedimg');
        } else {
            $('.scroll_div').removeClass('fixed');
            $('.main-logo').removeClass('fixedimg');
            $('.main-logo').css('position','absolute');
        }
    });
</script>

</body>

</html> 