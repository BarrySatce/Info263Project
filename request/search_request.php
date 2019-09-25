<?php

require_once("./request/Connection.php");



$query2 =  "SELECT 
                    invoice.invoice_id AS 'TAX INVOICE NUMBER', invoice.description AS 'SERVICE DESCRIPTION', 
                    invoice.quantity AS 'QUANTITY', invoice.unit_price AS 'UNIT PRICE', round(quantity * unit_price, 2) AS 'AMOUNT', 
                    round(quantity * unit_price, 2) AS 'SUBTOTAL', round(quantity * unit_price * 0.15, 2) AS 'GST', 
                    round(quantity * unit_price * 1.15, 2) AS 'TOTAL', round(quantity * unit_price * 1.15, 2) AS 'PAID', 
                    invoice.date AS 'DATE', invoice.due_date AS 'DUE DATE'
            FROM invoice
            inner join owner
            on invoice.customer_id = owner.owner_id
            ";




if (isset($_POST['submitButton'])){
    $search_term = mysqli_real_escape_string($conn, $_POST['input']);


    $query2 .= "WHERE invoice_id LIKE '%" .$search_term."%' ";

}

$query = mysqli_query($conn, $query2) or die(mysqli_error($conn));
if ($row = mysqli_fetch_array($query)) {
$invoiceRow = '<tr><td>' . $row['TAX INVOICE NUMBER'] . '</td><td>' . $row['SERVICE DESCRIPTION'] . '</td><td>' . $row['QUANTITY'] . '</td><td>' . $row['UNIT PRICE'] .
'</td><td>' . $row['AMOUNT'] . '</td><td>' . $row['SUBTOTAL'] . '</td><td>' . $row['GST'] . '</td><td>' . $row['TOTAL'] .
'</td><td>' . $row['PAID'] . '</td><td>' . $row['DATE'] . '</td><td>' . $row['DUE DATE'] . '</td><tr>';
    }
?>