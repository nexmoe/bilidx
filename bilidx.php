<form action="bilidx.php" method="post">
用户数字 ID <input type="text" name="mid" value="<?php echo $_POST["mid"];?>">
<input type="submit" value="提交"><br>
<?php
$mid = $_POST["mid"];
$url = "https://api.bilibili.com/x/space/acc/info?mid=".$mid."&jsonp=jsonp";
$jsonp = file_get_contents($url);
$arr = json_decode($jsonp, true)["data"];
$img = $arr["face"];
echo '-&nbsp;name: '.$arr["name"].'<br>
&nbsp;&nbsp;&nbsp;&nbsp;url: https://space.bilibili.com/'.$mid.'<br>
&nbsp;&nbsp;&nbsp;&nbsp;img: /images/logos/'.$mid.'.jpg<br>
&nbsp;&nbsp;&nbsp;&nbsp;description: '.$arr["sign"];