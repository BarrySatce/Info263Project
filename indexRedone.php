<!-- This is your main page -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Tyre Town</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">

    <!-- css style sheet -->
    <link rel="stylesheet" href="css/redoneStyles.css">

    <!-- javascript file -->
    <script src="scripts/scripts.js"></script>

</head>
<body>
<!-- This container contains everything on the page
     The page is split up into 4 'Rows', each with their own amount of columns-->
<div class="container-fluid">

    <!-- This is the first row, it will contain the logo, and the page Header (or a banner if we choose) -->
    <div class="row my-5" id="header">
        <div class="col-2">Image goes here</div>
        <div class="col-10">Banner/Header Goes here</div>
    </div>

    <!-- This is the second row, it will contain the navigation bar -->
    <div class="row my-5 my-auto text-center" id="navigation">
        <div class="col-4 border">Home Button</div>
        <div class="col-4 border">Spare Button</div>
        <div class="col-4 border">Spare Button</div>
    </div>

    <!-- This is the third row, it will have the search bar -->
    <div class="row my-5" id="search">
        <div class="col my-auto text-center">Search Bar</div>
    </div>

    <!-- This is the forth row, it will have all the invoice options on the left,
         when on is clicked a table will be shown to the right containing that info -->
    <div class="row my-5" id="main">
        <div class="col">
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
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td data-label="Name">name</td>
                            <td data-label="Email">email</td>
                            <td data-label="Phone">phone</td>
                            <td data-label="Vehicle Registration">vr</td>
                            <td data-label="Vehicle Model"><?php echo $row['VEHICLE MODEL']; ?></td>
                            <td data-label="Vehicle Make"><?php echo $row['VEHICLE MAKE']; ?></td>
                            <td data-label="Year"><?php echo $row['YEAR']; ?></td>
                            <td data-label="Body Type"><?php echo $row['BODY TYPE']; ?></td>
                            <td data-label="Chassis Number"><?php echo $row['CHASSIS NUMBER']; ?></td>
                            <td data-label="Odometer Reading"><?php echo $row['ODOMETER READING']; ?></td>
                        </tr>
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
                        <tr>
                            <td data-label="Tax Invoice Number"><?php echo $row['TAX INVOICE NUMBER']; ?></td>
                            <td data-label="Service Description"><?php echo $row['SERVICE DESCRIPTION']; ?></td>
                            <td data-label="Quantity"><?php echo $row['QUANTITY']; ?></td>
                            <td data-label="Unit Price"><?php echo '$' . $row['UNIT PRICE']; ?></td>
                            <td data-label="Amount"><?php echo '$' . $row['AMOUNT']; ?></td>
                            <td data-label="Subtotal"><?php echo '$' . $row['SUBTOTAL']; ?></td>
                            <td data-label="GST"><?php echo '$' . $row['GST']; ?></td>
                            <td data-label="Total"><?php echo '$' . $row['TOTAL']; ?></td>
                            <td data-label="Paid"><?php echo '$' . $row['PAID']; ?></td>
                            <td data-label="Date"><?php echo $row['DATE']; ?></td>
                            <td data-label="Due Date"><?php echo $row['DUE DATE']; ?></td>
                        </tr>
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
                        <tr>
                            <td data-label="Name"><?php echo $row['NAME']; ?></td>
                            <td data-label="Email"><?php echo $row['EMAIL']; ?></td>
                            <td data-label="Phone"><?php echo $row['PHONE']; ?></td>
                            <td data-label="Vehicle Registration"><?php echo $row['VEHICLE REGISTRATION']; ?></td>
                            <td data-label="Vehicle Model"><?php echo $row['VEHICLE MODEL']; ?></td>
                            <td data-label="Vehicle Make"><?php echo $row['VEHICLE MAKE']; ?></td>
                            <td data-label="Year"><?php echo $row['YEAR']; ?></td>
                            <td data-label="Body Type"><?php echo $row['BODY TYPE']; ?></td>
                            <td data-label="Chassis Number"><?php echo $row['CHASSIS NUMBER']; ?></td>
                            <td data-label="Odometer Reading"><?php echo $row['ODOMETER READING']; ?></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="alignment" role="tabpanel" aria-labelledby="alignment-tab">
                    <header>Back Axle</header>
                    <table class="table">
                        <thead class="thead-dark">
                        <th class="maxwidth-title">Camber</th>
                        <th>&nbsp;</th>
                        <th>Before</th>
                        <th>Target</th>
                        <th>Actual</th>
                        </thead>
                        <tbody>
                        <tr>
                            <td data-label="Camber" class="table-no-underline background noPad">&nbsp;</td>
                            <td class="table-column-head orientations">Left</td>
                            <td data-label="Before"><?php echo $row['1']; ?></td>
                            <td data-label="Target" class="table-no-underline target">-0°40' +/-0°30'</td>
                            <td data-label="Actual"><?php echo $row['2']; ?></td>
                        </tr>
                        <tr>
                            <td class="table-no-underline noShow">&nbsp;</td>
                            <td class="table-column-head">Right</td>
                            <td data-label="Before"><?php echo $row['3']; ?></td>
                            <td class="noShow target"></td>
                            <td data-label="Actual"><?php echo $row['4']; ?></td>
                        </tr>
                        <tr>
                            <td class="table-no-underline noShow">&nbsp;</td>
                            <td class="table-column-head">Cross</td>
                            <td data-label="Before"><?php echo $row['5']; ?></td>
                            <td data-label="Target" class="target">0°00' +/-0°30'</td>
                            <td class="underPadding bottomTD" data-label="Actual"><?php echo $row['6']; ?></td>
                        </tr>
                        </tbody>
                    </table>

                    <table class="table">
                        <thead class="thead-dark">
                        <th class="maxwidth-title">Toe</th>
                        <th>&nbsp;</th>
                        <th>Before</th>
                        <th>Target</th>
                        <th>Actual</th>
                        </thead>
                        <tbody>
                        <tr>
                            <td data-label="Toe" class="table-no-underline background">&nbsp;</td>
                            <td class="table-column-head orientations">Left</td>
                            <td data-label="Before"><?php echo $row['7']; ?></td>
                            <td data-label="Target" class="table-no-underline target">1.5mm +/-1.00</td>
                            <td data-label="Actual"><?php echo $row['8']; ?></td>
                        </tr>
                        <tr>
                            <td class="table-no-underline noShow">&nbsp;</td>
                            <td class="table-column-head orientations">Right</td>
                            <td data-label="Before"><?php echo $row['9']; ?></td>
                            <td class="noShow target"></td>
                            <td data-label="Actual"><?php echo $row['10']; ?></td>
                        </tr>
                        <tr>
                            <td class="table-no-underline noShow">&nbsp;</td>
                            <td class="table-column-head orientations">Total</td>
                            <td data-label="Before"><?php echo $row['11']; ?></td>
                            <td data-label="Target" class="target">3mm +/-2.0mm</td>
                            <td class="underPadding bottomTD" data-label="Actual"><?php echo $row['12']; ?></td>
                        </tr>
                        </tbody>
                    </table>
                    <table class="table">
                        <thead class="thead-dark">
                        <th class="maxwidth-title">Geometrical driving axis</th>
                        <th>&nbsp;</th>
                        <th>Before</th>
                        <th>Target</th>
                        <th>Actual</th>
                        </thead>
                        <tbody>
                        <tr>
                            <td data-label="Geometrical Driving Axis"
                                class="table-no-underline noRightBorder background">&nbsp;
                            </td>
                            <td class="table-column-head noRightBorder maxwidth-empty-second orientations noShow">
                                &nbsp;
                            </td>
                            <td data-label="Before"><?php echo $row['13']; ?></td>
                            <td data-label="Target" class="target">0°00'</td>
                            <td data-label="Actual"><?php echo $row['14']; ?></td>
                        </tbody>
                    </table>
                    <header>Front Axle</header>
                    <table class="table">
                        <thead class="thead-dark">
                        <th class="maxwidth-title">Camber</th>
                        <th>&nbsp;</th>
                        <th>Before</th>
                        <th>Target</th>
                        <th>Actual</th>
                        </thead>
                        <tbody>
                        <tr>
                            <td data-label="Camber" class="table-no-underline background">&nbsp;</td>
                            <td class="table-column-head orientations">Left</td>
                            <td data-label="Before"><?php echo $row['15']; ?></td>
                            <td data-label="Target" class="table-no-underline target">0°00' +/-0°30'</td>
                            <td data-label="Actual"><?php echo $row['16']; ?></td>
                        </tr>
                        <tr>
                            <td class="table-no-underline noShow">&nbsp;</td>
                            <td class="table-column-head orientations">Right</td>
                            <td data-label="Before"><?php echo $row['17']; ?></td>
                            <td class="noShow target"></td>
                            <td data-label="Actual"><?php echo $row['18']; ?></td>
                        </tr>
                        <tr>
                            <td class="table-no-underline noShow">&nbsp;</td>
                            <td class="table-column-head orientations">Cross</td>
                            <td data-label="Before"><?php echo $row['19']; ?></td>
                            <td data-label="Target" class="target">0°00' +/-0°30'</td>
                            <td class="underPadding bottomTD" data-label="Actual"><?php echo $row['20']; ?></td>
                        </tr>
                        </tbody>
                    </table>
                    <table class="table">
                        <thead class="thead-dark">
                        <th class="maxwidth-title">Caster</th>
                        <th>&nbsp;</th>
                        <th>Before</th>
                        <th>Target</th>
                        <th>Actual</th>
                        </thead>
                        <tbody>
                        <tr>
                            <td data-label="Caster" class="table-no-underline background">&nbsp;</td>
                            <td class="table-column-head orientations">Left</td>
                            <td data-label="Before"><?php echo $row['21']; ?></td>
                            <td data-label="Target" class="table-no-underline target">2°35' +/-0°30'</td>
                            <td data-label="Actual"><?php echo $row['22']; ?></td>
                        </tr>
                        <tr>
                            <td class="table-no-underline noShow">&nbsp;</td>
                            <td class="table-column-head orientations">Right</td>
                            <td data-label="Before"><?php echo $row['23']; ?></td>
                            <td class="noShow target"></td>
                            <td data-label="Actual"><?php echo $row['24']; ?></td>
                        </tr>
                        <tr>
                            <td class="table-no-underline noShow">&nbsp;</td>
                            <td class="table-column-head orientations">Cross</td>
                            <td data-label="Before"><?php echo $row['25']; ?></td>
                            <td data-label="Target" class="target">0°00' +/-0°30'</td>
                            <td class="underPadding bottomTD" data-label="Actual"><?php echo $row['26']; ?></td>
                        </tr>
                        </tbody>
                    </table>
                    <table class="table">
                        <thead class="thead-dark">
                        <th class="maxwidth-title">SAI</th>
                        <th>&nbsp;</th>
                        <th>Before</th>
                        <th>Target</th>
                        <th>Actual</th>
                        </thead>
                        <tbody>
                        <tr>
                            <td data-label="SAI" class="table-no-underline background">&nbsp;</td>
                            <td class="table-column-head orientations">Left</td>
                            <td data-label="Before"><?php echo $row['27']; ?></td>
                            <td data-label="Target" class="table-no-underline target">12°40' +/-0°45</td>
                            <td data-label="Actual"><?php echo $row['28']; ?></td>
                        </tr>
                        <tr>
                            <td class="table-no-underline noShow">&nbsp;</td>
                            <td class="table-column-head orientations">Right</td>
                            <td data-label="Before"><?php echo $row['29']; ?></td>
                            <td class="noShow target"></td>
                            <td data-label="Actual"><?php echo $row['30']; ?></td>
                        </tr>
                        <tr>
                            <td class="table-no-underline noShow">&nbsp;</td>
                            <td class="table-column-head orientations">Cross</td>
                            <td data-label="Before"><?php echo $row['31']; ?></td>
                            <td data-label="Target" class="target">0°00'</td>
                            <td class="underPadding bottomTD" data-label="Actual"><?php echo $row['32']; ?></td>
                        </tr>
                        </tbody>
                    </table>
                    <table class="table">
                        <thead class="thead-dark">
                        <th class="maxwidth-title">Track differential angle</th>
                        <th>&nbsp;</th>
                        <th>Before</th>
                        <th>Target</th>
                        <th>Actual</th>
                        </thead>
                        <tbody>
                        <tr>
                            <td data-label="Track Differential Angle" class="table-no-underline background">&nbsp;</td>
                            <td class="table-column-head orientations">Left</td>
                            <td data-label="Before"><?php echo $row['33']; ?></td>
                            <td class="table-no-underline noShow target"></td>
                            <td data-label="Actual"><?php echo $row['34']; ?></td>
                        </tr>
                        <tr>
                            <td class="table-no-underline noShow">&nbsp;</td>
                            <td class="table-column-head orientations">Right</td>
                            <td data-label="Before"><?php echo $row['35']; ?></td>
                            <td class="noShow target"></td>
                            <td class="underPadding bottomTD" data-label="Actual"><?php echo $row['36']; ?></td>
                        </tr>
                        </tbody>
                    </table>
                    <table class="table">
                        <thead class="thead-dark">
                        <th class="maxwidth-title">Toe</th>
                        <th>&nbsp;</th>
                        <th>Before</th>
                        <th>Target</th>
                        <th>Actual</th>
                        </thead>
                        <tbody>
                        <tr>
                            <td data-label="Toe" class="table-no-underline background">&nbsp;</td>
                            <td class="table-column-head orientations">Left</td>
                            <td data-label="Before"><?php echo $row['37']; ?></td>
                            <td data-label="Target" class="table-no-underline target">0.5mm +/-1.0mm</td>
                            <td data-label="Actual"><?php echo $row['38']; ?></td>
                        </tr>
                        <tr>
                            <td class="table-no-underline noShow">&nbsp;</td>
                            <td class="table-column-head orientations">Right</td>
                            <td data-label="Before"><?php echo $row['39']; ?></td>
                            <td class="noShow target"></td>
                            <td data-label="Actual"><?php echo $row['40']; ?></td>
                        </tr>
                        <tr>
                            <td class="table-no-underline noShow">&nbsp;</td>
                            <td class="table-column-head orientations">Cross</td>
                            <td data-label="Before"><?php echo $row['41']; ?></td>
                            <td data-label="Target">1mm +/-2.0mm</td>
                            <td class="underPadding bottomTD" data-label="Actual"><?php echo $row['42']; ?></td>
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
                            <td data-label="Before"><?php echo $row['43']; ?></td>
                            <td data-label="Target" class="target">0°00'</td>
                            <td class="underPadding bottomTD" data-label="Actual"><?php echo $row['44']; ?></td>
                        </tbody>
                    </table>
                    <table class="table">
                        <thead class="thead-dark">
                        <th class="maxwidth-title">Max steering lock</th>
                        <th>&nbsp;</th>
                        <th>Before</th>
                        <th>Target</th>
                        <th>Actual</th>
                        </thead>
                        <tbody>
                        <tr>
                            <td data-label="Max Steering Lock" class="table-no-underline background">Left Steer</td>
                            <!--<td data-label="Left Steer" class="bigNoShow"></td>-->
                            <td class="table-column-head orientations">Left</td>
                            <td data-label="Before"><?php echo $row['45']; ?></td>
                            <td data-label="Target" class="table-no-underline target">-41°00' +/-1°30'</td>
                            <td data-label="Actual"><?php echo $row['46']; ?></td>
                        </tr>
                        <tr>
                            <td class="table-no-underline noShow">&nbsp;</td>
                            <td class="table-column-head orientations">Right</td>
                            <td data-label="Before"><?php echo $row['47']; ?></td>
                            <td data-label="Target" class="target">33°00' +/-1°30'</td>
                            <td data-label="Actual"><?php echo $row['48']; ?></td>
                        </tr>
                        <tr>
                            <td class="table-no-underline background">Right Steer</td>
                            <td class="table-column-head orientations">Left</td>
                            <td data-label="Before"><?php echo $row['49']; ?></td>
                            <td data-label="Target" class="table-no-underline target noShow">-41°00' +/-1°30'</td>
                            <td data-label="Actual"><?php echo $row['50']; ?></td>
                        </tr>
                        <tr>
                            <td class="table-no-underline noShow">&nbsp;</td>
                            <td class="table-column-head orientations">Right</td>
                            <td data-label="Before"><?php echo $row['51']; ?></td>
                            <td class="noShow target">33°00' +/-1°30'</td>
                            <td class="underPadding bottomTD" data-label="Actual"><?php echo $row['52']; ?></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</html>