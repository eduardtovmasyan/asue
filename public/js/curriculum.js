let token = $('#token').val()

$.ajax({
    type: 'get',
    url: '/test',
    header: {
        '_token': token,
    },
    success: function(r) {
        console.log(r)
        r.forEach(function(item) {
            $('tbody').append(`
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>${item.credit}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>${item.sljy}</td>
                </tr>
            `)
        })
    }
});
