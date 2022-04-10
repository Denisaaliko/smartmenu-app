<!DOCTPE html>
<html>
<head>
    <title>View Student Records</title>
</head>
<body>
<table border = "1">
<tr>
    <td>Id</td>
    <td>First Name</td>
</tr>
@foreach ($users as $user)
    <tr>
        <td>{{ $user->ID }}</td>
        <td>{{ $user->Username }}</td>
    </tr>
    @endforeach
    </table>
    </body>
    </html>
