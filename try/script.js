function checkNumber(value) {
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
            if(this.responseText == 1) {
                document.getElementById('result').innerHTML = "Even";
            } else if (this.responseText == 0) {
                document.getElementById('result').innerHTML = "Odd";
            } else {
                document.getElementById('result').innerHTML = "";
            }
        }
    };

    xmlHttp.open("GET", "script.php?val=" + value, true);
    xmlHttp.send();
}