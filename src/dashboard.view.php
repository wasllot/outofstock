<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Productos sin stock</title>
  <!-- Favicon -->
  <link rel="icon" href="" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="http://localhost/analytics-out-of-stock-report/src/assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="http://localhost/analytics-out-of-stock-report/src/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <link rel="stylesheet" href="http://localhost/analytics-out-of-stock-report/src/assets/css/argon.css?v=1.2.0" type="text/css">
  <link rel="stylesheet" href="http://localhost/analytics-out-of-stock-report/src/assets/css/style.css" type="text/css">
</head>



<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
         AstroGrowShop POFS
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="#">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Inicio</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="ni ni-ruler-pencil text-orange"></i>
                <span class="nav-link-text">Ver histórico</span>
              </a>
            </li>
            
          </ul>

        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Inicio</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#date-picker-modal">
                Cambiar fecha
              </button>
              </nav>
            </div>
            
          </div>
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
               
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Tráfico total</h5>
                      <span class="h2 font-weight-bold mb-0"><?php echo $product_total_views; ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                        <i class="ni ni-active-40"></i>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Sesiones de hoy</h5>
                      <span class="h2 font-weight-bold mb-0"><?php echo $product_sessions; ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                        <i class="ni ni-chart-pie-35"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Productos sin stock</h5>
                      <span class="h2 font-weight-bold mb-0"><?php echo $total_products; ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                        <i class="ni ni-money-coins"></i>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Performance</h5>
                      <span class="h2 font-weight-bold mb-0">49,65%</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                        <i class="ni ni-chart-bar-32"></i>
                      </div>
                    </div>
                  </div>
                  <!-- <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <!-- <div class="row">
        <div class="col-xl-8">
          <div class="card bg-default">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-light text-uppercase ls-1 mb-1">Vista previa</h6>
                  <h5 class="h3 text-white mb-0">Productos sin stock</h5>
                </div>
                <div class="col">
                  <ul class="nav nav-pills justify-content-end">
                    <li class="nav-item mr-2 mr-md-0" data-toggle="chart" data-target="#chart-sales-dark" data-update='{"data":{"datasets":[{"data":[0, 20, 10, 30, 15, 40, 20, 60, 60]}]}}' data-prefix="" data-suffix="p ">
                      <a href="#" class="nav-link py-2 px-3 active" data-toggle="tab">
                        <span class="d-none d-md-block">Mensual</span>
                        <span class="d-md-none">M</span>
                      </a>
                    </li>
                    <li class="nav-item" data-toggle="chart" data-target="#chart-sales-dark" data-update='{"data":{"datasets":[{"data":[0, 20, 5, 25, 10, 30, 15, 40, 40]}]}}' data-prefix="" data-suffix="p ">
                      <a href="#" class="nav-link py-2 px-3" data-toggle="tab">
                        <span class="d-none d-md-block">Semanal</span>
                        <span class="d-md-none">S</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card-body">
             
              <div class="chart">
                
                <canvas id="chart-sales-dark" class="chart-canvas"></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4">
          <div class="card">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-uppercase text-muted ls-1 mb-1">Productos</h6>
                  <h5 class="h3 mb-0">Productos sin stock</h5>
                </div>
              </div>
            </div>
            <div class="card-body">
              
              <div class="chart">
                <canvas id="chart-bars" class="chart-canvas"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div> -->
      <div class="row">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Enlaces de los productos sin stock</h3>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush" id="data-products">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" >URL del producto</th>
                    <th scope="col" style="cursor: pointer;" onclick="sortTable(1)">Visitas</th>
                    <th scope="col" style="cursor: pointer;" onclick="sortTable(2)">Sesiones</th>
                    <th scope="col">SA ID</th>
                  </tr>
                </thead>
                <tbody>
                    <?php foreach ($products as $key => $product): ?>
                  <tr>
                    <td scope="row" width="150px">
                        <a target="_blank" href="<?php echo $product['product_url'] ?>">
                            <?php echo $product['product_url'] ?>
                        </a>
                      
                    </td>
                    <td>
                    <?php echo $product['product_page_views'] ?>
                    </td>
                    <td>
                    <?php echo $product['product_sessions'] ?>
                    </td>
                    <td>
                    <?php echo $product['product_said'] ?>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
      <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
              &copy; 2021 <a href="https://astrogrowshop.com" class="font-weight-bold ml-1" target="_blank">AstroGrowShop</a>
            </div>
          </div>
          <div class="col-lg-6">

          </div>
        </div>
      </footer>
    </div>
  </div>

  <div id="date-picker-modal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
          <div class="col-md-5 d-none d-md-block welcome-side" >

              <div class="welcome-side-container">
              <h2>Hola, bienvenido al panel de productos sin stock</h2>
              <h4>Selecciona la fecha en la cual quiere ver el reporte</h4>

              </div>
                      


          </div>
          <div class="col-md-7">

          <div id="container">
            
              <div class="glass">
                <div class="picker">

                  <h1>Seleccione una fecha</h1>

                  <div id="picker_container">

                    <div id="date_container">
                      <div id="datepicker"></div>
                      <button class="buttone" id="dup" aria-label="date up"><svg width="100%" height="100%" viewBox="0 0 135 60" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:square;stroke-miterlimit:1.5;">
                          <path d="M15,44.133l52.067,-29.133l52.066,29.133" style="fill:none;stroke:#000;stroke-width:20px;" />
                        </svg></button>
                      <button class="buttone bdown" id="ddown" aria-label="date down"><svg width="100%" height="100%" viewBox="0 0 135 60" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:square;stroke-miterlimit:1.5;">
                          <path d="M15,15l52.067,29.133l52.066,-29.133" style="fill:none;stroke:#000;stroke-width:20px;" />
                        </svg></button>
                    </div>

                    <div id="month_container">
                      <div id="monthpicker"></div>
                      <button class="buttone" id="mup" aria-label="month up"><svg width="100%" height="100%" viewBox="0 0 135 60" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:square;stroke-miterlimit:1.5;">
                          <path d="M15,44.133l52.067,-29.133l52.066,29.133" style="fill:none;stroke:#000;stroke-width:20px;" />
                        </svg></button>
                      <button class="buttone bdown" id="mdown" aria-label="month down"><svg width="100%" height="100%" viewBox="0 0 135 60" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:square;stroke-miterlimit:1.5;">
                          <path d="M15,15l52.067,29.133l52.066,-29.133" style="fill:none;stroke:#000;stroke-width:20px;" />
                        </svg></button>
                    </div>

                    <div id="year_container">
                      <div id="yearpicker"></div>
                      <button class="buttone" id="yup" aria-label="year up"><svg width="100%" height="100%" viewBox="0 0 135 60" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:square;stroke-miterlimit:1.5;">
                          <path d="M15,44.133l52.067,-29.133l52.066,29.133" style="fill:none;stroke:#000;stroke-width:20px;" />
                        </svg></button>
                      <button class="buttone bdown" id="ydown" aria-label="year down"><svg width="100%" height="100%" viewBox="0 0 135 60" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:square;stroke-miterlimit:1.5;">
                          <path d="M15,15l52.067,29.133l52.066,-29.133" style="fill:none;stroke:#000;stroke-width:20px;" />
                        </svg></button>
                    </div>

                  </div>

                  <div id="pbox">
                    <p>Elija la fecha del reporte que desee ver</p>
                    <button class="btn btn-save-report btn-primary" id="btn-save-report">Generar reporte</button>
                    <br>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
  
  <!-- Core -->
  <script src="http://localhost/analytics-out-of-stock-report/src/assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="http://localhost/analytics-out-of-stock-report/src/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="http://localhost/analytics-out-of-stock-report/src/assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="http://localhost/analytics-out-of-stock-report/src/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="http://localhost/analytics-out-of-stock-report/src/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="http://localhost/analytics-out-of-stock-report/src/assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="http://localhost/analytics-out-of-stock-report/src/assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <script src="http://localhost/analytics-out-of-stock-report/src/assets/js/argon.js?v=1.2.0"></script>
  <script src="http://localhost/analytics-out-of-stock-report/src/assets/js/main.js"></script>
  <script>
        //elements
        const container = document.getElementById("container");
        //setColor(false);

        const datepicker = document.getElementById("datepicker");
        const monthpicker = document.getElementById("monthpicker");
        const yearpicker = document.getElementById("yearpicker");

        const dup = document.getElementById("dup");
        const ddown = document.getElementById("ddown");
        const mup = document.getElementById("mup");
        const mdown = document.getElementById("mdown");
        const yup = document.getElementById("yup");
        const ydown = document.getElementById("ydown");

        //vars
        let lastscrollp = 0;
        let lasttouchp = 0;

        const months = [
            "Enero",
            "Febrero",
            "Marzo",
            "Abril",
            "Mayo",
            "Junio",
            "Julio",
            "Agosto",
            "Septiembre",
            "Octubre",
            "Noviembre",
            "Diciembre"
        ];

        //set start date
        let today = new Date();
        let date_now = today.getDate();
        let month_now = today.getMonth();
        let year_now = today.getFullYear();
        console.log(date_now, month_now + 1, year_now);

        datepicker.innerHTML = date_now;
        monthpicker.innerHTML = months[month_now];
        yearpicker.innerHTML = year_now;

        //button events
        dup.addEventListener("click", (e) => {
            adjustDate(1);
        });
        ddown.addEventListener("click", (e) => {
            adjustDate(-1);
        });

        mup.addEventListener("click", (e) => {
            adjustMonth(1);
        });
        mdown.addEventListener("click", (e) => {
            adjustMonth(-1);
        });

        yup.addEventListener("click", (e) => {
            adjustYear(1);
        });
        ydown.addEventListener("click", (e) => {
            adjustYear(-1);
        });

        //wheel & touch events
        datepicker.addEventListener("wheel", (e) => {
            console.log("scroll " + e.deltaY);
            //debug.innerHTML = e.deltaY;

            lastscrollp = lastscrollp + e.deltaY;
            if (lastscrollp > 0 && e.deltaY < 0) {
                lastscrollp = 0;
            }
            if (lastscrollp < 0 && e.deltaY > 0) {
                lastscrollp = 0;
            }
            console.log(lastscrollp);

            if (lastscrollp > 10 || lastscrollp < -10) {
                adjustDate(e.deltaY);
                lastscrollp = 0;
            }
        });

        datepicker.addEventListener("touchstart", (e) => {
            lasttouchp = e.changedTouches[0].pageY;
        });

        datepicker.addEventListener("touchmove", (e) => {
            e.preventDefault();
            console.log("touch " + e.changedTouches[0].pageY);
            let diff = e.changedTouches[0].pageY - lasttouchp;
            let updown = 0;
            if (diff > 10) {
                updown = -1;
                lasttouchp = e.changedTouches[0].pageY;
            } else {
                if (diff < -10) {
                    updown = 1;
                    lasttouchp = e.changedTouches[0].pageY;
                }
            }
            adjustDate(updown);
        });

        monthpicker.addEventListener("wheel", (e) => {
            console.log("scroll " + e.deltaY);
            //debug.innerHTML = e.deltaY;

            lastscrollp = lastscrollp + e.deltaY;
            if (lastscrollp > 0 && e.deltaY < 0) {
                lastscrollp = 0;
            }
            if (lastscrollp < 0 && e.deltaY > 0) {
                lastscrollp = 0;
            }
            console.log(lastscrollp);

            if (lastscrollp > 10 || lastscrollp < -10) {
                adjustMonth(e.deltaY);
                lastscrollp = 0;
            }
        });

        monthpicker.addEventListener("mouseout", (e) => {
            setMaxDays();
        });

        monthpicker.addEventListener("touchstart", (e) => {
            lasttouchp = e.changedTouches[0].pageY;
        });

        monthpicker.addEventListener("touchmove", (e) => {
            e.preventDefault();
            console.log("touch " + e.changedTouches[0].pageY);
            let diff = e.changedTouches[0].pageY - lasttouchp;
            let updown = 0;
            if (diff > 10) {
                updown = -1;
                lasttouchp = e.changedTouches[0].pageY;
            } else {
                if (diff < -10) {
                    updown = 1;
                    lasttouchp = e.changedTouches[0].pageY;
                }
            }
            adjustMonth(updown);
        });

        monthpicker.addEventListener("touchend", (e) => {
            setMaxDays();
        });

        yearpicker.addEventListener("wheel", (e) => {
            console.log("scroll " + e.deltaY);
            //debug.innerHTML = e.deltaY;

            lastscrollp = lastscrollp + e.deltaY;
            if (lastscrollp > 0 && e.deltaY < 0) {
                lastscrollp = 0;
            }
            if (lastscrollp < 0 && e.deltaY > 0) {
                lastscrollp = 0;
            }
            console.log(lastscrollp);

            if (lastscrollp > 10 || lastscrollp < -10) {
                adjustYear(e.deltaY);
                lastscrollp = 0;
            }
        });

        yearpicker.addEventListener("mouseout", (e) => {
            setMaxDays();
        });

        yearpicker.addEventListener("touchstart", (e) => {
            lasttouchp = e.changedTouches[0].pageY;
        });

        yearpicker.addEventListener("touchmove", (e) => {
            e.preventDefault();
            console.log("touch " + e.changedTouches[0].pageY);
            let diff = e.changedTouches[0].pageY - lasttouchp;
            let updown = 0;
            if (diff > 10) {
                updown = -1;
                lasttouchp = e.changedTouches[0].pageY;
            } else {
                if (diff < -10) {
                    updown = 1;
                    lasttouchp = e.changedTouches[0].pageY;
                }
            }
            adjustYear(updown);
        });

        yearpicker.addEventListener("touchend", (e) => {
            setMaxDays();
        });


        //functions
        function adjustDate(v) {
            if (v != 0) {
                let maxdays = new Date(year_now, month_now + 1, 0).getDate();
                if (v > 0) {
                    if (date_now === maxdays) {
                        date_now = 1;
                    } else {
                        date_now = date_now + 1;
                    }
                } else {
                    if (date_now === 1) {
                        date_now = maxdays;
                    } else {
                        date_now = date_now - 1;
                    }
                }
                datepicker.innerHTML = date_now;
                window.navigator.vibrate(8);
            }
        }

        function adjustMonth(v) {
            if (v != 0) {
                if (v > 0) {
                    if (month_now === 11) {
                        month_now = 0;
                    } else {
                        month_now = month_now + 1;
                    }
                } else {
                    if (month_now === 0) {
                        month_now = 11;
                    } else {
                        month_now = month_now - 1;
                    }
                }
                monthpicker.innerHTML = months[month_now];
                window.navigator.vibrate(8);
            }
        }

        function adjustYear(v) {
            if (v != 0) {
                if (v > 0) {
                    year_now = year_now + 1;
                } else {
                    year_now = year_now - 1;
                }
                if (year_now < 0) {
                    yearpicker.innerHTML = year_now * -1 + " BC";
                } else {
                    yearpicker.innerHTML = year_now;
                }
                window.navigator.vibrate(8);
                if(year_now === 2020){
                    setColor(true);
                }else{
                    setColor(false);
                }
            }
        }

        function setMaxDays(){
            let maxdays = new Date(year_now, month_now + 1, 0).getDate();
                if (date_now > maxdays) {
                    date_now = maxdays;
                    datepicker.innerHTML = date_now + ".";
                }
        }

        function setColor(g){
            if (g) {
            container.style.setProperty("--c2", "rgba(166, 166, 166, .6)");
            container.style.setProperty("--c3", "rgba(158, 158, 158, 1)");
            container.style.setProperty("--c4", "rgba(125, 125, 125, .5)");
            container.style.setProperty("--c5", "rgba(122, 122, 122, .5)");
        } else {
            container.style.setProperty("--c2", "rgba(241, 91, 181, .6)");
            container.style.setProperty("--c3", "rgba(254, 228, 64, 1)");
            container.style.setProperty("--c4", "rgba(0, 187, 249, .5)");
            container.style.setProperty("--c5", "rgba(0, 245, 212, .5)");
        }
        }

        //prevent ape-scrolling on iOS
        let letTouchMove = false;
        container.addEventListener("touchmove", (e) => {
            if (letTouchMove === false) {
                e.preventDefault();
            }
        });

        const pbox = document.getElementById("pbox");
        pbox.addEventListener("touchstart", (e) => {
            letTouchMove = true;
        });
        pbox.addEventListener("touchend", (e) => {
            letTouchMove = false;
        });

        function generate_report(){
            let day, month, year;

            day = $('#datepicker')[0].outerText;
            month = $('#monthpicker')[0].outerText;
            year = $('#yearpicker')[0].outerText;

            console.log(day+" de "+month+", "+year);
        }

  </script>
</body>

</html>