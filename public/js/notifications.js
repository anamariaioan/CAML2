$(document).ready(function () {

    function load_unseen_notification() {
        $.ajax({

            url: "fetch.php",
            dataType: "json",
            success: function (data) {
                $('#btnNotifications').html(data.unseen_notifications);
                $('#notification-list').html('');
                data.notifications.forEach(function (notification) {
                    console.log(notification);
                    $('#notification-list').append("<tr><td>" + notification + "</td></tr>");
                })
            }
        });
    }

    load_unseen_notification();

    function update_notification_status() {
        $.ajax({

            url: "disable-notifications.php",
            success: function (data) {
                console.log("status updated");
            }
        });
    }

    $("#ModalNotifications").on("hidden.bs.modal", function () {

        update_notification_status();

        load_unseen_notification();
    });

    setInterval(function () {

        load_unseen_notification();

    }, 100000000);
});