<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>No se ha habido coincidencias</title>
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

  <div id="date-picker-modal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
          <div class="col-md-5 d-none d-md-block welcome-side" >

              <div class="welcome-side-container">
              <h2 style="40px">Error 404</h2>
              <h4>No ha habido coincidencias con tu búsqueda</h4>

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
    $('#date-picker-modal').modal();

            

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