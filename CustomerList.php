<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("includes/header/header.php"); ?>
    <title>Customer List</title>
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
                                <h5 class="card-title">List Customer</h5>
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary">Add Customer</button>
                                <button type="submit" class="btn btn-danger">Import</button>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-3">
                                <div class="input-group rounded float-right">
                                    <span class="input-group-text border-0" data-id="" id="search-addon"><i
                                            class="fas fa-search"></i></span>
                                    <input type="search" class="form-control rounded" placeholder="Search" data-id=""
                                        aria-label="Search" aria-describedby="search-addon" id="myInput" />
                                </div>
                            </div>
                            <div class="col-9">
                                <a href="" type="button" onclick="" onchange="" class="btn btn-secondary float-end "
                                    id="" data-id="">Print</a>
                                <a href="" type="button" onclick="" onchange="" class="btn btn-dark float-end mx-1 "
                                    id="" data-id="">Copy</a>
                                <a href="" type="button" onclick="" onchange=""
                                    class="btn btn-primary text-white float-end  " id="" data-id="">CSV</a>
                                <a href="" type="button" onclick="" onchange=""
                                    class="btn light-green btn-success text-white float-end  mx-1" id=""
                                    data-id="">Excel</a>
                                <a href="" type="button" onclick="" onchange=""
                                    class="btn light-red btn-danger text-white float-end " id="" data-id="">PDF</a>
                            </div>
                        </div>
                        <section class="p-2 rounded">
                            <div class="container-fluid overflow-auto">
                                <table class="display" id="myTable" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">Image</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Manage</th>
                                        </tr>
                                    </thead>
                                    <tbody id="change">
                                        <tr href="javascript:void(0)" onclick="change_color(this)">
                                            <td><img src="assets/images/profile.jpg" id="" width="40"
                                                    class="profile_img mx-2" alt="" srcset="" /></td>
                                            <th>Stephen John</th>
                                            <th>Client@example.com</th>
                                            <th>1-682-291-7060</th>
                                            <td><button class=" btn btn-primary"><i
                                                        class="fa-solid fa-location-crosshairs"></i></button><button
                                                    class=" btn btn-dark"><i
                                                        class="fa-solid fa-pencil"></i></button><button
                                                    class=" btn btn-danger"><i
                                                        class="fa-solid fa-trash-can"></i></button>
                                            </td>
                                        </tr>
                                        <tr href="javascript:void(0)" onclick="change_color(this)">
                                            <td><img src="assets/images/profile.jpg" id="" width="40"
                                                    class="profile_img mx-2" alt="" srcset="" /></td>
                                            <th>Stephen John</th>
                                            <th class="text-primary">Client@example.com</th>
                                            <th>1-682-291-7060</th>
                                            <td><button class=" btn btn-primary"><i
                                                        class="fa-solid fa-location-crosshairs"></i></button><button
                                                    class=" btn btn-dark"><i
                                                        class="fa-solid fa-pencil"></i></button><button
                                                    class=" btn btn-danger"><i
                                                        class="fa-solid fa-trash-can"></i></button>
                                            </td>
                                        </tr>
                                        <tr href="javascript:void(0)" onclick="change_color(this)">
                                            <td><img src="assets/images/profile.jpg" id="" width="40"
                                                    class="profile_img mx-2" alt="" srcset="" /></td>
                                            <th>Stephen John</th>
                                            <th class="text-success">Client@example.com</th>
                                            <th>1-682-291-7060</th>
                                            <td><button class=" btn btn-primary"><i
                                                        class="fa-solid fa-location-crosshairs"></i></button><button
                                                    class=" btn btn-dark"><i
                                                        class="fa-solid fa-pencil"></i></button><button
                                                    class=" btn btn-danger"><i
                                                        class="fa-solid fa-trash-can"></i></button>
                                            </td>
                                        </tr>
                                        <tr href="javascript:void(0)" onclick="change_color(this)">
                                            <td><img src="assets/images/profile.jpg" id="" width="40"
                                                    class="profile_img mx-2" alt="" srcset="" /></td>
                                            <th>Stephen John</th>
                                            <th class="text-danger">Client@example.com</th>
                                            <th>1-682-291-7060</th>
                                            <td><button class=" btn btn-primary"><i
                                                        class="fa-solid fa-location-crosshairs"></i></button><button
                                                    class=" btn btn-dark"><i
                                                        class="fa-solid fa-pencil"></i></button><button
                                                    class=" btn btn-danger"><i
                                                        class="fa-solid fa-trash-can"></i></button>
                                            </td>
                                        </tr>
                                        <tr href="javascript:void(0)" onclick="change_color(this)">
                                            <td><img src="assets/images/profile.jpg" id="" width="40"
                                                    class="profile_img mx-2" alt="" srcset="" /></td>
                                            <th>Stephen John</th>
                                            <th class="text-primary">Client@example.com</th>
                                            <th>1-682-291-7060</th>
                                            <td><button class=" btn btn-primary"><i
                                                        class="fa-solid fa-location-crosshairs"></i></button><button
                                                    class=" btn btn-dark"><i
                                                        class="fa-solid fa-pencil"></i></button><button
                                                    class=" btn btn-danger"><i
                                                        class="fa-solid fa-trash-can"></i></button>
                                            </td>
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
                "bLengthChange": false,
                searching: false,
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