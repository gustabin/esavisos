<?php
require_once ('lib/mercadopago.php');

$monto = floatval ($_POST['amount']);

//intval($monto)

$mp = new MP('384765699688552', 'SWCUvzyYSxjorBkDXb99wy6PXdfQ8DKf');

$preference_data = array(
    "items" => array(
       array(
           "title" => "Barrilete multicolor",
           "quantity" => 1,
           "currency_id" => "VEF",
           "unit_price" => 10
       )
    )
);

$preference = $mp->create_preference ($preference_data);

?>

<a href="<?php echo $preference['response']['init_point']; ?>">Pagar</a>






