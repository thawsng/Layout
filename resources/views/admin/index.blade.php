
@extends('admin.layout')

@section('page_css')
    <link rel="stylesheet" href="{{URL::asset('assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('assets/vendor/morris/morris.css')}}" />
@endsection

@section('content')
    <header class="page-header">
        <h2>Dashboard</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Dashboard</span></li>
            </ol>

            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>

    <div class="row">
        <div class="col-md-6">
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                        <a href="#" class="fa fa-times"></a>
                    </div>

                    <h2 class="panel-title">Best Seller</h2>
                    <p class="panel-subtitle">Customize the graphs as much as you want, there are so many options and features to display information using JSOFT Admin Template.</p>
                </header>
                <div class="panel-body">

                    <!-- Flot: Basic -->
                    <div class="chart chart-md" id="flotDashBasic"></div>
                    <script>

                        var flotDashBasicData = [{
                            data: [
                                [0, 170],
                                [1, 169],
                                [2, 173],
                                [3, 188],
                                [4, 147],
                                [5, 113],
                                [6, 128],
                                [7, 169],
                                [8, 173],
                                [9, 128],
                                [10, 128]
                            ],
                            label: "Series 1",
                            color: "#0088cc"
                        }, {
                            data: [
                                [0, 115],
                                [1, 124],
                                [2, 114],
                                [3, 121],
                                [4, 115],
                                [5, 83],
                                [6, 102],
                                [7, 148],
                                [8, 147],
                                [9, 103],
                                [10, 113]
                            ],
                            label: "Series 2",
                            color: "#2baab1"
                        }, {
                            data: [
                                [0, 70],
                                [1, 69],
                                [2, 73],
                                [3, 88],
                                [4, 47],
                                [5, 13],
                                [6, 28],
                                [7, 69],
                                [8, 73],
                                [9, 28],
                                [10, 28]
                            ],
                            label: "Series 3",
                            color: "#734ba9"
                        }];

                        // See:'assets/javascripts/dashboard/examples.dashboard.js for more settings.

                    </script>

                </div>
            </section>
        </div>
        <div class="col-md-6">
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                        <a href="#" class="fa fa-times"></a>
                    </div>
                    <h2 class="panel-title">Server Usage</h2>
                    <p class="panel-subtitle">It's easy to create custom graphs on JSOFT Admin Template, there are several graph types that you can use, such as lines, bars, pie charts, etc...</p>
                </header>
                <div class="panel-body">

                    <!-- Flot: Curves -->
                    <div class="chart chart-md" id="flotDashRealTime"></div>

                </div>
            </section>
        </div>
    </div>

    <!-- start: page -->
    <div class="row">
        <div class="col-md-6 col-lg-12 col-xl-6">
            <section class="panel">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="chart-data-selector" id="salesSelectorWrapper">
                                <h2>
                                    Sales:
                                    <strong>
                                        <select class="form-control" id="salesSelector">
                                            <option value="JSOFT Admin" selected>JSOFT Admin</option>
                                            <option value="JSOFT Drupal" >JSOFT Drupal</option>
                                            <option value="JSOFT Wordpress" >JSOFT Wordpress</option>
                                        </select>
                                    </strong>
                                </h2>

                                <div id="salesSelectorItems" class="chart-data-selector-items mt-sm">
                                    <!-- Flot: Sales JSOFT Admin -->
                                    <div class="chart chart-sm" data-sales-rel="JSOFT Admin" id="flotDashSales1" class="chart-active"></div>
                                    <script>

                                        var flotDashSales1Data = [{
                                            data: [
                                                ["Jan", 140],
                                                ["Feb", 240],
                                                ["Mar", 190],
                                                ["Apr", 140],
                                                ["May", 180],
                                                ["Jun", 320],
                                                ["Jul", 270],
                                                ["Aug", 180]
                                            ],
                                            color: "#0088cc"
                                        }];

                                        // See:'assets/javascripts/dashboard/examples.dashboard.js for more settings.

                                    </script>

                                    <!-- Flot: Sales JSOFT Drupal -->
                                    <div class="chart chart-sm" data-sales-rel="JSOFT Drupal" id="flotDashSales2" class="chart-hidden"></div>
                                    <script>

                                        var flotDashSales2Data = [{
                                            data: [
                                                ["Jan", 240],
                                                ["Feb", 240],
                                                ["Mar", 290],
                                                ["Apr", 540],
                                                ["May", 480],
                                                ["Jun", 220],
                                                ["Jul", 170],
                                                ["Aug", 190]
                                            ],
                                            color: "#2baab1"
                                        }];

                                        // See:'assets/javascripts/dashboard/examples.dashboard.js for more settings.

                                    </script>

                                    <!-- Flot: Sales JSOFT Wordpress -->
                                    <div class="chart chart-sm" data-sales-rel="JSOFT Wordpress" id="flotDashSales3" class="chart-hidden"></div>
                                    <script>

                                        var flotDashSales3Data = [{
                                            data: [
                                                ["Jan", 840],
                                                ["Feb", 740],
                                                ["Mar", 690],
                                                ["Apr", 940],
                                                ["May", 1180],
                                                ["Jun", 820],
                                                ["Jul", 570],
                                                ["Aug", 780]
                                            ],
                                            color: "#734ba9"
                                        }];

                                        // See:'assets/javascripts/dashboard/examples.dashboard.js for more settings.

                                    </script>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4 text-center">
                            <h2 class="panel-title mt-md">Sales Goal</h2>
                            <div class="liquid-meter-wrapper liquid-meter-sm mt-lg">
                                <div class="liquid-meter">
                                    <meter min="0" max="100" value="35" id="meterSales"></meter>
                                </div>
                                <div class="liquid-meter-selector" id="meterSalesSel">
                                    <a href="#" data-val="35" class="active">Monthly Goal</a>
                                    <a href="#" data-val="28">Annual Goal</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- end: page -->
