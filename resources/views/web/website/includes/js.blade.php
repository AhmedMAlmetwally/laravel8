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
        $.ajax({
            type: "POST",
            url: url,
            data: {'_token': '{{ csrf_token() }}', 'product_id': product_id}
        });
    })
</script>
@push('js')
