var post = {
    ajaxMethod: 'POST',

    add: function() {
        var formData = new FormData();

        formData.append('title', $('#title').val());
        formData.append('content', $('.redactor-editor').html());
       
        console.log($('#title').val());

        $.ajax({
            url: '/admin/post/add/',
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

        formData.append('post_id', $('#form_post_id').val());
        formData.append('title', $('#title').val());
        formData.append('content', $('.redactor-editor').html());
       
        $.ajax({
            url: '/admin/post/update/',
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