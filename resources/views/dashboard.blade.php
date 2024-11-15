<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Dashboard</title>

    <!-- Custom fonts for this Dashboard-->
    <link href="{{ url('assets/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <!-- Custom styles for this Dashboard-->
    <link href="{{ url('assets/css/sb-admin-2.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/custom.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav px-3 bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-between gap-3" href="index.html">
                <div class="sidebar-brand-icon d-flex">
                    <!-- <i class="fas fa-laugh-wink"></i> -->
                     <img src="{{ url('assets/img/Logo.svg') }}" alt="" class="mr-9px">
                     <div class="sidebar-brand-text ">My Worksapce</div>
                    </div>
                    <img src="{{ url('assets/img/_Avatar.svg') }}" alt="" class="mr-9px">

            </a>
            <form
            class="d-none d-sm-inline-block form-inline mb-28px my-md-0 mw-100 navbar-search">
            <div class="search-group">
                <div class="input-group-append">
                    <button class="search-button" type="button">
                         <img src="{{ url('assets/img/search-icon.svg') }}" alt="">
                    </button>
                </div>
                <input type="text" class="search-input border-0 small"
                    aria-label="Search" aria-describedby="basic-addon2">

            </div>
        </form>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active Dashboard">
                <a class="nav-link " href="index.html">
                     <img src="{{ url('assets/img/Dashboard-icon.svg') }}" alt="" class="mr-10px">
                    <span style="font-size: 13px; color: #D2D3E0; font-weight: 500;">Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">



            <!-- Nav Item - Analysis Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed d-flex justify-content-between align-items-center" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <div class="d-flex align-items-center ">
                     <img src="{{ url('assets/img/Analysis.svg') }}" alt="" class="mr-10px">
                    <span>Analysis</span>
                    </div>
                    <i class="fas fa-angle-down"></i>

                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" >
                    <div class=" py-2 collapse-inner rounded">
                        <div class="d-flex">
                            <img src="{{ url('assets/img/user-analysis.svg') }}" alt="" class="mr-10px">
                            <a class="collapse-item" href="#">User Analysis</a>
                        </div>
                        <div class="d-flex">
                            <img src="{{ url('assets/img/content-analysis.svg') }}" alt="" class="mr-10px">
                            <a class="collapse-item" href="#">Content Analysis</a>
                        </div>
                        <div class="d-flex">
                            <img src="{{ url('assets/img/survey-report.svg') }}" alt="" class="mr-10px">
                            <a class="collapse-item" href="#">Survey Report</a>
                        </div>

                    </div>
                </div>
            </li>

            <!-- Nav Item - Management Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed d-flex justify-content-between align-items-center" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <div class="d-flex align-items-center ">
                         <img src="{{ url('assets/img/Management.svg') }}" alt="" class="mr-10px">
                        <span>Management</span>
                        </div>
                        <i class="fas fa-angle-down"></i>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    >
                    <div class=" py-2 collapse-inner rounded">
                        <div class="d-flex">
                            <img src="{{ url('assets/img/content-upload.svg') }}" alt="" class="mr-10px">
                            <a class="collapse-item" href="#">Content Upload</a>
                        </div>
                        <div class="d-flex">
                            <img src="{{ url('assets/img/Content-managemnt.svg') }}" alt="" class="mr-10px">
                            <a class="collapse-item" href="#">Content Management</a>
                        </div>
                        <div class="d-flex">
                            <img src="{{ url('assets/img/Category-and-tags.svg') }}" alt="" class="mr-10px">
                            <a class="collapse-item" href="#">Category And Tags</a>
                        </div>

                    </div>
                </div>
            </li>
            <!-- Nav Item - Affiliate Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed d-flex justify-content-between align-items-center" href="#" data-toggle="collapse" data-target="#collapseAffiliate"
                    aria-expanded="true" aria-controls="collapseAffiliate">
                    <div class="d-flex align-items-center ">
                         <img src="{{ url('assets/img/Affiliate.svg') }}" alt="" class="mr-10px">
                        <span>Affiliate</span>
                        </div>
                        <i class="fas fa-angle-down"></i>
                </a>
                <div id="collapseAffiliate" class="collapse" aria-labelledby="headingAffiliate"
                   >
                    <div class=" py-2 collapse-inner rounded">
                        <div class="d-flex">
                            <img src="{{ url('assets/img/Analysis.svg') }}" alt="" class="mr-10px">
                            <a class="collapse-item" href="#">Analytics</a>
                        </div>
                        <div class="d-flex">
                            <img src="{{ url('assets/img/Campaign.svg') }}" alt="" class="mr-10px">
                            <a class="collapse-item" href="#">Campaign </a>
                        </div>
                        <div class="d-flex">
                            <img src="{{ url('assets/img/Affiliate.svg') }}" alt="" class="mr-10px">
                            <a class="collapse-item" href="#">Affiliate</a>
                        </div>
                        <div class="d-flex">
                            <img src="{{ url('assets/img/Sales-and-commissions.svg') }}" alt="" class="mr-10px">
                            <a class="collapse-item" href="#">Sales And Commissions</a>
                        </div>
                        <div class="d-flex">
                            <img src="{{ url('assets/img/Settings.svg') }}" alt="" class="mr-10px">
                            <a class="collapse-item" href="#">Settings</a>
                        </div>

                    </div>
                </div>
            </li>



            <li class="nav-item">
                <a class="nav-link" href="#">
                    <img src="{{ url('assets/img/Api-management.svg') }}" alt="">
                    <span>API Management</span></a>
            </li>




             <!-- Nav Item - Invite People -->
             <li class="nav-item" style="margin-bottom: 10px !important;padding-right: 7px !important;">
                 <a class="nav-link"  href="tables.html">
                      <img src="{{ url('assets/img/Invite-people.svg') }}" alt="">
                     <span style="font-size: 12px !important; color: #858699;;">Invite People</span></a>
             </li>
               <!-- Nav Item - Help and support -->
             <li class="nav-item" style="margin-bottom: 10px !important;padding-right: 7px !important;">
                 <a class="nav-link" href="tables.html">
                      <img src="{{ url('assets/img/Help-and-support.svg') }}" alt="">
                     <span style="font-size: 12px !important; color: #858699;">Help And Support</span></a>
             </li>

             <!-- app version -->
              <div class="app-version-heading">
                App Version 3.1
              </div>
            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex ">
                <div class="cross ">
                    <img src="{{ url('assets/img/cross.svg') }}" alt="">
                </div>
                <img src="{{ url('assets/img/Import-Issues.svg') }}" alt="" class="align-self-start">
               <div class="message-card-container">
                <h4 class="message-card-h4">Import Issues</h4>
                <p style="font-size: 11px;font-weight: 400;color: #858699; line-height: 12.1px;">Use our Migration Assistant to copy issues from another service.</p>
                <button class="side-bar-message-button">Try Now →</i>
                </button>
               </div>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand  topbar  static-top">
                    <button class="back-button">
                         <img src="{{ url('assets/img/Back-icon.svg') }}" alt="">
                        Back
                    </button>


                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="info-container">

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 style="font-size: 16px;font-weight:500;color: #E0E1EC;">Revenue</h1>
                        <div class="d-flex">
                            <button class="Mrr-button">MRR</button>
                            <button class="Arpu-button">ARPU</button>
                        </div>
                        <div class="date-wrapper">
                            <div>
                                <img src="{{ url('assets/img/Date.svg') }}" alt="">
                                <p>Jan 2, 2024</p>
                            </div>
                            <div>
                                <p>Last 30 Days</p>
                                <img src="{{ url('assets/img/a-down.svg') }}" alt="">
                            </div>
                        </div>

                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card ">
                            <div class="" >
                                Total MRR
                                </div>
                            <div class="">
                               <div class="">$14,775</div>
                            </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card ">
                                <div class="" >
                                    New MRR
                                    </div>
                                <div class="">
                                   <div class="">$14,775</div>
                                </div>
                                </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card ">
                                <div class="" >
                                    Upgrades
                                    </div>
                                <div class="">
                                   <div class="">$13,775</div>
                                </div>
                                </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card ">
                                <div class="" >
                                    Downgrades
                                    </div>
                                <div class="">
                                   <div class="">$775</div>
                                </div>
                                </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card ">
                                <div class="" >
                                    ARPU
                                    </div>
                                <div class="">
                                   <div class="">$10,000</div>
                                </div>
                                </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card ">
                                <div class="" >
                                    Reactivations
                                    </div>
                                <div class="">
                                   <div class="">$10,000</div>
                                </div>
                                </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card ">
                                <div class="" >
                                    Existing
                                    </div>
                                <div class="">
                                   <div class="">$10,000</div>
                                </div>
                                </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card ">
                                <div class="" >
                                    Churn
                                    </div>
                                <div class="">
                                    <div class="">$100</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="chart"></div>

                </div>


            </div>
            <!-- End of Main Content -->


        </div>
        <!-- End of Content Wrapper -->



    </div>
    <!-- End of Page Wrapper -->



    <!-- Bootstrap core JavaScript-->
    <script src="{{ url('assets/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ url('assets/js/sb-admin-2.js') }}"></script>

    <!-- Page level plugins -->

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Page level custom scripts -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="{{ url('assets/js/demo/chart-bar-demo.js') }}"></script>



</body>

</html>
