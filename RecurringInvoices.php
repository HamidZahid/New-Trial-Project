<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("includes/header/header.php"); ?>
    <title>Recurring invoices</title>
</head>

<body>
    <?php include("./includes/navbar/navbar.php"); ?>
    <div class="container-fluid bg-light my-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-10">
                                <h5 class="card-title">List Invoices</h5>
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Add
                                    Recurring Invoices</button>
                            </div>
                        </div>
                        <hr>
                        <section class="p-2 rounded">
                            <div class="container-fluid overflow-auto">
                                <table class="display" id="myTable" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Account</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Invoice Date</th>
                                            <th scope="col">Due Date</th>
                                            <th scope="col">Next Invoice</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Manage</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr href="javascript:void(0)" onclick="change_color(this)">
                                            <td>No Data</td>
                                            <td>No Data</td>
                                            <td>No Data</td>
                                            <td>No Data</td>
                                            <td>No Data</td>
                                            <td>No Data</td>
                                            <td>No Data</td>
                                            <td>No Data</td>
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