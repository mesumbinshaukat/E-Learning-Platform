<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Course</title>
    <?php 
    include('./style.php');
    ?>
</head>
<body class="ltr main-body app sidebar-mini">
<?php 
	 include('./switcher.php'); 
	  ?>
<div class="page">

			<div>

               <div class="main-header side-header sticky nav nav-item">
			   <?php include('./partials/navbar.php')?>
				</div>
				<!-- /main-header -->

				 <!-- main-sidebar -->
 <div class="sticky">
 <?php include('./partials/sidebar.php')?>
				</div>
				<!-- main-sidebar -->

			</div>
<div class="main-content app-content">

<!-- container -->
<div class="main-container container-fluid">

    
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="left-content">
          <span class="main-content-title mg-b-0 mg-b-lg-1">view Course</span>
        </div>
        <div class="justify-content-center mt-2">
            <ol class="breadcrumb">
                <li class="breadcrumb-item "><a href="javascript:void(0);">Course</a></li>
                <li class="breadcrumb-item " aria-current="page">view Course</li>
            </ol>
        </div>
    </div>
    <!-- /breadcrumb -->

    
    <!-- /row -->

    <!-- row -->
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    
                    <div id="wizard3">
                    

                        <h3>Overview</h3>
                        <section> 
                            <div class="control-group form-group">
                                <label class="form-label">Name of the Course</label>
                                <input type="text" readonly class="form-control required" disabled placeholder="" value="Java Script">
                            </div>
                            
                                                                        <div class="control-group form-group">
                                <label class="form-label">Streams</label>
                                <input type="text" readonly class="form-control required" disabled placeholder="" value="Information Technology">
                            </div>
                            

                            
                            <div class="control-group form-group">
                                <label class="form-label">Posting Category</label>
                                <input type="text" readonly class="form-control required" disabled placeholder="" value="self">
                            </div>
                            
                                                                        

                            <div class="control-group form-group">
                                <label class="form-label">Course provider Name</label>
                                <input type="text" readonly class="form-control required"disabled placeholder=""  value="Triaright">
                            </div>


                            
                            <div class="control-group form-group">																																<div class="control-group form-group">
                                <label class="form-label">Training Type</label>
                                <input type="text" readonly class="form-control required" disabled placeholder="" value="VirtualLiveSession">
                            </div>
                            
                            
                            <div class="control-group form-group">
                                <label class="form-label">Offline address ( if offline )</label>
                                <input type="" readonly class="form-control required" disabled placeholder="" value="Na">
                            </div>
                            
                            <div class="control-group form-group">
                                <label class="form-label">Duration(hrs)</label>
                                <input type="number" readonly class="form-control required" disabled placeholder="" value="90">
                            </div>
                            <div class="control-group form-group">
                                <label class="form-label">Last date to apply</label>
                                <input type="text" readonly class="form-control required" disabled placeholder="" value="2023-03-31">
                            </div>

                            <div class="control-group form-group">
                                <label class="form-label">Hours per day</label>
                                <input type="number" readonly class="form-control required" disabled placeholder="" value="2">
                            </div>
                            
                            <div class="control-group form-group">
                                <label class="form-label">Certifications</label>
                                <input type="text" readonly class="form-control required" disabled placeholder="" value="yes">
                            </div>
                            

                            <div class="control-group form-group">
                                <label class="form-label">No of Slots available</label>
                                <input type="number" readonly class="form-control required" disabled placeholder="" value="580">
                            </div>
                    
                        </section>
                        <h3> Full information</h3>
                        <section>

                        <label class="form-label">Course Description</label>
                            <div class="form-label">
                            <input class="form-control" readonly value="JavaScript (JS) is a lightweight, interpreted, or just-in-time compiled programming language with first-class functions. While it is most well-known as the scripting language for Web pages, many non-b">
                        </div>
                        <label class="form-label">Topics Covered</label>
                            <div class="form-label">
                            <input class="form-control" readonly disabled placeholder="" value="JavaScript Basics, JavaScript Objects, JavaScript BOM, JavaScript DOM, JavaScript Validation, JavaScript OOPs, JavaScript Cookies, JavaScript Events, Exception Handling, JavaScript Advance, JavaScript">
                        </div>
                        <label class="form-label">Benefits of Course</label> 
                            <div class="form-label">
                            <input class="form-control" readonly disabled placeholder="" value="Popularity, Interoperability, Server Load.">
                        </div>
                        
                        <label class="form-label">Pre-Requirements</label>
                            <div class="form-label">
                            <input class="form-control" readonly disabled placeholder="" value="Na">
                        </div>
                     <label class="form-label">additional information</label>
                            <div class="form-label">
                            <input class="form-control" readonly disabled placeholder="" value="Na">
                        </div>
                        </section>
                        <h3>Pricings </h3>
                        <section>
                        
                                                                    <div class="control-group form-group">
                                <label class="form-label">Course type</label>
                                <input type="text" readonly class="form-control required" disabled placeholder="" value="paid">
                            </div>
                            

                            <div class="control-group form-group">
                                <label class="form-label">Orginal Cost</label>
                                <input type="number" readonly class="form-control required" disabled placeholder="" value="6000">
                            </div>
                            <div class="control-group form-group">
                                <label class="form-label">Discount %</label>
                                <input type="number" readonly class="form-control required" disabled placeholder="" value="10">
                            </div>
                            <div class="control-group form-group">
                                <label class="form-label">Final cost</label>
                                <input type="number" readonly class="form-control required" disabled placeholder="" value="5400">
                            </div>
                        </section>
                                                                <h3>Uploadings </h3>
                        <section>

                            <div class="control-group form-group">
                                <label class="form-label">Main Image (1200px*800px)</label>
                                <a target="_blank" href="https://triaright.com/images/course_create/main_image/63fb3384a1c88js&#32;2.jpg" > <button type="submit"   class="btn btn-primary mt-3 mb-0" style="text-align:right">Download</button>
                            </div>
                            <div class="control-group form-group">
                                <label class="form-label">Inner image (600px*600px)</label>
                                <a target="_blank" href="https://triaright.com/images/course_create/inner_image/63fb3384a1c88js&#32;1.jpg" ><button type="submit"   class="btn btn-primary mt-3 mb-0" style="text-align:right">Download</button>
                            </div>
                            <div class="control-group form-group">
                                <label class="form-label">image2(1200px*800px)</label>
                                
                                <a target="_blank" href="https://triaright.com/images/course_create/image2/63fb3384a1c88js&#32;3.webp" > <button type="submit"   class="btn btn-primary mt-3 mb-0" style="text-align:right">Download</button>
                            </div>
                        </section>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->


</div>
<!-- Container closed -->
</div>
<?php 
	 include('./script.php'); 
	  ?>
</body>
</html>