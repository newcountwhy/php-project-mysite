<!DOCTYPE html>
<html>
<head>
<title>Display Records</title>
</head>

<body>
<hr/>
<hr/>
<h3>Display my friends list:<h3>
<hr/>
<hr/>
<div style="background:#E8DAF2">
   
 
  <?php
  $i=1;
  foreach($data as $row)
  
  echo "
  
  <p>Username: $row->username</p>
  <p>Email: $row->email</p>
  <p>Description: $row->description</p>
  <button><a href='deletedata?id=".$row->id."'>Delete</a></button>
  <button><a href='updatedata?id=".$row->id."'>Update</a></button>
  
  <hr/>
  <hr/>
  ";
  
  $i++;
  ?>
  
  </div>
  <style> 
      body{text-align:center} 
    </style> 
  </body>
  </html>