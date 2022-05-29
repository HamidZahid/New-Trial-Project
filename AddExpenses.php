<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("includes/header/header.php"); ?>
    <title>Add Expense</title>
</head>

<body>
    <?php include("./includes/navbar/navbar.php"); ?>
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