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
                        <button type="submit" id="fetchbtn" class="btn btn-primary">New Category</button>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total: $ 1,549.00</h5>
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
                                            <th scope="col">Name</th>
                                            <th scope="col">Date Purchased</th>
                                            <th scope="col">Supported untill</th>
                                            <th scope="col">Price</th>
                                        </tr>
                                    </thead>
                                    <tbody id="change">
                                        <tr href="javascript:void(0)" onclick="change_color(this)">
                                            <th>Mackbook Pro</th>
                                            <th>2018-11-16</th>
                                            <th>2019-11-06</th>
                                            <th>$ 299.00</th>
                                        </tr>
                                        <tr href="javascript:void(0)" onclick="change_color(this)">
                                            <th>Mackbook Pro</th>
                                            <th>2018-11-16</th>
                                            <th>2019-11-06</th>
                                            <th>$ 1,299.00</th>
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
        let fetchbtn = document.getElementById('fetchbtn');
        fetchbtn.addEventListener('click', buttonClickHandler)
        function buttonClickHandler() {
            // instantiate an xhr object
            const xhr = new XMLHttpRequest();
            // open the object
            xhr.open('POST', '', '');
            // what to do on progress
            xhr.onprogress = function () {
                console.log('on progress')
            }
            // what to do when response is ready
            xhr.onload = function () {
                console.log(this.responseText)
            }
            // send the request
            xhr.send();
        }
    </script>
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

    <!-- <script>
        $(document).ready(function () {
            $('#myTable').DataTable({
                "bPaginate": true,
                "bLengthChange": false,
                "bFilter": true,
                searching: false,
                "bInfo": true,
                "bAutoWidth": true
            });
        });
        $(document).ready(function () {
            $('#myTablee').DataTable();
        });
    </script> -->
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable({
                searching: false,
                bLengthChange: false,
                language: {
                    searchPanes: {

                    }
                }
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