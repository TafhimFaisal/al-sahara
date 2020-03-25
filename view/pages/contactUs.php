<div class="container">

    <div class="container contact">
	<div class="row ">
        <div class="col-4 contact-us-info">
            <div class="contact-us">
                <h1>Contact Details</h1>
                <p>
                    <span class="contactLabel"> Flat </span> # 101, 
                    City Center Sector
                    Al Karama, Nakhel-01, Ajman, UAE<br>
                    <span class="contactLabel">P.O Box:</span> 239028<br>
                    <span class="contactLabel">Email :</span> Info@sahara-uae.com<br>
                    <span class="contactLabel">Web:</span> www.sahara-uae.com<br>
                    <span class="contactLabel">Phone :</span> +971 6 53 22 336<br>
                </p>
            </div>
        </div>
		<div class="col-md-8">
			<div class="contact-us-form ">
          <form action="http://<?=$_SERVER['HTTP_HOST']?>/email/email.php" 
                enctype="multipart/form-data" 
                method="post"
            >
              <div class="form-group">
                <label class="control-label col-sm-2" for="fname">Name:</label>
                <div class="col-sm-10">          
                  <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="name">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="phone">Phone Number:</label>
                <div class="col-sm-10">
                  <input type="phone" class="form-control" id="phone" placeholder="Enter phone number" name="phone">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="massage">Massage:</label>
                <div class="col-sm-10">
                  <textarea class="form-control" rows="5" id="massage" name="massage"></textarea>
                </div>
              </div>
              
              <div class="custom-file col-sm-offset-2 col-sm-10">
                <input type="file" name="CV" class="custom-file-input" id="validatedCustomFile" required>
                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                <div class="invalid-feedback"></div>
              </div>
              <div class="form-group">        
                <div class="col-sm-offset-2 col-sm-10 mt-3">
                  <button type="submit" name='submit' class="btn btn-default">Submit</button>
                </div>
              </div>
          </form>
			</div>
		</div>
	</div>
</div>

</div>