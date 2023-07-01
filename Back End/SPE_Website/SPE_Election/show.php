<html>  
    <head>  
        <title>President Elections</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
        <link rel="stylesheet" href="layout/css/style.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>  
    <body>  
        <?php include('navbar.php'); ?>
        <div class="container">  
            <br/><br/>
            <h1 align="center">President Elections</h1>
            <div class="row">
                <div class="col-sm-12">
                    <div style="margin-bottom:10px"  >
                        <img class="img-circle img-responsive" src="alaa.jpeg" width="20%" style="margin:auto">
                          <h3 align="center">Mr.Youssef ElDemairy</h3>
                    </div>
                </div>

                <div class="col-sm-12" >
                    <div id="poll_result">
                        
                    </div>
                </div>
            </div>
        </div>
         <br/><br/><br/>
        <section class="copyright text-center">
          <div class="container">
              <p>&copy; Designed and Developed By <span>SPE SUSC</span> IT Team <?php echo date("Y");?></p>
          </div>
        </section>

        <script>  
            $(document).ready(function(){
                //to show the data coming from the fetch poll and put it in the #poll_result
                setInterval(function(){
                    fetch_poll_data();
                }, 2000);

                function fetch_poll_data()
                {
                  $.ajax({
                    url:"fetch_poll_data.php",
                    method:"POST",
                    success:function(data)
                    {
                        $('#poll_result').html(data);
                    }
                  })  
                }
            });  
        </script>
    </body>  
</html>