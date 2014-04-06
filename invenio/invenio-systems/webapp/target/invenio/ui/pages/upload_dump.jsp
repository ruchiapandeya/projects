<!DOCTYPE html>

<!--
/*
 * Copyright (c) 2011 Webismymind SPRL
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://editablegrid.net/license
 */
-->
	
	
<html>
	<head>
		<jsp:include page="header.jsp" />
		<meta charset="UTF-8">
		<link rel="stylesheet" href="../css/form.css?v=2">
		
	</head>
	
	<body>
		<section>
			<div class="buttons_no_padding">
				<span>Upload Dump</span>
			</div>
			
			<div class="buttons tiptip">
				<form id="upload_dump">
					<fieldset style="border: none; outline: 1px solid #ccc;">
						<dl>
							<dt>
								<a href="#" class="button" title=".icon188 - Upload"><span class="icon icon10"></span></a>			
								<a href="#" class="button" title=".icon186 - Trash Can"><span class="icon icon186"></span></a>
								<a href="#" class="button" title=".icon188 - Undo"><span class="icon icon188"></span></a><br><br>
			
							</dt>
						</dl>
						<dl>
							<p>
								<h4>Choose Upload type:-</h4>
								<dd>
									<input type="radio" name="gender" class="radio" checked="checked" /> VolDump<span class="blank-space"></span>
									<input type="radio" name="gender" class="radio"/> M-Us Dump <span class="blank-space"></span>
									<input type="radio" name="gender" class="radio"/> OptDump <span class="blank-space"></span>
									<input type="radio" name="gender" class="radio"/> FutDump <span class="blank-space"></span>
								</dd>
							</p>
							<p>
								<h4>Choose Upload type:-</h4>
								<dd class="upload">
									
										<input type="file" name="upload" id="realupload" class="realupload" onchange="this.form.fakeupload.value = this.value;" />
								</dd>
								
								<dd class="fakeupload">
										<input type="text" name="fakeupload"  placeholder="choose file"/> <!-- browse button is here as background -->
										<label for="realupload" class="button_upload">Upload</label>
								</dd>
								<script>this.form.fakeupload.value = this.value;</script>
							</p>
							
						</dl>
						<dl id="message">
							<dd>
								<h4>Display Your Message Here...</h4>
							</dd>
						</dl>
						
						
					</fieldset>
					
				</form>
			</div>
			
		</section>
		<jsp:include page="footer.jsp" />
	</body>

</html>
