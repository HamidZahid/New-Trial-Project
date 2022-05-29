<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("includes/header/header.php"); ?>
    <title>Edit Transaction</title>
</head>

<body>
    <?php include("./includes/navbar/navbar.php"); ?>
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
                            <button type="submit" id="fetchbtn" class="btn btn-primary btn-outline-light"><i
                                    class="fa-solid fa-check"></i> Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Print</h5>
                        <hr>
                        <button type="submit" class="btn btn-success btn-outline-light"><i
                                class="fa-solid fa-file-invoice"></i> Receipt</button>
                    </div>
                </div>
                <div class="card my-4">
                    <div class="card-body">
                        <h5 class="card-title">Delete</h5>
                        <hr>
                        <p>Deleting Transaction Can not undone. Current Balance with associated account will be adjust.
                        </p>
                        <button type="submit" class="btn btn-danger btn-outline-light"><i
                                class="fa-solid fa-trash-can"></i> Delete</button>
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
</body>

</html>