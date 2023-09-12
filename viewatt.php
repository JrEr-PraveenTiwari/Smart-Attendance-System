<?php
include('adnav.php');
?>

<html>

<head>
  <!-- CSS Code: Place this code in the document's head (between the 'head' tags) -->
  <style>
    body {
      background: linear-gradient(90deg, #C7C5F4, #776BCC);
    }

    table {
      margin-top: 10px;
      width: 90%;
      background-color: #ffffff;
      border: 2px solid #454545;
      border-radius: 20px;
      border-collapse: collapse;
      font-family: Rockwell;
    }

    th {
      color: white;
      background: #1faf5e;
      padding: 10px 30px;
    }

    td {
      padding: 8px 20px;
    }

    tr:hover {
      padding: 8px 20px;
      background: #a19fd2a8;
      color: green;
      font-weight: bold;
    }

    button {
      color: white;
      background-color: #25f;
      border-radius: 5px;
      padding: 7px 15px;
      font-weight: bold;
      cursor: pointer;
      margin-top: 20px;
      letter-spacing: 0.02em;
    }
  </style>

</head>

<body>


  <script>
    function exportToExcel() {
      var location = 'data:application/vnd.ms-excel;base64,';
      var excelTemplate = '<html> ' +
        '<head> ' +
        '<meta http-equiv="content-type" content="text/plain; charset=UTF-8"/> ' +
        '</head> ' +
        '<body> ' +
        document.getElementById("table-conatainer").innerHTML +
        '</body> ' +
        '</html>'
      window.location.href = location + window.btoa(excelTemplate);
    }



  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="https://cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>


  <?php
  include('conn.php');
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM att ";
  $result = $conn->query($sql);


  ?>
  <center>
    <!--
    <button onclick="exportToExcel('tblData')">Export Table Data To Excel File</button>
-->
    <table border="1">

      <tr>

        <th>Roll No</th>
        <th>Time</th>


      </tr>

      <?php


      if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {


          echo "	<tr>
   				
   				<td>" . $row['rollno'] . "</td>
   				<td>" . $row['time'] . "</td>
   				
   			</tr></center>";
          ?>









          <?php

        }
      } else {
        echo "0 results";
      }
      $conn->close();
      ?>

</body>

</html>