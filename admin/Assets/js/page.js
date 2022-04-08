var page = {

    add: function() {
        console.log('Tell me why??');
        var formData = new FormData();

        formData.append('title', $('#title').val());
        formData.append('content', $('#content').html());
       
        console.log(title);
        // console.log(content);

        $.ajax({
            url: '/admin/page/add/',
            type: 'POST',
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            beforeSend: function(){

            },
            success: function(){
                console.log("OK");                
            }
        });
    }
};

console.log(page);