<?php
require_once('PME.php');

$pme = new PME('1231321111/10', 'XPTO');
echo $pme->getCNPJ();
echo $pme->getRazaoSocial();
