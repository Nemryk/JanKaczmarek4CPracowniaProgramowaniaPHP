<?php
echo<<<ZSK

ZSK;
$name = "JaNuSz";
$lorem = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo unde magni amet, impedit
vel eum cupiditate laborum, itaque enim omnis quis facere voluptate tempora optio quibusdam,
ratione totam! Eos, ipsum!";
//na wieksze
echo strtoupper($name);
//na mniejsze
echo strtolower($name);
//pierwsza wieksza
echo ucfirst($name);
//pierwszy wyraz wiekszy
echo ucwords($name);
$col = wordwrap($lorem,50,'<br>');
?>
