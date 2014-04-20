<!doctype html>
<html lang="en">
<head>
    <?php include '../includes/commons.html'; ?>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script>
        // Wait until the DOM has loaded before querying the document
        $(document).ready(function(){
                $('ul.tabs').each(function(){
                        // For each set of tabs, we want to keep track of
                        // which tab is active and it's associated content
                        var $active, $content, $links = $(this).find('a');

                        // If the location.hash matches one of the links, use that as the active tab.
                        // If no match is found, use the first link as the initial active tab.
                        $active = $($links.filter('[href="'+location.hash+'"]')[0] || $links[0]);
                        $active.addClass('active');

                        $content = $($active[0].hash);

                        // Hide the remaining content
                        $links.not($active).each(function () {
                                $(this.hash).hide();
                        });

                        // Bind the click event handler
                        $(this).on('click', 'a', function(e){
                                // Make the old tab inactive.
                                $active.removeClass('active');
                                $content.hide();

                                // Update the variables with the new link and content
                                $active = $(this);
                                $content = $(this.hash);

                                // Make the tab active.
                                $active.addClass('active');
                                $content.show();

                                // Prevent the anchor's default click action
                                e.preventDefault();
                        });
                });
        });
</script>

<style>
    .tabs{
    margin-top: 50px;
    margin-left: -4%;
}

.tabs li {
    list-style:none;
    display:inline;
}

.tabs a {
    padding:15px 50px;
    font-size: 18px;
    display:inline-block;
    background:#f5f5f5;
    border: 1px solid #a7a6a6;
    color:#000;
    text-decoration:none;
}

