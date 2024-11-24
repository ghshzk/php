<?php
$company = htmlspecialchars($_GET['company'], ENT_QUOTES);
print "会社名は" . $company . "ですね";

<?php
$name=htmlspecialchars($_POST['name'],ENT_QUOTES);
print '私の名前は、'.$name.'<br />';
$goods=htmlspecialchars($_POST['goods'],ENT_QUOTES);
if($goods){
print 'ご希望の商品は、'.$goods.'<br />';}
$number=htmlspecialchars($_POST['number'],ENT_QUOTES);
print '注文数は、'.$number.'<br />';