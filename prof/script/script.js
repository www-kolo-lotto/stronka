
    var timeFromPicker = "00:00";
    var time = "00:00";
    var started = false;
    function getTime(){
        // console.log(this.time);
        timeFromPicker = this.time;
        // licznik =  document.getElementById("czas");
        // licznik.innerHTML = "Czas " + time + "h";
        // console.log(licznik.innerHTML);

    }

    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.timepicker');
        var instances = M.Timepicker.init(elems, {twelveHour: false, onCloseEnd: getTime});
    });

    document.getElementById("zatwierdz").onclick = function(){
        time = timeFromPicker;
        licznik =  document.getElementById("czas");
        licznik.innerHTML = "Czas " + time + "h";

    }
    var counting;
    document.getElementById("start").onclick = function(){
        if(!started){
            var string = time.substr(0,2);
            var hours = parseInt(string);
            var string = time.substr(3,2);
            var minutes = parseInt(string);
            console.log(hours);
            console.log(minutes);
            licznik =  document.getElementById("czas");
            counting = setInterval(function(){

                if(minutes == 0){
                    if(hours == 0){
                        start = false;
                        clearInterval(counting);
                    }
                    else{
                        hours = hours - 1;
                        minutes = 59;
                    }
                }
                else{
                    minutes = minutes - 1;
                }

                if(hours < 10){
                    string = "0" + hours + ":";
                }
                else{
                    string = hours + ":";
                }

                if(minutes < 10){
                    string = string + "0" + minutes;
                }
                else{
                    string = string + minutes;
                }
                time = string;
                licznik.innerHTML = "Czas " + time + "h";
                // console.log(g);
            }, 60000);
        }
    }

    document.getElementById("stop").onclick = function(){
        if(start){
            start = false;
            clearInterval(counting);
        }
    }