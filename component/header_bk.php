<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Suraj Cinpelex</title>
        
        <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
        <link rel="icon" href="../favicon.ico" type="image/x-icon"> 
        <link rel="stylesheet" type="text/css" id="theme" href="<?php echo SITE;?>css/theme-night-head-light.css"/>
        <script type="text/javascript">var webpath ="<?php echo SITE;?>";</script>                                  
    </head>
    <!-- oncontextmenu="return false;" -->
    <body >
        <div class="page-container">
            
            <?php
                $menuname =  basename($_SERVER['PHP_SELF']);
                $menuheadname =  basename($_SERVER['PHP_SELF']);
                if($menuname!='screencharts.php'){
            ?>

            <div class="page-sidebar">
               <?php include('leftsidebar.php');?>
            </div>
           <?php } ?>
                
                    <?php
                       
                        if($menuname!='screencharts.php'){
                    ?>
                   <div class="page-content"> 
                    <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    
                   <!--  <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li> -->
                    <li><?php 
                            if(isset($_SESSION['book_screen_number'])){
                                echo '<div class="" style="margin-top:15px;color:white;font-weight: bold;">SCREEN '.$_SESSION['book_screen_number'].'</div>';    
                            }
                        ?>
                    </li>
                    <li><?php 
                            if(isset($_SESSION['book_moviename'])){
                                echo '<div class="" style="margin-top:15px;margin-left:70px;color:white;font-weight: bold;">'.strtoupper(getmoviename($_SESSION['book_moviename'])).'</div>';    
                            }
                        ?>
                    </li>
                    <li><?php 
                            if(isset($_SESSION['book_show_time'])){
                                echo '<div class="" style="margin-top:15px;margin-left:70px;color:white;font-weight: bold;">'.strtoupper($_SESSION['book_show_time']).'</div>';    
                            }
                        ?>
                    </li>
                    
                   
                  
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li> 
                    
                    </ul>
                    <?php
                        }else{
                    ?>
                    <div class=""> 
                    <?php 
                        }
                    ?>
                   