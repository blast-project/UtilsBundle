var customFilters = {
    saveForm: {
        submitForm: function(button) {
            var form = $(button).closest('form');
            var filterName = form.find('input[name="filterName"]').val();

            if(filterName && filterName != '') {
                form.submit();
            } else {
                alert(Translator.trans('You must define a filter name to save it'));
            }
        }
    }
}
