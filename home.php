       <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="hahaha">
                        <a class="bttn" href="#menu">Order Now</a>
                    </div>
                </div>
            </div>
        </header>
        <style>
            .bttn{
                background-color: green;
                padding: 10px;
                padding-left: 50px;
                padding-right: 50px;
                margin: 50px;
                border-radius: 50px;
                color: white;
                font-size: 28px;
                box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
                transition: 0.7s;
            }
            .bttn:hover{
                color: black;
                background-color: #9ACD32;
                transform: scale(1.5);
            }
            h3{
                font-family: sans-serif;
                font-size: 40px;
                font-weight: bold;
            }
            .btn{
                background-color: none;
                border: none;
                outline: 1px solid green;
                color: green;
                transition: 0.5s
            }
            .btn:hover{
                background-color: green;
            }
            .page-section{
                background: #2F4F4F;
            }
            .card-img-top{
                height: 250px;
                margin-bottom:15px;
            }
            .col-lg-3{
                margin-bottom:15px;
            }
            .categor{
                background: #00FF7F;
            }
            .gitna{
                margin-left: 40%;
            }
            .pindot{
                margin: 10px;
                margin-bottom: 10px;
                color: #2F4F4F;
                font-weight: bold;
            }
            a{
                color: white;
                text-decoration: none;
                text-transform: uppercase;
                transition: 0.5s;
            }
            a:hover{
                color: black;
                text-decoration: none;
            }
            h4{
                text-align: center;
                padding-top: 10px;
            }
            
        </style>
        <style>
            .milktea{
                background: #90EE90;
            }
            h5{
                padding: 10px;
                text-align: center;
            }
            .burger{
                background-color: #32CD32;
            }
            .fruit-tea{
                background-color: #00FA9A;
            }
            .back{
                margin-bottom: 20px;
                margin-left: 95%;
                background-color: green;
                padding-left: 10px;
                padding-right: 10px;
                border-radius: 10px;
            }
            .mama{
                font-size: 24px;
                font-weight: bold;
                transition: 0.5s;
                background: green;
                color: white;
            }
            .mama:hover{
                background: #6495ED;
                color: black;
            }
            .card-img-top{
                transition: 0.5s;
            }
            .card-img-top:hover{
                transform: scale(1.5);
            }
        </style>
    
	<section class="menu" id="menu">
    <h5 class="mama">Order Here!</h5>
        <div id="menu-field" class="card-deck">
                <?php 
                    include'admin/db_connect.php';
                    $qry = $conn->query("SELECT * FROM  product_list order by rand() ");
                    while($row = $qry->fetch_assoc()):
                    ?>
                    <div class="col-lg-3">
                        <div class="card menu-item ">
                            <img src="assets/img/<?php echo $row['img_path'] ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row['name'] ?></h5>
                                    <p> <b><small>Price : <?php echo number_format($row['price'],2) ?> php</small></b></p>
                                    <p class="card-text truncate"><?php echo $row['description'] ?></p>
                                    <div class="text-center">
                                        <button class="btn btn-sm btn-outline-primary view_prod btn-block" data-id=<?php echo $row['id'] ?>><i class="fa fa-eye"></i> View</button>
                                    </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <a href="index.php"class="back">Back</a>
        </div>
    </section>
    <script>
        
        $('.view_prod').click(function(){
            uni_modal_right('Product','view_prod.php?id='+$(this).attr('data-id'))
        })
    </script>
	
