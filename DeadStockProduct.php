<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("./includes/header/header.php"); ?>
    <title>Dead Stock Products</title>
</head>

<body>
    <div class="container-fluid">
        <div class="h4 fw-bold">Dead Stock Products List</div>
        <!-- breadcrumb   -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item text-decoration-none" id="" data-id=""><a href="#"
                        style="text-decoration: none;">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page" id="" data-id="">Dead Stock Products List
                </li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-body">
                <div class="h6 fw-bold mx-3" id="" data-id="">Exporting Dead Stock Products Data</div>
                <section class="p-2 rounded">
                    <div class="container-fluid overflow-auto">
                        <table class="display" id="myTable" style="width:100%">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Products</th>
                                    <th scope="col">Model</th>
                                    <th scope="col">SKU</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Supplier Price</th>
                                    <th scope="col">Sell Price</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Option</th>
                                </tr>
                            </thead>
                            <tbody id="change">
                                <tr href="javascript:void(0)" onclick="change_color(this)">
                                    <td>1</td>
                                    <td>Dell Laptop</td>
                                    <td>ABC</td>
                                    <td>1</td>
                                    <td>3</td>
                                    <td>$30000</td>
                                    <td>$40000</td>
                                    <td><img src="./assets/images/profile.jpg" class="" alt="" style="width: 50px;"
                                            id="" data-id="" value="" /></td>
                                    <td><button class=" btn btn-success rounded-0"><i class="fa-solid fa-eye"></i>
                                            View</button>
                                        <button class=" btn rounded-0 mx-1" style="border: 1px solid black"><i class="fa-solid fa-circle-info"></i> Not
                                            Dead Stock</button>
                                        <button class=" btn rounded-0 mx-1" style="border: 1px solid black"><i class="fa-solid fa-pencil"></i>
                                            Edit</button>
                                        <button class=" btn btn-danger rounded-0 mx-1"><i
                                                class="fa-solid fa-trash-can"></i> Delete</button>
                                    </td>
                                </tr>
                                <tr href="javascript:void(0)" onclick="change_color(this)">
                                    <td>2</td>
                                    <td>CAISON</td>
                                    <td>000</td>
                                    <td>1</td>
                                    <td>3</td>
                                    <td>$30</td>
                                    <td>$400</td>
                                    <td><img src="./assets/images/profile.jpg" class="" alt="" style="width: 50px;" id=""
                                            data-id="" value="" /></td>
                                    <td><button class=" btn btn-success rounded-0"><i class="fa-solid fa-eye"></i>
                                            View</button>
                                        <button class=" btn rounded-0 mx-1" style="border: 1px solid black"><i class="fa-solid fa-circle-info"></i> Not
                                            Dead Stock</button>
                                        <button class=" btn rounded-0 mx-1" style="border: 1px solid black"><i class="fa-solid fa-pencil"></i>
                                            Edit</button>
                                        <button class=" btn btn-danger rounded-0 mx-1"><i
                                                class="fa-solid fa-trash-can"></i> Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Products</th>
                                <th scope="col">Model</th>
                                <th scope="col">SKU</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Supplier Price</th>
                                <th scope="col">Sell Price</th>
                                <th scope="col">Image</th>
                                <th scope="col">Option</th>
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