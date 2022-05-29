<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("includes/header/header.php"); ?>
    <title>Quotes</title>
</head>

<body>
    <?php include("./includes/navbar/navbar.php"); ?>
    <div class="container-fluid bg-light my-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total : 1</h5>
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
                                            <th scope="col">#</th>
                                            <th scope="col">Account</th>
                                            <th scope="col">Subject</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Date Created</th>
                                            <th scope="col">Expiry Date</th>
                                            <th scope="col">Stage</th>
                                            <th scope="col">Manage</th>
                                        </tr>
                                    </thead>
                                    <tbody id="change">
                                        <tr href="javascript:void(0)" onclick="change_color(this)">
                                            <td>QUOTE-00001</td>
                                            <td>Maria Elizabeth</td>
                                            <th>Develop a new website for The Acme Inc.</th>
                                            <td>2800.00</td>
                                            <td>2019-02-27</td>
                                            <td>2019-03-27</td>
                                            <td></td>
                                            <td><button class=" btn btn-primary"><i
                                                        class="fa-solid fa-file"></i></button><button
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