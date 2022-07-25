<!DOCTYPE html>
<html lang="en">
    
<head>
        
        <meta charset="utf-8" />
                <title>Condotwits - Main Page</title>
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
                <meta content="" name="author" />
                <meta http-equiv="X-UA-Compatible" content="IE=edge" />

                <!-- App favicon -->
                <link rel="shortcut icon" href="assets/images/favicon.ico">

       

        <link href="assets/plugins/selectr/selectr.min.css" rel="stylesheet" type="text/css" />

         <!-- App css -->
         <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
         <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
         <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body id="body" data-layout="horizontal" class="">
        
        <?php include 'include/topnav.php';?>
        
        <div class="page-wrapper">
            
            <!-- Page Content-->
            <div class="page-content-tab">
<div class="col-lg-12" >
    <center>
                <div class="col-lg-8 mt-3 mb-5">
                    <img src="assets/images/ad.png">
                </div>
            </center>
            </div>
                <div class="container-fluid">
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">  
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row d-flex justify-content-center mb-2">
                                                
                                                <div class="col">

                                                    <p class="text-dark mb-0 fw-semibold"><i class="ti ti-user font-16 "></i><span style="margin-left: 20px;">Profile</span></p>
                                                </div><!--end col-->
                                                <div class="col-auto align-self-center">
                                                    <button class="btn btn-primary" style="border-radius: 20px !important;">Post</button>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                            <div class="row d-flex justify-content-center mb-2">
                                                
                                                <div class="col">

                                                    <p class="text-dark mb-0 fw-semibold"><i class="ti ti-bell font-16 "></i><span style="margin-left: 20px;">Notification</span></p>
                                                </div><!--end col-->
                                                <div class="col-auto align-self-center">
                                                    <!-- <label  style="border-radius: 20px !important;width: 25px;height: 25px;background: #F6BABA;text-align: center;padding-top: 3px;color: #DC2626;">20</label> -->
                                                    <span class="badge bg-soft-danger badge-pill">2</span>
                                                </div><!--end col-->
                                            </div>
                                            <div class="row d-flex justify-content-center mb-2">
                                                
                                                <div class="col">

                                                    <p class="text-dark mb-0 fw-semibold"><i class="ti ti-message font-16 "></i><span style="margin-left: 20px;">Messages</span></p>
                                                </div><!--end col-->
                                                <div class="col-auto align-self-center">
                                                    <span class="badge bg-soft-primary badge-pill">22</span>
                                                </div><!--end col-->
                                            </div>
                                            <div class="row d-flex justify-content-center mb-2">
                                                
                                                <div class="col">

                                                    <p class="text-dark mb-0 fw-semibold"><i class="ti ti-briefcase  font-16 "></i><span style="margin-left: 20px;">My Portfolio</span></p>
                                                </div><!--end col-->
                                                <!--end col-->
                                            </div>
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                    <div class="card">
                                    <div class="card-header">
                                        <div class="row align-items-center">
                                            <div class="col">                      
                                                <h4 class="card-title">My Watchlist </h4>                      
                                            </div><!--end col-->
                                            <div class="col-auto"> 
                                                <div class="watchlist">
                                                    <select id="Watchlist" class="form-select">
                                                        <option value="value-1" class="px-5">My Watchlist</option>
                                                        <option value="value-2">F & O</option>
                                                        <option value="value-3">Delivery</option>
                                                        <option value="value-3">Crypto</option>
                                                        <option value="value-3">Commodity</option>
                                                        <option value="value-3">Add New +</option>
                                                    </select>  
                                                </div>                                                 
                                            </div><!--end col-->
                                        </div>  <!--end row-->                                  
                                    </div><!--end card-header-->
                                    <div class="card-body p-0">
                                        <div class="watchlist-body" data-simplebar>
                    
                    
                                            <div class="accordion" id="watchlist_2">
                                                <div class="accordion-item border-top-0">
                                                  <div class="accordion-header" id="headingOne">
                                                    <a class="accordion-button d-block py-2 px-3 collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        <div class="d-flex justify-content-between">
                                                            <div class="align-self-center">
                                                                <h6 class="m-0 text-uppercase font-11">Apple Inc</h6>
                                                                <p class="text-uppercase font-10 mb-0">nasdaq</p>
                                                            </div>
                                                            <div>
                                                                <h6 class="m-0 text-uppercase font-11">$147.95 <i class="ti ti-trending-down text-danger"></i></h6>
                                                                <div class="d-inline-block font-10"><span class="text-danger">-110.60</span> <span class="text-danger">(30.52%)</span></div>
                                                            </div>
                                                        </div><!-- end /div -->
                                                    </a>
                                                  </div>
                                                  <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#watchlist_2">
                                                    <div class="accordion-body">
                                                        <div class="d-flex justify-content-between">
                                                            <div class="action-icons">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item align-self-center mx-0 bg-success">
                                                                        <a href="javascript: void(0);" data-bs-toggle="modal" data-bs-target="#BuyStocks"><i class="ti ti-letter-b text-white email-action-icons-item"></i></a>
                                                                    </li><!--end /li-->
                                                                    <li class="list-inline-item align-self-center mx-0 bg-danger">
                                                                        <a href="javascript: void(0);" data-bs-toggle="modal" data-bs-target="#SellStocks"><i class="ti ti-letter-s text-white email-action-icons-item"></i></a>
                                                                    </li><!--end /li-->
                                                                    <li class="list-inline-item align-self-center mx-0">
                                                                        <a href="details.html"><i class="ti ti-chart-candle email-action-icons-item"></i></a>
                                                                    </li><!--end /li-->                                                        
                                                                    <li class="list-inline-item align-self-center mx-0">
                                                                        <a href="javascript: void(0);"><i class="ti ti-trash email-action-icons-item"></i></a>
                                                                    </li><!--end /li-->
                                                                </ul><!--end /ul-->
                                                            </div> <!--end action-icons--> 
                                                            <div>
                                                                <p class="mb-0 text-muted">Avg. Traded Price : <span class="fw-semibold text-dark">$148.00</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="row">                                                        
                                                            <div class="col">
                                                                <div class="row align-items-center">
                                                                    <div class="col">                      
                                                                        <h6 class="text-success">Bid Price</h6>                      
                                                                    </div><!--end col-->
                                                                    <div class="col-auto"> 
                                                                        <p class="mb-0">Quantity</p>                                         
                                                                    </div><!--end col-->
                                                                </div>  <!--end row-->
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="d-flex justify-content-between align-items-start">
                                                                        <div class="me-auto">
                                                                            <p class="mb-0 ">140.50</p>
                                                                        </div>
                                                                        <span class="bg-soft-success px-1 rounded">1523</span>
                                                                    </li> 
                                                                    <li class="d-flex justify-content-between align-items-start">
                                                                        <div class="me-auto">
                                                                            <p class="mb-0 ">139.50</p>
                                                                        </div>
                                                                        <span class="bg-soft-success px-1 rounded">1823</span>
                                                                    </li>    
                                                                    <li class="d-flex justify-content-between align-items-start">
                                                                        <div class="me-auto">
                                                                            <p class="mb-0 ">136.00</p>
                                                                        </div>
                                                                        <span class="bg-soft-success px-1 rounded">1101</span>
                                                                    </li> 
                                                                    <li class="d-flex justify-content-between align-items-start">
                                                                        <div class="me-auto">
                                                                            <p class="mb-0 ">133.50</p>
                                                                        </div>
                                                                        <span class="bg-soft-success px-1 rounded">182</span>
                                                                    </li>                                                                
                                                                </ul>
                                                            </div><!--end col-->
                                                            <div class="col">
                                                                <div class="row align-items-center">
                                                                    <div class="col">                      
                                                                        <h6 class="text-danger">Ask Price</h6>                      
                                                                    </div><!--end col-->
                                                                    <div class="col-auto"> 
                                                                        <p class="mb-0">Quantity</p>                                         
                                                                    </div><!--end col-->
                                                                </div>  <!--end row-->
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="d-flex justify-content-between align-items-start">
                                                                        <div class="me-auto">
                                                                            <p class="mb-0 ">146.50</p>
                                                                        </div>
                                                                        <span class="bg-soft-danger px-1 rounded">1523</span>
                                                                    </li> 
                                                                    <li class="d-flex justify-content-between align-items-start">
                                                                        <div class="me-auto">
                                                                            <p class="mb-0 ">148.00</p>
                                                                        </div>
                                                                        <span class="bg-soft-danger px-1 rounded">1823</span>
                                                                    </li>    
                                                                    <li class="d-flex justify-content-between align-items-start">
                                                                        <div class="me-auto">
                                                                            <p class="mb-0 ">150.00</p>
                                                                        </div>
                                                                        <span class="bg-soft-danger px-1 rounded">1101</span>
                                                                    </li> 
                                                                    <li class="d-flex justify-content-between align-items-start">
                                                                        <div class="me-auto">
                                                                            <p class="mb-0 ">153.00</p>
                                                                        </div>
                                                                        <span class="bg-soft-danger px-1 rounded">182</span>
                                                                    </li>                                                                
                                                                </ul>
                                                            </div><!--end col-->
                                                        </div><!--end row-->
                                                    </div><!--end accordion-body-->
                                                  </div>
                                                </div>
                                                <div class="accordion-item">
                                                  <div class="accordion-header" id="headingTwo">
                                                    <a class="accordion-button  d-block py-2 px-3 collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        <div class="d-flex justify-content-between">
                                                            <div class="align-self-center">
                                                                <h6 class="m-0 text-uppercase font-11">Tesla Inc</h6>
                                                                <p class="text-uppercase font-10 mb-0">nasdaq</p>
                                                            </div>
                                                            <div>
                                                                <h6 class="m-0 text-uppercase font-11">$680.35 <i class="ti ti-trending-up text-success"></i></h6>
                                                                <div class="d-inline-block font-10"><span class="text-success">50.10</span> <span class="text-success">(5.52%)</span></div>
                                                            </div>
                                                        </div><!-- end /div -->
                                                    </a>
                                                  </div>
                                                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#watchlist_2">
                                                    <div class="accordion-body">
                                                        <div class="d-flex justify-content-between">
                                                            <div class="action-icons">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item align-self-center mx-0 bg-success">
                                                                        <a href="javascript: void(0);" data-bs-toggle="modal" data-bs-target="#BuyStocks"><i class="ti ti-letter-b text-white email-action-icons-item"></i></a>
                                                                    </li><!--end /li-->
                                                                    <li class="list-inline-item align-self-center mx-0 bg-danger">
                                                                        <a href="javascript: void(0);" data-bs-toggle="modal" data-bs-target="#SellStocks"><i class="ti ti-letter-s text-white email-action-icons-item"></i></a>
                                                                    </li><!--end /li-->
                                                                    <li class="list-inline-item align-self-center mx-0">
                                                                        <a href="javascript: void(0);"><i class="ti ti-chart-candle email-action-icons-item"></i></a>
                                                                    </li><!--end /li-->                                                        
                                                                    <li class="list-inline-item align-self-center mx-0">
                                                                        <a href="javascript: void(0);"><i class="ti ti-trash email-action-icons-item"></i></a>
                                                                    </li><!--end /li-->
                                                                </ul><!--end /ul-->
                                                            </div> <!--end action-icons--> 
                                                            <div>
                                                                <p class="mb-0 text-muted">Avg. Traded Price : <span class="fw-semibold text-dark">$682.00</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="row">                                                        
                                                            <div class="col">
                                                                <div class="row align-items-center">
                                                                    <div class="col">                      
                                                                        <h6 class="text-success">Bid Price</h6>                      
                                                                    </div><!--end col-->
                                                                    <div class="col-auto"> 
                                                                        <p class="mb-0">Quantity</p>                                         
                                                                    </div><!--end col-->
                                                                </div>  <!--end row-->
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="d-flex justify-content-between align-items-start">
                                                                        <div class="me-auto">
                                                                            <p class="mb-0 ">680.50</p>
                                                                        </div>
                                                                        <span class="bg-soft-success px-1 rounded">1523</span>
                                                                    </li> 
                                                                    <li class="d-flex justify-content-between align-items-start">
                                                                        <div class="me-auto">
                                                                            <p class="mb-0 ">679.50</p>
                                                                        </div>
                                                                        <span class="bg-soft-success px-1 rounded">1823</span>
                                                                    </li>    
                                                                    <li class="d-flex justify-content-between align-items-start">
                                                                        <div class="me-auto">
                                                                            <p class="mb-0 ">676.00</p>
                                                                        </div>
                                                                        <span class="bg-soft-success px-1 rounded">1101</span>
                                                                    </li> 
                                                                    <li class="d-flex justify-content-between align-items-start">
                                                                        <div class="me-auto">
                                                                            <p class="mb-0 ">673.50</p>
                                                                        </div>
                                                                        <span class="bg-soft-success px-1 rounded">182</span>
                                                                    </li>                                                                
                                                                </ul>
                                                            </div><!--end col-->
                                                            <div class="col">
                                                                <div class="row align-items-center">
                                                                    <div class="col">                      
                                                                        <h6 class="text-danger">Ask Price</h6>                      
                                                                    </div><!--end col-->
                                                                    <div class="col-auto"> 
                                                                        <p class="mb-0">Quantity</p>                                         
                                                                    </div><!--end col-->
                                                                </div>  <!--end row-->
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="d-flex justify-content-between align-items-start">
                                                                        <div class="me-auto">
                                                                            <p class="mb-0 ">686.50</p>
                                                                        </div>
                                                                        <span class="bg-soft-danger px-1 rounded">1523</span>
                                                                    </li> 
                                                                    <li class="d-flex justify-content-between align-items-start">
                                                                        <div class="me-auto">
                                                                            <p class="mb-0 ">688.00</p>
                                                                        </div>
                                                                        <span class="bg-soft-danger px-1 rounded">1823</span>
                                                                    </li>    
                                                                    <li class="d-flex justify-content-between align-items-start">
                                                                        <div class="me-auto">
                                                                            <p class="mb-0 ">690.00</p>
                                                                        </div>
                                                                        <span class="bg-soft-danger px-1 rounded">1101</span>
                                                                    </li> 
                                                                    <li class="d-flex justify-content-between align-items-start">
                                                                        <div class="me-auto">
                                                                            <p class="mb-0 ">693.00</p>
                                                                        </div>
                                                                        <span class="bg-soft-danger px-1 rounded">182</span>
                                                                    </li>                                                                
                                                                </ul>
                                                            </div><!--end col-->
                                                        </div><!--end row-->
                                                    </div><!--end accordion-body-->
                                                  </div>
                                                </div>
                                            </div>
                                        </div><!--end watchlist-body-->                                      
                                    </div><!--end card-body-->
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    
                                                </div>
                                                <div class="col-lg-2">
                                                    <img src="assets/images/twt.png" style="width: 100%">
                                                </div>
                                                <div class="col-lg-2">
                                                    <img src="assets/images/insta.png" style="width: 100%">
                                                </div>
                                                <div class="col-lg-2">
                                                    <img src="assets/images/fb.png" style="width: 100%">
                                                </div>
                                                <div class="col-lg-3">
                                                    
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-lg-3">
                                                    <ul class="list-unstyled">
                                    <li>
                                        <a href="index.html" class="text-dark">About</a>
                                    </li>
                                    <li>
                                        <a href="position.html" class="text-dark">Blog</a>
                                    </li>
                                    <li>
                                        <a href="market.html" class="text-dark">Help</a>
                                    </li>
                                    <li>
                                        <a href="market.html" class="text-dark">Term</a>
                                    </li>
                                </ul>
                                                </div>
                                                <div class="col-lg-5">
                                                    <ul class="list-unstyled">
                                    <li>
                                        <a href="index.html" class="text-dark">Best Practices </a>
                                    </li>
                                    <li>
                                        <a href="position.html" class="text-dark">Developers</a>
                                    </li>
                                    <li>
                                        <a href="market.html" class="text-dark">Privacy</a>
                                    </li>
                                    <li>
                                        <a href="market.html" class="text-dark">Disclosures</a>
                                    </li>
                                </ul>
                                                </div>
                                                <div class="col-lg-4">
                                                    <ul class="list-unstyled">
                                    <li>
                                        <a href="index.html" class="text-dark">Careers</a>
                                    </li>
                                    <li>
                                        <a href="position.html" class="text-dark">Disclaimer</a>
                                    </li>
                                    <li>
                                        <a href="market.html" class="text-dark">Rules</a>
                                    </li>
                                    <li>
                                        <a href="market.html" class="text-dark">Advertise With us</a>
                                    </li>

                                </ul>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <a href="#" class="btn-app-store mr-3 mb-2 mb-lg-0">
                                        <div class="row no-gutters">
                                            <div class="col-auto align-self-center mr-2">
                                                <img src="assets/images/ipo/apple.png" alt="" class="" height="26">
                                            </div>
                                            <div class="col align-self-center">
                                                <span class="btn-title-sm d-block">Available on the</span>
                                                <span class="btn-title">App Store</span>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="btn-app-store mt-2">
                                        <div class="row no-gutters">
                                            <div class="col-auto align-self-center mr-2">
                                                <img src="assets/images/ipo/play-store.png" alt="" class="" height="26">
                                            </div>
                                            <div class="col align-self-center">
                                                <span class="btn-title-sm d-block">Get in on</span>
                                                <span class="btn-title">Play Store</span>
                                            </div>
                                        </div>
                                    </a>
                                                </div>
                                                <div class="col-lg-12 mt-2">
                                                    <p>    2022 ContoTwits, Inc. All rights reserved.<br>
