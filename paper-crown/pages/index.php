<!doctype html>
<html lang="en">
<?php
    session_start();
?>

<head>
    <?php include '../includes/commons.html'; ?>
    <script>
	function searchBooks(type) {
	    var url="search_result.php";
	    if (type == "categories") {
		url = url + "?type=categories";
	    }
	    navigateToUrl(url);
	}
	
	function navigateToUrl(url) {
	    location.href = url;
	}
    </script>
</head>
<body onLoad="init()">
    <section>
            <?php include '../includes/header.html'; ?>
            <div id="container">
                <form action="search_result.php" method="GET" class="search-wrapper cf">
                        <input type="text" name="search" id="search" placeholder="Book Title/ Author Name">
                             <button type="submit">Search Books</button>
                <br><br>
                <div class="box">
                    <img src="../images/search_books_icon.png" alt="Search Books Icon">
                    <h1>Search Books</h1>
                    <p>
                        Search the book in your nearby locality. You can search by book title, category, author,
			price-range etc.<br><br>
                        <input class="button white" type="button" value="Search Books" onclick="searchBooks()">
                    </p>
                </div>
                <div class="box">
                    <img src="../images/category_icon.png" alt="Search Books By Category Icon">
                    <h1>Search By Category</h1>
                    <p>
                        <a href="#">Arts and Humanities</a><br>
                        <a href="#">Biographies & Autobiographies</a><br>
                        <a href="#">Business & Management</a><br><br>
                        <input class="button white" type="button" value="See More" onClick="searchBooks('categories')">
                    </p>
                </div>
                <div class="box" style="margin-right:0px;">
                    <img src="../images/sell_books_icon.png" alt="Sell Books Icon">
                    <h1>Sell Books</h1>
                    <p>
                        Advertise one or more books that you want to sell in 1-step process. View and manage the books you had posted? <br><br>
                        <input class="button white" type="button" value="Sell Books" onClick="navigateToUrl('sell_your_book.php')">
                    </p>
                    
                </div>
            </div>
    <?php include '../includes/footer.html'; ?>
    </section>
</body>

