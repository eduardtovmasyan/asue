let token = $('#token').val()

$.ajax({
    type: 'get',
    url: '/schedule',
    header: {
        '_token': token,
    },
    success: function(r) {
        Object.entries(r).forEach(function(item) {
            $('tbody').append(`
                <tr>
                    <th scope="row">${item[0]}</th>
                    <td class="monday"></td>
                    <td class="tuesday"></td>
                    <td class="wednesday"></td>
                    <td class="thursday"></td>
                    <td class="friday"></td>
                </tr>
            `)

            item[1].forEach(function(i) {

                if (i.week_day == 0) {
                    $('.monday').last().append(`
                        <div>${i.sbjname}</div>
                        <div> Սենյակ։ ${i.room} </div>
                        <br>
                    `)
                }
                if (i.week_day == 1) {
                    $('.tuesday').last().append(`
                        <div>${i.sbjname}</div>
                        <div> Սենյակ։ ${i.room} </div>
                        <br>
                    `)
                }
                if (i.week_day == 2) {
                    $('.wednesday').last().append(`
                        <div>${i.sbjname}</div>
                        <div> Սենյակ։ ${i.room} </div>
                        <br>
                    `)
                }
                if (i.week_day == 3) {
                    $('.thursday').last().append(`
                        <div>${i.sbjname}</div>
                        <div> Սենյակ։ ${i.room} </div>
                        <br>
                    `)
                }
                if (i.week_day == 4) {
                    $('.friday').last().append(`
                        <div>${i.sbjname}</div>
                        <div> Սենյակ։ ${i.room} </div>
                        <br>
                    `)
                }
            });
        })
    }
});
