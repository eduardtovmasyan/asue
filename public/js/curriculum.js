let token = $('#token').val();

$.ajax({
    type: 'get',
    url: '/get/curriculum',
    header: {
        '_token': token,
    },
    success: function(r) {
        for (const [key, value] of Object.entries(r)) {
            const g = {};

            for (const item of value) {
                if (g[item.krtamas.name]) {
                    g[item.krtamas.name].push(item);
                } else {
                    g[item.krtamas.name] = [item];
                }
            }

            let kurs = Math.ceil(key / 2);
            let kisamyak = key % 2 ? 1 : 2;

            $('tbody').append(`
                <tr class="${'halfYear' + key}">
                    <th class="text-center table-dark" colspan="16" style="border: 1px solid #eee;padding: 0;">
                       ${kurs} կուրս ${kisamyak} կիսամըակ
                    </th>
                </tr>
            `);

            for (const k in g) {
                $('tbody').append(`
                    <tr class="">
                        <th class="" colspan="16" style="border: 1px solid #e5e5e5;padding: 0;background:#e5e5e5">${k}</th>
                    </tr>
                `);

                for (item of g[k]) {
                    let daser = $(`<tr></tr>`);
                    
                    daser.append(`
                        <td>${item.subject && item.subject.dasich ? item.subject.dasich : ''}</td>
                        <td>${item.subject && item.subject.sbjname ? item.subject.sbjname : ''}</td>
                        <td>
                            <input type="checkbox" ${item.subject && item.ct_1 ? 'checked' : ''}>
                        </td>
                        <td>
                            <input type="checkbox" ${item.subject && item.ct_2 ? 'checked' : ''}>
                        </td>
                        <td>${item.s_all +  item.inqn_work}</td>
                        <td>${item.subject && item.credit ? item.credit : ''}</td>
                        <td>${item.s1}</td>
                        <td>${item.s2}</td>
                        <td>${item.s3}</td>
                        <td>${item.s_all}</td>
                        <td>${item.subject && item.usm_1 > 0 ? item.usm_1 : ''}</td>
                        <td>${item.subject && item.usm_2 > 0 ? item.usm_2 : ''}</td>
                        <td>${item.sljy}</td>
                    `);

                    $('tbody').append(daser);
                }
            }
        }  
    }
});
