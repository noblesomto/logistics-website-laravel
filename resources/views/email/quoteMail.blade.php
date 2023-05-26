<!DOCTYPE html>
<html>
<head>
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

<h2>Details of the Quote From website</h2>

<table style="width:100%">
  <tr>
    <th>Full Name:</th>
    <td>{{ $details['name'] }}</td>
  </tr>
  <tr>
    <th>Phone:</th>
    <td>{{ $details['phone'] }}</td>
  </tr>
  <tr>
    <th>Email:</th>
    <td>{{ $details['email'] }}</td>
  </tr>
  <tr>
  
  <tr>
    <th>Freight Type:</th>
    <td>{{ $details['freight_type'] }}</td>
  </tr>
  
  <tr>
    <th>Departure:</th>
    <td>{{ $details['departure'] }}</td>
  </tr>

  <tr>
    <th>Weight:</th>
    <td>{{ $details['weight'] }}</td>
  </tr>
  <tr>
    <th>Delivery Mode:</th>
    <td>{{ $details['delivery_mode'] }}</td>
  </tr>
  <tr>
    <th>Delivery Address:</th>
    <td>{{ $details['address'] }}</td>
  </tr>
</table>

</body>
</html>

