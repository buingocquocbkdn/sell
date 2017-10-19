<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
	<title>Books store</title>
	<link href="https://fonts.googleapis.com/css?family=Vollkorn" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/common.css">
	<link rel="stylesheet" type="text/css" href="css/info.css">
</head>
<body>
	<div id="wapper">
		<?php
			include("templates/header.php");
		?>
        <div class="container fix_header">
            <div class="row">
                <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                    
					<div class="content_info">
						<div class="row gioi_thieu">
							<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
								<img src="images/1.png" alt="boruto" id="image_big_info">
							</div>
							<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 more_info">
								<div class="info-story">
									<h3 id="name-story">Office 365</h3>
									
									<p class="white_space">
										Tác giả: Microsoft Corporation.
										Thể loại: Phần mềm văn phòng.
										Nhà sản xuất: Microsoft Corporation.
										Đánh giá ứng dụng:
									</p>
									<img src="images/info/info-02.png" alt="">
									<div class="read-and-buy">
										<a href="buy.php"><img class="hover_button_info" src="images/info/info-04.png" alt=""></a>
										
									</div>
								</div>
								
							</div>
						</div>
						<div class="content-introduction">
							<p class="content_title">
								<h4><span class="fa fa-list-alt fa-fw"></span>Nội dung:</h4>
							</p>
							<p class="introduction">
								Đó là các ứng dụng bạn biết và yêu thích
								<br>
								Word, Excel, PowerPoint, Outlook, OneNote, OneDrive—và trên PC, Publisher cũng như Access của bạn. Tất cả những gì bạn cần cho gia đình, trường học và công việc. <a href="#">Xem thêm <span class="fa fa-angle-double-right fa-fw"></span></a> 
							</p>
						</div>
						<div class="content-introduction">
							<p class="content_title">
								<h4><span class="fa fa-video-camera fa-fw"></span>Review:</h4>
							</p>
							<div class="introduction">
								<iframe width="100%" height="480" src="https://www.youtube.com/embed/ozLaklIFWUI" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
					</div>

                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">                    
                    <div class="title_new_story">
						<p class="color_text">Kết nối với chúng tôi</p>
					</div>
					<div class="content_new_face">
						<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fan.nguy.31%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="290" style="border-radius: 5px;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
					</div>
                    <div class="title_new_story">
						<p class="color_text">Ứng dụng hàng đầu</p>
					</div>
					<div class="content_top_story">
						<div class="top_xephang">
							<img src="images/icon_top.png">
							<a href="info.php" class="text_top">office 365</a>
						</div>
						<div class="top_xephang">
							<img src="images/icon_top02.png">
							<a href="info.php" class="text_top">McAFEE Antivirus</a>
						</div>
						<div class="top_xephang">
							<img src="images/icon_top03.png">
							<a href="info.php" class="text_top">Advanced System Care</a>
						</div>
						<div class="top_xephang">
							<img src="images/icon_top04.png">
							<a href="info.php" class="text_top">AVG Antivirus</a>
						</div>
						<div class="top_xephang">
							<img src="images/icon_top05.png">
							<a href="info.php" class="text_top">Kaspersky Antivirus</a>
						</div>
						<div class="top_xephang">
							<img src="images/icon_top06.png">
							<a href="info.php" class="text_top">BKAV Antivirus</a>
						</div>
						<div class="top_xephang">
							<img src="images/icon_top07.png">
							<a href="info.php" class="text_top">Photoshop CS6</a>
						</div>
					</div>
                </div>
            </div>
        </div>
        
		<div class="up">
			<div class="gototop">
				<a href="#"><span class="fa fa-chevron-up fa-fw"></span></a>
			</div>
		</div>

        <?php
			include("templates/footer.php");
		?>
	</div>

	

	<script type="text/javascript">
		var canvas = document.getElementById("canvas");
		ctx = canvas.getContext('2d');
	    ctx.strokeStyle = "#FF0000";
	    ctx.moveTo(0,0);
	    ctx.lineTo(200,100);
	    ctx.stroke();"canvas");
		
	</script>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>