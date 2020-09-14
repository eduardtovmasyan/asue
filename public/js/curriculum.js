let token = $('#token').val()

$.ajax({
    type: 'get',
    url: '/test',
    header: {
        '_token': token,
    },
    success: function(r) {
        console.log(r)
        $('tbody').append(`
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            `)
    }
});
