<html>
    <head>
        <meta charset="UTF-8">
        <title>Prime Numbers</title>
        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    </head>
    <body>
        <section class="main">

            <h3>Prime Numbers</h3>
            <button id="primeNumbers">Get Prime Numbers</button>

            <div id="output">Output: </div>

        </section>

    </body>


    <script>
        $("#primeNumbers").click(function(){
            getPrimes();
        });
        
        var getPrimes = function(){
            data = {
                startingPoint: '2',
                quantity: '1000'
            }
            $.post("primes.php",data,function(response){
                $("#output").append("<table><tr><th>Index</th><th>Value</th></tr>");
                $.each(response, function(index,el){
                    //alert(index+"is: "+el);
                    $("#output").append("<tr><td>"+(index+1)+"</td><td>"+el+"</td></tr>");
                    
                });
                $("#output").append("<table>");
                },'json');

         }; 

    </script>
</html>