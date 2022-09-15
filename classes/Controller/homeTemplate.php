<?php
/**
 * @var Payment[] $payments
 */

use DesignPatterns\Model\Payment;

?>
<?php foreach ($payments as $payment):?>
    <h1><?=$payment->getProductName()?></h1>
<?php endforeach;?>
