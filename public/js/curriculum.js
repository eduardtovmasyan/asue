let token = $('#token').val()

$.ajax({
    type: 'get',
    url: '/test',
    header: {
        '_token': token,
    },
    success: function(r) {
        let a = 1;

        r.data.forEach(function(item) {
            $('tbody').append(`
                <tr>
                    <td>${a++}</td>
                    <td class="dasich"></td>
                    <td class="subjectName"></td>
                    <td>
                        <input class="ct1" type="checkbox">
                    </td>
                    <td>
                        <input class="ct2" type="checkbox">
                    </td>
                    <td>${item.s_all + item.inqn_work}</td>
                    <td class="credit"></td>
                    <td>${item.s1}</td>
                    <td>${item.s2}</td>
                    <td>${item.s3}</td>
                    <td>${item.s_all}</td>
                    <td class="usm1"></td>
                    <td class="usm2"></td>
                    <td>${item.sljy}</td>
                </tr>
            `)

            if (item.ct_1 == 1) {
                $('.ct1').last().attr('checked', true)
            }

            if (item.ct_2 == 1) {
                $('.ct2').last().attr('checked', true)
            }

            if (item.usm_1 > 0) {
                $('.usm1').last().append(item.usm_1)
            }

            if (item.usm_2 > 0) {
                $('.usm2').last().append(item.usm_2)
            }

            if (item.credit) {
                $('.credit').last().append(item.credit)
            }

            if (item.subject) {
                $('.dasich').last().append(item.subject.dasich)
            }

            if (item.subject) {
                $('.subjectName').last().append(item.subject.sbjname)
            }
        })
    }
});
