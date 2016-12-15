
$(document).ready(function(){

    addUniqueFieldsListener();
});

var addUniqueFieldsListener = function(){
    $('.blast-unique-field')
        .focus(function(){
            $(this).closest('.form-group').removeClass('has-error');
            $(this).siblings('.help-block').remove();
        })
        .change(function(){

            var input = $(this);
            var value = input.val();
            var fieldName = input.data('field');

            if( value != '' )
                $.post(
                    $(this).data('url'),
                    {
                        'className' : $(this).data('class'),
                        'fieldName' : fieldName,
                        'fieldValue': value
                    },
                    function(response){
                        if( !response )
                        {
                            input.closest('.form-group').addClass('has-error');

                            $('<div class="help-block sonata-ba-field-error-messages"></div>')
                                .html('<i class="fa fa-exclamation-circle" aria-hidden="true"></i> ' + value  + ' ' + input.data('error-message'))
                                .appendTo(input.closest('.sonata-ba-field'))
                            ;
                        }
                    }
                );
        })
    ;
};