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

    <!-- CSS style sheet -->
    <link rel="stylesheet" href="css/redoneStyles.css">

</head>
<body>

<div class="container-fluid">
    <!-- Logo and title -->
    <div class="row my-5" id="header">
        <div class="col-12 col-lg-3"><img src="tyres.png" class="img-fluid"><b class="caret"></b></a></div>
        <div class="col-12 col-lg-7"><h1 id="title">Tyre Town</h1></a></div>
    </div>

    <!-- Site navigation buttons -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">Pages</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active navi">
                    <a class="nav-link" href="indexRedone.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item navi">
                    <a class="nav-link" href="#">Book Appointment</a>
                </li>
                <li class="nav-item navi">
                    <a class="nav-link" href="#">About Us</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Search Bar -->
    <div class="row my-5" id="search">
        <div class="container">
            <br/>
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <form id="searchForm" class="card card-sm" method="post">
                        <div class="card-body row no-gutters align-items-center">
                            <div class="col-auto">
                                <i class="fas fa-search h4 text-body"></i>
                            </div>
                            <div class="col">
                                <input class="form-control form-control-lg form-control-borderless" type="text"
                                       name="input" id="receiptID" placeholder="Enter invoice number...">
                            </div>
                            <div class="col-auto">
                                <button id="submitButton" class="btn btn-lg btn-success" type="submit"
                                        name="submitButton"
                                        value="Submit">Search
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Container for table content, filled on successful invoice search -->
    <div class="row my-5" id="main">
        <div id="requestData" class="col">
            Please enter an invoice number to start
        </div>
    </div>
</div>
</body>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src="scripts/scripts.js"></script>

</html>