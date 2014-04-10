<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    
    <meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />
    <title>Paper Crown - Home</title>
<link rel="stylesheet" type="text/css" href="../css/main.css">
<link rel="stylesheet" type="text/css" href="../css/font.css">
<script type="text/javascript" src="../jquery/location_popup.js"></script>
<script>
			function openDialog() {
				Avgrund.show( "#default-popup" );
			}
			
			function closeDialog() {
				Avgrund.hide();
			}	
</script>
<style>
                   



.avgrund-contents {
    position: relative;
    padding: 20px;
    max-width: 400px;
    height: 100%;
    margin: auto;
}
.avgrund-active .avgrund-contents {
    -webkit-filter: blur(2px);
    -moz-filter: blur(2px);
    -ms-filter: blur(2px);
    -o-filter: blur(2px);
    filter: blur(2px);
}
.mask {
background-color: rgb(119, 119, 119);
opacity: 0.7;
cursor: pointer;
height: 875px;
display: block;
}
.no-blur.avgrund-active .avgrund-contents {
    -webkit-filter: none;
    -moz-filter: none;
    -ms-filter: none;
    -o-filter: none;
    filter: none;
}

.avgrund-popup {
    position: absolute;
    width: 300px;
    height: 140px;
    left: 50%;
    top: 50%;
    margin: -220px 0 0 -190px;
    color: #333333;
    font-family: 'source_sans_proregular';
    font-size: 14px;
    text-align: center;
    visibility: hidden;
    opacity: 0;
    z-index: 2;
    padding: 20px;
    background: #f6f5f5;
    box-shadow: 0px 0px 20px rgba( 0, 0, 0, 0.6 );
    border-radius: 3px;
    border-top: 40px solid #89b759;

    -webkit-transform: scale( 0.8 );
    -moz-transform: scale( 0.8 );
    -ms-transform: scale( 0.8 );
    -o-transform: scale( 0.8 );
    transform: scale( 0.8 );
}
.avgrund-popup select{
    width: 56%;
    height: 25px;
    background: #ffffff;
    border: 1px solid #e5e6e3;
  
}
.avgrund-popup input{
    height: 25px;
    width: 30%;
    border: 1px solid #e5e6e3;
    padding-left: 14px;
    font-size: 12px;
    margin-bottom: 20px;
}
.avgrund-popup p{
    line-height: 5px;
    font-size: 12px;
}
.avgrund-popup lable{
    padding-right: 10px;
}
.avgrund-popup h2{
    margin-top: -17%;
    color: #ffffff;
    font-size: 16px;
    font-family: 'source_sans_proregular';
    text-align: center;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, .3);
}
.avgrund-active .avgrund-popup-animate {
    visibility: visible;
    opacity: 1;

    -webkit-transform: scale( 1.1 );
    -moz-transform: scale( 1.1 );
    -ms-transform: scale( 1.1 );
    -o-transform: scale( 1.1 );
    transform: scale( 1.1 );
}
.avgrund-popup.stack {
    -webkit-transform: scale( 1.5 );
    -moz-transform: scale( 1.5 );
    -ms-transform: scale( 1.5 );
    -o-transform: scale( 1.5 );
    transform: scale( 1.5 );
}
.avgrund-active .avgrund-popup.stack {
    -webkit-transform: scale( 1.1 );
    -moz-transform: scale( 1.1 );
    -ms-transform: scale( 1.1 );
    -o-transform: scale( 1.1 );
    transform: scale( 1.1 );
}


.avgrund-ready body,
.avgrund-ready .avgrund-contents,
.avgrund-ready .avgrund-popup,
.avgrund-ready .avgrund-cover {
    -webkit-transform-origin: 50% 50%;
    -moz-transform-origin: 50% 50%;
    -ms-transform-origin: 50% 50%;
    -o-transform-origin: 50% 50%;
    transform-origin: 50% 50%;

    -webkit-transition: 0.3s all cubic-bezier(0.250, 0.460, 0.450, 0.940);
    -moz-transition: 0.3s all cubic-bezier(0.250, 0.460, 0.450, 0.940);
    -ms-transition: 0.3s all cubic-bezier(0.250, 0.460, 0.450, 0.940);
    -o-transition: 0.3s all cubic-bezier(0.250, 0.460, 0.450, 0.940);
    transition: 0.3s all cubic-bezier(0.250, 0.460, 0.450, 0.940);
}
.avgrund-ready .avgrund-popup.no-transition {
    -webkit-transition: none;
    -moz-transition: none;
    -ms-transition: none;
    -o-transition: none;
    transition: none;
}

button {
    overflow: visible;
    position: relative;
    border: 0;
    padding: 0px 0px 0px 0px;
    cursor: pointer;
    height: 26px;
    width:70px;
    margin-right: -56%;
    margin-bottom: 20px;
    font-size: 13px;
    color: white;
    background: #94b659;
    border: 1px solid #7c9e42;
    border-radius: 1px 1px 1px 1px;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, .3);
}
button:hover {
    background: #94b659;
}
button:active {
    background: #94b659;
    outline: 0; 
}
button+button {
    margin-left: 0px;
}
</style>
<script>
			function afterClose() {
						document.getElementById("location-display").innerHTML = document.getElementById("location-select").value;
			}
			function init() {
					openDialog();
			}
