<script>
    function send_message()
        {
          
            var recipiant = $('textarea#recipiants').val();
	    var sender = $('input#sender').val();
            var message = $('textarea#message').val();
          
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url(); ?>Smsapi/sms',
                data: {'sender_val':sender,'recipiant_val':recipiant,'message_val':message},

                //data: 'email_vals='+email,

                success: function(resp) {

                  
                     $("#message").html(resp);
                }

            });
        }

</script>
<div class="container">
  <div class="row">
   
    <div class="col-12">
   <div class="panel panel-default">
    <div class="panel-heading">SMS Sending Form</div>
        <div class="panel-body">
     
      <div id="message"></div>
            
             <div class="form-group">
                <label>Sender name:</label>
                <input name="sender_name" class="form-control" type="text" id="sender" value="" placeholder="E.g Heavens Gate" />
            </div>
             <div class="form-group">
                <label>Recipients</label>
                <textarea name="recipiants_numbers" class="form-control" id="recipiants" cols="45" rows="2"></textarea>
            </div>      



             <div class="form-group">
                <label>Message </label>
                <textarea name="message" class="form-control" id="message" cols="45" rows="5"></textarea>
            </div>
             <div class="form-group">
                <label>
                    <input type="submit"  name="button" class="btn btn-default" onclick="send_message()" id="button" value="Submit" />
                </label>
                <label>
                    <input type="reset" name="button2" class="btn btn-defaul" id="button2" value="Reset" />
                </label>
            </div>
     
        </div>
        </div>
        </div>






    </div>
   
  </div>
</div>



