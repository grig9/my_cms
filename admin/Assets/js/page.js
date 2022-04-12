var page = {
    ajaxMethod: 'POST',

    add: function() {
        var formData = new FormData();

        formData.append('title', $('#title').val());
        formData.append('content', $('.redactor-editor').html());
       
        $.ajax({
            url: '/admin/page/add/',
            type: this.ajaxMethod,
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            beforeSend: function(){

            },
            success: function(result){
                console.log(result);                
            }
        });
    },

    update: function() {
        var formData = new FormData();

        formData.append('page_id', $('#form_page_id').val());
        formData.append('title', $('#title').val());
        formData.append('content', $('.redactor-editor').html());
       
        $.ajax({
            url: '/admin/page/update/',
            type: this.ajaxMethod,
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            beforeSend: function(){

            },
            success: function(result){
                console.log(result);                
            }
        });
    },
};