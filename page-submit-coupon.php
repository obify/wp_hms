<?php
/*
* Template Name: Fullwidth Submit Coupon
*/
?>

<?php get_header(); ?>

<section>
<div class="section-title mx-auto my-4 text-center text-uppercase">
	<h3>Submit Coupon</h3>
    <h6>Paste the direct link of your Udemy course with coupon & submit</h6>
</div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
            <div id="message"></div>
                <form method="POST" id="myform">
                    <div class="row">
                        <div class="form-group col-md-12 mb-4">
                            <input placeholder="https://www.udemy.com/course/es6-mastery-with-projects/?couponCode=91151F709BAC8573R4TR" type="text" name="couponlink" id="couponlink" class="form-control" />
                        </div>
                        <div class="col-md-12 d-grid mb-5">
                            <div id="spinnerElem" class="mx-auto mb-2 spinner-border text-primary" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <button type="button" id="submitbtn" class="btn btn-secondary">Submit</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script>
jQuery(document).ready(function () {
    jQuery("#spinnerElem").hide();
    jQuery('#submitbtn').click(function () {
        if(jQuery("#couponlink").val() != '' && jQuery("#couponlink").val().includes('https://www.udemy.com')){
            jQuery("#spinnerElem").show();
            jQuery.ajax({
                type: "GET",
                url: "https://fastapi-be.herokuapp.com/api/v1/generate-udc?curl="+jQuery("#couponlink").val(),
                success: function (data) {
                    jQuery("#spinnerElem").hide();
                    alert("Coupon submitted successfully! Visit Homepage");
                },
                error: function () {
                    jQuery("#spinnerElem").hide();
                    alert("Some error occurred please try after some time");
                }
            });
        }else{
            alert("Please enter valid Udemy coupon link");
        }

    });
});

</script>
<?php get_footer(); ?>