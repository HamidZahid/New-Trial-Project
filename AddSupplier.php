<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("./includes/header/header.php"); ?>
    <title>Add Supplier</title>
</head>

<body>
    <div class="container-fluid">
        <div class="h4 fw-bold">Add Supplier</div>
        <!-- breadcrumb   -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item text-decoration-none" id="" data-id=""><a href="#"
                        style="text-decoration: none;">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page" id="" data-id="">Add Supplier</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-body">
                <div class="h6 fw-bold" id="" data-id="">Add Supplier</div>
                <p class="opacity-50" id="" data-id="">use this form to add supplier to database
                </p>
                <form action="" method="post">
                    <div class="row">
                        <div class="col-2 ">
                            <label for="category" class="col-form-label ">Suppliers <span class="text-danger">*</span></label>
                            <br>
                            <label for="category" class="col-form-label ">Contact Person <span class="text-danger">*</span></label>
                            <br>
                            <label for="category" class="col-form-label my-2">Email <span class="text-danger">*</span></label>
                            <br>
                            <label for="category" class="col-form-label my-2">Phone <span class="text-danger">*</span></label>
                            <br>
                            <label for="category" class="col-form-label ">Address <span class="text-danger">*</span></label>

                        </div>
                        <div class="col-md-10">
                            <input type="text" id="category" class="form-control my-2 " aria-describedby="passwordHelpInline"
                                data-id="" placeholder="Suppliers" />
                            <input type="text" id="category" class="form-control my-2 " aria-describedby="passwordHelpInline"
                                data-id="" placeholder="Contact Person" />
                            <input type="text" id="category" class="form-control my-2 " aria-describedby="passwordHelpInline"
                                data-id="" placeholder="Email" />
                            <input type="text" id="category" class="form-control my-2 " aria-describedby="passwordHelpInline"
                                data-id="" placeholder="Phone" />
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Address"></textarea>
                                <button type="submit" class="btn btn-primary rounded-0 my-3">Add Supplier</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>