<?php

require('app/start.php');

$objects = $s3->getIterator('ListObjects', [
  'Bucket' => $config['s3']['bucket']
]);

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Listings</title>
  </head>
  <body>
    <table>
     <thead>
       <tr>
         <th>File</th>
         <th>Download</th>
       </tr>
     </thead>
     <tbody>
       <?php foreach($objects as $object): ?>
       <tr>
         <td><?php echo $object['Key']; ?></td>
         <td><a href="<?php echo $s3->getObjectUrl($config['s3']['bucket'], $object['Key']); ?>" download="<?php echo $object['Key']; ?>">Download</a></td>
       </tr>
       <?php endforeach; ?>
     </tbody>
    </table>
  </body>
</html>
