<html>
<head>
	<title>スタッフデータの削除</title>
</head>
<body>
  <font size="4">下記のデータを削除します。よろしければ、「データの削除」から「削除する」ボタンをクリックしてください。</font><br><br>

  <?php
    header("Content-Type: text/html; charset=UTF-8");
    require_once(dirname(__FILE__).'../../../database.php');

    $MyDB = new MyDB;
    $db = $MyDB->dbConnect();

    mysqli_set_charset($db, 'UTF8');

    $id = $_GET['id'];

    $data = mysqli_query($db, 'SELECT * FROM Staffs Where id =' . $id);
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
        <th>データの削除</th>
      </tr>
  <?php
    while ($data = mysqli_fetch_assoc($data)) {
  ?>
      <form name="formInput" method="post" action="deleteComplete.php?actin=update&id=<?=htmlspecialchars($data['id'])?>">
        <tr>
          <td>
            <?=htmlspecialchars($data['name'])?>
          </td>

          <td>
            <?=htmlspecialchars($data['position'])?>
          </td>

          <td align="center">
            <?=htmlspecialchars($data['mail'])?>
          </td>

          <td align="center">
            <?=htmlspecialchars($data['tel'])?>
          </td>

          <td align="center">
            <?=htmlspecialchars($data['twitter'])?>
          </td>

          <td align="center">
            <?php
              if ($data['experience'] == 1) {
                echo "経験有";
              } else {
                echo "経験無";
              }
            ?>
          </td>

          <td align="center">
            <?php
              switch ($data['rank']) {
                case '1':
                  echo "主催";
                  break;
                case '2':
                  echo "副主催";
                  break;
                case '3':
                  echo "その他";
                  break;
              }
            ?>
          </td>

          <td align="center">
            <a href="deleteComplete.php?actin=delete&id=<?=htmlspecialchars($data['id'])?>">
              <input type="hidden" name="id" value="<?=htmlspecialchars($_GET['id'])?>">
              <input type="submit" value="削除する">
            </a>
          </td>
        </tr>
      </form>
  <?php
    }
  ?>
    </tbody>
  </table>

  <br>
  <a href="#" onClick="window.close(); return false;">スタッフ一覧に戻る</a><br>
  <a href="../../Event/EventList.php">イベント一覧に戻る</a>

</body>
</html>
