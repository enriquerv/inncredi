<script>
	$(document).ready(function() {
        $('#formValidation').formValidation({
            locale: '{{ \App::getLocale() == 'es' ? 'es_ES' : 'en_US' }}',
            fields: {
                name: {
                    validators: {
                        notEmpty: {},
                        stringLength: {
                            min: 3,
                            max: 255
                        }
                    }
                }
            }
        });
    });



    CKEDITOR.replace('topics');
    CKEDITOR.replace('commitments_fsr');
    CKEDITOR.replace('commitments_client');
    CKEDITOR.replace('pending_fsr');
    CKEDITOR.replace('pending_client');
    CKEDITOR.replace('extra_comments');
    CKEDITOR.replace('assistants_client');


</script>
