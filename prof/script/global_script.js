var time = "01:01";
var started = false;
document.getElementById("czas").innerHTML =  "Czas " + time + "h";
var counting;

document.getElementById("start").onclick = function(){
    if(!started){
        console.log("wystartowalem");
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
        console.log("zatrzymalem");
    }
}