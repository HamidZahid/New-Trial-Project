<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("includes/header/header.php"); ?>
    <title>Add Expense</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container-fluid bg-light my-4">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add Expense</h5>
                        <hr>
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Account</label>
                                <select id="disabledSelect" value="" data-id="" class="form-select">
                                    <option value="">Choose an Account</option>
                                    <option value="">Choose</option>
                                    <option value="">Choose</option>
                                    <option value="">Choose</option>
                                    <option value="">Choose</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Code</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" value="" data-id=""
                                    placeholder="EXP-00009" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Date</label>
                                <input type="date" class="form-control" id="exampleInputPassword1" value=""
                                    data-id="" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Description</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" value=""
                                    data-id="" />
                                <label for="exampleInputPassword1" class="form-label"><i
                                        class="fa-solid  fa-paperclip"></i> Attach File</label>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Currency</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" value="" data-id=""
                                    placeholder="USD" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Amount</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" value=""
                                    data-id="" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Category</label>
                                <select id="disabledSelect" class="form-select" value="" data-id="">
                                    <option value="">Uncategorized</option>
                                    <option value="">Choose</option>
                                    <option value="">Choose</option>
                                    <option value="">Choose</option>
                                    <option value="">Choose</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Tags</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" value=""
                                    data-id="" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Company</label>
                                <select id="disabledSelect" class="form-select">
                                    <option value="">None</option>
                                    <option value="">Choose</option>
                                    <option value="">Choose</option>
                                    <option value="">Choose</option>
                                    <option value="">Choose</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Payee</label>
                                <select id="disabledSelect" class="form-select">
                                    <option value="">Choose Contact</option>
                                    <option value="">Choose</option>
                                    <option value="">Choose</option>
                                    <option value="">Choose</option>
                                    <option value="">Choose</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Staff</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" value="" data-id=""
                                    placeholder="None" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Method</label>
                                <select id="disabledSelect" class="form-select">
                                    <option value="">Select Payment Method</option>
                                    <option value="">Choose</option>
                                    <option value="">Choose</option>
                                    <option value="">Choose</option>
                                    <option value="">Choose</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Status</label>
                                <select id="disabledSelect" class="form-select">
                                    <option value="">Active</option>
                                    <option value="">Inactive</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Recent Expense</h5>
                        <hr>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>HSBC</td>
                                    <td class="text-primary">Salaries</td>
                                    <td>5,400.00</td>
                                </tr>
                                <tr>
                                    <td>HSBC</td>
                                    <td class="text-primary">Salaries</td>
                                    <td>5,400.00</td>
                                </tr>
                                <tr>
                                    <td>City Bank</td>
                                    <td class="text-primary">Salaries</td>
                                    <td>5,400.00</td>
                                </tr>
                                <tr>
                                    <td>jPMorhan Chase & Co</td>
                                    <td class="text-primary">Freight</td>
                                    <td>5,400.00</td>
                                </tr>
                                <tr>
                                    <td>City Bank</td>
                                    <td class="text-primary">Salaries</td>
                                    <td>5,400.00</td>
                                </tr>
                                <tr>
                                    <td>jPMorhan Chase & Co</td>
                                    <td class="text-primary">Freight</td>
                                    <td>5,400.00</td>
                                </tr>
                                <tr>
                                    <td>City Bank</td>
                                    <td class="text-primary">Salaries</td>
                                    <td>5,400.00</td>
                                </tr>
                                <tr>
                                    <td>jPMorhan Chase & Co</td>
                                    <td class="text-primary">Freight</td>
                                    <td>5,400.00</td>
                                </tr>
                                <tr>
                                    <td>City Bank</td>
                                    <td class="text-primary">Salaries</td>
                                    <td>5,400.00</td>
                                </tr>
                                <tr>
                                    <td>jPMorhan Chase & Co</td>
                                    <td class="text-primary">Freight</td>
                                    <td>5,400.00</td>
                                </tr>
                                <tr>
                                    <td>City Bank</td>
                                    <td class="text-primary">Salaries</td>
                                    <td>5,400.00</td>
                                </tr>
                                <tr>
                                    <td>jPMorhan Chase & Co</td>
                                    <td class="text-primary">Freight</td>
                                    <td>5,400.00</td>
                                </tr>
                                <tr>
                                    <td>City Bank</td>
                                    <td class="text-primary">Salaries</td>
                                    <td>5,400.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>