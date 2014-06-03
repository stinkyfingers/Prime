<html>
    <head>
        <meta charset="UTF-8">
        <title>Prime Numbers</title>
        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <section class="main">

            <h3>Prime Numbers</h3>
            <button id="primeNumbers">Get Prime Numbers</button>

            
            
            <button id="extraCredit">Extra Credit</button>
            <div id="extraFields">
                <label for="startingPoint">Starting Number</label>
                <input type="text" id="startingPoint" value="2"><br>
                <label for="quantity">Number of Primes</label>
                <input type="text" id="quantity" value="1000">
            </div>
            
            <br><div id="output">Output: </div>
        </section>

    </body>


    <script>
        $("#primeNumbers").click(function(){
            $("#output").empty();
            getPrimes();
        });
        
        var getPrimes = function(){
            data = {
                startingPoint: $("#startingPoint").val(),
                quantity: $("#quantity").val()
            }
            $.post("primes.php",data,function(response){
                $("#output").append("<table id='primeTable'><tr><th>Index</th><th>Value</th></tr></table>");
                $.each(response, function(index,el){
                    //alert(index+"is: "+el);
                    $("#primeTable").append("<tr><td>"+(index+1)+"</td><td>"+el+"</td></tr>");
                    
                });
                },'json');

         }; 
         
         $("#extraCredit").click(function(){
            $("#extraFields").show();
           ;
         });
         
    </script>
</html>