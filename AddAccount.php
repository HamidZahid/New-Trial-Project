<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("./includes/header/header.php"); ?>
    <title>Add Products</title>
</head>

<body>
    <div class="container-fluid">
        <div class="h4 fw-bold">Add Products</div>
        <!-- breadcrumb   -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item text-decoration-none" id="" data-id=""><a href="#"
                        style="text-decoration: none;">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page" id="" data-id="">Add Products</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-body">
                <div class="h6 fw-bold" id="" data-id="">Add Products</div>
                <p class="opacity-50" id="" data-id="">Use this form to upload products through CSV.please download the
                    sample CSV
                    just add product info in specific colum. (please do not rearrange the column! just add specific infi
                    in mentioned column).
                    for your ease Categories.id, warehouse-id,Supplier-id dropdown are added. please copy it from there
                    to csv.
                    <br>
                    For images, upload all images through that form (below the csv form).Add the image name in csv.
                </p>
                <form action="" method="post">
                    <div class="justify-content-center mb-3">
                        <a href="#" style="text-decoration: none;">Download Sample CSV</a>
                    </div>
                    <div class="row">
                        <div class="col-2 ">
                            <label for="category" class="col-form-label">Products<span
                                    class="text-danger">*</span></label>
                        </div>
                        <div class="col-4">
                            <input type="file" id="category" class="form-control " aria-describedby="passwordHelpInline"
                                data-id="" placeholder="Categories" />
                            <button type="submit" class="btn btn-primary my-4 rounded-0" id="" data-id="">Upload Product
                                CSV</button>
                        </div>
                        <div class="col-2">
                            <label for="category" class="col-form-label ">Categories-id</label>
                            <br>
                            <label for="category" class="col-form-label my-4 ">Warehouse-id</label>
                        </div>
                        <div class="col-4">
                            <select class="form-select" aria-label="Default select example">
                                <option selected></option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <select class="form-select my-4" aria-label="Default select example">
                                <option selected></option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 ">
                            <label for="category" class="col-form-label">Images <span
                                    class="text-danger">*</span></label>
                        </div>
                        <div class="col-4">
                            <input type="file" id="category" class="form-control " aria-describedby="passwordHelpInline"
                                data-id="" />
                            <button type="submit" class="btn btn-primary my-4 rounded-0" id="" data-id="">Upload Product
                                Images</button>
                        </div>
                        <div class="col-2">
                            <label for="category" class="col-form-label ">Unit Code-id</label>
                            <br>
                            <label for="category" class="col-form-label my-4 ">Supplier-id</label>
                        </div>
                        <div class="col-4">
                            <select class="form-select" aria-label="Default select example">
                                <option selected></option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <select class="form-select my-4" aria-label="Default select example">
                                <option selected></option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>