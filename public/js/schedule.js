let token = $('#token').val()

$.ajax({
        type: 'get',
        url: '/schedule',
        header: {
            '_token': token,
        },
        success: function(r) {
            console.log(r)
        }
});
