let token = $('#token').val()

$.ajax({
    type: 'get',
    url: '/get/curriculum',
    header: {
        '_token': token,
    },
    success: function(r) {
        console.log(r)

        for (const [key, value] of Object.entries(r)) {
            if (key == 1) {
                var g = _.groupBy(value, 'krtamas_id');

                $('tbody').append(`
                    <tr>
                        <th class="text-center table-dark ${'halfYear' + key}" colspan="16" style="border: 1px solid #eee;padding: 0;">
                            1-ն կուրս 1 կիսամըակ
                        </th>
                    </tr>
                `)

                console.log(g)
            }

            if (key == 2) {
                var g = _.groupBy(value, 'krtamas_id');

                $('tbody').append(`
                    <tr>
                        <th class="text-center table-dark ${'halfYear' + key}" colspan="16" style="border: 1px solid #eee;padding: 0;">
                            1-ն կուրս 2 կիսամըակ
                        </th>
                    </tr>
                `)

                console.log(g)
            }

            if (key == 3) {
                var g = _.groupBy(value, 'krtamas_id');

                $('tbody').append(`
                    <tr>
                        <th class="text-center table-dark ${'halfYear' + key}" colspan="16" style="border: 1px solid #eee;padding: 0;">
                            2-րդ կուրս 1 կիսամըակ
                        </th>
                    </tr>
                `)

                console.log(g)
            }

            if (key == 4) {
                var g = _.groupBy(value, 'krtamas_id');

                $('tbody').append(`
                    <tr>
                        <th class="text-center table-dark ${'halfYear' + key}" colspan="16" style="border: 1px solid #eee;padding: 0;">
                            2-րդ կուրս 2 կիսամըակ
                        </th>
                    </tr>
                `)

                console.log(g)
            }

            if (key == 5) {
                var g = _.groupBy(value, 'krtamas_id');

                $('tbody').append(`
                    <tr>
                        <th class="text-center table-dark ${'halfYear' + key}" colspan="16" style="border: 1px solid #eee;padding: 0;">
                            3-րդ կուրս 1 կիսամըակ
                        </th>
                    </tr>
                `)

                console.log(g)
            }

            if (key == 6) {
                var g = _.groupBy(value, 'krtamas_id');

                $('tbody').append(`
                    <tr>
                        <th class="text-center table-dark ${'halfYear' + key}" colspan="16" style="border: 1px solid #eee;padding: 0;">
                            3-րդ կուրս 2 կիսամըակ
                        </th>
                    </tr>
                `)

                console.log(g)
            }

            if (key == 7) {
                var g = _.groupBy(value, 'krtamas_id');

                $('tbody').append(`
                    <tr>
                        <th class="text-center table-dark ${'halfYear' + key}" colspan="16" style="border: 1px solid #eee;padding: 0;">
                            4-րդ կուրս 1 կիսամըակ
                        </th>
                    </tr>
                `)

                console.log(g)
            }

            if (key == 8) {
                $('tbody').append(`
                    <tr>
                        <th class="text-center table-dark ${'halfYear' + key}" colspan="16" style="border: 1px solid #eee;padding: 0;">
                            4-րդ կուրս 2 կիսամըակ
                        </th>
                    </tr>
                `)
                var g = _.groupBy(value, 'krtamas_id');

                console.log(g)
            }  

        }
        
        return;

        // old verion
        var g = _.groupBy(r.data, 'krtamas_id');

        for (const [key, value] of Object.entries(g)) {
             $('tbody').append(`
                <tr class="${'krtamasId-' + key}">
                <th class="" colspan="16" style="border: 1px solid #e5e5e5;padding: 0;background:#e5e5e5">${value[0].krtamas.name}</th>
                </tr>
            `)
            for (const [iii, item] of Object.entries(value)) {           
                $('.krtamasId-'+ key).after(`
                    <tr>
                        <td class="${'dasich'+ item.id}"></td>
                        <td class="${'subjectName'+ item.id}"></td>
                        <td>
                            <input class="${'ct1'+ item.id}" type="checkbox">
                        </td>
                        <td>
                            <input class="${'ct2'+ item.id}" type="checkbox">
                        </td>
                        <td>${item.s_all +  item.inqn_work}</td>
                        <td class="${'credit'+ item.id}"></td>
                        <td>${item.s1}</td>
                        <td>${item.s2}</td>
                        <td>${item.s3}</td>
                        <td>${item.s_all}</td>
                        <td class="${'usm1'+ item.id}"></td>
                        <td class="${'usm2'+ item.id}"></td>
                        <td>${item.sljy}</td>
                    </tr>
                `)
                if(item.subject){
                    if (item.ct_1 == 1) {
                        $('.ct1' + item.id).attr('checked', true)
                    }

                    if (item.ct_2 == 1) {
                        $('.ct2' + item.id).attr('checked', true)
                    }

                    if (item.usm_1 > 0) {
                        $('.usm1' + item.id).append(item.usm_1)
                    }

                    if (item.usm_2 > 0) {
                        $('.usm2' + item.id).append(item.usm_2)
                    }

                    if (item.credit) {
                        $('.credit' + item.id).append(item.credit)
                    }

                    if (item.subject.dasich) {
                        $('.dasich' + item.id).append(item.subject.dasich)
                    }

                    if (item.subject.sbjname) {
                        $('.subjectName' + item.id).append(item.subject.sbjname)
                    }
                }
            }
        }
    }
});
