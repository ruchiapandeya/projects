<!doctype html>
<html lang="en">
<head>
    <?php include '../includes/commons.html'; ?>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
<script>
</script>
<style>
    input, textarea { 
    padding: 9px; 
    border: solid 1px #E5E5E5; 
    outline: 0; 
    font: normal 13px/100% Verdana, Tahoma, sans-serif; 
    width: 200px; 
    background: #FFFFFF; 
    } 
   
textarea { 
    width: 400px; 
    max-width: 400px; 
    height: 150px; 
    line-height: 150%;
    margin-bottom: 20px;
    } 
   
input:hover, textarea:hover, 
input:focus, textarea:focus { 
    border-color: #C9C9C9; 
    } 
   
.form label { 
    margin-left: 10px; 
    color: #999999; 
    } 
   
.submit input { 
    width: auto; 
    padding: 9px 15px; 
    background: #617798; 
    border: 0; 
    font-size: 14px; 
    color: #FFFFFF; 
    }
.contact{
    margin-bottom: 60px;
    width: 100%;
    background-color: #f6f6f4;
    padding-top: 24px;
    font-size: 16px;
    color: #555555;
}
.contact td{
    padding: 6px 0px 0px 30px;
    }
.contact input{
    float: left;
    border: 1px solid #e5e6e3;
    padding-left: 14px;
    font-size: 12px;
    }
</style>
</head>
<body onLoad="init()">
    <section>
            <?php include '../includes/header.html'; ?>
            
            <div id="container">
                <h2 class="heading">Get In Touch!</h2>
                <p style="font-size: 16px; color: #555555;">Fill out our contact form below to get in touch with us! Please provide as much information as possible for us to help with your enquiry.</p><br>
                <form>
                    <table class="contact">
                        <tbody>
                            <tr>
                                <td style="padding-right: 10px;">
                                    <label for="name">Name <span style="color:#809634;">*</span></label>
                                </td>
                                <td>
                                    <input type="text" name="name" id="name" required /> 
                                </td> 
                            </tr>
                            <tr>
                                <td style="padding-right: 10px;">
                                    <label for="email">E-mail <span style="color:#809634;">*</span></label>
                                </td>
                                <td>
                                    <input type="text" name="email" id="email" required />
                                </td>
                            </tr> 
                            <tr>
                                <td style="padding-right: 10px;">
                                    <label for="web">Website</label>
                                </td>
                                <td>
                                    <input type="text" name="web" id="web" />
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-right: 10px;">
                                    <label for="web">Message <span style="color:#809634;">*</span></label>
                                </td>
                                <td>
                                    <textarea name="text" required ></textarea>
                                </td>
                            </tr> 
                           
                           <tr>
                            <td></td>
                                <td>
                                    <input style="padding-left: 0px;" class="buttons white" type="submit" value="Send" >
                                    <input style="padding-left: 0px;" class="buttons white" type="reset" value="Reset">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
    
            <?php include '../includes/footer.html'; ?>
        
    </section>
</body>
</html>
