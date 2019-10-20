function acceptApplication(registrationId, name) {
    var status = confirm("Are you sure to accept this aplication of " + name);
    if (status) {
        $.ajax({
            url: '/admin.php?action=accept',
            method: 'post',
            data: { registrationId },
            success: function (response) {
                document.getElementById('button-group-' + registrationId).remove();
                document.getElementById('accept-' + registrationId).style.display = 'block';
            },
            error: function (err) {
                alert('Something went wrong on our server' + err);
            }
        })
    } 
} 

function deleteApplication(registrationId, name) {
    var status = confirm("Are you sure to delete this aplication of " + name);
    if (status) {
        $.ajax({
            url: '/admin.php?action=delete',
            method: 'post',
            data: { registrationId },
            success: function (response) {
                document.getElementById('row-' + registrationId).remove();
            },
            error: function (err) {
                alert('Something went wrong on our server' + err);
            }
        })
    } 
} 