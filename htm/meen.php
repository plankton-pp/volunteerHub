<?php
  // connect to the database
session_start();
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/contact.js">
  function submitForm(){
   $.ajax({
    type: "POST",
    url: "saveContact.php",
    cache:false,
    data: $('form#contactForm').serialize(),
    success: function(response){
      $("#contact").html(response)
      $("#contact-modal").modal('hide');
    },
    error: function(){
      alert("Error");
    }
  });
}
</script>
<div id="contact"><button type="button" class="btn btn-info btn" data-toggle="modal" data-target="#contact-modal">Show Contact Form</button></div>
<div id="contact-modal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <a class="close" data-dismiss="modal">X</a>
        <h3>Contact Form</h3>
      </div>
      <form id="contactForm" name="contact" role="form">
        <div class="modal-body"> 
        <div class="form-group">
            <label for="userid">userid</label>
            <input type="text" name="userid" class="form-control" value="<?php echo$_SESSION['id'];?>">
          </div>
          <div class="form-group">
            <label for="activityid">activityid</label>
            <input type="text" name="activityid" class="form-control" value="<?php echo $_SESSION['acid'];?>">
          </div>       
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="<?php echo$_SESSION['name'];?>">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="<?php echo$_SESSION['email'];?>">
          </div>
          <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="name" class="form-control" value="<?php echo$_SESSION['phone'];?>">
          </div>
        </div>
        <div class="modal-footer">          
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <input type="submit" class="btn btn-success" id="submit">
        </div>
      </form>
    </div>
  </div>
</div>