@endsection

@section('page_js')
    <script src="{{URL::asset('assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js')}}"></script>
    <script src="{{URL::asset('assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js')}}"></script>
    <script src="{{URL::asset('assets/vendor/jquery-appear/jquery.appear.js')}}"></script>
    <script src="{{URL::asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js')}}"></script>
    <script src="{{URL::asset('assets/vendor/jquery-easypiechart/jquery.easypiechart.js')}}"></script>
    <script src="{{URL::asset('assets/vendor/flot/jquery.flot.js')}}"></script>
    <script src="{{URL::asset('assets/vendor/flot-tooltip/jquery.flot.tooltip.js')}}"></script>
    <script src="{{URL::asset('assets/vendor/flot/jquery.flot.pie.js')}}"></script>
    <script src="{{URL::asset('assets/vendor/flot/jquery.flot.categories.js')}}"></script>
    <script src="{{URL::asset('assets/vendor/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{URL::asset('assets/vendor/jquery-sparkline/jquery.sparkline.js')}}"></script>
    <script src="{{URL::asset('assets/vendor/raphael/raphael.js')}}"></script>
    <script src="{{URL::asset('assets/vendor/morris/morris.js')}}"></script>
    <script src="{{URL::asset('assets/vendor/gauge/gauge.js')}}"></script>
    <script src="{{URL::asset('assets/vendor/snap-svg/snap.svg.js')}}"></script>
    <script src="{{URL::asset('assets/vendor/liquid-meter/liquid.meter.js')}}"></script>
    <script src="{{URL::asset('assets/vendor/jqvmap/jquery.vmap.js')}}"></script>
    <script src="{{URL::asset('assets/vendor/jqvmap/data/jquery.vmap.sampledata.js')}}"></script>
    <script src="{{URL::asset('assets/vendor/jqvmap/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{URL::asset('assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js')}}"></script>
    <script src="{{URL::asset('assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js')}}"></script>
    <script src="{{URL::asset('assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js')}}"></script>
    <script src="{{URL::asset('assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js')}}"></script>
    <script src="{{URL::asset('assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js')}}"></script>
    <script src="{{URL::asset('assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js')}}"></script>

@endsection
