<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("includes/header/header.php"); ?>
    <title>Sales Invoices </title>
</head>

<body>
    <?php include("./includes/navbar/navbar.php"); ?>
    <div class="container-fluid bg-light my-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-10 col-xl-9 ">
                                <h5 class="card-title my-2 ">Invoices</h5>
                            </div>
                            <div class="col-md-4 col-xl-3">
                                <button type="submit" class="btn btn-primary">Add Invoice</button>
                                <button type="submit" class="btn btn-danger ">View Reports</button>
                            </div>
                        </div>
                        <hr>
                        <nav class="navbar navbar-expand-lg">
                            <div class="container-fluid">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="nav nav-tabs" id="myTab" style="border: none;">
                                        <li class="nav-item">
                                            <a class="nav-link text-dark mx-4" data-toggle="tab" id="Filter"
                                                href="#Filter">Filter</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link  text-dark" data-toggle="tab" id="" href="#Unpaid">Unpaid
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link  text-dark" data-toggle="tab" id=""
                                                href="#PartiallyPaid">Partially Paid </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link  text-dark" data-toggle="tab" id="" href="#Paid">Paid
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link  text-dark" data-toggle="tab" id=""
                                                href="#Cancelled">Cancelled </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link  text-dark" data-toggle="tab" id="" href="#All">All </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                        <hr>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active " id="Filter">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="mb-3">
                                                    <label for="exampleInputPassword1" class="form-label">Date
                                                        Range</label>
                                                    <input type="text" class="form-control" id="exampleInputPassword1"
                                                        value="" data-id="" placeholder="EXP-00009" />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputPassword1"
                                                        class="form-label">Customer</label>
                                                    <select id="disabledSelect" value="" data-id="" class="form-select">
                                                        <option value="">All</option>
                                                        <option value="">Choose</option>
                                                        <option value="">Choose</option>
                                                        <option value="">Choose</option>
                                                        <option value="">Choose</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputPassword1" class="form-label">Status</label>
                                                    <select id="disabledSelect" value="" data-id="" class="form-select">
                                                        <option value="">All</option>
                                                        <option value="">Choose</option>
                                                        <option value="">Choose</option>
                                                        <option value="">Choose</option>
                                                        <option value="">Choose</option>
                                                    </select>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Filter</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-10">
                                                        <h5 class="card-title my-2">Invoices</h5>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </div>
                                                </div>
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Account</th>
                                                            <th scope="col">Amount</th>
                                                            <th scope="col">Invoice Date</th>
                                                            <th scope="col">Due Date</th>
                                                            <th scope="col">Status</th>
                                                            <th scope="col">Type</th>
                                                            <th scope="col">Manage</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>3</td>
                                                            <td class="">Maria Elizabeth <br> The Acme Inc.</td>
                                                            <td>$5,400.00</td>
                                                            <td>2022-05-25</td>
                                                            <td>2022-05-25</td>
                                                            <td><span
                                                                    class="badge rounded-pill text-bg-primary">Paid</span>
                                                            </td>
                                                            <td><span
                                                                    class="badge rounded-pill text-bg-success">OneTime</span>
                                                            </td>
                                                            <td><button class="btn btn-primary btn-outline-light"><i
                                                                        class="fa-solid fa-file-lines"></i></button>
                                                                <button class="btn btn-success btn-outline-light"><i
                                                                        class="fa-solid fa-clone"></i></button>
                                                                <button class="btn btn-dark btn-outline-light"><i
                                                                        class="fa-solid fa-folder-open"></i></button>
                                                                <button class="btn btn-danger btn-outline-light"><i
                                                                        class="fa-solid fa-trash-can"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td class=" ">Maria Elizabeth <br> The Acme Inc.</td>
                                                            <td>$5,400.00</td>
                                                            <td>2022-05-25</td>
                                                            <td>2022-05-25</td>
                                                            <td><span
                                                                    class="badge rounded-pill text-bg-danger">Unpaid</span>
                                                            </td>
                                                            <td><span
                                                                    class="badge rounded-pill text-bg-success">OneTime</span>
                                                            </td>
                                                            <td><button class="btn btn-primary btn-outline-light"><i
                                                                        class="fa-solid fa-file-lines"></i></button>
                                                                <button class="btn btn-success btn-outline-light"><i
                                                                        class="fa-solid fa-clone"></i></button>
                                                                <button class="btn btn-dark btn-outline-light"><i
                                                                        class="fa-solid fa-folder-open"></i></button>
                                                                <button class="btn btn-danger btn-outline-light"><i
                                                                        class="fa-solid fa-trash-can"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>1</td>
                                                            <td class="">Maria Elizabeth <br> The Acme Inc.</td>
                                                            <td>$400.00</td>
                                                            <td>2022-05-25</td>
                                                            <td>2022-05-25</td>
                                                            <td><span
                                                                    class="badge rounded-pill text-bg-primary">Paid</span>
                                                            </td>
                                                            <td><span
                                                                    class="badge rounded-pill text-bg-success">OneTime</span>
                                                            </td>
                                                            <td><button class="btn btn-primary btn-outline-light"><i
                                                                        class="fa-solid fa-file-lines"></i></button>
                                                                <button class="btn btn-success btn-outline-light"><i
                                                                        class="fa-solid fa-clone"></i></button>
                                                                <button class="btn btn-dark btn-outline-light"><i
                                                                        class="fa-solid fa-folder-open"></i></button>
                                                                <button class="btn btn-danger btn-outline-light"><i
                                                                        class="fa-solid fa-trash-can"></i></button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>