.tabs a.active {
    padding:15px 50px;
    font-size: 18px;
    background:#fff;
    border: 1px solid #a7a6a6;
    border-bottom: none;
    color:#000;
}
#post_book{
    background-color: #f6f6f4;
    padding-bottom: 20px;
    margin-bottom: 100px;
}
#my_post{
    margin-bottom: 100px;
}
#post_book form{
    margin-top: 40px;
    padding: 30px 50px;
    font-size: 16px;
    color: #555555;
    
}
#post_book label{
    padding-right: 0px;
}
#post_book table td{
    padding-top: 15px;
}
table {
width: 980px;
display: table;
border-collapse: separate;
border-spacing: 2px;
border-color: gray;
}
.my_book_post{
    width: 100%;
    background-color: #f6f6f4;
    color: #555555;
    margin-top: 20px;
    
}
.my_book_post p{
   margin: 20px;
}
.book_cover{
    height: 240px;
    width: 18%;
    float: left;
    margin: 20px;
}
.book_details{
    width: 55%;
    margin-left: 18%;
    font-family: 'source_sans_proregular';
    font-size: 14px;
    color: #555555;
}
.book_details .title{
    font-size: 15px;
    font-family: 'source_sans_probold';
    color: #555555;
    padding-top: 30px;
}
.book_details p{
    line-height: 2px;
    color: #555555;
}
.action_buttons{
    width: 14%;
    height: 240px;
    margin: 20px 20px;
    float: right;
    border-left: 3px solid #f0f0ef;
    padding-left: 5%;
}
#button {
    background-color: #eff0ed;
    color: #666666;
    padding: 7px 20px;
    font-size: 16px;
    outline: 2px solid #bbbbbb;
    border: 1px solid #ffffff;

}
.white {
color: #333333;
border: solid 1px #b7b7b7;
background: #fff;
background: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#ededed));
background: -moz-linear-gradient(top, #fff, #ededed);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#ededed');
}
.white:hover {
color: #ffffff;
border: solid 1px #87a94c;
background: #fff;
background: -webkit-gradient(linear, left top, left bottom, from(#accc74), to(#94b659));
background: -moz-linear-gradient(top, #accc74, #94b659);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#accc74', endColorstr='#94b659');
}
.white:active {
color: #ffffff;
border: solid 2px #87a94c;
background: #fff;
background: -webkit-gradient(linear, left top, left bottom, from(#accc74), to(#94b659));
background: -moz-linear-gradient(top, #accc74, #94b659);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#accc74', endColorstr='#94b659');
}
</style>
<script>
    function toggleStatus(id) {
        var statusLabel = document.getElementById("book_details_status_label_" + id);
        var status = statusLabel.value;
        var image = document.getElementById("book_details_status_img_" + id);
        var imageLabel = document.getElementById("book_details_status_img_label_" + id);
        if (status == "Activate") {
            statusLabel.value = "Deactivate";
            image.setAttribute("src", "../images/active.png");
            image.setAttribute("alt", "ACTIVE");
            imageLabel.innerHTML = "ACTIVE";
        } else {
            statusLabel.value = "Activate";
            image.setAttribute("src", "../images/deactivate.png");
            image.setAttribute("alt", "DEACTIVATED");
            imageLabel.innerHTML = "DEACTIVATED";
        }
    }
    function navigateToUrl(url) {
        location.href = url;
    }
    function postBook() {
        document.getElementById("form").submit();
    }
</script>
</head>
<body onLoad="init()">
    <section>
            <?php include '../includes/header.html'; ?>
            
            <div id="container">
               <ul class='tabs'>
                    <li><a href='#my_post'>My Post</a></li>
		    <li><a href='#post_book'>Post Book</a></li>
               </ul>
		<div id='post_book'>
                    <form id="form" action="post_brief.php" method="post" enctype="multipart/form-data">
                        <table>
                            <tbody>
                                <tr>
                                    <td>
                                        <label>Are you a <span style="color:#809634;">*</span></label>
                                    </td>
                                    <td>
                                            <input type="radio" id="book_seller" name="book_seller" value="Book Seller"  required > Book Seller &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input type="radio" id="book_seller1" name="book_seller" value="Individual"  required > Individual
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>Book Title <span style="color:#809634;">*</span></label>
                                    </td>
                                    <td>
                                        <input type="text" id="book_title" name="book_title" class="search" placeholder=""  required >
                                    </td>
                                </tr>
                                <tr>
                                        <td>
                                            <label>Category <span style="color:#809634;">*</span></label>
                                        </td>
                                        <td>
                                            <select class="category" id="book_category" name="book_category"  required >
                                                <option value="">-Select Category-</option>
                                                <option value="Arts and Humanities">Arts and Humanities</option>
                                                <option value="Biographies and Autobiographies">Biographies and Autobiographies</option>
                                                <option value="Business and Management">Business and Management</option>
                                                <option value="Children">Children</option>
                                                <option value="Comics and GraphicNovels">Comics and Graphic Novels</option>
                                                <option value="Cooking Food and Drink">Cooking, Food and Drink </option>
                                                <option value="Computer and Internet">Computer and Internet</option>
                                                <option value="Competitive Examinations">Competitive Examinations</option>
                                                <option value="Engineering">Engineering</option>
                                                <option value="History and Politics">History and Politics</option>
                                                <option value="Humour">Humour</option>
                                                <option value="Law">Law </option>
                                                <option value="Language Learning">Language Learning</option>
                                                <option value="Literature and Fiction">Literature and Fiction</option>
                                                <option value="Mathematics and Science">Mathematics and Science</option>
                                                <option value="Medical">Medical</option>
                                                <option value="Philosophy">Philosophy</option>
                                                <option value="Science">Science</option>
                                                <option value="Sports">Sports</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>Author <span style="color:#809634;">*</span></label>
                                    </td>
                                    <td>
                                        <input type="text" id="book_author" name="book_author" class="author" placeholder=""  required >
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>Language <span style="color:#809634;">*</span></label>
                                    </td>
                                    <td>
                                        <select class="language" id="book_language" name="book_language"  required >
                                            <option value="">Select Language</option>
                                            <option value="English">English</option>
                                            <option value="Hindi">Hindi</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>Condition <span style="color:#809634;">*</span></label>
                                    </td>
                                    <td>
                                        <input type ="radio" id="book_condition" name="book_condition" value="New" checked  required >New &nbsp;&nbsp;
                                        <input type ="radio" id="book_condition1" name="book_condition" value="Used">Used &nbsp;&nbsp;
                                        <input type ="radio" id="book_condition2" name="book_condition" value="Free">Free
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>Cost <span style="color:#809634;">*</span></label>
                                    </td>
                                    <td>
                                        <input type="text" id="book_cost" name="book_cost"  class="price"  required >&nbsp; &nbsp;<img src="../images/rupees.png" alt="rupees">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>Book Summary <span style="color:#809634;">*</span></label>
                                    </td>
                                    <td>
                                         <textarea id="book_summary" name="book_summary" class="book_summary" cols="50" rows="6"  required ></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>Upload Book Image</label>
                                    </td>
                                    <td>
                                        <input type="file" id="book_image" name="book_image">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>Email Id <span style="color:#809634;">*</span></label>
                                    </td>
                                    <td>
                                        <input type="text" id="book_contactEmail" name="book_contactEmail" class="email" placeholder="abc@gmail.com"  required >
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>Shop Name <span style="color:#809634;">*</span></label>
                                    </td>
                                    <td>
                                        <input type="text" id="book_shopName" name="book_shopName" class="email" placeholder=""  required >
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>Shop Address <span style="color:#809634;">*</span></label>
                                    </td>
                                    <td>
                                        <input type="text" id="book_shopAddress" name="book_shopAddress" class="shop" placeholder=""  required >
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>Contact No. <span style="color:#809634;">*</span></label>
                                    </td>
                                    <td>
                                        <input type="text" id="book_contactNumber" name="book_contactNumber" class="email" placeholder=""  required >
                                    </td>
                                </tr>    
                            </tbody>
                        </table>
                    </form>
                    <div style="margin-left: 28%; margin-bottom: 20px;">
                        <input style="" class="buttons white" type="submit" value="Submit" onClick="postBook()">
                        <input style="" class="buttons white" type="reset" value="Reset">
                    </div>
			
		</div>
		<div id='my_post'>
                    <div>
                        <label style="margin-left: 82%;">Sort By: </label>
                        <select id="sort_by" name="states">
                            <option value="activePost">Active Post</option>
                            <option value="deactivePost">Deactive Post</option>
                            <option value="postedDate">Posted Date</option>
                        </select>
                    </div>
		    <div class="my_book_post">
                        <div class="book_cover">
                            <img src="../images/book_image_1.png" alt="Book Image">
                        </div>
                        <div class="action_buttons">
                            <p style="margin-left: -11%;"><img id="book_details_status_img_1" src="../images/active.png" alt="Active"><span id="book_details_status_img_label_1">ACTIVE</span></p>
                            <input id="book_details_status_label_1" class="button white" type="button" value="Deactivate" onClick="toggleStatus(1)"><br>
                            <input class="button white" type="button" value="Delete"><br>
                            <input class="button white" type="button" value="Edit">
                        </div>
                        <div class="book_details" id="book_details_1">
                            <p class="title">The Complete Reference - Java2 </p>
                            <p>Category : Computer Science</p>
                            <p>Author :  <span style="color: #809634;">Herbert</span></p>
                            <p>Language : English</p>
                            <p>Condition : New</p>
                            <p>Locality : Pitampura</p>
                            <p>Sell by : Shiv Book Store (Book Seller)</p>
                            <p>Shop Address : 1154, Sai Chowk,Pitampura, Delhi - 110081</p>
                            <p>Contact No : 9918887672</p>
                            <p>Posted Date : 02/02/2014</p>
                            <p>Price : <span style="color: #809634;">2500rs</span></p>
                            <input class="button white" type="button" value="Read More" onClick="navigateToUrl('post_brief.php')">
                        </div>
                    </div>
                    <div class="my_book_post">
                        <div class="book_cover">
                            <img src="../images/book_image_2.png" alt="Book Image">
                        </div>
                        <div class="action_buttons">
                            <p style="margin-left: -11%;"><img id="book_details_status_img_2" src="../images/active.png" alt="Active"><span id="book_details_status_img_label_2">ACTIVE</span></p>
                            <input id="book_details_status_label_2" class="button white" type="button" value="Deactivate" onClick="toggleStatus(2)"><br>
                            <input class="button white" type="button" value="Delete"><br>
                            <input class="button white" type="button" value="Edit">
                        </div>
                        <div class="book_details">
                            <p class="title">Java - in 21 days </p>
                            <p>Category : Computer Science</p>
                            <p>Author :  <span style="color: #809634;">Rogers Cadenhead</span></p>
                            <p>Language : English</p>
                            <p>Condition : New</p>
                            <p>Locality : Pitampura</p>
                            <p>Sell by : Shiv Book Store (Book Seller)</p>
                            <p>Shop Address : 1154, Sai Chowk,Pitampura, Delhi - 110081</p>
                            <p>Contact No : 9918887672</p>
                            <p>Posted Date : 02/02/2014</p>
                            <p>Price : <span style="color: #809634;">2500rs</span></p>
                            <input class="button white" type="button" value="Read More">
                        </div>
                    </div>
                    <div class="my_book_post">
                        <div class="book_cover">
                            <img src="../images/book_image_3.png" alt="Book Image">
                        </div>
                        <div class="action_buttons">
                            <p style="margin-left: -11%;"><img id="book_details_status_img_3" src="../images/deactivate.png" alt="Deactivated"><span id="book_details_status_img_label_3">DEACTIVATED</span></p>
                            <input id="book_details_status_label_3" class="button white" type="button" value="Activate" onClick="toggleStatus(3)"><br>
                            <input class="button white" type="button" value="Delete"><br>
                            <input class="button white" type="button" value="Edit">
                        </div>
                        <div class="book_details">
                            <p class="title">The Complete Reference - Java2 </p>
                            <p>Category : Computer Science</p>
                            <p>Author :  <span style="color: #809634;">Herbert</span></p>
                            <p>Language : English</p>
                            <p>Condition : New</p>
                            <p>Locality : Pitampura</p>
                            <p>Sell by : Shiv Book Store (Book Seller)</p>
                            <p>Shop Address : 1154, Sai Chowk,Pitampura, Delhi - 110081</p>
                            <p>Contact No : 9918887672</p>
                            <p>Posted Date : 02/02/2014</p>
                            <p>Price : <span style="color: #809634;">2500rs</span></p>
                            <input class="button white" type="button" value="Read More">                            
                        </div>
                    </div>
		</div>
            </div>
    
            <?php include '../includes/footer.html'; ?>
        
    </section>
</body>
</html>
