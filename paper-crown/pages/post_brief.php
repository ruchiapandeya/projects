<!doctype html>
<html lang="en">
<head>
    <?php include '../includes/commons.html'; ?>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
<script>
    function init() {
	openDialog();
    }
</script>
</head>
<body>
    <section>
            <?php include '../includes/header.html'; ?>
            
            <div id="container">
                <h2>All Results</h2>
                <div id="search_filter" style="float: left;">
                    <h3>Locality</h3>
                   
                        <p><a href="#">Rohini <span class="number">(15)</span></a></p>
                        <p><a href="#">Prashant Vihar <span class="number">(10)</span></a></p>
                        <p><a href="#">Pitampura <span class="number">(5)</span></a></p>
                        <p><a href="#">Rithala <span class="number">(3)</span></a></p>
                        <p><a href="#">Saraswati Vihar <span class="number">(2)</span></a></p>
                    
                    <h3>Condition</h3>
                   
                        <p><a href="#">New <span class="number">(15)</span></a></p>
                        <p><a href="#">Used <span class="number">(20)</span></a></p>
                        <p><a href="#">Free <span class="number">(0)</span></a></p>
                        
                     <h3>Author</h3>
                   
                        <p><a href="#">Herbert <span class="number">(1)</span></a></p>
                        <p><a href="#">Shailendra Mis. <span class="number">(1)</span></a></p>
                        <p><a href="#">Waiter Savitch <span class="number">(1)</span></a></p>
                        <p><a href="#">Kathy Sierra <span class="number">(1)</span></a></p>
                </div>
                <div id="search_main">
                    <form action="#" method="post">
                        <ul class="search_field">
                            <li>
                                <label>Search : </label>
                                <input type="text" name="search" class="search" placeholder="Book Title/ Author name">
                                <input style="float: right; margin-left: -20%;" class="buttons white" type="button" value="Search">
                            </li>
                        </ul>
                    </form>
                </div>
                
                <div id="back">
                    <p><img src="../images/back.png" alt="Back Image"><a href="sell_your_book.php">Back To My Post</a></p>
                </div><br><br>
                
                <div class="item_brief">
                    <div class="book_image">
                        <img src="../images/book_image_1.png" alt="Book Image">
                    </div>
                    <div class="book_info">
                        <div class="seller_details" style="display: block; margin-left: -36%; margin-top: 6%; background-color: #fdfdfb;">
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
                    <div class="book_details" style="margin-top: -3%;">
                        <p class="title">The Complete Reference - Java2 </p>
                        <p>Author :  <span style="color: #809634;">Herbert</span></p>
                        <p>Language : English</p>
                        <p>Condition : New</p>
                        <p>Locality : Pitampura</p>
                        <p>Sell by : Shiv Book Store (Book Seller)</p>
                        <p>Shop Address : 1154, Sai Chowk,Pitampura, Delhi - 110081</p>
                        <p>Contact No : 9918887672</p>
                        <p style="font-size: 18px; font-family: source_sans_probold; color: #555555; margin-top: 30px;">Price : <span style="color: #809634;">2300rs</span></p>
                    </div>
                </div>
                <div class="book_description">
                    <h4>More Details About :- The Complete Reference - Java2</h4>
                    <p>
                        Java is a widely used language in the computer industry. Its importance and influence is strongly felt as it's still the first and best choice when it comes to
                        writing programs for developing web-based applications. It's used not only across PCs and laptops, but also in smartphones. Android programming, for instance,
                        uses Java.
                    </p>
                    <p>
                        This edition of Java: The Complete Reference comes about as a result of the language's dynamic nature. Java regularly undergoes change and upgradation, primarily
                        for the purpose of keeping up with the new and ever-changing demands of the computing world. The release of this new edition reflects this dynamism.
                    </p>
                    <p>
                        The book has a large intended audience, catering to the needs of both the inexperienced and professional programmers. The fundamental aspects of Java are covered
                        in sufficient detail so that the beginner doesn't get lost in the subject matter. And at the same time, the professional is provided with a coverage of the more
                        advanced features of Java.
                    </p>
                </div>
            </div>
    
            <?php include '../includes/footer.html'; ?>
        
    </section>
</body>
</html>
