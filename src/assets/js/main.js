function sortTable(n) {
        var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
        table = document.getElementById("data-products");
        switching = true;
        //Set the sorting direction to ascending:
        dir = "asc"; 
        /*Make a loop that will continue until
        no switching has been done:*/
        while (switching) {
        //start by saying: no switching is done:
        switching = false;
        rows = table.rows;
        /*Loop through all table rows (except the
        first, which contains table headers):*/
        for (i = 1; i < (rows.length - 1); i++) {
            //start by saying there should be no switching:
            shouldSwitch = false;
            /*Get the two elements you want to compare,
            one from current row and one from the next:*/
            x = rows[i].getElementsByTagName("TD")[n];
            y = rows[i + 1].getElementsByTagName("TD")[n];
            /*check if the two rows should switch place,
            based on the direction, asc or desc:*/
            if (dir == "asc") {
            if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                //if so, mark as a switch and break the loop:
                shouldSwitch= true;
                break;
            }
            } else if (dir == "desc") {
            if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                //if so, mark as a switch and break the loop:
                shouldSwitch = true;
                break;
            }
            }
        }
        if (shouldSwitch) {
            /*If a switch has been marked, make the switch
            and mark that a switch has been done:*/
            rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
            switching = true;
            //Each time a switch is done, increase this count by 1:
            switchcount ++;      
        } else {
            /*If no switching has been done AND the direction is "asc",
            set the direction to "desc" and run the while loop again.*/
            if (switchcount == 0 && dir == "asc") {
            dir = "desc";
            switching = true;
            }
        }
        }


    

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
	"January",
	"February",
	"March",
	"April",
	"May",
	"June",
	"July",
	"August",
	"September",
	"October",
	"November",
	"December"
];

//set start date
let today = new Date();
let date_now = today.getDate();
let month_now = today.getMonth();
let year_now = today.getFullYear();
console.log(date_now, month_now + 1, year_now);

datepicker.innerHTML = date_now + ".";
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
		datepicker.innerHTML = date_now + ".";
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


}


$("#btn-save-report").on('click', function(e){

    let day, month, year;

    day = $('#datepicker')[0].outerText;
    month = $('#monthpicker')[0].outerText;
    year = $('#yearpicker')[0].outerText;

    let m = "";

    switch(month.toLowerCase()){
        case "enero":
            m = "01";
            break;
        case "febrero":
            m = "02";
            break;
        case "marzo":
            m = "03";
            break;
        case "abril":
            m = "04";
            break;
        case "mayo":
            m = "05";
            break;
        case "junio":
            m = "06";
            break;
        case "julio":
            m = "07";
            break;
        case "agosto":
            m = "08";
            break;
        case "septiembre":
            m = "09";
            break;
        case "octubre":
            m = "10";
            break;
        case "noviembre":
            m = "11";
            break;
        case "diciembre":
            m = "12";
            break;
    }

    let fulldate = day+"/"+m+"/"+year;

    window.location.href= "http://localhost/analytics-out-of-stock-report/dashboard/"+fulldate;

});