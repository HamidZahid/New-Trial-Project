<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("includes/header/header.php"); ?>
    <title>Add New Account</title>
</head>

<body>
    <?php include("./includes/navbar/navbar.php"); ?>
    <div class="container-fluid bg-light my-4">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add New Account</h5>
                        <hr>
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Account Title*</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" value="" data-id=""
                                    placeholder="" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Description</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" value="" data-id=""
                                    placeholder="" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Initial Balance [ USD ]</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" value=""
                                    data-id="" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Account Number</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" value=""
                                    data-id="" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Contact Person</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" value="" data-id=""
                                    placeholder="" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" value=""
                                    data-id="" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Internet Banking URL</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" value="" data-id=""
                                    placeholder="" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Owner</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" value="" data-id=""
                                    placeholder="" />
                            </div>
                            <button type="submit" id="fetchbtn" class="btn btn-primary">Save</button>
                        </form>
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