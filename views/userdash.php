<table id="userTable">
    <thead>
        <tr>
            <th>Username</th>
            <th>Role</th>
        </tr>
    </thead>
    <tbody></tbody>
</table>

<script>
    $(document).ready(function() {
        $.ajax({
            url: 'scripts.php?action=getusers',
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                var tableBody = $('#userTable tbody');
                data.forEach(function(user) {
                    tableBody.append('<tr><td>' + user.username + '</td><td>' + user.role + '</td></tr>');
                });
            },
            error: function() {
                console.log('Failed to fetch user data.');
            }
        });
    });
</script>
