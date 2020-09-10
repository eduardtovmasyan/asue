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
                <a href="javascript:void(0)" class="media">
                    <span class="avatar bg-success" data-plugin="firstLitter" data-target="#notification-1">R</span>
                    <div class="media-body">
                        <h6 class="media-heading" id="notification-1">${item.from}</h6>
                        <small>${item.heading}</small>
                    </div>
                </a>
            `)
        });
    }
});
