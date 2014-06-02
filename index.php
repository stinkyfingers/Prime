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

            $.post("primes.php",function(response){
                console.log(response.test);
                //alert(response);
                $("#output").html(response.test);
                },'json');

         }; 
            
        


    </script>
</html>