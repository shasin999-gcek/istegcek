function acceptApplication(registrationId, name) {
    var status = confirm("Are you sure to accept this aplication of " + name);
    if (status) {
        $.ajax({
            url: '/admin.php?action=accept&',
            method: 'get',
            success: function (response) {
                
            },
            error: function (err) {
                
            }
        })
    } 
} 