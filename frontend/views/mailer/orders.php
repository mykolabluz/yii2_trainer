<p>Почта клиента<br><?php echo ($model->email); ?></p>
    
<br>
<br>
<html>
 <head>
  <meta charset="utf-8">
  <title>Order windows</title>
 </head>
 <body>
  <table border="1">
      <caption>Order windows</caption>
   <tr>
    <th>Params</th>
    <th>Value</th>
   </tr>
   <tr>
   <tr><td>Width</td><td><?php echo ($model->height); ?></td></tr>
   <tr><td>Height</td><td><?php echo ($model->numberCameras); ?></td></tr>
   <tr><td>numberLeaves</td><td><?php echo ($model->numberLeaves); ?></td></tr>
   <tr><td>color</td><td><?php echo ($model->color); ?></td></tr>
   <tr><td>flaps</td><td><?php echo ($model->flaps); ?></td></tr>
   <tr><td>windowsill</td><td><?php echo ($model->windowsill); ?></td><tr
   <tr><td>email</td><td><?php echo ($model->email); ?></td><tr
   <tr><td>customerName</td><td><?php echo ($model->customerName); ?></td></tr>
   </tr>
 </body>
</html>