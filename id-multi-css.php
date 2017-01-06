<?php
/// Ham ngau nhien video thumbnail
function random_video_thumb($num) 
{
$get_video_thumb = file_get_contents("https://drive.google.com/uc?export=download&id=0B1utavPCTF3UQ18xX3N4UnBJT2c");
$num = rand(1, 1);
$video_thumb = explode( " ", ".$get_video_thumb.");

for( $i = 0; $i < $num; $i++ ) 
{ 
$radom_char = $radom_char.$video_thumb[rand(1, count($video_thumb))]; 
}
return $radom_char;
}

/// Ham ngau nhien video kiem tien
function random_video_seo($num) 
{
$get_video_seo = file_get_contents("https://drive.google.com/uc?export=download&id=0B1utavPCTF3UWl9jZjdIU2tMUU0");
$num = rand(3, 6);
$video_seo = explode( " ", ".$get_video_seo.");

for( $i = 0; $i < $num; $i++ ) 
{ 
$radom_char = $radom_char.$video_seo[rand(1, count($video_seo))]; 
}
return $radom_char;
}


/// Ham ngau nhien video khac cung chu de
function random_video_other($num) 
{
$get_video_other = file_get_contents("https://drive.google.com/uc?export=download&id=0B1utavPCTF3UMGY2cnppQWVZcWc");
$num = rand(10, 30);
$video_other = explode( " ", ".$get_video_other.");

for( $i = 0; $i < $num; $i++ ) 
{ 
$radom_char = $radom_char.$video_other[rand(1, count($video_other))]; 
}
$radom_char = substr($radom_char,0,-1);
return $radom_char;
}

?>
<html>
<head>
<title>Random ID VIDEOS</title>
<link href="https://fonts.googleapis.com/css?family=Pacifico|Rosario" rel="stylesheet" />
<style>
body {background-color: powderblue;padding:0;margin:0;text-align: center;}
h1   {color: blue;}
p    {color: red;}
.span {
    font-family: 'Rosario', sans-serif;
	border-style: dotted solid;
	margin-top: 20px;
	margin-bottom: 10px;
	padding: 20px;
	width: 100% auto;
	}
span {
    font-family: 'Pacifico', cursive;
    font-size: larger;
}
div.top {
    font-family: 'Rosario', sans-serif;
    width: auto 100%;
    background: #8B0000;
    color: #fff;
    padding: 5px 0 5px 0;
    
}
.button {
    background-color: #4CAF50; /* Green */
    font-family: 'Rosario', sans-serif;
    border: none;
    color: white;
    padding: 10px 30px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button1 {
    background-color: #8B0000; 
    color: #fff; 
    border: 2px;
    border-radius: 2px;
}

.button1:hover {
    background-color: #4CAF50;
    color: white;
}
</style>
<body>
<script>
function myFunction() {
    location.reload();
}
function selectText(containerid) {
        if (document.selection) {
            var range = document.body.createTextRange();
            range.moveToElementText(document.getElementById(containerid));
            range.select();			
        } else if (window.getSelection) {
            var range = document.createRange();
            range.selectNode(document.getElementById(containerid));
            window.getSelection().addRange(range);
			document.execCommand('copy');
			document.getElementById('log').innerHTML += '<br><span>Your ID Videos has been copied. Go to Word and press Ctrl+V</span>';
        }
}
</script>
<div class="top">Random ID Videos | Developed by Dat Giang</div>
<div id="log"></div>
<div id="selectable" onclick="selectText('selectable')" class="span">
<?php 
echo random_video_thumb(); 
echo random_video_seo(); 
echo random_video_other();
?>
</div>
<button class="button button1" onclick="myFunction()">Reload Button</button>
</body>
</head>
</html>