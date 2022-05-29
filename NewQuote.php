<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("includes/header/header.php"); ?>
    <title>New Quote</title>
</head>

<body>
    <?php include("./includes/navbar/navbar.php"); ?>
    <div class="container-fluid bg-light my-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Create New Quote /Proposal/Estimate</h5>
                        <hr>
                        <form class="row g-3">
                            <div class="col-12">
                                <label for="inputAddress" class="form-label">Subject</label>
                                <input type="text" class="form-control" id="inputAddress" data-id="" value=""
                                    placeholder="">
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Customer</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select Contact</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <p>Or Add New Costomer</p>
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Date Created</label>
                                <input type="date" class="form-control" id="inputPassword4">
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                                </div>
                                <label for="inputAddress" class="form-label my-2">Quote Prefix</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="">
                                <label for="inputAddress" class="form-label my-2">Quote #</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="">
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Expiry Date</label>
                                <input type="date" class="form-control" id="inputPassword4">
                                <label for="inputAddress" class="form-label my-2">Stage</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="">
                                <label for="inputAddress" class="form-label my-2">Sales Tax</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="">
                                <p>Discount <span class="badge rounded-pill text-bg-primary"><i
                                            class="fa-solid fa-clock"></i> Get Discount</span></p>
                            </div>
                            <hr>
                            <div class="col-12">
                                <label for="inputAddress" class="form-label ">Proposal Text</label>
                                <textarea class="content" name="example"></textarea>
                                <p>Display At the Top Of the Quote</p>
                            </div>
                            <hr>
                            <div class="col-md-1">
                                <label for="inputCity" class="form-label">Item Code</label>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <label for="inputZip" class="form-label">Qty</label>
                                <input type="text" class="form-control" id="inputZip">
                            </div>
                            <div class="col-md-1">
                                <label for="inputZip" class="form-label">Price</label>
                                <input type="text" class="form-control" id="inputZip">
                            </div>
                            <div class="col-md-1">
                                <label for="inputZip" class="form-label">Total</label>
                                <input type="text" class="form-control" id="inputZip">
                            </div>
                            <div class="col-md-1">
                                <label for="inputZip" class="form-label">Tax</label>
                                <input type="text" class="form-control" id="inputZip">
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Add Blank
                                    Line</button>
                                <button type="submit" class="btn btn-primary"><i
                                        class="fa-solid fa-magnifying-glass"></i> Add Product OR Service</button>
                            </div>
                            <div class="col-md-8">
                                <!-- Dummy Grid Col -->
                            </div>
                            <div class="col-md-2">
                                <h6>Sub Total:</h6>
                                <h6>Discount:</h6>
                                <h6>TAX:</h6>
                                <h6>TOTAL:</h6>
                            </div>
                            <div class="col-md-2">
                                <h6>0.00</h6>
                                <h6>0.00</h6>
                                <h6>0.00</h6>
                                <h6>0.00</h6>
                            </div>
                            <hr>
                            <div class="col-12">
                                <label for="inputAddress" class="form-label ">Customer Notes</label>
                                <textarea class="content" name="example"></textarea>
                                <p>Display as a Footer Of the Quote</p>
                            </div>
                            <div class="col-12 d-md-flex justify-content-md-end">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('.content').richText();
        });
    </script>
</body>

</html>