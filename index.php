<!doctype html>
<html>
    <head>
		<meta charset="UTF-8">
		<title></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css" integrity="sha256-oSrCnRYXvHG31SBifqP2PM1uje7SJUyX0nTwO2RJV54=" crossorigin="anonymous" />
		<link rel="stylesheet" type="text/css" href="style.css">
		<script	src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.qrcode/1.0/jquery.qrcode.min.js" integrity="sha256-9MzwK2kJKBmsJFdccXoIDDtsbWFh8bjYK/C7UjB1Ay0=" crossorigin="anonymous"></script>
		<script	src="javascript.js"></script>
    </head>
<body>
    <div id="main">
        <h1>Create a new Advertisement</h1>
        <div id="submit_box">
            
            <div class="title">Name:</div>
            <input id="name" value="">
            
            <div class="title">Ad Size & Website:</div>
            <select name="ad-size-website">
                <option value="120x600">120x600 | www.ads.com</option>
                <option value="160x600">160x600 | www.ads.com</option>
                <option value="728x90">728x90 | www.ads.com</option>
            </select>
            
            <div class="title">Ad Image:</div>
            <input type="file" id="ad-image" value="">
            
            <div class="title">Ad Url:</div>
            <input id="url" value="" placeholder="http://www.yourwebsite.com">
            
            <div class="title">Price:</div>
            
            <div class="title">Rules:</div>
	        
        </div>
  </div>
</body>
</html>

