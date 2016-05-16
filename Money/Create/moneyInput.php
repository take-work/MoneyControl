<html>
<head>
	<title>金額管理</title>
</head>
<body>

<SCRIPT language="JavaScript">
<!--
  function plus(chk){
    chk.value++;
  }
 function minus(chk){
   chk.value--;
 }
 // -->
 </SCRIPT>

  <font size="4">金額管理</font><br><br>

  <?php
    header("Content-Type: text/html; charset=UTF-8");
    require_once(dirname(__FILE__).'../../../database.php');

    $MyDB = new MyDB;
    $db = $MyDB->dbConnect();

    mysqli_set_charset($db, 'UTF8');
  ?>

  <table border="10" cellspacing="0" cellpadding="8" bordercolor="#ffd700">
    <tbody>
      <form id="formInput" name="formInput" method="post" action="moneyComplete.php">
        <tr>
          <th width="120" height="70">100円玉</th>
          <td align="center" width="300">
            <input type="button" value=" ー " onClick="minus(this.form.hundred)" style="width:60px; height:40px">
            <input name="hundred" type="text" size="8" value="0"  style="width:60px; height:40px" />
            <input type="button" value=" ＋ " onClick="plus(this.form.hundred)" style="width:60px; height:40px">
          </td>
          <th width="250">データの編集</th>
        </tr>

        <tr>
          <th height="70">500円玉</th>
          <td align="center">
            <input type="button" value=" ー " onClick="minus(this.form.five_hundred)" style="width:60px; height:40px">
            <input name="five_hundred" type="text" size="8" value="0" style="width:60px; height:40px" />
            <input type="button" value=" ＋ " onClick="plus(this.form.five_hundred)" style="width:60px; height:40px">
          </td>

          <td align="center" rowspan="4">
            <input type="hidden" name="id" value="<?=htmlspecialchars($_GET['id'])?>"></input>
            <input type="submit" value="登録する" style="width:100px; height:50px" />
          </td>
        </tr>

        <tr>
          <th height="70">1000円札</th>
          <td align="center">
            <input type="button" value=" ー " onClick="minus(this.form.thousand)" style="width:60px; height:40px">
            <input name="thousand" type="text" size="8" value="0" style="width:60px; height:40px" />
            <input type="button" value=" ＋ " onClick="plus(this.form.thousand)" style="width:60px; height:40px">
          </td>
        </tr>

        <tr>
          <th height="70">5000円札</th>
          <td align="center">
            <input type="button" value=" ー " onClick="minus(this.form.five_thousand)" style="width:60px; height:40px">
            <input name="five_thousand" type="text" size="8" value="0" style="width:60px; height:40px" />
            <input type="button" value=" ＋ " onClick="plus(this.form.five_thousand)" style="width:60px; height:40px">
          </td>
        </tr>

        <tr>
          <th height="70">10000円札</th>
          <td align="center">
            <input type="button" value=" ー " onClick="minus(this.form.million)" style="width:60px; height:40px">
            <input name="million" type="text" size="8" value="0" style="width:60px; height:40px" />
            <input type="button" value=" ＋ " onClick="plus(this.form.million)" style="width:60px; height:40px">
          </td>
        </tr>
      </form>
    </tbody>
  </table>

  <br>
  <a href="#" onClick="window.close(); return false;">イベント一覧に戻る</a><br>

</body>
</html>
