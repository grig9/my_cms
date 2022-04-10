var page = {

    add: function() {
        console.log('Tell me why??');
        var formData = new FormData();

        formData.append('title', $('#title').val());
        formData.append('content', $('.redactor-editor').html());
       
        $.ajax({
            url: '/admin/page/add/',
            type: 'POST',
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
    }
};