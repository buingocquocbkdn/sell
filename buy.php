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
					<div id="mapholder" ></div>
					<div class="ap-dung-jquery">
						<form action="javascript:void(0)" method="" role="form">
							<legend>Vui lòng nhập thông tin của bạn:</legend>
						
							<div class="form-group">
								<label for="">Tên:</label>
								<input type="text" class="form-control" id="input_your_name" placeholder="Vui lòng nhập tên...">
								<label for="">Email:</label>
								<input type="text" class="form-control" id="input_your_name" placeholder="Vui lòng nhập đúng email...">
								<label for="">Địa chỉ:</label>
								<input type="text" class="form-control" id="input_your_name" placeholder="Vui lòng nhập địa chỉ...">
								<label for="">Số điện thoại:</label>
								<input type="text" class="form-control" id="input_your_name" placeholder="Vui lòng nhập số điện thoại...">
							</div>
							<button type="button" class="btn btn-primary" id="showname">Xác nhận thông tin</button>
						</form>
						<div class="showvalue">
							<h2></h2>
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
					</div>s
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

<script>
    	var x = document.getElementById("demo");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    var latlon = position.coords.latitude + "," + position.coords.longitude;
    var img_url = "https://maps.googleapis.com/maps/api/staticmap?center="
    +latlon+"&zoom=14&size=850x300&key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU";
    document.getElementById("mapholder").innerHTML = "<img src='"+img_url+"'>";
}
// get a free API key from Google.

function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
            x.innerHTML = "User denied the request for Geolocation."
            break;
        case error.POSITION_UNAVAILABLE:
            x.innerHTML = "Location information is unavailable."
            break;
        case error.TIMEOUT:
            x.innerHTML = "The request to get user location timed out."
            break;
        case error.UNKNOWN_ERROR:
            x.innerHTML = "An unknown error occurred."
            break;
    }
}
</script>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/buy_book.js"></script>
    

</body>
</html>

