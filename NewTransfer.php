<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("includes/header/header.php"); ?>
    <title>New Transfer</title>
</head>

<body>
    <?php include("./includes/navbar/navbar.php"); ?>
    <div class="container-fluid bg-light my-4">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">New Transfer</h5>
                        <hr>
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">From</label>
                                <select id="disabledSelect" value="" data-id="" class="form-select">
                                    <option value="">Choose an Account</option>
                                    <option value="">Choose</option>
                                    <option value="">Choose</option>
                                    <option value="">Choose</option>
                                    <option value="">Choose</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">To</label>
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
                                <label for="exampleInputPassword1" class="form-label">Tags</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" value=""
                                    data-id="" />
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
                                <label for="exampleInputPassword1" class="form-label">Ref</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" value="" data-id=""
                                    placeholder="None" />
                                <p style="opacity: 0.5;">e.g Transaction ID, Check No.</p>
                            </div>
                            <button type="submit"id="fetchbtn" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Recent Transfer</h5>
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
                                    <td>JPMorgan Chase & Co</td>
                                    <td class="text-primary">transfer for goods recieved</td>
                                    <td>1,800.00</td>
                                </tr>
                            </tbody>
                        </table>
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