<div class="col-lg-12">
    <div class="footer__widget footer__menu">
        <div class="ft__logo">
            <a href="index.html">
                <img src="{{ asset('images/logo/3.png') }}" alt="logo">
            </a>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered duskam
                alteration variations of passages</p>
        </div>
        <div class="footer__content">
            <ul class="social__net social__net--2 d-flex justify-content-center">
                <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                <li><a href="#"><i class="bi bi-google"></i></a></li>
                <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                <li><a href="#"><i class="bi bi-youtube"></i></a></li>
            </ul>
            <ul class="mainmenu d-flex justify-content-center">
                <li><a href="index.html">Trending</a></li>
                <li><a href="index.html">Best Seller</a></li>
                <li><a href="index.html">All Product</a></li>
                <li><a href="index.html">Wishlist</a></li>
                <li><a href="index.html">Blog</a></li>
                <li><a href="index.html">Contact</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- //Main wrapper -->

<!-- JS Files -->
<script src="{{ asset('js/vendor/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/active.js') }}"></script>
<script type="text/javascript">

    $('.add_to_links a i').on('click',function(event){
        event.stopPropagation()
        event.preventDefault()
    })

    function getCfrfToken(){
        return `{{ csrf_token() }}`;
    }

    function getID(){
        form = $(this).parent().parent().siblings('form')[0];
        return $(form).find('input[name="id"]').val()
    }

    $('.bi-shopping-cart-full').on('click',function(event){
        context = this;
        id = getID.apply(context)
        $.ajax({
            method: 'put',
            data: {_token : getCfrfToken(),id: id},
            url: `Cart/${id}`,
            success: function(data){

            }
        })
    })

    function deleteCart(){

    }
</script>
</body>

</html>