Market Data by Xignite and BATS BZX Real-Time Price</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--end card-->
                                </div><!--end col--> 
                                <div class="col-lg-9">
                                <div class="row">                                        
                                <div class="col-lg-7">    
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-header">
                                            <div class="row align-items-center">
                                                <div class="col">                      
                                                    <h4 class="card-title">Listing</h4>                    
                                                </div><!--end col-->
                                            </div>  <!--end row-->                                  
                                        </div>
                                        <div class="card-body">
                                            <table class="table" style="margin-left:-10px">
                                                <tr>
                                                    <th>Total</th>
                                                    <td>$599.03</td>
                                                    <td>$0.70</td>
                                                    <td>0.30%</td>
                                                    <td><i class="ti ti-trending-up text-success"></i></td>
                                                </tr>
                                                <tr>
                                                    <th>New</th>
                                                    <td>$599.03</td>
                                                    <td>$0.70</td>
                                                    <td>0.30%</td>
                                                    <td><i class="ti ti-trending-down text-danger"></i></td>
                                                </tr>
                                                <tr>
                                                    <th>Sold</th>
                                                    <td>$599.03</td>
                                                    <td>$0.70</td>
                                                    <td>0.30%</td>
                                                    <td><i class="ti ti-trending-up text-success"></i></td>
                                                </tr>
                                                <tr>
                                                    <th>Off</th>
                                                    <td>$599.03</td>
                                                    <td>$0.70</td>
                                                    <td>0.30%</td>
                                                    <td><i class="ti ti-trending-down text-danger"></i></td>
                                                </tr>
                                            </table>
                                        </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-header">
                                            <div class="row align-items-center">
                                                <div class="col">                      
                                                    <h4 class="card-title">Rates</h4>                    
                                                </div>
                                                <!--end col-->
                                            </div>  <!--end row-->                                  
                                        </div>
                                        <div class="card-body">
                                            <table class="table" style="margin-left:-10px">
                                                <tr>
                                                    <th>CAN</th>
                                                    <td>$599.03</td>
                                                    <td>$0.70</td>
                                                    <td>0.30%</td>
                                                    <td><i class="ti ti-trending-up text-success"></i></td>
                                                </tr>
                                                <tr>
                                                    <th>USA</th>
                                                    <td>$599.03</td>
                                                    <td>$0.70</td>
                                                    <td>0.30%</td>
                                                    <td><i class="ti ti-trending-down text-danger"></i></td>
                                                </tr>
                                                <tr>
                                                    <th>LON</th>
                                                    <td>$599.03</td>
                                                    <td>$0.70</td>
                                                    <td>0.30%</td>
                                                    <td><i class="ti ti-trending-up text-success"></i></td>
                                                </tr>
                                                <tr>
                                                    <th>CHN</th>
                                                    <td>$599.03</td>
                                                    <td>$0.70</td>
                                                    <td>0.30%</td>
                                                    <td><i class="ti ti-trending-down text-danger"></i></td>
                                                </tr>
                                            </table>
                                        </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end card-->                            
                                </div><!--end col-->

                                <div class="col-lg-5">    
                                    <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header">
                                            <div class="row align-items-center">
                                                <div class="col">                      
                                                    <h4 class="card-title">Trending</h4>                    
                                                </div>
                                                <div class="col-auto"> 
                                                <span>View</span> 
                                                </div>
                                                <!--end col-->
                                            </div>  <!--end row-->                                  
                                        </div>
                                        <div class="card-body">
                                            <table class="table" style="margin-left:-10px">
                                                <tr>
                                                    <th>CAN</th>
                                                    <td>$599.03</td>
                                                    <td>$0.70</td>
                                                    <td>0.30%</td>
                                                    <td><i class="ti ti-trending-up text-success"></i></td>
                                                </tr>
                                                <tr>
                                                    <th>USA</th>
                                                    <td>$599.03</td>
                                                    <td>$0.70</td>
                                                    <td>0.30%</td>
                                                    <td><i class="ti ti-trending-down text-danger"></i></td>
                                                </tr>
                                                <tr>
                                                    <th>LON</th>
                                                    <td>$599.03</td>
                                                    <td>$0.70</td>
                                                    <td>0.30%</td>
                                                    <td><i class="ti ti-trending-up text-success"></i></td>
                                                </tr>
                                                <tr>
                                                    <th>CHN</th>
                                                    <td>$599.03</td>
                                                    <td>$0.70</td>
                                                    <td>0.30%</td>
                                                    <td><i class="ti ti-trending-down text-danger"></i></td>
                                                </tr>
                                            </table>
                                        </div>
                                            </div>
                                        </div>
                                    <!--end card-->                            
                                </div><!--end col-->
                               </div>
                               <div class="row">
                                   <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-2">
                                                    <img src="assets/images/kota.png">
                                                </div>
                                                <div class="col-lg-10">
                                                    
                                                    <input type="text" class="form-control" placeholder="Share an idea (use & before ticker : eg &symbol)" style="border: none;" name="">
                                                </div>
                                            </div>
                                            <div class="row mt-5">
                                                <div class="col-lg-3">
                                                    <img src="assets/images/dng.png">
                                                </div>
                                                <div class="col-lg-5">
                                                    
                                                </div>
                                                <div class="col-lg-2">
                                                    <img src="assets/images/twt.png">
                                                </div>
                                                <div class="col-lg-2">
                                                    <button class="btn btn-light" style="background: #D9D9D9 !important;">Post</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                       <div class="card">
                                        <div class="card-header">
                                            <div class="row align-items-center">
                                                <!--end col-->
                                                <div class="col-auto"> 
                                                    <ul class="nav nav-tabs tab-nagative-m" role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" data-bs-toggle="tab" href="#Stocks" role="tab" aria-selected="true">People</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-bs-toggle="tab" href="#Mutual_funds" role="tab" aria-selected="false">Watchlist</a>
                                                        </li> 
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-bs-toggle="tab" href="#Mutual_funds" role="tab" aria-selected="false">Suggested</a>
                                                        </li> 
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-bs-toggle="tab" href="#Mutual_funds" role="tab" aria-selected="false">Trending</a>
                                                        </li> 
                                                    </ul>    
                                                </div><!--end col-->
                                            </div>  <!--end row-->                                  
                                        </div><!--end card-header-->      
                                        <div class="card-body">
                                            <div class="tab-content" id="Amount_history">
                                                <div class="tab-pane fade show active" id="Stocks" role="tabpanel" aria-labelledby="Stocks-tab">
                                                    
                                                </div><!--end tab-pane-->
                                                <div class="tab-pane fade" id="Mutual_funds" role="tabpanel" aria-labelledby="Mutual-funds-tab">
                                                    
                                                </div><!--end tab-pane-->
                                            </div><!--end tab-content-->
                                                                                    
                                        </div><!--end card-body--> 
                                    </div>
                                   </div>
                                   <div class="col-lg-3">
                            <div class="position-sticky" >
                                
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row align-items-center">
                                            <div class="col">                      
                                                <h4 class="card-title">Most Active </h4>                      
                                            </div><!--end col-->
                                            <div class="col-auto"> 
                                                <span>View</span> 
                                                </div>                                                 
                                            </div><!--end col-->
                                        </div>  <!--end row-->                                  
                                    </div><!--end card-header-->
                                    <div class="card-body p-0">
                                        <div class="watchlist-body" data-simplebar>
                    
                    
                                            <div class="accordion" id="watchlist_2">
                                                <div class="accordion-item border-top-0">
                                                  <div class="accordion-header" id="headingOne">
                                                    <a class="accordion-button d-block py-2 px-3 collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        <div class="d-flex justify-content-between">
                                                            <div class="align-self-center">
                                                                <h6 class="m-0 text-uppercase font-11">Apple Inc</h6>
                                                                <p class="text-uppercase font-10 mb-0">nasdaq</p>
                                                            </div>
                                                            <div>
                                                                <h6 class="m-0 text-uppercase font-11">$147.95 <i class="ti ti-trending-down text-danger"></i></h6>
                                                                <div class="d-inline-block font-10"><span class="text-danger">-110.60</span> <span class="text-danger">(30.52%)</span></div>
                                                            </div>
                                                        </div><!-- end /div -->
                                                    </a>
                                                  </div>
                                                  <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#watchlist_2">
                                                    <div class="accordion-body">
                                                        <div class="d-flex justify-content-between">
                                                            <div class="action-icons">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item align-self-center mx-0 bg-success">
                                                                        <a href="javascript: void(0);" data-bs-toggle="modal" data-bs-target="#BuyStocks"><i class="ti ti-letter-b text-white email-action-icons-item"></i></a>
                                                                    </li><!--end /li-->
                                                                    <li class="list-inline-item align-self-center mx-0 bg-danger">
                                                                        <a href="javascript: void(0);" data-bs-toggle="modal" data-bs-target="#SellStocks"><i class="ti ti-letter-s text-white email-action-icons-item"></i></a>
                                                                    </li><!--end /li-->
                                                                    <li class="list-inline-item align-self-center mx-0">
                                                                        <a href="details.html"><i class="ti ti-chart-candle email-action-icons-item"></i></a>
                                                                    </li><!--end /li-->                                                        
                                                                    <li class="list-inline-item align-self-center mx-0">
                                                                        <a href="javascript: void(0);"><i class="ti ti-trash email-action-icons-item"></i></a>
                                                                    </li><!--end /li-->
                                                                </ul><!--end /ul-->
                                                            </div> <!--end action-icons--> 
                                                            <div>
                                                                <p class="mb-0 text-muted">Avg. Traded Price : <span class="fw-semibold text-dark">$148.00</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="row">                                                        
                                                            <div class="col">
                                                                <div class="row align-items-center">
                                                                    <div class="col">                      
                                                                        <h6 class="text-success">Bid Price</h6>                      
                                                                    </div><!--end col-->
                                                                    <div class="col-auto"> 
                                                                        <p class="mb-0">Quantity</p>                                         
                                                                    </div><!--end col-->
                                                                </div>  <!--end row-->
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="d-flex justify-content-between align-items-start">
                                                                        <div class="me-auto">
                                                                            <p class="mb-0 ">140.50</p>
                                                                        </div>
                                                                        <span class="bg-soft-success px-1 rounded">1523</span>
                                                                    </li> 
                                                                    <li class="d-flex justify-content-between align-items-start">
                                                                        <div class="me-auto">
                                                                            <p class="mb-0 ">139.50</p>
                                                                        </div>
                                                                        <span class="bg-soft-success px-1 rounded">1823</span>
                                                                    </li>    
                                                                    <li class="d-flex justify-content-between align-items-start">
                                                                        <div class="me-auto">
                                                                            <p class="mb-0 ">136.00</p>
                                                                        </div>
                                                                        <span class="bg-soft-success px-1 rounded">1101</span>
                                                                    </li> 
                                                                    <li class="d-flex justify-content-between align-items-start">
                                                                        <div class="me-auto">
                                                                            <p class="mb-0 ">133.50</p>
                                                                        </div>
                                                                        <span class="bg-soft-success px-1 rounded">182</span>
                                                                    </li>                                                                
                                                                </ul>
                                                            </div><!--end col-->
                                                            <div class="col">
                                                                <div class="row align-items-center">
                                                                    <div class="col">                      
                                                                        <h6 class="text-danger">Ask Price</h6>                      
                                                                    </div><!--end col-->
                                                                    <div class="col-auto"> 
                                                                        <p class="mb-0">Quantity</p>                                         
                                                                    </div><!--end col-->
                                                                </div>  <!--end row-->
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="d-flex justify-content-between align-items-start">
                                                                        <div class="me-auto">
                                                                            <p class="mb-0 ">146.50</p>
                                                                        </div>
                                                                        <span class="bg-soft-danger px-1 rounded">1523</span>
                                                                    </li> 
                                                                    <li class="d-flex justify-content-between align-items-start">
                                                                        <div class="me-auto">
                                                                            <p class="mb-0 ">148.00</p>
                                                                        </div>
                                                                        <span class="bg-soft-danger px-1 rounded">1823</span>
                                                                    </li>    
                                                                    <li class="d-flex justify-content-between align-items-start">
                                                                        <div class="me-auto">
                                                                            <p class="mb-0 ">150.00</p>
                                                                        </div>
                                                                        <span class="bg-soft-danger px-1 rounded">1101</span>
                                                                    </li> 
                                                                    <li class="d-flex justify-content-between align-items-start">
                                                                        <div class="me-auto">
                                                                            <p class="mb-0 ">153.00</p>
                                                                        </div>
                                                                        <span class="bg-soft-danger px-1 rounded">182</span>
                                                                    </li>                                                                
                                                                </ul>
                                                            </div><!--end col-->
                                                        </div><!--end row-->
                                                    </div><!--end accordion-body-->
                                                  </div>
                                                </div>
                                                <div class="accordion-item">
                                                  <div class="accordion-header" id="headingTwo">
                                                    <a class="accordion-button  d-block py-2 px-3 collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        <div class="d-flex justify-content-between">
                                                            <div class="align-self-center">
                                                                <h6 class="m-0 text-uppercase font-11">Tesla Inc</h6>
                                                                <p class="text-uppercase font-10 mb-0">nasdaq</p>
                                                            </div>
                                                            <div>
                                                                <h6 class="m-0 text-uppercase font-11">$680.35 <i class="ti ti-trending-up text-success"></i></h6>
                                                                <div class="d-inline-block font-10"><span class="text-success">50.10</span> <span class="text-success">(5.52%)</span></div>
                                                            </div>
                                                        </div><!-- end /div -->
                                                    </a>
                                                  </div>
                                                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#watchlist_2">
                                                    <div class="accordion-body">
                                                        <div class="d-flex justify-content-between">
                                                            <div class="action-icons">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item align-self-center mx-0 bg-success">
                                                                        <a href="javascript: void(0);" data-bs-toggle="modal" data-bs-target="#BuyStocks"><i class="ti ti-letter-b text-white email-action-icons-item"></i></a>
                                                                    </li><!--end /li-->
                                                                    <li class="list-inline-item align-self-center mx-0 bg-danger">
                                                                        <a href="javascript: void(0);" data-bs-toggle="modal" data-bs-target="#SellStocks"><i class="ti ti-letter-s text-white email-action-icons-item"></i></a>
                                                                    </li><!--end /li-->
                                                                    <li class="list-inline-item align-self-center mx-0">
                                                                        <a href="javascript: void(0);"><i class="ti ti-chart-candle email-action-icons-item"></i></a>
                                                                    </li><!--end /li-->                                                        
                                                                    <li class="list-inline-item align-self-center mx-0">
                                                                        <a href="javascript: void(0);"><i class="ti ti-trash email-action-icons-item"></i></a>
                                                                    </li><!--end /li-->
                                                                </ul><!--end /ul-->
                                                            </div> <!--end action-icons--> 
                                                            <div>
                                                                <p class="mb-0 text-muted">Avg. Traded Price : <span class="fw-semibold text-dark">$682.00</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="row">                                                        
                                                            <div class="col">
                                                                <div class="row align-items-center">
                                                                    <div class="col">                      
                                                                        <h6 class="text-success">Bid Price</h6>                      
                                                                    </div><!--end col-->
                                                                    <div class="col-auto"> 
                                                                        <p class="mb-0">Quantity</p>                                         
                                                                    </div><!--end col-->
                                                                </div>  <!--end row-->
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="d-flex justify-content-between align-items-start">
                                                                        <div class="me-auto">
                                                                            <p class="mb-0 ">680.50</p>
                                                                        </div>
                                                                        <span class="bg-soft-success px-1 rounded">1523</span>
                                                                    </li> 
                                                                    <li class="d-flex justify-content-between align-items-start">
                                                                        <div class="me-auto">
                                                                            <p class="mb-0 ">679.50</p>
                                                                        </div>
                                                                        <span class="bg-soft-success px-1 rounded">1823</span>
                                                                    </li>    
                                                                    <li class="d-flex justify-content-between align-items-start">
                                                                        <div class="me-auto">
                                                                            <p class="mb-0 ">676.00</p>
                                                                        </div>
                                                                        <span class="bg-soft-success px-1 rounded">1101</span>
                                                                    </li> 
                                                                    <li class="d-flex justify-content-between align-items-start">
                                                                        <div class="me-auto">
                                                                            <p class="mb-0 ">673.50</p>
                                                                        </div>
                                                                        <span class="bg-soft-success px-1 rounded">182</span>
                                                                    </li>                                                                
                                                                </ul>
                                                            </div><!--end col-->
                                                            <div class="col">
                                                                <div class="row align-items-center">
                                                                    <div class="col">                      
                                                                        <h6 class="text-danger">Ask Price</h6>                      
                                                                    </div><!--end col-->
                                                                    <div class="col-auto"> 
                                                                        <p class="mb-0">Quantity</p>                                         
                                                                    </div><!--end col-->
                                                                </div>  <!--end row-->
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="d-flex justify-content-between align-items-start">
                                                                        <div class="me-auto">
                                                                            <p class="mb-0 ">686.50</p>
                                                                        </div>
                                                                        <span class="bg-soft-danger px-1 rounded">1523</span>
                                                                    </li> 
                                                                    <li class="d-flex justify-content-between align-items-start">
                                                                        <div class="me-auto">
                                                                            <p class="mb-0 ">688.00</p>
                                                                        </div>
                                                                        <span class="bg-soft-danger px-1 rounded">1823</span>
                                                                    </li>    
                                                                    <li class="d-flex justify-content-between align-items-start">
                                                                        <div class="me-auto">
                                                                            <p class="mb-0 ">690.00</p>
                                                                        </div>
                                                                        <span class="bg-soft-danger px-1 rounded">1101</span>
                                                                    </li> 
                                                                    <li class="d-flex justify-content-between align-items-start">
                                                                        <div class="me-auto">
                                                                            <p class="mb-0 ">693.00</p>
                                                                        </div>
                                                                        <span class="bg-soft-danger px-1 rounded">182</span>
                                                                    </li>                                                                
                                                                </ul>
                                                            </div><!--end col-->
                                                        </div><!--end row-->
                                                    </div><!--end accordion-body-->
                                                  </div>
                                                </div>
                                            </div>
                                        </div><!--end watchlist-body-->                                      
                                    </div><!--end card-body-->
                                </div>
                                <!--end card-->
                            </div><!--end sticky-->
                        </div>
                               </div>
                                    <!--end card-->
                                </div><!--end col-->                                      
                                                               
                            </div><!--end row-->   
                            
                            <!--end row--> 
                        </div><!--end col-->
                        
                        <!--end col-->
                    </div><!--end row-->
                    <div class="row">
                        <div class="col-12">
                        </div><!--end col-->
                    </div><!--end row-->
                    

                </div><!-- container -->

                <!--Start Rightbar-->
                <!--Start Rightbar/offcanvas-->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="Appearance" aria-labelledby="AppearanceLabel">
    
                    <div class="offcanvas-body">  
                        <button type="button" class="btn-close text-reset p-0 m-0 align-self-center float-end" data-bs-dismiss="offcanvas" aria-label="Close"></button>  
                        <div class="media">
                            <div class="ipo_logo d-inline-block" style="height: 70px; width: 90px; line-height: 68px;">
                                <img src="assets/images/ipo/ipo-1.png" alt="" class="" height="36">
                            </div>
                            <div class="media-body align-self-center ms-2">
                                <h5 class="fw-semibold mt-0 font-16 mb-1">Registered Clients</h5>
                                <p class="text-success mb-0 font-12">Application Successful</p>
                            </div>
                        </div><!--end media--> 
                        <hr class="hr-dashed">
                        <ul class="list-group mb-3">
            
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Applic. No
                              <span class="font-12 fw-semibold">236568546</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Amount to be Blocked
                              <span class="font-12 fw-semibold">$250.00</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Bid
                              <span class="font-12 fw-semibold">01</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Market Lot
                              <span class="font-12 fw-semibold">40 Shares</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Price
                              <span class="font-12 fw-semibold">$25.00</span>
                            </li>
                        </ul>
                        <ul class="list-group mb-3">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              IPO Open Date
                              <span class="font-12 fw-semibold">14/09/2021</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Allotment Date
                              <span class="font-12 fw-semibold">18/09/2021</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Refunds
                              <span class="font-12 fw-semibold">19/09/2021</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Credit Demat Ac.
                              <span class="font-12 fw-semibold">20/09/2021</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              IPO Listing Date
                              <span class="font-12 fw-semibold">21/09/2021</span>
                            </li>
                        </ul>
                        <p class="p-2 bg-soft-info rounded font-15 fw-semibold">Upcoming IPOs 2021</p>
                        <table class="table">
                          <thead class="thead-light">
                            <tr>
                              <th scope="col">Name</th>
                              <th scope="col" class="text-end">Size</th>
                              <th scope="col" class="text-end">Date</th>
                            </tr>
                          </thead>
                          <tbody>            
                            <tr>
                              <td><a href="../ipo.html" class="text-dark">Apple <span class="text-muted font-10">NASDAQ</span></a></td>
                              <td class="text-end">2542cr.</td>
                              <td class="text-end">12 Nov.2021</td>
                            </tr>
                            <tr>
                              <td><a href="../ipo.html">Panasonic</a></td>
                              <td class="text-end">1302cr.</td>
                              <td class="text-end">18 Nov.2021</td>
                            </tr>
                          </tbody>
                        </table>
                    </div><!--end offcanvas-body-->
    
                </div>
                <!--end Rightbar/offcanvas-->
                 <!--end Rightbar-->
                 
                
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->
        <div class="modal fade" id="BuyStocks" tabindex="-1" aria-labelledby="BuyStocksLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">                        
                        <div>
                            <h6 class="modal-title m-0 mb-n1" id="BuyStocksLabel">Apple Inc</h6>
                            <span class="font-10 d-block mb-1">nasdaq</span>
                            <span class="border border-success px-1 rounded text-success">B</span>
                        </div>
                        <div>
                            <h6 class="m-0 text-uppercase font-16 fw-bold">$147.95 <i class="ti ti-trending-down text-danger"></i></h6>
                            <div class="d-inline-block font-10"><span class="text-danger">-110.60</span> <span class="text-danger">(30.52%)</span></div>
                            <div class="text-success">Live <span><i class="las la-dot-circle"></i></span></div>
                        </div>
                        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                    </div>

                    <div class="modal-body">
                        <div class="form-check d-inline-block me-2">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                              Holding
                            </label>
                        </div>
                        <div class="form-check mb-2 d-inline-block">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                              Trade
                            </label>
                        </div>
                        <form class="row gy-2 gx-3 align-items-end">
                            <div class="col-auto">
                                <label class="form-label" for="Quantity">Quantity</label>
                                <input type="text" class="form-control form-control-sm" id="Quantity">
                            </div>
                            <div class="col-auto">
                                <label class="form-label" for="Price">Price</label>
                                <input type="text" class="form-control form-control-sm" id="Price">
                            </div>
                            <div class="col-auto">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="buy_limit">
                                    <label class="form-check-label" for="buy_limit">
                                    Limit
                                    </label>
                                </div>
                            </div>
                        </form>
                        <div class="mt-3">
                            <a class="" data-bs-toggle="collapse" href="#SL_Option" aria-expanded="false" aria-controls="collapseExample">
                                Stop Loss <i class="ti ti-arrow-down-circle"></i>
                            </a>
                            <div class="collapse" id="SL_Option">
                                <form class="row gy-2 gx-3 align-items-center mt-1">
                                    <div class="col-auto">
                                        <label class="form-label" for="Trigger_Price">Trigger Price</label>
                                        <input type="text" class="form-control form-control-sm" id="Trigger_Price">
                                    </div>
                                    <div class="col-auto align-self-end">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="buy_SL">
                                            <label class="form-check-label" for="buy_SL">
                                            Stop Loss
                                            </label>
                                        </div>
                                    </div>
                                </form>
                            </div> <!--end collapse-->    
                        </div> <!--end /div-->
                        <button class="btn btn-success w-100 my-3">BUY</button> 
                        <div class="row">
                            <div class="col">
                                <small class="text-muted d-block">Require Fund</small>
                                <small >$00.00</small>
                            </div><!--end col-->
                            <div class="col-auto">
                                <small class="text-muted d-block">Available Fund</small>
                                <small >$8545.00</small>
                            </div><!--end col-->
                        </div><!--end row-->                                         
                    </div><!--end modal-body-->
                    
                </div><!--end modal-content-->
            </div><!--end modal-dialog-->
        </div><!--end modal-->

        <div class="modal fade" id="SellStocks" tabindex="-1" aria-labelledby="SellStocksLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">                        
                        <div>
                            <h6 class="modal-title m-0 mb-n1" id="SellStocksLabel">Apple Inc</h6>
                            <span class="font-10 d-block mb-1">nasdaq</span>
                            <span class="border border-danger px-1 rounded text-danger">S</span>
                        </div>
                        <div>
                            <h6 class="m-0 text-uppercase font-16 fw-bold">$147.95 <i class="ti ti-trending-down text-danger"></i></h6>
                            <div class="d-inline-block font-10"><span class="text-danger">-110.60</span> <span class="text-danger">(30.52%)</span></div>
                            <div class="text-success">Live <span><i class="las la-dot-circle"></i></span></div>
                        </div>
                        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                    </div>

                    <div class="modal-body">
                        <div class="form-check d-inline-block me-2">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="sell_Limit">
                            <label class="form-check-label" for="sell_Limit">
                              Holding
                            </label>
                        </div>
                        <div class="form-check mb-2 d-inline-block">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="sell_SL" checked>
                            <label class="form-check-label" for="sell_SL">
                              Trade
                            </label>
                        </div>
                        <form class="row gy-2 gx-3 align-items-end">
                            <div class="col-auto">
                                <label class="form-label" for="Quantity">Quantity</label>
                                <input type="text" class="form-control form-control-sm" id="Quantity">
                            </div>
                            <div class="col-auto">
                                <label class="form-label" for="Price">Price</label>
                                <input type="text" class="form-control form-control-sm" id="Price">
                            </div>
                            <div class="col-auto">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="autoSizingCheck">
                                    <label class="form-check-label" for="autoSizingCheck">
                                    Limit
                                    </label>
                                </div>
                            </div>
                        </form>
                        <div class="mt-3">
                            <a class="" data-bs-toggle="collapse" href="#SL_Option" aria-expanded="false" aria-controls="collapseExample">
                                Stop Loss <i class="ti ti-arrow-down-circle"></i>
                            </a>
                            <div class="collapse" id="SL_Option">
                                <form class="row gy-2 gx-3 align-items-center mt-1">
                                    <div class="col-auto">
                                        <label class="form-label" for="Trigger_Price">Trigger Price</label>
                                        <input type="text" class="form-control form-control-sm" id="Trigger_Price">
                                    </div>
                                    <div class="col-auto align-self-end">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="buy_SL">
                                            <label class="form-check-label" for="buy_SL">
                                            Stop Loss
                                            </label>
                                        </div>
                                    </div>
                                </form>
                            </div> <!--end collapse-->    
                        </div> <!--end /div-->
                        <button class="btn btn-danger w-100 my-3">SELL</button> 
                        <div class="row">
                            <div class="col">
                                <small class="text-muted d-block">Require Fund</small>
                                <small >$00.00</small>
                            </div><!--end col-->
                            <div class="col-auto">
                                <small class="text-muted d-block">Available Fund</small>
                                <small >$8545.00</small>
                            </div><!--end col-->
                        </div><!--end row-->                                         
                    </div><!--end modal-body-->
                    
                </div><!--end modal-content-->
            </div><!--end modal-dialog-->
        </div><!--end modal-->
    </div><!--end /div-->
        <!-- Javascript  -->  
        
        <script src="assets/plugins/selectr/selectr.min.js"></script>
        <script src="assets/plugins/apex-chart/apexcharts.min.js"></script>
        <script src="assets/pages/index.init.js"></script>
        <!-- App js -->
        <script src="assets/js/app.js"></script>
        <script>
            new Selectr('#Watchlist', {
                searchable: false,
            });

            var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
            var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl)
            });
        </script>
    </body>
    <!--end body-->

<!-- Mirrored from mannatthemes.com/bullkit/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jul 2022 07:19:31 GMT -->
</html>