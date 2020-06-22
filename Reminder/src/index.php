<html>
    <head>
        <script type="text/javascript">
            setInterval(function(){
                var Now = new Date();
                if(Now.getMinutes() % 1 == 0) {
                    //location.reload();    #Lädt komplette Seite neu, nicht nur den Inhalt

                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                    };
                    xmlhttp.open("GET","site.php?",true);
                    xmlhttp.send();
                }
            },1000);

        </script>
    </head>
    <body>
        
        <div id="txtHint"><b>Loading...</b></div>

    </body>
</html>