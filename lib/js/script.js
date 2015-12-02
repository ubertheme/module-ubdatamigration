// Javascript on this tool
(function($){

    $(document).ready(function ($){

        //hide the message function
        $.hideMessage = function(){
            //We only auto hide the success message.
            if ($('#message.flash-success').length){
                $('#message.flash-success').slideUp('slow');
            }
        }
        //set timeout to hide the message
//        setTimeout(function(){
//            $.hideMessage();
//        }, 30000);

        //show/hide loading mask function
        $.showProcessorBox = function(){
            if ($('#processor-box').length){
                $('#processor-box').modal('show');
                $(window).trigger('resize');
            }
        }
        $.hideProcessorBox = function(){
            if ($('#processor-box').length){
                $('#processor-box').modal('hide');
            }
        }

        //check/un-check website & stores on it
        $('INPUT[name="website_ids[]"]').on('change', function(){
            $('.store-group-' + this.value).prop("checked", this.checked);

            $('.store-group-' + this.value).on('change', function(){
                $('.store-' + this.value).prop("checked", this.checked);
            });
            $('.store-group-' + this.value).trigger('change');
        });
        //$('INPUT[name="website_ids[]"]').prop("checked", true);
        //$('INPUT[name="website_ids[]"]').trigger('change');

        //check/un-check product types
        $('INPUT[name="select_all_type"]').on('change', function(){
            $('INPUT[name="product_type_ids[]"]').prop('checked', this.checked);
            //We always migrate the simple products
            if ($('#product_type_simple').length) {
                $('#product_type_simple').prop('checked', true);
            }
        });

        //check/un-check customer groups
        $('INPUT[name="select_all_customer_group"]').on('change', function(){
            $('INPUT[name="customer_group_ids[]"]').prop('checked', this.checked);
        });

        //check/un-check sales objects
        $('INPUT[name="select_all_sales_object"]').on('change', function(){
            $('INPUT[name="selected_objects[]"]').prop('checked', this.checked);
        });
        //$('INPUT[name="select_all_sales_object"]').prop('checked', true).trigger('change');

        //check/un-check review/rating objects
        $('INPUT[name="select_all_object"]').on('change', function(){
            $('INPUT[name="selected_objects[]"]').prop('checked', this.checked);
        });
        $('INPUT[name="select_all_object"]').prop('checked', true).trigger('change');

        //reset event
//        $("button.reset").on('click', function(){
//            if ($('INPUT[name="reset"]').length){
//                $('INPUT[name="reset"]').val(1);
//            }
//        });

        //add disabled class after click on a button
        $(".btn").on('click', function(){
            if (!$(this).hasClass('need-validate-form')){
                $.showProcessorBox();
                $(this).addClass("disabled");
                return true;
            }
        });

        $(window).resize(function(){
            if ($('.loading-box').length){
                var tmp = (parseInt($(window).height()) - parseInt($('.modal-content').height()))/2;
                $('.loading-box').attr('style', 'margin: '+tmp+'px auto !important');
            }
        });

    });

})(jQuery);
