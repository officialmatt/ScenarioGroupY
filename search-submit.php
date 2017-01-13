<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div class = "snippets" >
  <h2> Our Users Blogs </h2>
  <div class="table1">
<table class="table table-hover">
  <tr><th>Username</th><th>Snippet</th><th>Date Added</th></tr>

  <?
  $search = $_POST["search"];
  $query = "SELECT u.name, s.snippet, s.dateTime FROM students AS u JOIN snippets AS s ON u.id=s.user_id WHERE isPrivate = 0 AND u.name=$search";
  $db = new PDO("mysql:dbname=simpsons", "root","");
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $rows = $db->query($query);
  foreach ($rows as $row) {
    ?>
    <tr>
      <td>
        <?= $row["name"] ?>
      </td>

      <td>
        <?= $row["snippet"] ?>
      </td>

    <td>
      <?= $row["dateTime"] ?>
    </td>
</tr>
<?php
}
?>
</table>
</div>
</div>
</body>
</html>
