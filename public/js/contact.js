let token = $('#token').val()

$(document).on('change', '#doc', function() {
    $(this).closest('.doc').toggle()
    let document_id = $(this).val()

    $.ajax({
        type: 'get',
        url: `/document/${document_id}`,
        header: {
            '_token': token,
        },
        success: function(r) {
            $('.doc').after(`
                <div class="docTypes">
                    <label for="docTypes">Փաստաթուղթ</label>
                    <select class="form-control" id="docTypes">
                        <option disabled="" muted selected>Փաստաթուղթ</option>
                    </select>
                </div>
                <div class="textarea mt-4">
                    <label for="textarea ">Example textarea</label>
                    <textarea class="form-control" id="textarea" rows="3"></textarea>
                </div>
                <button class="btn btn-primary mt-4" type="submit" id="sendButton">Ուղարկել</button>
            `)
            let type = $('.docTypes').find('#docTypes')

            r.forEach(function(item) {
                type.append(`
                    <option value="${item.id}">${item.name}</option>
                `)
            })
        }
    });
});

$(document).on('click', '#sendButton', function() {
    let docType_id = $('#docTypes').val()
    let description = $('#textarea').val()

    $.ajax({
        type: 'post',
        url: `/student-application/send`,
        data: {
            '_token': token,
            'docType_id': docType_id,
            'description': description,
        },
        success: function(r) {
            swal("Good job!", "You clicked the button!", "success");
            $(location).attr('href', '/home');
        },
        error: function(e){
            if (e.responseJSON.errors.docType_id) {
                $('#doc').css('border-color', 'red')
            }
            if (e.responseJSON.errors.description) {
                $('#textarea').css('border-color', 'red')
            }
        }
    });
});
