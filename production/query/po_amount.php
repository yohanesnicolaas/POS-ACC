<?php


$po_amount = "SELECT sum(pol.qty * pol.price)  as amount
FROM po_line_all pol
LEFT JOIN ap_check_all aca ON aca.po_header_id = pol.po_header_id
where
pol.po_header_id = '".$po_header_id."'
";

$result_amount = $conn->query($po_amount);
while($row_amount = $result_amount->fetch_assoc()) {
echo $row_amount["amount"];
}

?>