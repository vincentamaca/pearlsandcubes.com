        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end mb-4" style="background: #0000002e;">
                    	 <h1 class="bobo text-uppercase font-weight-bold">About Us</h1>
                    </div>
                </div>
            </div>
        </header>
        <style>
            .page-section{
                background: #2F4F4F;
            }
            .bobo{
                color: #008B8B;
            }
        </style>
    <section class="page-section">
        <div class="container">
    <?php echo html_entity_decode($_SESSION['setting_about_content']) ?>        
            
        </div>
        </section>