<?php
function random_character($num) 
{
$num = rand(4, 10);
$random_char = ""; 
$char_base = explode( " ", "4ys93FBTD8w, 6aDePLhcOIk, 3IjFxiX09jg, F-sT1XC9K44, ftNKbcfNKS8, k173obAXm40, GerCQhwHq6Q, 0YSrsPmSM5M, Si_vOGti3m0, Bfgp8fJBays, oBMovXBYsjg, P2eMaXJB7oM, PmJOLmSZV6g, vxpdp5YGeRo, BbRUwaTjZU0, K_jN87D4Bq0, MJv8CjC1l90, Ts8HBkEZ2ak, m9URCWd9MhI, J_v5Etik0-8, rXtZhx0Z-oI, Yvj7orR14vU, wSwksQko5lg, A80fqicjT5c, BAC1kmyklfE, 8wIhRdsA6Xw, b6qrad8GmFM, ibcSFxKVFu0, PnHrBrLiOGQ, mi8xYvNPe1Y, KRLmWMwMJXE, pw0_SQhxMAE, JlptX_LP1Kc, av9LQYxBcEc, 9zRgRvMr_VM, jHPh5-juU_M, Eq2EurxIzYM, bszRxF_vWAA, FnE3SRD0C5M, NLx7Zw8rGv0, LdlusUlFpM4, xNlLj6suGq4, DRe4EjpPYz0, SU7LVCyYPXg, Qi41_muDp9s, iaBtpwXAMos, cPsijWAHGA4, fieT74waGOY, VlpBGUBiKyQ, csW2HFI6FJg, 760lnZqRZoc, 0xysJ4mpS08, CiJUdPSEBJY, YhnTvE1Nvak, gLLilih_wWs, U3cMC8Eyk0I, MkvexgUPmP4, XkYdGZYbfE0, EyN6R9yC-Mw, Jfa4DJUrsk8, -Kvlx-8shgk, Y98Snzp1CtI, tKpCGoMWmAw, b0bAENavP4w, g7oGCFWbMFs, YKOPkNqKwAI, rnv6r6H990M, 1jfyyRR_k6k, YFxVyDTudWs, zASNsRnAbaw, 640lhziWDAs, aan2wtQDtDE, 0blSMV4QY9A, m_6D3syOxV8,");


for( $i = 0; $i < $num; $i++ ) 
{ 
$radom_char = $radom_char.$char_base[rand(1, count($char_base))]; 
}

$radom_char = substr($radom_char,0,-1);
return $radom_char;

}

?>
<html>
<head>
<title>Random ID VIDEOS</title>
<style>
body {background-color: powderblue;padding:0;margin:0;text-align: center;}
h1   {color: blue;}
p    {color: red;}
.span {
	border-style: dotted solid;
	margin-top: 20px;
	margin-bottom: 10px;
	padding: 20px;
	width: 100% auto;
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
			document.getElementById('log').innerHTML += '<br>Your ID Videos has been copied. Go to Word and press CTRL+V';
        }
}
</script>
<div id="log"></div>
<div id="selectable" onclick="selectText('selectable')" class="span"><?php echo random_character(); ?></div>
<button onclick="myFunction()">Reload Button</button>
</body>
</head>
</html>