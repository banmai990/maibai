<?php
/// Ham ngau nhien video thumbnail
function title_pri_kw($num) 
{
$get_title_pri_kw = file_get_contents("https://drive.google.com/uc?export=download&id=0B1utavPCTF3UbXBaUmo1ZDctT0U");
$num = rand(1, 1);
$pri_kw = explode(',', $get_title_pri_kw);

for( $i = 0; $i < $num; $i++ ) 
{ 
$radom_char = $radom_char.$pri_kw[rand(1, count($pri_kw))].' - '; 
}
return $radom_char;
}

/// Ham ngau nhien video kiem tien
function title_mind_kw($num) 
{
$get_title_mind_kw = file_get_contents("https://drive.google.com/uc?export=download&id=0B1utavPCTF3UZV81dGxWVXdpWVk");
$num = rand(6, 10);
$mind_kw = explode(',', $get_title_mind_kw);

for( $i = 0; $i < $num; $i++ ) 
{ 
$radom_char = $radom_char.$mind_kw[rand(1, count($mind_kw))].' '; 
}
return $radom_char;
}


/// Ham ngau nhien video khac cung chu de
function title_random_kw($num) 
{
$get_title_random_kw = file_get_contents("https://drive.google.com/uc?export=download&id=0B1utavPCTF3URXJGLXJ6Q01SVVk");
$num = rand(4, 6);
$random_kw = explode(',', $get_title_random_kw);

for( $i = 0; $i < $num; $i++ ) 
{ 
$radom_char = $radom_char.$random_kw[rand(1, count($random_kw))]; 
}
return $radom_char;
}

?>
<html>
<head>
<title>Random Title</title>
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
    background: #473C8B;
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
    background-color: #473C8B; 
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
			document.getElementById('log').innerHTML += '<br><span>Your Title has been copied. Go to Word and press Ctrl+V</span>';
        }
}
</script>
<div class="top">Random Title | Developed by Dat Giang</div>
<div id="log"></div>
<div id="selectable" onclick="selectText('selectable')" class="span">
<?php 
echo title_pri_kw(); 
echo title_mind_kw(); 
echo title_random_kw();
?>
</div>
<button class="button button1" onclick="myFunction()">Reload Button</button>
</body>
</head>
</html>