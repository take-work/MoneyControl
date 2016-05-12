<html>
<head>
	<title>サークル一覧</title>
</head>
<body>
  <font size="4">サークル一覧</font><br><br>

  <form id="createCircle" name="createCircle" method="post" action="circleInput.php?actin=create&id=<?=htmlspecialchars($_GET['id'])?>">
    <input type="hidden" name="id" value="<?=htmlspecialchars($_GET['id'])?>"></input>
    <input type="submit" name="createCircle" value="新しいサークルを作成する">
  </form>
  <?php
    header("Content-Type: text/html; charset=UTF-8");
    require_once(dirname(__FILE__).'../../database.php');

    $MyDB = new MyDB;
    $db = $MyDB->dbConnect();

    mysqli_set_charset($db, 'UTF8');

    $recordSet = mysqli_query($db, 'SELECT * FROM Circles');
  ?>

  <table width="1200" border="1" cellspacing="1" cellpadding="8">
    <tbody>
      <tr>
        <th>サークル名</th>
        <th>代表者</th>
        <th>売上</th>
        <th>データの編集</th>
        <th>データの削除</th>
      </tr>
  <?php
    while ($data = mysqli_fetch_assoc($recordSet)) {
  ?>
      <tr>
        <td align="center">
          <?=htmlspecialchars($data['circle_name'])?>
        </td>

        <td>
          <?=htmlspecialchars($data['host'])?>
        </td>

        <td align="center">
          <?=htmlspecialchars($data['proceeds'])?>
        </td>

        <td align="center">
          <a href="Update/dataUpdate.php?actin=update&id=<?=htmlspecialchars($data['id'])?>">編集ページ</a>
        </td>

        <td align="center">
          <a href="Delete/deleteComfirm.php?actin=delete&id=<?=htmlspecialchars($data['id'])?>"><input type="submit" value="削除"></a>
        </td>
      </tr>
  <?php
    }
  ?>
    </tbody>
  </table>

  <br>
  <a href="../Event/EventList.php">イベント一覧に戻る</a>

</body>
</html>
