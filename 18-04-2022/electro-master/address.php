<?php include("head.php"); ?>

<body>
    <?php include('header.php') ?>
    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <div class="row">
                <div class="col-md-8 mb-4">
                    <div class="card mb-4">
                        <div class="card-header py-3">
                            <h5 class="mb-0">Biling details</h5>
                        </div>
                        <div class="card-body">
                            <form method="post">
                                <!-- 2 column grid layout with text inputs for the first and last names -->
                                <div class="row mb-4">
                                    <div class="col">
                                        <div class="form-outline">
                                            <label class="form-label" for="form7Example1">Name</label>
                                            <input type="text" name="name" id="form7Example1" class="form-control" />

                                        </div>

                                        <div class="form-outline">
                                            <label class="form-label" for="form7Example2">Area</label>
                                            <input type="text" name="area" id="form7Example2" class="form-control" />


                                        </div>
                                    </div>
                                    <!-- Number input -->
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form7Example6">Phone</label>
                                        <input type="number" id="form7Example6" class="form-control" />

                                    </div>

                                    <!-- Text input -->
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form7Example3">City</label>
                                        <input type="text" name="city" id="form7Example3" class="form-control" />

                                    </div>

                                    <!-- Text input -->
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form7Example4">State</label>
                                        <input type="text" name="state" id="form7Example4" class="form-control" />

                                    </div>

                                    <!-- Text input -->
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form7Example4">Landmark</label>
                                        <input type="text" name="state" id="form7Example4" class="form-control" />

                                    </div>


                                    <!-- Text input -->
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form7Example4">Address Type</label><br>
                                        <input type="radio" id="home" name="Address_type" value="home">
                                        <label for="home"> Home (All day delivery)</label><br>
                                        <input type="radio" id="work" name="Address_type" value="work">
                                        <label for="work"> Work (Delivery between 10 AM - 5 PM)</label><br>

                                    </div>



                                    <!-- Message input -->
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form7Example7">Additional information</label>
                                        <textarea class="form-control" id="form7Example7" rows="4"></textarea>

                                    </div>

                                    <input type="submit" name="submit" value="Add Address"
                                        class="btn btn-primary btn-lg btn-block">

                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>



            </div>

        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->

    <?php include('last.php'); ?>

</body>

</html>