<html>
<head>
	<title>サークル情報の編集</title>
</head>
<body>
  <font size="4">サークル編集</font><br><br>

  <?php
    header("Content-Type: text/html; charset=UTF-8");
    require_once(dirname(__FILE__).'../../../database.php');

    $MyDB = new MyDB;
    $db = $MyDB->dbConnect();

    mysqli_set_charset($db, 'UTF8');

    $id = $_GET['id'];

    $recordSet = mysqli_query($db, 'SELECT * FROM Circles Where id =' . $id);
  ?>

  <table width="1200" border="1" cellspacing="1" cellpadding="8">
    <tbody>
      <tr>
        <th>ナンバー</th>
        <th>スペース</th>
        <th>サークル名</th>
        <th>代表者</th>
        <th>参加人数</th>
        <th>机の数</th>
        <th>椅子の数</th>
        <th>データの編集</th>
      </tr>
  <?php
    while ($data = mysqli_fetch_assoc($recordSet)) {
  ?>
      <form name="formInput" method="post" action="updateComplete.php?actin=update&id=<?=htmlspecialchars($data['id'])?>">
        <tr>
          <td>
            <input name="number" type="text" value="<?=htmlspecialchars($data['number'])?>"/>
          </td>

          <td>
            <input name="space" type="text" value="<?=htmlspecialchars($data['space'])?>"/>
          </td>

          <td>
            <input name="circleName" type="text" value="<?=htmlspecialchars($data['circle_name'])?>"/>
          </td>

          <td>
            <input name="host" type="text" value="<?=htmlspecialchars($data['host'])?>"/>
          </td>

          <td>
            <input name="staff" type="text" value="<?=htmlspecialchars($data['staff'])?>"/>
          </td>

          <td>
            <input name="desk" type="text" value="<?=htmlspecialchars($data['desk'])?>"/>
          </td>

          <td>
            <input name="chaise" type="text" value="<?=htmlspecialchars($data['chaise'])?>"/>
          </td>

          <td align="center">
            <input type="hidden" name="id" value="<?=htmlspecialchars($_GET['id'])?>">
            <input type="submit" value="データを変更する">
          </td>
        </tr>
      </form>
  <?php
    }
  ?>
    </tbody>
  </table>

  <br>
  <a href="../../Event/EventList.php">イベント一覧に戻る</a>

</body>
</html>
