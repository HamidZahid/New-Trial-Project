<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("./includes/header/header.php"); ?>
    <title>Manage Expense Invoice</title>
</head>

<body>
    <div class="container-fluid">
        <div class="h4 fw-bold">Expense Invoices List</div>
        <!-- breadcrumb   -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item text-decoration-none" id="" data-id=""><a href="#"
                        style="text-decoration: none;">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page" id="" data-id="">Expense Invoices List
                </li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-body">
                <div class="h6 fw-bold mx-3" id="" data-id="">Exporting Expense Invoices Data</div>
                <section class="p-2 rounded">
                    <div class="container-fluid overflow-auto">
                        <table class="display" id="myTable" style="width:100%">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Invoice no</th>
                                    <th scope="col">Created by. Name</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Total Amount</th>
                                    <th scope="col">Paid Amount</th>
                                    <th scope="col">Unpaid Amount</th>
                                    <th scope="col">Option</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody id="change">
                                <tr href="javascript:void(0)" onclick="change_color(this)">
                                    <td>1</td>
                                    <td>1</td>
                                    <td>Admin</td>
                                    <td>2022-04-20</td>
                                    <td>$77</td>
                                    <td>$0</td>
                                    <td>$77</td>
                                    <td>
                                        <button class=" btn btn-success rounded-0"><i class="fa-solid fa-eye"></i>
                                            View</button>
                                        <button class=" btn rounded-0 mx-1" style="border: 1px solid black;"><i
                                                class="fa-solid fa-pencil"></i>
                                            Edit</button>
                                        <button class=" btn btn-danger rounded-0 mx-1"><i
                                                class="fa-solid fa-trash-can"></i> Delete</button>
                                    </td>
                                    <td><select class="form-select" aria-label="Default select example">
                                            <option selected>In Process</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr href="javascript:void(0)" onclick="change_color(this)">
                                    <td>2</td>
                                    <td>2</td>
                                    <td>Admin</td>
                                    <td>2022-05-20</td>
                                    <td>$50</td>
                                    <td>$0</td>
                                    <td>$50</td>
                                    <td>
                                        <button class=" btn btn-success rounded-0"><i class="fa-solid fa-eye"></i>
                                            View</button>
                                        <button class=" btn rounded-0 mx-1" style="border: 1px solid black;"><i
                                                class="fa-solid fa-pencil"></i>
                                            Edit</button>
                                        <button class=" btn btn-danger rounded-0 mx-1"><i
                                                class="fa-solid fa-trash-can"></i> Delete</button>
                                    </td>
                                    <td><select class="form-select" aria-label="Default select example">
                                            <option selected>In Process</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </td>
                                </tr>
                            </tbody>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Invoice no</th>
                                <th scope="col">Created by. Name</th>
                                <th scope="col">Date</th>
                                <th scope="col">Total Amount</th>
                                <th scope="col">Paid Amount</th>
                                <th scope="col">Unpaid Amount</th>
                                <th scope="col">Option</th>
                                <th scope="col">Status</th>
                            </tr>
                        </table>
                    </div>
                </section>
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
            $("#myInput").on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $("#change tr").filter(function () {
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
                searching: true,
                "bFilter": true,
                "bInfo": true,
                "bAutoWidth": true
            });
        });
    </script>
</body>

</html>