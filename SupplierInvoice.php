<!DOCTYPE html>
<html lang="en">

<head>
<?php include("./includes/header/header.php"); ?>
    <title>Add Expenses</title>
</head>

<body>
    <div class="container-fluid">
        <div class="h4 fw-bold">Add Expenses</div>
        <!-- breadcrumb   -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item text-decoration-none" id="" data-id=""><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page" id="" data-id="">Add Expenses</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-3">
                            <label for="expense" class="col-form-label" data-id="">Expense Type <span class="text-danger">*</span></label>
                        </div>
                        <div class="col-4">
                            <select class="form-select rounded-0" aria-label="Default select example" id="expense" data-id="">
                                <option selected>Select Expense</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="row g-3 align-items-center my-2">
                        <div class="col-3">
                            <label for="date" class="col-form-label" data-id="">Date<span class="text-danger">*</span></label>
                        </div>
                        <div class="col-4">
                            <input type="date" id="date" class="form-control rounded-0" aria-describedby="" data-id="" placeholder="Categories" />
                        </div>
                    </div>
                </form>
                <table class="">
                    <tr>
                        <th id="" data-id="">Item Information <span class="text-danger m-1">*</span></th>
                        <th id="" data-id="">Quantity<span class="text-danger m-1">*</span></th>
                        <th id="" data-id="">Rate<span class="text-danger m-1">*</span></th>
                        <th id="" data-id="">Total<span class="text-danger m-1">*</span></th>
                        <th id="" data-id="">Action</th>
                    </tr>
                    <tbody>
                    <tr>
                        <td>
                            <input type="text" class="form-control rounded-0" id="itemname" placeholder="Item Name" data-id=""/>
                        </td>
                        <td>
                            <input type="text" class="form-control rounded-0" id="quantity" placeholder="0" data-id=""/>
                        </td>
                        <td>
                            <input type="text" class="form-control rounded-0" id="rate" placeholder="0.00" data-id=""/>
                        </td>
                        <td>
                            <input type="text" class="form-control rounded-0" id="total" placeholder="0.00" data-id="" readonly/>
                        </td>
                        <td id="" data-id="">
                            <a href="" type="button" class="btn btn-danger rounded-0">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <div id="" data-id="" class="fw-bold float-end">Grand Total :</div>
                        </td>
                        <td>
                            <input type="text" class="form-control rounded-0" id="total" placeholder="0.00" data-id="" readonly/>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <a type="button" id="" data-id="" class="btn btn-success rounded-0 ">Add New Item:</a>
                        </td>
                        <td colspan="2">
                            <div id="" data-id="" class="fw-bold float-end">Paid Amount :</div>
                        </td>
                        <td>
                            <input type="text" class="form-control rounded-0" id="paid" placeholder="0.00" data-id="" />
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <a type="button" id="" data-id="" class="btn btn-success rounded-0 ">Submit</a>
                            <a type="button" id="" data-id="" class="btn btn-warning text-white rounded-0 ">Full Paid</a>
                        </td>
                        <td colspan="2">
                            <div id="" data-id="" class="fw-bold float-end">Due :</div>
                        </td>
                        <td>
                            <input type="text" class="form-control rounded-0" id="due" placeholder="0.00" data-id="" readonly/>
                        </td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>