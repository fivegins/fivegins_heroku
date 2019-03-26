<?php
$posts = json_decode(file_get_contents("json.txt"), true);
?>
<!DOCTYPE html>
<html>
<head>
<meta content='width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1' name='viewport'/>
<title>1400 epub miễn phí của Bạch Ngọc Sách</title>
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
  max-width: 200px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>
<h1>1400 EPUB</h1>
<h2>fivegins@Bạch Ngọc Sách</h2>
<pre><font color="red">Crl+F hoặc tìm trong trang trên điện thoại để tìm kiếm truyện</font></pre>
<table id="customers">
  <tr>
    <th>ID</th>
    <th>Tên</th>
    <th>Tác giả</th>
    <th>Thể loại</th>
    <th>Tải về</th>
  </tr>
  <?php
  foreach ($posts as $post) {
  	?>
  <tr>
    <td><?php echo $post['id'] ?></td>
    <td><?php echo $post['ten'] ?></td>
    <td><?php echo $post['tacgia'] ?></td>
    <td><?php echo $post['theloai'] ?></td>
    <td><a href="<?php echo $post['url'] ?>"><?php echo $post['url'] ?></a></td>
  </tr>
  	<?php
  }
  ?>
</table>

</body>
</html>
