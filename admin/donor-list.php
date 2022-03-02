
<?php
session_start();
error_reporting(0);
 include('includes/database.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{ 
	
	?>
<!DOCTYPE HTML>
<html>
<head>
	<style>
		.status{
			
			padding: 0px;

		}
		.status p{
			height: 0px;
		}
	</style>
<title>Smart City || Admin Manage News</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<!-- tables -->
<link rel="stylesheet" type="text/css" href="css/table-style.css" />
<link rel="stylesheet" type="text/css" href="css/basictable.css" />
<script type="text/javascript" src="js/jquery.basictable.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });

      $('#table-swap-axis').basictable({
        swapAxis: true
      });

      $('#table-force-off').basictable({
        forceResponsive: false
      });

      $('#table-no-resize').basictable({
        noResize: true
      });

      $('#table-two-axis').basictable();

      $('#table-max-height').basictable({
        tableWrapper: true
      });
    });
</script>
<!-- //tables -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
</head>
  <body>
  <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
  <?php include('includes/header.php');?>
 <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
	
				<!-- tables -->
				
				<div class="agile-tables">
					<div class="w3l-table-info">
					  <h2>Donor list</h2>
					  <?php 
							$que= "SELECT * from tblbdonor";
							$result=mysqli_query($connect,$que);
							$count=mysqli_num_rows($result);
							if($count >0){ ?>	
					    <table id="table">
						<thead>
						  <tr>
                          <th>S.No.</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Mobile</th>
                          <th>City</th>
                          <th>Location</th>
                          <th>Age</th>
                          <th>Blood Group</th>
						  <th>Donote</th>
						  <th>corona</th>
						  <th>diabetes</th>
						  <th>cancer</th>
						  <th>status</th>
                          <th>Delete</th>
						  <th>Time and date</th>
							
						  </tr>
						</thead>
						<tbody>
						
						<?php  
						$cnt=1;
                    while($row= mysqli_fetch_assoc($result)){ ?>
                <tr>
                    <td><?php echo $cnt++ ?></td>
                    <td><?php echo $row['Name']?></td>
                    <td><?php echo $row['Email']?></td>
                    <td><?php echo $row['MobileNumber']?></td>
                    <td><?php echo $row['City']?></td>
                    <td><?php echo $row['Location']?></td>
                    <td><?php echo $row['Age']?></td>
                    <td><?php echo $row['Bgroup']?></td>
					<td><?php echo $row['Donor']?></td>
					<td><?php echo $row['Corona']?></td>
					<td><?php echo $row['Diabetes']?></td>
					<td><?php echo $row['Cancer']?></td>

					
					<td class="status"> 
						<?php
						if($row['status']== 0){
							echo '<p><a href="status.php?id='.$row['id'].'&status=1">enable</a></p>';
						} elseif($row['status']== 1){
							echo '<p><a href="status.php?id='.$row['id'].'&status=0">disable</a></p>';
						}
						else{
							echo '<p><a href="status.php?id='.$row['id'].'&status=0">panding</a></p>';
						}
						?>
					</td>
					<td class='delete'><a onclick="return confirm('Are you sure ?')" href='delete-donor.php?pid=<?php echo $row['id'] ?>'><i class='fa fa-trash-o'></i></a></td>
					<th><?php echo $row['post_date']?></th>
                   
                </tr>
                <?php } ?>
						 
                      </tbody>
                  </table>
				  <?php }?>  
              </div>
          </div>
                                <!-- script-for sticky-nav -->
									<script>
										$(document).ready(function() {
											var navoffeset=$(".header-main").offset().top;
											$(window).scroll(function(){
											var scrollpos=$(window).scrollTop(); 
											if(scrollpos >=navoffeset){
												$(".header-main").addClass("fixed");
												}else{
												$(".header-main").removeClass("fixed");
												}
										});
										
									});
									</script>
								<!-- /script-for sticky-nav -->
							    <!--inner block start here-->
									<div class="inner-block">

									</div>
							   <!--inner block end here-->
							   <!--copy rights start here-->
							   <?php include('includes/sidebarmenu.php');?>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   

</body>
</html>
<?php } ?>
