<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>

<body>

    <table>
  <tr>
    <th>Name</th>
    <th>Phone</th>
    <th>Email</th>
    <th>Message</th>
  </tr>
  <tr>
    <td>{{ $details['customer_name'] }}</td>
    <td>{{ $details['phone'] }}</td>
    <td>{{ $details['customer_email'] }}</td>
    <td>{{ $details['customer_msg'] }}</td>
  </tr>
</table>

</body>

</html>
