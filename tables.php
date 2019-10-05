<?php
require_once('./request/search_requests.php');
?>
<link rel="stylesheet" href="css/redoneStyles.css">

<ul class="nav nav-tabs" id="invoiceInfoTabs" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="customer-tab" data-toggle="tab" href="#customer" role="tab"
           aria-controls="home" aria-selected="true">Customer Info</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="invoice-tab" data-toggle="tab" href="#invoice" role="tab"
           aria-controls="invoice" aria-selected="false">Invoice Info</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="branch-tab" data-toggle="tab" href="#branch" role="tab"
           aria-controls="branch" aria-selected="false">Branch Info</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="alignment-tab" data-toggle="tab" href="#alignment" role="tab"
           aria-controls="alignment" aria-selected="false">Alignment Info</a>
    </li>
</ul>
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="customer" role="tabpanel" aria-labelledby="contact-tab">
        <table class="table">
            <thead class="thead-dark">
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Vehicle Registration</th>
            <th scope="col">Vehicle Model</th>
            <th scope="col">Vehicle Make</th>
            <th scope="col">Year</th>
            <th scope="col">Body Type</th>
            <th scope="col">Chassis Number</th>
            <th scope="col">Odometer Reading</th>
            </thead>
            <tbody>
            <td data-label="Name"><?php echo $customerRow['NAME']; ?></td>
            <td data-label="Email"><?php echo $customerRow['EMAIL']; ?></td>
            <td data-label="Phone"><?php echo $customerRow['PHONE']; ?></td>
            <td data-label="Vehicle Registration"><?php echo $customerRow['VEHICLE REGISTRATION']; ?></td>
            <td data-label="Vehicle Model"><?php echo $customerRow['VEHICLE MODEL']; ?></td>
            <td data-label="Vehicle Make"><?php echo $customerRow['VEHICLE MAKE']; ?></td>
            <td data-label="Year"><?php echo $customerRow['YEAR']; ?></td>
            <td data-label="Body Type"><?php echo $customerRow['BODY TYPE']; ?></td>
            <td data-label="Chassis Number"><?php echo $customerRow['CHASSIS NUMBER']; ?></td>
            <td data-label="Odometer Reading"><?php echo $customerRow['ODOMETER READING']; ?></td>
            <!--<? //echo $custRow ?>-->
            </tbody>
        </table>
    </div>
    <div class="tab-pane fade" id="invoice" role="tabpanel" aria-labelledby="invoice-tab">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Tax Invoice Number</th>
                <th scope="col">Service Description</th>
                <th scope="col">Quantity</th>
                <th scope="col">Unit Price</th>
                <th scope="col">Amount</th>
                <th scope="col">Subtotal</th>
                <th scope="col">GST</th>
                <th scope="col">Total</th>
                <th scope="col">Paid</th>
                <th scope="col">Date</th>
                <th scope="col">Due Date</th>
            </tr>
            </thead>
            <tbody>
            <td data-label="Tax Invoice Number"><?php echo $invoiceRow['TAX INVOICE NUMBER'];?></td>
            <td data-label="Service Description"><?php echo $invoiceRow['SERVICE DESCRIPTION'];?></td>
            <td data-label="Quantity"><?php echo $invoiceRow['QUANTITY'];?></td>
            <td data-label="Unit Price"><?php echo '$' . $invoiceRow['UNIT PRICE'];?></td>
            <td data-label="Amount"><?php echo '$' . $invoiceRow['AMOUNT'];?></td>
            <td data-label="Subtotal"><?php echo '$' . $invoiceRow['SUBTOTAL'];?></td>
            <td data-label="GST"><?php echo '$' . $invoiceRow['GST'];?></td>
            <td data-label="Total"><?php echo '$' . $invoiceRow['TOTAL'];?></td>
            <td data-label="Paid"><?php echo '$' . $invoiceRow['PAID'];?></td>
            <td data-label="Date"><?php echo $invoiceRow['DATE'];?></td>
            <td data-label="Due Date"><?php echo $invoiceRow['DUE DATE'];?></td>
            </tbody>
        </table>
    </div>
    <div class="tab-pane fade" id="branch" role="tabpanel" aria-labelledby="branch-tab">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Technician Name</th>
                <th scope="col">Inspection Time/Date</th>
                <th scope="col">Branch Name</th>
                <th scope="col">Branch Phone</th>
                <th scope="col">Branch Email</th>
                <th scope="col">Branch Address</th>
                <th scope="col">Branch GST Registration</th>
                <th scope="col">Branch Fax</th>
            </tr>
            </thead>
            <tbody>
            <td data-label="Technician Name"><?php echo $branchRow['TECHNICIAN NAME'];?></td>
            <td data-label="Inspection Time/Date"><?php echo $branchRow['INSPECTION TIME/DATE'];?></td>
            <td data-label="Branch Name"><?php echo $branchRow['BRANCH NAME'];?></td>
            <td data-label="Branch Phone"><?php echo $branchRow['BRANCH PHONE'];?></td>
            <td data-label="Branch Email"><?php echo $branchRow['BRANCH EMAIL'];?></td>
            <td data-label="Branch Address"><?php echo $branchRow['BRANCH ADDRESS'];?></td>
            <td data-label="Branch GST Registration"><?php echo $branchRow['BRANCH GST REGISTRATION'];?></td>
            <td data-label="Branch Fax"><?php echo $branchRow['BRANCH FAX'];?></td>
            </tbody>
        </table>
    </div>

    <div class="tab-pane fade table-hover" id="alignment" role="tabpanel" aria-labelledby="alignment-tab">
        <header class="header">Back Axle</header>

        <table class="table">
            <header class="car_part">Camber</header>
            <thead class="thead-dark">
            <th>Orientations</th>
            <th>Before</th>
            <th>Target</th>
            <th>Actual</th>
            </thead>
            <tbody>
            <tr>
                <td class="table-column-head orientations">Left</td>
                <td id=leftBefore" class="green" data-label="Before">
                    <?php echo $alignmentRow['1']; ?></td>
                <td data-label="Target">-0°40' +/-0°30'</td>
                <td data-label="Actual"><?php echo $alignmentRow['2']; ?></td>
            </tr>
            <tr>
                <td class="table-column-head orientations">Right</td>
                <td data-label="Before"><?php echo $alignmentRow['3']; ?></td>
                <td data-label="Target">-0°40' +/-0°30'</td>
                <td data-label="Actual"><?php echo $alignmentRow['4']; ?></td>
            </tr>
            <tr>
                <td class="table-column-head orientations">Cross</td>
                <td data-label="Before"><?php echo $alignmentRow['5']; ?></td>
                <td data-label="Target">0°00' +/-0°30'</td>
                <td class="underPadding bottomTD" data-label="Actual"><?php echo $alignmentRow['6']; ?></td>
            </tr>
            </tbody>
        </table>

        <table class="table">
            <header class="car_part">Toe</header>
            <thead class="thead-dark">
            <th>Orientations</th>
            <th>Before</th>
            <th>Target</th>
            <th>Actual</th>
            </thead>
            <tbody>
            <tr>
                <td class="table-column-head orientations">Left</td>
                <td data-label="Before"><?php echo $alignmentRow['7']; ?></td>
                <td data-label="Target" class="table-no-underline target">1.5mm +/-1.00</td>
                <td data-label="Actual"><?php echo $alignmentRow['8']; ?></td>
            </tr>
            <tr>
                <td class="table-column-head orientations">Right</td>
                <td data-label="Before"><?php echo $alignmentRow['9']; ?></td>
                <td data-label="Target" class="table-no-underline target">1.5mm +/-1.00</td>
                <td data-label="Actual"><?php echo $alignmentRow['10']; ?></td>
            </tr>
            <tr>
                <td class="table-column-head orientations">Total</td>
                <td data-label="Before"><?php echo $alignmentRow['11']; ?></td>
                <td data-label="Target" class="target">3mm +/-2.0mm</td>
                <td class="underPadding bottomTD" data-label="Actual"><?php echo $alignmentRow['12']; ?></td>
            </tr>
            </tbody>
        </table>

        <table class="table">
            <header class="car_part">Geometrical Driving Axis</header>
            <thead class="thead-dark">
            <th>Before</th>
            <th>Target</th>
            <th>Actual</th>
            </thead>
            <tbody>
            <tr>
                <td data-label="Before"><?php echo $alignmentRow['13']; ?></td>
                <td data-label="Target" class="target">0°00'</td>
                <td data-label="Actual"><?php echo $alignmentRow['14']; ?></td>
            </tbody>
        </table>

        <header class="header">Front Axle</header>
        <table class="table">
            <thead class="thead-dark">
            <th class="maxwidth-title">Camber</th>
            <th>Orientations</th>
            <th>Before</th>
            <th>Target</th>
            <th>Actual</th>
            </thead>
            <tbody>
            <tr>
                <td data-label="Camber" class="table-no-underline background">&nbsp;</td>
                <td class="table-column-head orientations">Left</td>
                <td data-label="Before"><?php echo $alignmentRow['15']; ?></td>
                <td data-label="Target" class="table-no-underline target">0°00' +/-0°30'</td>
                <td data-label="Actual"><?php echo $alignmentRow['16']; ?></td>
            </tr>
            <tr>
                <td class="table-no-underline noShow">&nbsp;</td>
                <td class="table-column-head orientations">Right</td>
                <td data-label="Before"><?php echo $alignmentRow['17']; ?></td>
                <td class="noShow target"></td>
                <td data-label="Actual"><?php echo $alignmentRow['18']; ?></td>
            </tr>
            <tr>
                <td class="table-no-underline noShow">&nbsp;</td>
                <td class="table-column-head orientations">Cross</td>
                <td data-label="Before"><?php echo $alignmentRow['19']; ?></td>
                <td data-label="Target" class="target">0°00' +/-0°30'</td>
                <td class="underPadding bottomTD" data-label="Actual"><?php echo $alignmentRow['20']; ?></td>
            </tr>
            </tbody>
        </table>
        <table class="table">
            <thead class="thead-dark">
            <th class="maxwidth-title">Caster</th>
            <th>Orientations</th>
            <th>Before</th>
            <th>Target</th>
            <th>Actual</th>
            </thead>
            <tbody>
            <tr>
                <td data-label="Caster" class="table-no-underline background">&nbsp;</td>
                <td class="table-column-head orientations">Left</td>
                <td data-label="Before"><?php echo $alignmentRow['21']; ?></td>
                <td data-label="Target" class="table-no-underline target">2°35' +/-0°30'</td>
                <td data-label="Actual"><?php echo $alignmentRow['22']; ?></td>
            </tr>
            <tr>
                <td class="table-no-underline noShow">&nbsp;</td>
                <td class="table-column-head orientations">Right</td>
                <td data-label="Before"><?php echo $alignmentRow['23']; ?></td>
                <td class="noShow target"></td>
                <td data-label="Actual"><?php echo $alignmentRow['24']; ?></td>
            </tr>
            <tr>
                <td class="table-no-underline noShow">&nbsp;</td>
                <td class="table-column-head orientations">Cross</td>
                <td data-label="Before"><?php echo $alignmentRow['25']; ?></td>
                <td data-label="Target" class="target">0°00' +/-0°30'</td>
                <td class="underPadding bottomTD" data-label="Actual"><?php echo $alignmentRow['26']; ?></td>
            </tr>
            </tbody>
        </table>
        <table class="table">
            <thead class="thead-dark">
            <th class="maxwidth-title">SAI</th>
            <th>Orientations</th>
            <th>Before</th>
            <th>Target</th>
            <th>Actual</th>
            </thead>
            <tbody>
            <tr>
                <td data-label="SAI" class="table-no-underline background">&nbsp;</td>
                <td class="table-column-head orientations">Left</td>
                <td data-label="Before"><?php echo $alignmentRow['27']; ?></td>
                <td data-label="Target" class="table-no-underline target">12°40' +/-0°45</td>
                <td data-label="Actual"><?php echo $alignmentRow['28']; ?></td>
            </tr>
            <tr>
                <td class="table-no-underline noShow">&nbsp;</td>
                <td class="table-column-head orientations">Right</td>
                <td data-label="Before"><?php echo $alignmentRow['29']; ?></td>
                <td class="noShow target"></td>
                <td data-label="Actual"><?php echo $alignmentRow['30']; ?></td>
            </tr>
            <tr>
                <td class="table-no-underline noShow">&nbsp;</td>
                <td class="table-column-head orientations">Cross</td>
                <td data-label="Before"><?php echo $alignmentRow['31']; ?></td>
                <td data-label="Target" class="target">0°00'</td>
                <td class="underPadding bottomTD" data-label="Actual"><?php echo $alignmentRow['32']; ?></td>
            </tr>
            </tbody>
        </table>
        <table class="table">
            <thead class="thead-dark">
            <th class="maxwidth-title">Track differential angle</th>
            <th>Orientations</th>
            <th>Before</th>
            <th>Target</th>
            <th>Actual</th>
            </thead>
            <tbody>
            <tr>
                <td data-label="Track Differential Angle" class="table-no-underline background">&nbsp;</td>
                <td class="table-column-head orientations">Left</td>
                <td data-label="Before"><?php echo $alignmentRow['33']; ?></td>
                <td class="table-no-underline noShow target"></td>
                <td data-label="Actual"><?php echo $alignmentRow['34']; ?></td>
            </tr>
            <tr>
                <td class="table-no-underline noShow">&nbsp;</td>
                <td class="table-column-head orientations">Right</td>
                <td data-label="Before"><?php echo $alignmentRow['35']; ?></td>
                <td class="noShow target"></td>
                <td class="underPadding bottomTD" data-label="Actual"><?php echo $alignmentRow['36']; ?></td>
            </tr>
            </tbody>
        </table>
        <table class="table">
            <thead class="thead-dark">
            <th class="maxwidth-title">Toe</th>
            <th>Orientations</th>
            <th>Before</th>
            <th>Target</th>
            <th>Actual</th>
            </thead>
            <tbody>
            <tr>
                <td data-label="Toe" class="table-no-underline background">&nbsp;</td>
                <td class="table-column-head orientations">Left</td>
                <td data-label="Before"><?php echo $alignmentRow['37']; ?></td>
                <td data-label="Target" class="table-no-underline target">0.5mm +/-1.0mm</td>
                <td data-label="Actual"><?php echo $alignmentRow['38']; ?></td>
            </tr>
            <tr>
                <td class="table-no-underline noShow">&nbsp;</td>
                <td class="table-column-head orientations">Right</td>
                <td data-label="Before"><?php echo $alignmentRow['39']; ?></td>
                <td class="noShow target"></td>
                <td data-label="Actual"><?php echo $alignmentRow['40']; ?></td>
            </tr>
            <tr>
                <td class="table-no-underline noShow">&nbsp;</td>
                <td class="table-column-head orientations">Cross</td>
                <td data-label="Before"><?php echo $alignmentRow['41']; ?></td>
                <td data-label="Target">1mm +/-2.0mm</td>
                <td class="underPadding bottomTD" data-label="Actual"><?php echo $alignmentRow['42']; ?></td>
            </tr>
            </tbody>
        </table>
        <table class="table">
            <thead class="thead-dark">
            <th class="maxwidth-title">Setback</th>
            <th>&nbsp;</th>
            <th>Before</th>
            <th>Target</th>
            <th>Actual</th>
            </thead>
            <tbody>
            <tr>
                <td data-label="Setback" class="table-no-underline noRightBorder background">&nbsp;</td>
                <td class="table-column-head noRightBorder maxwidth-empty-second noShow orientations">
                    &nbsp;
                </td>
                <td data-label="Before"><?php echo $alignmentRow['43']; ?></td>
                <td data-label="Target" class="target">0°00'</td>
                <td class="underPadding bottomTD" data-label="Actual"><?php echo $alignmentRow['44']; ?></td>
            </tbody>
        </table>
        <table class="table">
            <thead class="thead-dark">
            <th class="maxwidth-title">Max steering lock</th>
            <th>Orientations</th>
            <th>Before</th>
            <th>Target</th>
            <th>Actual</th>
            </thead>
            <tbody>
            <tr>
                <td data-label="Max Steering Lock" class="table-no-underline background">Left Steer</td>
                <!--<td data-label="Left Steer" class="bigNoShow"></td>-->
                <td class="table-column-head orientations">Left</td>
                <td data-label="Before"><?php echo $alignmentRow['45']; ?></td>
                <td data-label="Target" class="table-no-underline target">-41°00' +/-1°30'</td>
                <td data-label="Actual"><?php echo $alignmentRow['46']; ?></td>
            </tr>
            <tr>
                <td class="table-no-underline noShow">&nbsp;</td>
                <td class="table-column-head orientations">Right</td>
                <td data-label="Before"><?php echo $alignmentRow['47']; ?></td>
                <td data-label="Target" class="target">33°00' +/-1°30'</td>
                <td data-label="Actual"><?php echo $alignmentRow['48']; ?></td>
            </tr>
            <tr>
                <td class="table-no-underline background">Right Steer</td>
                <td class="table-column-head orientations">Left</td>
                <td data-label="Before"><?php echo $alignmentRow['49']; ?></td>
                <td data-label="Target" class="table-no-underline target noShow">-41°00' +/-1°30'</td>
                <td data-label="Actual"><?php echo $alignmentRow['50']; ?></td>
            </tr>
            <tr>
                <td class="table-no-underline noShow">&nbsp;</td>
                <td class="table-column-head orientations">Right</td>
                <td data-label="Before"><?php echo $alignmentRow['51']; ?></td>
                <td class="noShow target">33°00' +/-1°30'</td>
                <td class="underPadding bottomTD" data-label="Actual"><?php echo $alignmentRow['52']; ?></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<!-- javascript file -->
<script src="jquery-3.4.1.min.js"></script>
<script src="scripts/scripts.js"></script>