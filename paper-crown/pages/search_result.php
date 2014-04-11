<!doctype html>
<html lang="en">
<head>
    <?php include '../includes/commons.html'; ?>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
<script>
    function toggleContactSeller(id) {
        var div = document.getElementById("seller_details_div_" + id);
        var display = div.style.display;
        if (display == "block") {
            div.style.display = "none";
        } else {
            div.style.display = "block";
        }
    }
    
    function initNavigation() {
        var type = '<?php echo $_GET['type'] ?>';
        if (type == "categories") {
            document.getElementById("search_filter_location").style.display = "none";
            document.getElementById("search_filter_categories").style.display = "block";
        } else {
            document.getElementById("search_filter_location").style.display = "block";
            document.getElementById("search_filter_categories").style.display = "none";
        }
    }
    function navigateToUrl(url) {
	    location.href = url;
	}
</script>
</head>
<body onLoad="initNavigation()">
    <section>
            <?php include '../includes/header.html'; ?>
            <div id="container">
                <h2>All Results</h2>
                <div id="search_filter_location">
                    <h3>LOCALITY</h3>
                   
                        <p><a href="#">Rohini <span class="number">(15)</span></a></p>
                        <p><a href="#">Prashant Vihar <span class="number">(10)</span></a></p>
                        <p><a href="#">Pitampura <span class="number">(5)</span></a></p>
                        <p><a href="#">Rithala <span class="number">(3)</span></a></p>
                        <p><a href="#">Saraswati Vihar <span class="number">(2)</span></a></p>
                    
                    <h3>CONDITION</h3>
                   
                        <p><a href="#">New <span class="number">(15)</span></a></p>
                        <p><a href="#">Used <span class="number">(20)</span></a></p>
                        <p><a href="#">Free <span class="number">(0)</span></a></p>
                        
                     <h3>AUTHOR</h3>
                   
                        <p><a href="#">Herbert <span class="number">(1)</span></a></p>
                        <p><a href="#">Shailendra Mis. <span class="number">(1)</span></a></p>
                        <p><a href="#">Waiter Savitch <span class="number">(1)</span></a></p>
                        <p><a href="#">Kathy Sierra <span class="number">(1)</span></a></p>
                </div>
                <div id="search_filter_categories" style="display: none">
                    <h3>CATEGORIES</h3>
                   
                        <p><a href="#">Arts and Humanities <span class="number">(15)</span></a></p>
                        <p><a href="#">Biographies & Autobiographies <span class="number">(10)</span></a></p>
                        <p><a href="#">Business & Management <span class="number">(5)</span></a></p>
                        <p><a href="#">Children <span class="number">(3)</span></a></p>
                        <p><a href="#">Comics & Graphic Novels <span class="number">(2)</span></a></p>
                        <p><a href="#">Cooking, Food & Drink <span class="number">(15)</span></a></p>
                        <p><a href="#">Computer and Internet <span class="number">(20)</span></a></p>
                        <p><a href="#">Competitive Examinations <span class="number">(0)</span></a></p>
                        <p><a href="#">Engineering <span class="number">(1)</span></a></p>
                        <p><a href="#">History & Politics <span class="number">(1)</span></a></p>
                        <p><a href="#">Humour <span class="number">(1)</span></a></p>
                        <p><a href="#">Law <span class="number">(1)</span></a></p>
                        <p><a href="#">Language Learning <span class="number">(1)</span></a></p>
                        <p><a href="#">Literature & Fiction <span class="number">(1)</span></a></p>
                        <p><a href="#">Mathematics & Science <span class="number">(1)</span></a></p>
                        <p><a href="#">Medical <span class="number">(1)</span></a></p>
                        <p><a href="#">Philosophy <span class="number">(1)</span></a></p>
                        <p><a href="#">Science <span class="number">(1)</span></a></p>
                        <p><a href="#">Sports <span class="number">(1)</span></a></p>
                        <p><a href="#">Others <span class="number">(1)</span></a></p>
                </div>
                <div id="advanced_search">
                    <form action="#" method="post">
                        <ul class="search_field">
                            <li>
                                <label>Search : </label>
                                <input type="text" name="search" class="search" placeholder="Book Title/ Author name">
                            </li>
                             <li>
                                <label>Condition : </label>
                                    <input type ="checkbox" name="condition" value="New" checked>New
                                    <input type ="checkbox" name="condition" value="Used">Used
                                    <input type ="checkbox" name="condition" value="Free">Free
                            </li>
                             <li>
                                <label>Locality : </label>
                                <input type="text" name="search" class="search" placeholder="">
                            </li>
                             <li>
                                <label>Category: </label>
                                    <select id="states" name="states">
                                        <option value="Arts&Humanities">Arts and Humanities</option>
                                        <option value="Biographies&Autobiographies">Biographies & Autobiographies</option>
                                        <option value="Business&Management">Business & Management</option>
                                        <option value="Children">Children</option>
                                        <option value="Comics&GraphicNovels">Comics & Graphic Novels</option>
                                        <option value="CookingFood&Drink">Cooking, Food & Drink </option>
                                        <option value="Computer&Internet">Computer and Internet</option>
                                        <option value="CompetitiveExaminations">Competitive Examinations</option>
                                        <option value="Engineering">Engineering</option>
                                        <option value="History&Politics">History & Politics</option>
                                        <option value="Humour">Humour</option>
                                        <option value="Law">Law </option>
                                        <option value="LanguageLearning">Language Learning</option>
                                        <option value="Literature&Fiction">Literature & Fiction</option>
                                        <option value="Mathematics&Science">Mathematics & Science</option>
                                        <option value="Medical">Medical</option>
                                        <option value="Philosophy">Philosophy</option>
                                        <option value="Science">Science</option>
                                        <option value="Sports">Sports</option>
                                        <option value="Others">Others</option>
                                    </select>
                                <label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Price Range: </label>
                                <input type="text" name="price-Range" id="min_price" class="price_box" size="5" maxlength="5"> &nbsp; to &nbsp;
                                <input type="text" name="price-Range" id="max_price" class="price_box" size="5" maxlength="5"> Rs
                            </li>
                        </ul>
                        <input style="float: right; margin-right: 7%; margin-top: -6%;" class="buttons white" type="button" value="Search">
                    </form>
                    
                </div>
                <div class="search_result">
                    <div class="book_image">
                        <a href="item_brief.php"><img src="../images/book_image_1.png" alt="Book Image"></a>
                    </div>
                    <div class="book_info">
                        <button class="contact_seller" onClick="toggleContactSeller(1)"></button>
                        <div id="seller_details_div_1" style="display:none">
                            <div class="seller_details">
                                <p>Prefered Contact Method : <br><span style="font-family:'source_sans_proregular'">email Only</span></p>
                                <p>Reply by email : <br><a href="#"><span style="color:#809634; font-family:'source_sans_proregular'" >4rs-ps-123@contact.papercrown.in</span></a></p>
                                <p>Webmail Links : <br>
                                <a href="#"><span style="color:#809634; font-family:'source_sans_proregular'" >Gmail,</span></a> &nbsp;
                                <a href="#"><span style="color:#809634; font-family:'source_sans_proregular'" >Yahoo,</span></a>&nbsp;
                                <a href="#"><span style="color:#809634; font-family:'source_sans_proregular'" >Hotmail</span></a></p>
                                <p>Copy and paste into your email : <br>
                                <span style="font-family:'source_sans_proregular'">4rs-ps-123@contact.papercrown.in</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="book_details">
                        <p class="title">The Complete Reference - Java2 </p>
                        <p>Author :  <span style="color: #809634;">Herbert</span></p>
                        <p>Language : English</p>
                        <p>Condition : New</p>
                        <p>Locality : Pitampura</p>
                        <p>Sell by : Shiv Book Store (Book Seller)</p>
                        <p>Shop Address : 1154, Sai Chowk,Pitampura, Delhi - 110081</p>
                        <p>Contact No : 9918887672</p>
                        <p style="font-family: 'source_sans_probold'; font-size: 16px;">Price : <span style="color: #809634;">2300rs</span></p>
                        <input class="button white" type="button" value="Read More" onClick="navigateToUrl('item_brief.php')">
                        <p class="posted_date"> Posted Date : 02/02/2014</p>
                        
                    </div>
                </div>
                <div class="search_result">
                    <div class="book_image">
                        <a href="#"><img src="../images/book_image_2.png" alt="Book Image"></a>
                    </div>
                    <div class="book_info">
                        <button class="contact_seller" onClick="toggleContactSeller(2)"></button>
                        <div id="seller_details_div_2" style="display:none">
                            <div class="seller_details">
                                <p>Prefered Contact Method : <br><span style="font-family:'source_sans_proregular'">email Only</span></p>
                                <p>Reply by email : <br><a href="#"><span style="color:#809634; font-family:'source_sans_proregular'" >4rs-ps-123@contact.papercrown.in</span></a></p>
                                <p>Webmail Links : <br>
                                <a href="#"><span style="color:#809634; font-family:'source_sans_proregular'" >Gmail,</span></a> &nbsp;
                                <a href="#"><span style="color:#809634; font-family:'source_sans_proregular'" >Yahoo,</span></a>&nbsp;
                                <a href="#"><span style="color:#809634; font-family:'source_sans_proregular'" >Hotmail</span></a></p>
                                <p>Copy and paste into your email : <br>
                                <span style="font-family:'source_sans_proregular'">4rs-ps-123@contact.papercrown.in</span>
                                </p>
                            </div>  
                        </div>
                    </div>
                    <div class="book_details">
                        <p class="title">Java - in 21 days</p>
                        <p>Author :  <span style="color: #809634;">Rogers Cadenhead</span></p>
                        <p>Language : English</p>
                        <p>Condition : New</p>
                        <p>Locality : Prashant Vihar</p>
                        <p>Sell by : Gandhi Book Store (Book Seller)</p>
                        <p>Shop Address : 1154, Sai Chowk,Pitampura, Delhi - 110081</p>
                        <p>Contact No : 9918887672</p>
                        <p style="font-family: 'source_sans_probold'; font-size: 16px;">Price : <span style="color: #809634;">2300rs</span></p>
                        <input class="button white" type="button" value="Read More">
                        <p class="posted_date"> Posted Date : 02/02/2014</p>    
                    </div>
                </div>
                <div class="search_result">
                    <div class="book_image">
                        <a href="#"><img src="../images/book_image_3.png" alt="Book Image"></a>
                    </div>
                    <div class="book_info">
                        <button class="contact_seller" onClick="toggleContactSeller(3)"></button>
                        <div id="seller_details_div_3" style="display:none">
                            <div class="seller_details">
                                <p>Prefered Contact Method : <br><span style="font-family:'source_sans_proregular'">email Only</span></p>
                                <p>Reply by email : <br><a href="#"><span style="color:#809634; font-family:'source_sans_proregular'" >4rs-ps-123@contact.papercrown.in</span></a></p>
                                <p>Webmail Links : <br>
                                <a href="#"><span style="color:#809634; font-family:'source_sans_proregular'" >Gmail,</span></a> &nbsp;
                                <a href="#"><span style="color:#809634; font-family:'source_sans_proregular'" >Yahoo,</span></a>&nbsp;
                                <a href="#"><span style="color:#809634; font-family:'source_sans_proregular'" >Hotmail</span></a></p>
                                <p>Copy and paste into your email : <br>
                                <span style="font-family:'source_sans_proregular'">4rs-ps-123@contact.papercrown.in</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="book_details">
                        <p class="title">The Complete Reference - Java2 </p>
                        <p>Author :  <span style="color: #809634;">Herbert</span></p>
                        <p>Language : English</p>
                        <p>Condition : New</p>
                        <p>Locality : Pitampura</p>
                        <p>Sell by : Shiv Book Store (Book Seller)</p>
                        <p>Shop Address : 1154, Sai Chowk,Pitampura, Delhi - 110081</p>
                        <p>Contact No : 9918887672</p>
                        <p style="font-family: 'source_sans_probold'; font-size: 16px;">Price : <span style="color: #809634;">2300rs</span></p>
                        <input class="button white" type="button" value="Read More">
                        <p class="posted_date"> Posted Date : 02/02/2014</p>    
                    </div>
                </div>
                <div class="search_result">
                    <div class="book_image">
                        <a href="#"><img src="../images/book_image_1.png" alt="Book Image"></a>
                    </div>
                    <div class="book_info">
                        <button class="contact_seller" onClick="toggleContactSeller(4)"></button>
                        <div id="seller_details_div_4" style="display:none">
                            <div class="seller_details">
                                <p>Prefered Contact Method : <br><span style="font-family:'source_sans_proregular'">email Only</span></p>
                                <p>Reply by email : <br><a href="#"><span style="color:#809634; font-family:'source_sans_proregular'" >4rs-ps-123@contact.papercrown.in</span></a></p>
                                <p>Webmail Links : <br>
                                <a href="#"><span style="color:#809634; font-family:'source_sans_proregular'" >Gmail,</span></a> &nbsp;
                                <a href="#"><span style="color:#809634; font-family:'source_sans_proregular'" >Yahoo,</span></a>&nbsp;
                                <a href="#"><span style="color:#809634; font-family:'source_sans_proregular'" >Hotmail</span></a></p>
                                <p>Copy and paste into your email : <br>
                                <span style="font-family:'source_sans_proregular'">4rs-ps-123@contact.papercrown.in</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="book_details">
                        <p class="title">The Complete Reference - Java2 </p>
                        <p>Author :  <span style="color: #809634;">Herbert</span></p>
                        <p>Language : English</p>
                        <p>Condition : New</p>
                        <p>Locality : Pitampura</p>
                        <p>Sell by : Shiv Book Store (Book Seller)</p>
                        <p>Shop Address : 1154, Sai Chowk,Pitampura, Delhi - 110081</p>
                        <p>Contact No : 9918887672</p>
                        <p style="font-family: 'source_sans_probold'; font-size: 16px;">Price : <span style="color: #809634;">2300rs</span></p>
                        <input class="button white" type="button" value="Read More">
                        <p class="posted_date"> Posted Date : 02/02/2014</p>    
                    </div>
                </div>
                <div id="load_more">
                    <p><a href="#">- View More Options -</a></p>
                </div>
            </div>
    
            <?php include '../includes/footer.html'; ?>
        
    </section>
</body>
</html>
