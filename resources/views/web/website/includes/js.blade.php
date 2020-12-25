@push('js')
<script>
    $(document).ajaxStart(function(){
        $('body').removeClass('loaded');
    });
    $(document).ajaxComplete(function(){
        $('body').addClass('loaded');
    });
    $('body').on('click', '.add-to-cart', function(){
        var url = $(this).data('url');
        var product_id = $(this).data('product');
        var $this = $(this);
        $.ajax({
            type: "POST",
            url: url,
            data: {'_token': '{{ csrf_token() }}', 'product_id': product_id},
            success: function(res){
                $this.html(res.messgae);
                $('.cart-total-quantity').html(res.cart.quantity);
                $('.cart-total-price').html(res.cart.total);

                if( res.new_product )
                {
                    $('.ps-cart__content').append(`
                        <div class="ps-cart-item">
                            <a class="ps-cart-item__close remove-product-from-cart" href="#" data-product="`+res.new_product.id+`"></a>
                            <div class="ps-cart-item__thumbnail">
                                <a href="product-detail.html"></a>
                                <img src="`+res.new_product.image+`" alt="">
                            </div>
                            <div class="ps-cart-item__content">
                                <a class="ps-cart-item__title" href="product-detail.html">`+res.new_product.title_string+`</a>
                                <p>
                                    <span>{{ trans('Quantity') }}:<i class='cart-item-quantity-`+res.new_product.id+`'>1</i></span>
                                </p>
                                <p>
                                    <span>{{ trans('Total') }}:<i class='cart-item-total-`+res.new_product.id+`'>`+res.new_product.price_string+`</i><i>{{ get_current_currency() }}</i></span>
                                </p>
                            </div>
                        </div>
                    `);
                }
            }
        });
    });
    $('body').on('click', '.remove-product-from-cart', function(){
        var url = '{{ route('product.cart.remove') }}';
        var product_id = $(this).data('product');
        var $this = $(this);
        $.ajax({
            type: "POST",
            url: url,
            data: {'_token': '{{ csrf_token() }}', 'product_id': product_id},
            success: function(res){
                if( res.status == 'success' )
                {
                    $this.parents('.ps-cart-item').remove();
                    $('.cart-total-quantity').html(res.cart.quantity);
                    $('.cart-total-price').html(res.cart.total);
                }
            }
        });
    })
</script>
@push('js')
