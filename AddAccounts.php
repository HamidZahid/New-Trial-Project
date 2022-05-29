<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("includes/header/header.php"); ?>
    <title>Add Accounts</title>
</head>

<body>
    <?php include("./includes/navbar/navbar.php"); ?>
    <div class="container-fluid bg-light my-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-10 ">
                                <h5 class="card-title">Manage Accounts</h5>
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary">New Account</button>
                            </div>
                        </div>
                        <hr>
                        <section class="p-2 rounded">
                            <div class="container-fluid overflow-auto">
                                <table class="display" id="myTable" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">Account</th>
                                            <th scope="col">Balance</th>
                                            <th scope="col">Manage</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr href="javascript:void(0)" onclick="change_color(this)">
                                            <th>Cash</th>
                                            <th>
                                                <h6>Equity (Initial Balance): $0.00</h6>
                                                <h6>Total In: $0.00</h6>
                                                <h6>Total Out: $0.00</h6>
                                                <h6>Balance (in home currency) :$0.00</h6>
                                            </th>
                                            <td><button class=" btn btn-primary"><i
                                                        class="fa-solid fa-plus"></i> Record initial Balance</button><button
                                                    class=" btn btn-dark"><i
                                                        class="fa-solid fa-pencil"></i> Edit</button><button
                                                    class=" btn btn-danger"><i
                                                        class="fa-solid fa-trash-can"></i> Delete</button>
                                            </td>
                                        </tr>
                                        <tr href="javascript:void(0)" onclick="change_color(this)">
                                            <th>City Bank</th>
                                            <th>
                                                <h6>Equity (Initial Balance): $0.00</h6>
                                                <h6>Total In: $0.00</h6>
                                                <h6>Total Out: $0.00</h6>
                                                <h6>Balance (in home currency) :$0.00</h6>
                                            </th>
                                            <td><button class=" btn btn-primary"><i
                                                        class="fa-solid fa-plus"></i> Record initial Balance</button><button
                                                    class=" btn btn-dark"><i
                                                        class="fa-solid fa-pencil"></i> Edit</button><button
                                                    class=" btn btn-danger"><i
                                                        class="fa-solid fa-trash-can"></i> Delete</button>
                                            </td>
                                        </tr>
                                        <tr href="javascript:void(0)" onclick="change_color(this)">
                                            <th>HSBC</th>
                                            <th>
                                                <h6>Equity (Initial Balance): $0.00</h6>
                                                <h6>Total In: $0.00</h6>
                                                <h6>Total Out: $0.00</h6>
                                                <h6>Balance (in home currency) :$0.00</h6>
                                            </th>
                                            <td><button class=" btn btn-primary"><i
                                                        class="fa-solid fa-plus"></i> Record initial Balance</button><button
                                                    class=" btn btn-dark"><i
                                                        class="fa-solid fa-pencil"></i> Edit</button><button
                                                    class=" btn btn-danger"><i
                                                        class="fa-solid fa-trash-can"></i> Delete</button>
                                            </td>
                                        </tr>
                                        <tr href="javascript:void(0)" onclick="change_color(this)">
                                            <th>JPMorgan Chase & Co.</th>
                                            <th>
                                                <h6>Equity (Initial Balance): $0.00</h6>
                                                <h6>Total In: $0.00</h6>
                                                <h6>Total Out: $0.00</h6>
                                                <h6>Balance (in home currency) :$0.00</h6>
                                            </th>
                                            <td><button class=" btn btn-primary"><i
                                                        class="fa-solid fa-plus"></i> Record initial Balance</button><button
                                                    class=" btn btn-dark"><i
                                                        class="fa-solid fa-pencil"></i> Edit</button><button
                                                    class=" btn btn-danger"><i
                                                        class="fa-solid fa-trash-can"></i> Delete</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </section>
                        <h5 class="mx-3">Net Worth - $892,793.00</h5>
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
                "bFilter": true,
                "bInfo": true,
                "bAutoWidth": true
            });
        });
        $(document).ready(function () {
            $('#myTablee').DataTable();
        });
    </script>

    <script>
        function change_color(key) {
            $(key).closest('tr').css({
                'background-color': '#F6FDF6',
                'color': 'black',
            }).siblings('tr').css({
                'background-color': 'white',
                'color': 'black',
            })
        }
    </script>
</body>

</html>