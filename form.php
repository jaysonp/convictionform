<!DOCTYPE html>
  <head>
    <title>Conviction eLiquids</title>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- CSS 
        ================================================== -->
    <!-- Bootstrap 3-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <!-- Template Styles -->
    <link href="css/style.css" rel="stylesheet">
      </head>
<body>
  <section id="contact">
          <div class="content">
            <img class="logo" src="img/logo.png"> 
            <h2>Wholesale Account Registration</h2> 
            <div id="form">
              <table>
                  <form action="scripts/contactmail.php" id="contactForm" method="post" enctype="multipart/form-data">
                  <tbody>
                    <tr>
                      <input type="text" name="first_name" class="name" placeholder="FIRST NAME" tabindex=1 />
                      <input type="text" name="last_name" class="name" placeholder="LAST NAME" tabindex=2 />
                    </tr>
                    <tr>
                      <input type="text" name="company" class="company" placeholder="COMPANY NAME" tabindex=3 />
                      <input type="text" name="website" class="email" placeholder="Website URL" tabindex=4 />
                    </tr>
                    <tr>
                      <input type="text" name="facebook" class="facebook" placeholder="FACEBOOK URL" tabindex=3 />
                      <input type="text" name="instagram" class="instagram" placeholder="INSTAGRAM URL" tabindex=4 />
                    </tr>
                    <tr>
                      <input type="text" name="phone" class="phone" placeholder="PHONE" tabindex=5 />
                      <input type="text" name="email" class="email" placeholder="EMAIL ADDRESS" tabindex=6 />
                    </tr>
                    <tr>
                      <input type="text" name="phone" class="phone" placeholder="STREET ADDRESS" tabindex=7 />
                      <input type="text" name="email" class="email" placeholder="STREET ADDRESS" tabindex=8 />
                    </tr>
                    <tr>
                      <input type="text" name="email" class="email" placeholder="CITY" tabindex=9 />
                      <input type="text" name="email" class="email" placeholder="STATE" tabindex=10 />
                    </tr>
                    <tr>
                      <input type="text" name="zipcode" class="zipcode" placeholder="ZIPCODE" tabindex=11 />
                      <input type="text" name="email" class="email" placeholder="Tax ID (EIN)" tabindex=12 />
                    </tr>
                    <tr>
                      <select name="leadtype" class="leadtype" tabindex=13 />
                        <option value="Retailer">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RETAILER</option>
                        <option value="Distributor">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DISTRIBUTOR</option>
                      </select>
                    </tr>
                    <tr>
                      <div class="browse-wrap">
                      <div class="title">Attach Reseller Permit</div>
                        <input type="file" name="upload" class="upload" title="Choose a file to upload">
                        <span class="upload-path"></span>
                      </div>
                      
                    </tr>

                      <textarea maxlength="2000" rows="6" class="comments" id="comments" name="comments" placeholder="COMMENTS" tabindex=6></textarea>
                      <!--- Submit Button Here -->
                      <input type="submit" name="submit" value="SUBMIT" class="submit" tabindex=15 />
                    
                  </tbody>
                <br>
                
              </form>
              </table>

            </div>

      </section>

    
   
   <!-- JAVASCRIPT
       ================================================== -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-filestyle.js"</script>
</body>

</html>