</script>
</head>
<body onLoad="init()">

    <section>
            <header>
                <div id="sec">
                    <div class="logo">
                        <a href="index.html"><img src="../images/logo.png" alt="Paper Crown Logo"></a>
                    </div>
                   <div id="location">
                        <ul>
                            <li style="border-left: none;">
                                <img src="../images/location.png" alt="location symbol"> Location : <span class="current_location" id="location-display"></span>
                            </li>
                            <li class="avgrund-contents">
                                
			
			

			<a  href="#" onclick="javascript:openDialog();">Change Your Location </a> <img src="../images/arrow.png" alt="arrow">
                            </li>
                            <li style="border-right: none;">
                                <a  href="#">Sign In</a> 
                            </li>
                        </ul>
                    </div>
                    <nav>
                        <ul>
                            <li class="Selected" style="border-left: none;">
                                <a href="#">How It Works</a>
                            </li>
                            <li>
                                <a href="#">About</a>
                            </li>
                            <li>
                                <a href="#">Contact</a>
                            </li>
                            <li>
                                <a href="search_result.html">Advanced Search</a>
                            </li>
                            <li style="border-right: none;">
                                <a href="#">Sell Books</a>
                            </li>
                        </ul>
		    </nav>
                </div>
		<div class="mask"></div>
                <aside id="default-popup" class="avgrund-popup">
			<h2><img src="../images/drop_pin.png" alt="location">Select Your Location</h2><br>
                        <a  href="#" style=" float: right; margin-top: -29%; margin-right: -11%;" onclick="javascript:closeDialog();"><img src="../images/close.png" alt="Close"></a>
			<label>Location: </label>
                            <select id="location-select" name="states">
                                <option value=""> -Select Your City- </option>
                                <option value="Delhi">Delhi</option>
                                <option value="Allahabad">Allahabad</option>
                                <option value="Business">Business</option>
                                <option value="ComputerScience">Computer Science</option>
                                <option value="Economics">Economics</option>
                            </select>
                            <p>Or</p>
                        <label>Enter Your Zipcode : </label>
                                <input type="text" name="search" class="search" placeholder=""><br>
                                    <button onclick="javascript:closeDialog();">Submit</button>
                                    
		</aside>
		
            </header>
	    
            <div id="container">
                <form action="#" method="post" class="search-wrapper cf">
                        <input type="text" name="search" id="search" placeholder="Book Title/ Author Name">
                             <button type="submit">Search Books</button>
                </form>
                <div class="box">
                    <img src="images/search_books_icon.png" alt="Search Books Icon">
                    <h1>Search Books</h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adiing elit. In volutpat luctus eros ac placerat. 
                        Quisque erat metus facilisis non feu aliquam hendrerit quam.<br><br>
                        <input class="button white" type="button" value="Search Books">
                    </p>
                </div>
                <div class="box">
                    <img src="images/category_icon.png" alt="Search Books By Category Icon">
                    <h1>Search By Category</h1>
                    <p>
                        <a href="#">Action & Adventure</a><br>
                        <a href="#">Arts</a><br>
                        <a href="#">Biographies & Memoirs</a><br>
                        <a href="#">Business</a><br><br>
                        <input class="button white" type="button" value="See More">
                    </p>
                </div>
                <div class="box" style="margin-right:0px;">
                    <img src="images/sell_books_icon.png" alt="Sell Books Icon">
                    <h1>Sell Books</h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adiing elit. In volutpat luctus eros ac placerat. 
                        Quisque erat metus facilisis non feu aliquam hendrerit quam.<br><br>
                        <input class="button white" type="button" value="Sell Books">
                    </p>
                    
                </div>
            </div>
    
			<footer>
                <div id="footer_sec"><br>
                    <div class="box">
                        <ul>
                            <li>
                                <img src="../images/facebook.png" alt="Facebook"><a href="#">Facebook</a>
                            </li>
                            <li>
                                <img src="../images/twitter.png" alt="Twitter"><a href="#">Twitter</a>
                            </li>
                            <li>
                                <img src="../images/linkedin.png" alt="Linkedin"><a href="#">Linkedin</a>
                            </li>
                            <li>
                                <p style="color: #9f9e9e; font-size: 11px; margin-top: 0px;  ">PaperCrown.in   &nbsp; &copy; &nbsp;   2014  &nbsp;|&nbsp;  <a href="#">Privacy Policy</a> &nbsp;|&nbsp;
                        Designed By : <a href="#">Ruchi Pandeya</a></p>
                            </li>
                            
                        </ul>
                        
                    </div>
                </div>
            </footer>
        
    </section>
</body>

