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
                    <td>${item.ct_1}</td>
                    <td>${item.ct_2}</td>
                    <td>${item.s_all}</td>
                    <td>${item.credit}</td>
                    <td>${item.s1}</td>
                    <td>${item.s2}</td>
                    <td>${item.s3}</td>
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
