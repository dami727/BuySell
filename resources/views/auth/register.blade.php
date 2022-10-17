<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
    <link href="{{asset('dist/css/bootstrap4.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
</head>
<body>
    <!-- start register body -->
    <div class="container my-3">
        <form action="" method="post">
            @csrf
            <div class="card">
                <div class="card-body">
                    <h5>General Information</h5> <hr>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="b_name" class="form-label">Buyer Name *</label>
                                <input type="text" id="b_name" name="b_name" class="form-control" placeholder="Enter Name" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="c_name" class="form-label">Company Name *</label>
                                <input type="text" id="c_name" name="c_name" class="form-control" placeholder="Enter Name" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="t_number" class="form-label">Telephone Number *</label>
                                <input type="number" id="t_number" name="t_number" class="form-control" placeholder="Enter Telephone" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="a_possition" class="form-label">Applicant's Position *</label>
                                <select name="a_possition" id="a_possition" class="form-control" required>
                                    <option value="0">--select possition--</option>
                                    <option value="general_manager">General Manager</option>
                                    <option value="store_operations_manager">Store Operations Manager</option>
                                    <option value="head_of_department">Head of Department</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="email" class="form-label">Email *</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email Address" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="p_number" class="form-label">Phone Number *</label>
                                <input type="number" id="p_number" name="p_number" class="form-control" placeholder="Phone Number" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="b_license" class="form-label">Bussiness License *</label>
                                <input type="file" id="b_license" name="b_license" class="" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5>Commpany Overview</h5> <hr>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="number_of_people" class="form-label">Number of People in Your Company *</label>
                                <select name="number_of_people" id="number_of_people" class="form-control" required>
                                    <option value="0">--select people--</option>
                                    <option value="less_then_50_people"> Less than 50 people </option>
                                    <option value="50_100_people"> 50-100 people </option>
                                    <option value="100_200_people"> 100-200 people </option>
                                    <option value="more_then_200_people"> More then 200 people </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="location_of_bussiness" class="form-label">Location of you Bussiness *</label>
                                <input type="text" id="location_of_bussiness" name="location_of_bussiness" class="form-control" placeholder="Location" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="source_of_product" class="form-label">Source of you Products *</label>
                                <select name="source_of_product" id="source_of_product" class="form-control">
                                    <option value="0">--select products--</option>
                                    <option value="own_factory">Own Factory</option>
                                    <option value="oem_oem">OEM OEM</option>
                                    <option value="trade_wholesale">Trade Wholesale</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="annual_sales" class="form-label">Annual sales you Business (USD) *</label>
                                <select name="annual_sales" id="annual_sales" class="form-control">
                                    <option value="0">--select business USD--</option>
                                    <option value="less_500000">Less then $500,000 US dollars</option>
                                    <option value="500000_1_million">500,000-1 million US dollars</option>
                                    <option value="500000_none">$500,000 or none</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="number_of_spu" class="form-label">Number of SPUs (USD) *</label>
                                <select name="number_of_spu" id="number_of_spu" class="form-control">
                                    <option value="0">--select SPUs--</option>
                                    <option value="less_10000">Less then 10,000 (USD)</option>
                                    <option value="10000_15000">10,000-15,000 (USD)</option>
                                    <option value="15000_20000">15,000-20,000 (USD)</option>
                                    <option value="more_then_20000">More then 20,000 (USD)</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="business_type" class="form-label">Type of your Business *</label>
                                <select name="business_type" id="business_type" class="form-control">
                                    <option value="0">--business type--</option>
                                    <option value="fashion_products">Fashion - Shoes & Clothing Accessories ·
                                    </option>
                                    <option value="electronics_products">Electronics - 3C Digital Small Appliances</option>
                                    <option value="baby_products">FMCG - FMCG, Maternal & Baby, Beauty</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="details" class="form-label">Others Details *</label>
                                <textarea name="details" id="details" class="form-control" cols="30" rows="3">write some details here</textarea>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
            <div class="button ">
                <button type="submit" class="btn btn-success">Register Now</button>
            </div>
        </form>
    </div>
    <!-- end register body -->
</body>
</html>