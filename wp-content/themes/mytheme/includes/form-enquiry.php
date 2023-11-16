<form id="enquiry">
    <h2>Send your enquiry about <?php the_title();?></h2>

        <div class="form-group row mb-2">

            <div class="col-lg-6">
                
                <input type="text" name="fname" placeholder="First Name" class="form-control" required>

            </div>

            <div class="col-lg-6">

                <input type="text" name="lname" placeholder="Last Name" class="form-control" required>

            </div>

        </div>

        <div class="form-group row mb-2">

            <div class="col-lg-6">

                <input type="email" name="email" placeholder="Email Address" class="form-control" required>

            </div>

            <div class="col-lg-6">

                <input type="tel" name="phone" placeholder="Phone Numder" class="form-control" required>

            </div>

        </div>

        <div class="form-group mb-2">

            <textarea name="enquiry" class="form-control" placeholder="Your Enquiry" required></textarea>

        </div>

        <div class="form-group mb-2">

            <button type="submit" class="btn btn-success w-100">Send</button>

        </div>


</form>

<script>
    (function($){

        $('#enquiry').submit(function(event)
        {
            event.preventDefault();
            var endpoint = '<?php echo admin_url('admin-ajax.php');?>';
            var form =$('#enquiry').serialize();

            var formdata = new FormData;
            formdata.append('action','enquiry');
            formdata.append('enquiry',form);

            $.ajax(endpoint, 
            {
                type:'POST',
                data:formdata,
                processData: false,
                contentType: false,

                success: function(res)
                {
                    alert(res.data);
                },

                error: function(err)
                {

                }
            })
        })

    })(jQuery)
    
</script>