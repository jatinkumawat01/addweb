<!DOCTYPE html>
<html lang="en">
<?php include("head.php"); ?>

<body>
    <?php include('header.php') ?>
    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="faq">
                    <h2>Frequently Asked Questions</h2><br>

                    <div>

                        <button class="accordion"><h5> What is Try and Buy Service? </h5></button>
                        <div class="panel">
                            <p>
                            <p>This service entitles you to try out your purchases at the time of delivery, pay only
                                for what you like and return the rest on-the-spot. Try and Buy is a paid service,
                                available on most of the products and in 31 Cities, you can enter pin code on
                                product page to check service availability. Try and Buy is only available on orders
                                containing &amp;lt;=3 items in cart. To avail this service min. order value should
                                be Rs.1199 and above. To avail the service, please ensure that you tick the 'Try and
                                Buy' box on check-out page and choose delivery address where you are comfortable
                                trying product. Terms of service may differ for our new customers. </p>

                            <p> Try and Buy will not be available during big sale days; We will re-offer the
                                service, post such events.</p>
                            </p>
                        </div>

                        <button class="accordion"> <h5>Why are there different prices for the same product? Is it
                            legal?  </h5> </button>
                        <div class="panel">
                            <p>
                            <p>Myntra is an online marketplace platform that enables independent sellers to sell
                                their products to buyers. The prices are solely decided by the sellers, and Myntra
                                does not interfere in the same. There could be a possibility that the same product
                                is sold by different sellers at different prices. Myntra rightfully fulfils all
                                legal compliances of onboarding multiple sellers on its forum as it is a marketplace
                                platform.</p>
                            </p>
                        </div>
                        <div class="FAQh">

                         <h5> I saw the product at Rs. 1000 but post clicking on the
                            product, there are multiple prices and the size which I want is being sold for Rs. 1600.
                            Why is there a change in price in the product description page?  </h5>
                            </div>

                            <div class="FAQh"><h5>How will I detect fraudulent emails/calls seeking sensitive
                            personal and confidential information? </h5></div>

                            <div class="FAQh"><h5>How will I identify a genuine appointment letter? </h5></div>

                            <div class="FAQh"> <h5> Why will 'My Cashback' not be available on Myntra? </h5> </div>

                            <div class="FAQh"> <h5>How do I cancel the order, I have placed? </h5></div>


                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /SECTION -->



        <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                }
            });
        }
        </script>


        <?php include('last.php'); ?>

</body>

</html>