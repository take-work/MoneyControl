<html>
<head>
	<title>スタッフ情報の編集</title>
</head>
<body>
  <font size="4">スタッフ編集</font><br><br>

  <?php
    header("Content-Type: text/html; charset=UTF-8");
    require_once(dirname(__FILE__).'../../../database.php');

    $MyDB = new MyDB;
    $db = $MyDB->dbConnect();

    mysqli_set_charset($db, 'UTF8');

    $id = $_GET['id'];

    $recordSet = mysqli_query($db, 'SELECT * FROM Staffs Where id =' . $id);
  ?>

  <table width="1200" border="1" cellspacing="1" cellpadding="8">
    <tbody>
      <tr>
        <th>氏名(HN)</th>
        <th>持ち場</th>
        <th>メールアドレス</th>
        <th>電話番号</th>
        <th>Twitter</th>
        <th>経験</th>
        <th>役職</th>
        <th>データの編集</th>
      </tr>
  <?php
    while ($data = mysqli_fetch_assoc($recordSet)) {
  ?>
      <form name="formInput" method="post" action="updateComplete.php?actin=update&id=<?=htmlspecialchars($data['id'])?>">
        <tr>
          <td>
            <input name="staffName" type="text" value="<?=htmlspecialchars($data['name'])?>"/>
          </td>

          <td>
            <input name="position" type="text" value="<?=htmlspecialchars($data['position'])?>"/>
          </td>

          <td>
            <input name="mail" type="text" value="<?=htmlspecialchars($data['mail'])?>"/>
          </td>

          <td>
            <input name="tel" type="text" value="<?=htmlspecialchars($data['tel'])?>"/>
          </td>

          <td>
            <input name="twitter" type="text" value="<?=htmlspecialchars($data['twitter'])?>"/>
          </td>

          <td>
            <input name="experience" type="radio" value="1" <?php if ($data['experience'] == 1) { ?> checked="checked" <?php } ?> />経験有<br>
            <input name="experience" type="radio" value="2" <?php if ($data['experience'] == 2) { ?> checked="checked" <?php } ?> />経験無<br>
          </td>

          <td>
            <input name="rank" type="radio" value="1" <?php if ($data['rank'] == 1) { ?> checked="checked" <?php } ?>/>主催<br>
            <input name="rank" type="radio" value="2" <?php if ($data['rank'] == 2) { ?> checked="checked" <?php } ?>/>副主催<br>
            <input name="rank" type="radio" value="3" <?php if ($data['rank'] == 3) { ?> checked="checked" <?php } ?>/>その他
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
