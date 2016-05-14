<html>
<head>
	<title>金額管理</title>
</head>
<body>
  <font size="4">金額管理</font><br><br>

  <?php
    header("Content-Type: text/html; charset=UTF-8");
    require_once(dirname(__FILE__).'../../../database.php');

    $MyDB = new MyDB;
    $db = $MyDB->dbConnect();

    mysqli_set_charset($db, 'UTF8');
  ?>

  <table width="1300" border="1" cellspacing="1" cellpadding="8">
    <tbody>
      <tr>
        <th>100円</th>
        <th>500円</th>
        <th>1000円</th>
        <th>5000円</th>
        <th>10000円</th>
        <th>データの編集</th>
      </tr>

      <form id="formInput" name="formInput" method="post" action="moneyComplete.php">
        <tr>
          <td align="center">
            <input name="hundred" type="text" size="8" value="<?=htmlspecialchars($data['hundred'])?>"/>
          </td>

          <td align="center">
            <input name="five_hundred" type="text" size="8" value="<?=htmlspecialchars($data['five_hundred'])?>" />
          </td>

          <td align="center">
            <input name="thousand" type="text" size="8" value="<?=htmlspecialchars($data['thousand'])?>" />
          </td>

          <td align="center">
            <input name="five_thousand" type="text" size="8" value="<?=htmlspecialchars($data['five_thousand'])?>" />
          </td>

          <td align="center">
            <input name="million" type="text" size="8" value="<?=htmlspecialchars($data['million'])?>" />
          </td>

          <td align="center">
            <input type="hidden" name="id" value="<?=htmlspecialchars($_GET['id'])?>"></input>
            <input type="submit" value="登録する" />
          </td>
        </tr>
      </form>
    </tbody>
  </table>

</body>
</html>
