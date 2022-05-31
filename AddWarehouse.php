<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("./includes/header/header.php"); ?>
    <title>Add Warehouse</title>
</head>

<body>
    <div class="container-fluid">
        <div class="h4 fw-bold">Add Warehouse</div>
        <!-- breadcrumb   -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item text-decoration-none" id="" data-id=""><a href="#"
                        style="text-decoration: none;">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page" id="" data-id="">Add Warehouse</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-body">
                <div class="h6 fw-bold" id="" data-id="">Add Warehouse</div>
                <p class="opacity-50" id="" data-id="">use this form to add Warehouse to database
                </p>
                <form action="" method="post">
                    <div class="row">
                        <div class="col-2 ">
                            <label for="category" class="col-form-label ">Warehouse <span
                                    class="text-danger">*</span></label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" id="category" class="form-control my-2 "
                                aria-describedby="passwordHelpInline" data-id="" placeholder="Warehouse" />
                            <button type="submit" class="btn btn-primary rounded-0 my-3">Add Warehouse</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>