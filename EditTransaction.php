<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("includes/header/header.php"); ?>
    <title>Edit Transaction</title>
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
                        <h5 class="card-title">Edit Transaction - [#Income-1118]</h5>
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
                                <label for="exampleInputPassword1" class="form-label">Date</label>
                                <input type="date" class="form-control" id="exampleInputPassword1" value=""
                                    data-id="" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Description</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" value=""
                                    data-id="" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Amount</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" value=""
                                    data-id="" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Category</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" value=""
                                    data-id="" />
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
                                <label for="exampleInputPassword1" class="form-label">Payer</label>
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
                                <label for="exampleInputPassword1" class="form-label">Ref#</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" value="" data-id=""
                                    placeholder="None" />
                                    <p style="opacity: 0.5;">e.g Transaction ID, Check No.</p>
                            </div>
                            <button type="submit" class="btn btn-primary btn-outline-light" ><i class="fa-solid fa-check"></i> Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Print</h5>
                        <hr>
                        <button type="submit" class="btn btn-success btn-outline-light"><i class="fa-solid fa-file-invoice"></i> Receipt</button>
                    </div>
                </div>
                <div class="card my-4">
                    <div class="card-body">
                        <h5 class="card-title">Delete</h5>
                        <hr>
                        <p>Deleting Transaction Can not undone. Current Balance with associated account will be adjust.</p>
                        <button type="submit" class="btn btn-danger btn-outline-light"><i class="fa-solid fa-trash-can"></i> Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>