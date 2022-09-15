<?php
/**
 * @var Payment[] $payments
 */
?>
<?php foreach ($payments as $payment):?>
    <h1><?=$payment->getProductName()?></h1>
<?php endforeach;?>
