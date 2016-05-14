<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Market Mania</title>

    <link rel="stylesheet" type="text/css" href="{{asset('css/foundation.css')}}" />

    <!-- Custom styles for this template -->

   
    <link rel="stylesheet" type="text/css" href="{{asset('css/dashboard.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/dripicon.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/typicons.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/theme.css')}}"/>

    <!-- pace loader -->
    <script src="{{asset('js/pace/pace.js')}}"></script>
    <link href="{{asset('js/pace/themes/orange/pace-theme-flash.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('js/slicknav/slicknav.css')}}"/>
    <link href="{{asset('js/stackable/responsive-table.css')}}" rel="stylesheet" />
    <script type="text/javascript" src="{{asset('/js/vendor/modernizr.js')}}"></script>

</head>

<body>
    <!-- preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <!-- End of preloader -->

    <div class="off-canvas-wrap" data-offcanvas>
        <!-- right sidebar wrapper -->
        <div class="inner-wrap">


            <!-- Right sidemenu -->
            <div id="skin-select">
                <!--      Toggle sidemenu icon button -->
                <a id="toggle">
                    <span class="fa icon-menu"></span>
                </a>
                <!--      End of Toggle sidemenu icon button -->

                <div class="skin-part">
                    <div id="tree-wrap">
                        <!-- Profile -->
                        <div class="profile">
                         <img alt="" class="" src="{{asset('./img/logo.png')}}">
                            <h3>Market Mania <small>1.0</small></h3>

                        </div>
                        <!-- End of Profile -->

                        <!-- Menu sidebar begin-->
                        <div class="side-bar">
                            <ul id="menu-showhide" class="topnav slicknav">
                                <li>
                                    <a id="menu-select" class="tooltip-tip" href="index.html" title="Dashboard">
                                        <i class="icon-monitor"></i>
                                        <span>Dashboard</span>

                                    </a>

                                </li>
                                <li>
                                    <a class="tooltip-tip" href="{{ action("UserController@showprofile") }}">               
                                        <i class="icon-user"></i>
                                        <span>Profile </span>

                                    </a>
                                    
                                </li>
                                 <li>
                                    <a class="tooltip-tip" href="{{ action("UserController@search") }}">               
                                        <i class="fontello-search"></i>
                                        <span>Search User Online</span>

                                    </a>
                                    
                                </li>
                                <li>
                                    <a class="tooltip-tip" href="{{ action("UserController@ShowUser") }}">               
                                        <i class="fontello-search-outline"></i>
                                        <span>Search Saved Contact</span>

                                    </a>
                                    
                                </li>
                               <!-- <li>
                                    <a class="tooltip-tip" href="#" title="Mail">
                                        <i class=" icon-preview"></i>
                                        <span>Skin</span>

                                    </a>
                                    <ul>

                                        <li>
                                            <a href="blue-skin.html" title="Black Skin">Blue Skin</a>
                                        </li>
                                        <li>

                                            <a href="white-skin.html" title="White Skin">White Skin</a>
                                        </li>
                                        <li>

                                            <a href="green-skin.html" title="Blue Skin">Green Skin</a>
                                        </li>
                                    </ul>
                                </li>-->

                              

                                <li>
                                    <a class="tooltip-tip" href="#" title="Extra">
                                        <i class="fontello-beaker"></i>
                                        <span>Extra</span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="invoice.html" title="Invoice">Invoice</a>
                                        </li>
                                        <li>
                                            <a href="pricing_table.html" title="Pricing Table">Pricing Table</a>
                                        </li>
                                        <li>
                                            <a href="404.html" title="404 Error Page">404 Error Page</a>
                                        </li>
                                        <li>
                                            <a href="500.html" title="500 Error Page">500 Error Page</a>
                                        </li>

                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- end of Menu sidebar  -->
                        <ul class="bottom-list-menu">
                            <li>Settings <span class="icon-gear"></span>
                            </li>
                            <li>Help <span class="icon-phone"></span>
                            </li>
                            <li>About Market Mania <span class="icon-music"></span>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <!-- end of Rightsidemenu -->



            <div class="wrap-fluid" id="paper-bg">
                <!-- top nav -->
                <div class="top-bar-nest">
                    <nav class="top-bar" data-topbar role="navigation" data-options="is_hover: false">
                        <ul class="title-area left">


                            <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                            <li class="toggle-topbar menu-icon"><a href="#"><span></span></a>
                            </li>
                        </ul>

                        <section class="top-bar-section ">
                        <!-- Left Nav Section 
                            <ul class="left">

                                Search | has-form wrapper 
                                <li class="has-form bg-white">
                                    <div class="row collapse">

                                        <div class="large-12 columns">
                                            <div class="dark"> </div>
                                            <input class="input-top" type="text" placeholder="search">
                                        </div>
                                    </div>
                                </li>
                            </ul>-->

                            <ul class="right">
                                <li class=" has-dropdown bg-white">
                                    <a class="bg-white" href="#"><span class="admin-pic-text text-gray">Hi, {{{$user->name}}} </span>
                                    </a>

                                    <ul class="dropdown dropdown-nest profile-dropdown">

                                        <li>
                                            <i class="icon-user"></i>
                                            <a href="{{ action("UserController@showprofile")}}">
                                                <h4>Profile<span class="text-aqua fontello-record" ></span></h4>
                                            </a>
                                        </li>
                                        <li>
                                            <i class="icon-folder-open"></i>
                                            <a href="#">
                                                <h4>Account<span class="text-blue fontello-record" ></span></h4>
                                            </a>
                                        </li>
                                        <li>
                                            
                                            <a href="{{ action("AuthController@logout") }}">
                                                <h4>Logout<span class="text-dark-blue fontello-record" ></span></h4>
                                            </a>
                                        </li>

                                        <!--<li class="active right">
                                            <a href="#">
                                                <div class="label bg-white">More</div>
                                            </a> -->
                                        </li>
                                    </ul>
                                </li>
                
                            </ul>
                        </section>
                    </nav>
                </div>
                <!-- end of top nav -->

                <!-- breadcrumbs -->
                <ul class="breadcrumbs">
                    <li><a href="#"><span class="entypo-home"></span></a>
                    </li>
                    <li>Dashboard
                    </li>
                </ul>
                <!-- end of breadcrumbs -->



                @yield('content')



                <footer>
                    <div id="footer">Copyright &copy; 2016 <a href="">Market Mania</a> Made with <i class="fontello-heart-1 text-green"></i></div>

                </footer>
            </div>

            <!-- End of Container Begin -->








           
         
            <!-- close the off-canvas menu -->
            <a class="exit-off-canvas"></a>
            <!-- End of Right Menu -->
        </div>
        <!-- end paper bg -->

    </div>
    <!-- end of off-canvas-wrap -->

    <!-- end of inner-wrap -->



    <!-- main javascript library -->

    <script type='text/javascript' src="{{asset('js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/waypoints.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/preloader-script.js')}}"></script>
    <!-- foundation javascript -->
    <script type='text/javascript' src="{{asset('js/foundation.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/foundation.min.js')}}"></script>
    

    <!-- main edumix javascript -->
    <script type="text/javascript" src="{{asset('js/slimscroll/jquery.slimscroll.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/slicknav/jquery.slicknav.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/sliding-menu.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/scriptbreaker-multiple-accordion-1.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/number/jquery.counterup.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/circle-progress/jquery.circliful.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    <!-- additional javascript -->
    <script type='text/javascript' src="{{asset('js/number-progress-bar/jquery.velocity.min.js')}}"></script>
    <script type='text/javascript' src="{{asset('js/number-progress-bar/number-pb.js') }}"></script>
    <script type='text/javascript' src="{{asset('js/loader/loader.js') }}"></script>
    <script type='text/javascript' src="{{asset('js/loader/demo.js') }}"></script>
    <!-- FLOT CHARTS -->
    <!--<script src="{{asset('js/flot/jquery.flot.js')}}" type="text/javascript"></script>
    <!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
    <!--<script src="{{asset('js/flot/jquery.flot.resize.min.js')}}" type="text/javascript"></script>
    <!-- FLOT PIE PLUGIN - also used to draw donut charts -->
    <<!--<script src="{{asset('js/flot/jquery.flot.pie.min.js')}}" type="text/javascript"></script>
    <!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
    <!--<script src="{{asset('js/flot/jquery.flot.categories.min.js')}}" type="text/javascript"></script>-->
    <script type="text/javascript" src="{{asset('js/skycons/skycons.js')}}"></script>

    @yield('script')

    <script type="text/javascript">
    $(function() {
        "use strict";


        //weather icons
        var icons = new Skycons({
                "stroke": 0.06,
                "color": "Gray",
                "cloudColor": "#666666",
                "sunColor": "#92cd18",
                "moonColor": "DodgerBlue",
                "rainColor": "RoyalBlue",
                "snowColor": "LightGray",
                "windColor": "LightSteelBlue",
                "fogColor": "#65C3DF"
            }),
            list = [
                "clear-day", "clear-night", "partly-cloudy-day",
                "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                "fog"
            ],
            i;

        for (i = list.length; i--;)
            icons.set(list[i], list[i]);
        icons.play()

        /*
         * LINE CHART
         * ----------
         */
        //LINE randomly generated data

        var line_data1 = [
            [1, 800],
            [2, 1500],
            [3, 900],
            [4, 1900],
            [5, 4000],
            [6, 2800],
            [7, 2500],
            [8, 700],
            [9, 1500],
            [10, 1000],
            [11, 2000],
            [12, 4300],
            [13, 1756],
            [14, 2000],
            [15, 1500],
            [16, 1900],
            [17, 1200],
            [18, 2800],
            [19, 3200],
            [20, 2190]
        ];
        var line_data2 = [
            [1, 1800],
            [2, 2900],
            [3, 1950],
            [4, 3450],
            [5, 7000],
            [6, 5300],
            [7, 4890],
            [8, 2300],
            [9, 3900],
            [10, 2900],
            [11, 4500],
            [12, 2200],
            [13, 1120],
            [14, 1459],
            [15, 1100],
            [16, 1189],
            [17, 300],
            [18, 1250],
            [19, 1705],
            [20, 959]

        ];


        /*$.plot("#line-chart", [line_data1, line_data2], {
            grid: {
                hoverable: true,
                borderColor: "#E2E6EE",
                borderWidth: 1,
                tickColor: "#E2E6EE"
            },
            series: {   
                shadowSize: 0,
                lines: {
                    show: true
                },
                points: {
                    show: true
                }
            },
            colors: ["#333333", "#cccccc"],
            lines: {
                fill: true,
            },
            yaxis: {
                show: false,
            },
            xaxis: {
                show: true
            }
        });*/
        //Initialize tooltip on hover
        $("<div class='tooltip-inner' id='line-chart-tooltip'></div>").css({
            position: "absolute",
            background: "#333333",
            padding: "3px 10px",
            color: "#ffffff",
            display: "none",
            opacity: 0.9
        }).appendTo("body");
        $("#line-chart").bind("plothover", function(event, pos, item) {

            if (item) {
                var x = item.datapoint[0].toFixed(2),
                    y = item.datapoint[1].toFixed(2);

                $("#line-chart-tooltip").html(item.series.label + " of " + x + " = " + y)
                    .css({
                        top: item.pageY + 5,
                        left: item.pageX + 5
                    })
                    .fadeIn(200);
            } else {
                $("#line-chart-tooltip").hide();
            }

        });
        /* END LINE CHART */

        /*
         * FULL WIDTH STATIC AREA CHART
         * -----------------
         */
        var areaData = [
            [2, 88.0],
            [3, 93.3],
            [4, 102.0],
            [5, 108.5],
            [6, 115.7],
            [7, 115.6],
            [8, 124.6],
            [9, 130.3],
            [10, 134.3],
            [11, 141.4],
            [12, 146.5],
            [13, 151.7],
            [14, 159.9],
            [15, 165.4],
            [16, 167.8],
            [17, 168.7],
            [18, 169.5],
            [19, 168.0]
        ];
        /*$.plot("#area-chart", [areaData], {
            grid: {
                borderWidth: 0
            },
            series: {
                shadowSize: 0, // Drawing is faster without shadows
                color: "#00c0ef"
            },
            lines: {
                fill: true //Converts the line chart to area chart                        
            },
            yaxis: {
                show: false
            },
            xaxis: {
                show: false
            }
        });*/

        /* END AREA CHART */

    });

    /*
     * Custom Label formatter
     * ----------------------
     */
    function labelFormatter(label, series) {
        return "<div style='font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;'>" + label + "<br/>" + Math.round(series.percent) + "%</div>";
    }
    </script>


    <script>
    $(document).foundation();
    </script>



</body>

</html>
