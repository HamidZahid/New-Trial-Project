<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("./includes/header/header.php"); ?>
    <title>Credit Customers</title>
</head>

<body>
    <div class="container-fluid">
        <div class="h4 fw-bold">Credit Customers Invoices List</div>
        <!-- breadcrumb   -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item text-decoration-none" id="" data-id=""><a href="#"
                        style="text-decoration: none;">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page" id="" data-id="">Credit Customers invoices List
                </li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-body">
                <div class="h6 fw-bold mx-3" id="" data-id="">Exporting Credit Customers Invoices Data</div>
                <div class="row my-3 mx-2">
                    <div class="col-9">
                        <div class="input-group">
                            <a href="" type="button" onclick="" onchange="" class="btn  btn-outline-dark rounded-0"
                                id="" data-id="">Copy</a>
                            <a href="" type="button" onclick="" onchange="" class="btn  btn-outline-dark" id=""
                                data-id="">Excel</a>
                            <a href="" type="button" onclick="" onchange="" class="btn  btn-outline-dark  " id=""
                                data-id="">CSV</a>
                            <a href="" type="button" onclick="" onchange="" class="btn  btn-outline-dark" id=""
                                data-id="">PDF</a>
                            <a href="" type="button" onclick="" onchange="" class="btn  btn-outline-dark rounded-0"
                                id="" data-id="">Print</a>
                        </div>
                    </div>
                    <div class="col-3">
                        <input type="search" class="form-control rounded" placeholder="Search" data-id=""
                            aria-label="Search" aria-describedby="search-addon" id="myInput" />
                    </div>
                </div>
                <section class="p-2 rounded">
                    <div class="container-fluid overflow-auto">
                        <table class="display" id="change" style="width:100%">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Customers</th>
                                    <th scope="col">Mobile</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Total Amount</th>
                                    <th scope="col">Paid Amount</th>
                                    <th scope="col">Remaing Amount</th>
                                    <th scope="col">Option</th>
                                </tr>
                            </thead>
                            <tbody id="dataTable">
                                <tr href="javascript:void(0)" onclick="change_color(this)">
                                    <td>1</td>
                                    <td>Mr Test</td>
                                    <td>1-682-291-7060</td>
                                    <td>mrtest@gmail.com</td>
                                    <td>$1450</td>
                                    <td>$1450</td>
                                    <td>$0</td>
                                    <td><button class=" btn btn-success rounded-0"><i class="fa-solid fa-eye"></i> View
                                            History</button><button class=" btn rounded-0 mx-1" style="border: 1px solid black"><i
                                                class="fa-solid fa-pencil"></i> Edit</button>
                                    </td>
                                </tr>
                                <tr href="javascript:void(0)" onclick="change_color(this)">
                                    <td>1</td>
                                    <td>Mr jhon</td>
                                    <td>1-682-491-7060</td>
                                    <td>mrjohn@gmail.com</td>
                                    <td>$1450</td>
                                    <td>$1450</td>
                                    <td>$300</td>
                                    <td><button class=" btn btn-success rounded-0"><i class="fa-solid fa-eye"></i> View
                                            History</button><button class=" btn rounded-0 mx-1" style="border: 1px solid black"><i
                                                class="fa-solid fa-pencil"></i> Edit</button>
                                    </td>
                                </tr>
                                <tr href="javascript:void(0)" onclick="change_color(this)">
                                    <td>3</td>
                                    <td>Mr ABC</td>
                                    <td>1-682-331-7060</td>
                                    <td>mrABC@gmail.com</td>
                                    <td>$1450</td>
                                    <td>$1450</td>
                                    <td>$2250</td>
                                    <td><button class=" btn btn-success rounded-0"><i class="fa-solid fa-eye"></i> View
                                            History</button><button class=" btn rounded-0 mx-1" style="border: 1px solid black"><i
                                                class="fa-solid fa-pencil"></i> Edit</button>
                                    </td>
                                </tr>
                            </tbody>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Customers</th>
                                <th scope="col">Mobile</th>
                                <th scope="col">Email</th>
                                <th scope="col">Total Amount</th>
                                <th scope="col">Paid Amount</th>
                                <th scope="col">Remaing Amount</th>
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
            $('#example').DataTable({
                searching: false,
                bLengthChange: false,
            });
        });
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
    </script>
</body>

</html>