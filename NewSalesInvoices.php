<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("includes/header/header.php"); ?>
    <title>New Sales Invoices</title>
</head>

<body>
    <?php include("./includes/navbar/navbar.php"); ?>
    <div class="container-fluid bg-light my-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                        <div class="col-md-10">
                        <h5 class="card-title">INV-00038</h5>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="submit" class="btn btn-primary">Save & Close</button>
                    </div>
                </div>
                        <hr>
                        <form class="row g-3">
                            <div class="col-md-4">
                                <label for="inputEmail4" class="form-label">Customer</label>
                                <select class="form-select" id="" data-id="" value=""
                                    aria-label="Default select example">
                                    <option selected>Select Contact</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <p>Or Add New Costomer</p>
                            </div>
                            <div class="col-md-4">
                                <label for="inputPassword4" class="form-label">Status</label>
                                <input type="text" class="form-control" id="inputPassword4" data-id="" value="" />
                            </div>
                            <div class="col-md-4">
                                <label for="inputPassword4" class="form-label">Currency</label>
                                <input type="text" class="form-control" id="inputPassword4" data-id="" value="" />
                            </div>
                            <div class="col-md-12">
                                <label for="inputPassword4" class="form-label">Title (Optional)</label>
                                <input type="text" class="form-control" id="inputPassword4" data-id="" value="" />
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                                </div>
                                <label for="inputAddress" class="form-label my-2">Invoice Date</label>
                                <input type="date" class="form-control" id="inputAddress" data-id="" value="" />
                            </div>
                            <div class="col-md-4">
                                <label for="inputPassword4" class="form-label">Invoice Prefix</label>
                                <input type="text" class="form-control" id="inputPassword4" data-id="" value="" />
                                <label for="inputAddress" class="form-label my-2">Invoice #</label>
                                <input type="text" class="form-control" id="inputAddress" data-id="" value="" />
                                <p>Keep it Blank to Generate Invoice Number Automatically</p>
                                <label for="inputAddress" class="form-label">Payment Terms</label>
                                <input type="text" class="form-control" id="inputAddress" data-id="" value="" />
                            </div>
                            <div class="col-md-4">
                                <label for="inputPassword4" class="form-label">Show quantity as</label>
                                <input type="text" class="form-control" id="inputPassword4" data-id="" value="" />
                            </div>
                            <hr>
                            <div class="col-6">
                                <label for="inputAddress" class="form-label ">Item Name</label>
                                <textarea class="content" name="example"></textarea>
                                <button type="submit" class="btn btn-primary my-3"><i class="fa-solid fa-plus"></i> Add Blank
                                    Line</button>
                                <button type="submit" class="btn btn-primary"><i
                                        class="fa-solid fa-magnifying-glass"></i> Add Product OR Service</button>
                            </div>
                            <div class="col-1">
                                <label for="inputZip" class="form-label">Qty</label>
                                <input type="text" class="form-control my-4" id="inputZip" data-id="" value="" />
                            </div>
                            <div class="col-1">
                                <label for="inputZip" class="form-label">Price</label>
                                <input type="text" class="form-control my-4" id="inputZip" data-id="" value="" />
                            </div>
                            <div class="col-2">
                                <label for="inputZip" class="form-label">Discount</label>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">%</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">$</label>
                                  </div>
                                <input type="text" class="form-control" id="inputZip" data-id="" value="" /> 
                            </div>
                            <div class="col-1">
                                <label for="inputZip" class="form-label">Tax</label>
                                <input type="text" class="form-control my-4" id="inputZip" data-id="" value="" /> 
                            </div>
                            <div class="col-1">
                                <label for="inputZip" class="form-label">Total</label>
                                <input type="text" class="form-control my-4" id="inputZip" data-id="" value="" />
                            </div>
                            <hr>
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
                                <label for="inputAddress" class="form-label ">Invoices Terms.... </label>
                                <textarea class="content" name="example"></textarea>
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