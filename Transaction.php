<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("includes/header/header.php"); ?>
    <title>Transaction</title>
</head>

<body>
    <?php include("./includes/navbar/navbar.php"); ?>
    <div class="container-fluid bg-light my-4">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Date Range</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" value="" data-id=""
                                    placeholder="EXP-00009" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Account</label>
                                <select id="disabledSelect" class="form-select" value="" data-id="">
                                    <option value="">All</option>
                                    <option value="">Choose</option>
                                    <option value="">Choose</option>
                                    <option value="">Choose</option>
                                    <option value="">Choose</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Contact</label>
                                <select id="disabledSelect" class="form-select">
                                    <option value="">All</option>
                                    <option value="">Choose</option>
                                    <option value="">Choose</option>
                                    <option value="">Choose</option>
                                    <option value="">Choose</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Category</label>
                                <select id="disabledSelect" class="form-select">
                                    <option value="">All</option>
                                    <option value="">Choose</option>
                                    <option value="">Choose</option>
                                    <option value="">Choose</option>
                                    <option value="">Choose</option>
                                </select>
                            </div>
                            <button type="button" class="btn btn-primary">Filter</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <section class="p-2 rounded">
                            <div class="container-fluid overflow-auto">
                                <table class="display" id="myTable" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Account</th>
                                            <th scope="col">Type</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Dr.(USD)</th>
                                            <th scope="col">Cr.(USD)</th>
                                            <th scope="col">Manage </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr href="javascript:void(0)" onclick="change_color(this)">
                                            <td>1120</td>
                                            <td>2022-05-25</td>
                                            <td>Standard Chartered</td>
                                            <td>In</td>
                                            <td>$1,800.00</td>
                                            <td>transfer for goods recieved</td>
                                            <td>0.00</td>
                                            <td>1800.00</td>
                                            <td><button class=" btn btn-primary btn-outline-light"> <i
                                                        class="fa-solid fa-file"></i></button></td>
                                        </tr>
                                        <tr href="javascript:void(0)" onclick="change_color(this)">
                                            <td>1121</td>
                                            <td>2022-05-25</td>
                                            <td>JPMorgan Chase & Co.</td>
                                            <td>Out</td>
                                            <td>$1,800.00</td>
                                            <td>transfer for goods recieved</td>
                                            <td>0.00</td>
                                            <td>1800.00</td>
                                            <td><button class=" btn btn-primary btn-outline-light"> <i
                                                        class="fa-solid fa-file"></i></button></td>
                                        </tr>
                                        <tr href="javascript:void(0)" onclick="change_color(this)">
                                            <td>1122</td>
                                            <td>2022-05-25</td>
                                            <td>HSBC</td>
                                            <td>Expense</td>
                                            <td>$1,800.00</td>
                                            <td>Phone</td>
                                            <td>0.00</td>
                                            <td>1800.00</td>
                                            <td><button class=" btn btn-primary btn-outline-light"> <i
                                                        class="fa-solid fa-file"></i></button></td>
                                        </tr>
                                        <tr href="javascript:void(0)" onclick="change_color(this)">
                                            <td>1123</td>
                                            <td>2022-05-25</td>
                                            <td>City Bank</td>
                                            <td>Expense</td>
                                            <td>$1,800.00</td>
                                            <td>Freight</td>
                                            <td>0.00</td>
                                            <td>1800.00</td>
                                            <td><button class=" btn btn-primary btn-outline-light"> <i
                                                        class="fa-solid fa-file"></i></button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $("#myInput").on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $("#dataTable tr").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
        $(document).ready(function () {
            $("#myInput").on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $("#dataTablee tr").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });

    </script>

    <script>
        $(document).ready(function () {
            $('#myTable').DataTable({
                "bPaginate": true,
                "bLengthChange": true,
                "bFilter": false,
                "bInfo": true,
                "bAutoWidth": true,
                // dom: 'Bfrtip',
                // buttons: [
                //     'copy', 'excel', 'pdf'
                // ]
            });
        });
    </script>
</body>

</html>