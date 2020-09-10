$.ajax({
    type: 'get',
    url: '/notification',
    header: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
    },
    success: function(r) {
        $('.notificationCount').append(r.length);

        r.forEach(function(item) {
           $('.studentNotification').append(`
                <a href="javascript:void(0)" class="media singleNotif" data-toggle="modal" data-target="#wizard-modal" data-id="${item.id}" >
                    <span class="avatar bg-success" data-plugin="firstLitter" data-target="#notification-1">${item.name.charAt(0)}</span>
                    <div class="media-body">
                        <h6 class="media-heading" id="notification-1">${item.name} ${item.lname}</h6>
                        <small>${item.heading}</small>
                    </div>
                </a>
            `)
        });
    }
});

$(document).on('click', '.singleNotif', function() {
    let notification_id = $(this).data('id');
    let count = $('.notificationCount').html()

    $(this).remove();
    $('.notificationCount').empty().append(count - 1)

    $.ajax({
        type: 'get',
        url: `/notification/${notification_id}`,
        header: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        },
        success: function(r) {
            $('.notificationHead').empty();
            $('.notificationBody').empty();
            $('.notificationSender').empty();
            $('.notificationHead').append(r.heading);
            $('.notificationBody').append(r.text);
            $('.notificationSender').append(r.name).append(` ${r.lname}`);
        }
    });
});
