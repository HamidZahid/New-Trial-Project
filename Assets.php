<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("includes/header/header.php"); ?>
    <title>Assets</title>
</head>

<body>
    <?php include("./includes/navbar/navbar.php"); ?>
    <div class="container-fluid bg-light my-4">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Assets</h5>
                        <hr>
                        <button type="submit" class="btn btn-primary">Add an Asset</button>
                        <hr>
                        <div class="row">
                            <div class="col-md-1">
                                <i class="fa-solid fa-folder"></i>
                            </div>
                            <div class="col-md-6">
                                <h5>All Category</h5>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-1">
                                <i class="fa-solid fa-folder"></i>
                            </div>
                            <div class="col-md-6">
                                <h5>Electronics</h5>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-1">
                                <i class="fa-solid fa-folder"></i>
                            </div>
                            <div class="col-md-6">
                                <h5>Software</h5>
                            </div>
                        </div>
                        <hr>
                        <button type="submit" class="btn btn-primary">New Category</button>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total: $ 1,549.00</h5>
                        <hr>
                        <section class="p-2 rounded">
                            <div class="container-fluid overflow-auto">
                                <table class="display" id="myTable" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Date Purchased</th>
                                            <th scope="col">Supported untill</th>
                                            <th scope="col">Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr href="javascript:void(0)" onclick="change_color(this)">
                                            <th>Mackbook Pro</th>
                                            <td>2018-11-16</td>
                                            <td>2019-11-06</td>
                                            <td>$ 299.00</td>
                                        </tr>
                                        <tr href="javascript:void(0)" onclick="change_color(this)">
                                            <th>Mackbook Pro</th>
                                            <td>2018-11-16</td>
                                            <td>2019-11-06</td>
                                            <td>$ 1299.00</td>
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