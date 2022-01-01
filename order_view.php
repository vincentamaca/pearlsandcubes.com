<html>
    <head>
        <title>orders</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    </head>
    <body>
        <table class="table">
            <tr>
                <th>Order ID</th>
                <th>Product ID</th>
                <th>Quantity</th>
                <th>Payment</th>
            </tr>
            <tbody id="mydata">

            </tbody>
        </table>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
        <script>
            $(document).ready(function (){
                $.ajax({
                    type: "GET",
                    url: "connect.php",
                    dataType: "html",
                    success: function (data){
                        $('#mydata').html(data)
                    }
                });
            });
        </script>
    </body>
</html>