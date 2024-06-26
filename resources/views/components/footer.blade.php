@include('components.company')
<style>
    .phoneErrorInput {
        border: 2px solid #FF0000;
        background-color: #FF7F7F !important;
    }
    .phoneErrorText {
        color: #FF0000;
        text-align: center;
        margin: 10px 0;
    }
</style>
<script>
    $(document).ready(function () {

        const baseURL = "{{ asset('/') }}";
        const csrf_token = "{{ csrf_token() }}";

        $('form').submit(function(e){
            if($(this).attr('action')==='/order'){
                $phone_input = $(this).closest('form').find('input[name=phone]');
                let phone = $phone_input.val();
                let validationResult = validatePhoneNumber(phone);
                let errorText = "Pogrešan format telefona";

                if(validationResult === "1") {
                    $phone_input.removeClass('phoneErrorInput');
                    $('.phoneErrorText').hide();
                    $(this).closest('form').find(':submit').attr('disabled','disabled');
                } else {
                    e.preventDefault();
                    $phone_input.addClass('phoneErrorInput');
                    $phone_input.after("<div class='phoneErrorText'>" + errorText + "</div>");
                }
            } else {
                $(this).find(':submit').attr('disabled','disabled');
            }
        });


        function validatePhoneNumber(phone) {
            let returnResponse = 0;
            let quantity;
            let name = $('input[name=name]').val();
            let address = $('input[name=shipping_address]').val();
            let city = $('input[name=shipping_city]').val();
            let zip = $('input[name=shipping_zip]').val();
            let product_id = $('input[name=product_id]').val();

            if($('select[name=quantity]').val()) {
                quantity = $('select[name=quantity]').val();
            } else if($('input[type=radio][name=quantity]:checked').val()) {
                quantity = $('input[type=radio][name=quantity]:checked').val();
            } else {
                quantity = $('input[type=hidden][name=quantity]').val();
            }

            $.ajax({
                url: baseURL + "validatePhoneNumber",
                type:"POST",
                async: false,
                data:{
                    phone:phone,
                    name:name,
                    address:address,
                    city:city,
                    zip:zip,
                    quantity:quantity,
                    product_id:product_id,
                    _token: csrf_token
                },
                success:function(response){
                    returnResponse = response;
                },
                error: function (req, err) {
                    console.log(req);
                }
            });
            return returnResponse;
        }


    });
</script>
