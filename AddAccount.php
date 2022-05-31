<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("./includes/header/header.php"); ?>
    <title>Add Category</title>
</head>

<body>
    <div class="container-fluid">
        <div class="h4 fw-bold">Add Categories</div>
        <!-- breadcrumb   -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item text-decoration-none" id="" data-id=""><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page" id="" data-id="">Add Categories</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-body">
                <div class="h6 fw-bold" id="" data-id="">Add Categories</div>
                <p class="opacity-50" id="" data-id="">Use this form to add category to database..</p>
                <form action="" method="post">
                    <div class="row g-3 align-items-center">
                        <div class="col-3 margin--top">
                            <label for="category" class="col-form-label">Categories <span class="text-danger">*</span></label>
                        </div>
                        <div class="col-9">
                            <input type="text" id="category" class="form-control border border-bottom" aria-describedby="passwordHelpInline" data-id="" placeholder="Categories" />
                            <button type="submit" class="btn btn-primary my-2 rounded-0" id="" data-id="">Add Categories</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>