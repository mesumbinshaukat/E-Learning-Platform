
<?php 
if (!isset($_COOKIE['trainer_username']) && !isset($_COOKIE['trainer_password'])) {
	header('location: ../trainer_login.php');
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">
	

<head>

		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="">
		
		<!-- Title -->
		<title> TriaRight: The New Era of Learning</title>

    <?php 
	include('./style.php');
	?>

	</head>

	<body class="ltr main-body app sidebar-mini">

	<?php 
	 include('./switcher.php'); 
	  ?>

		<!-- Loader -->
		<div id="global-loader">
			<img src="assets/img/preloader.svg" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->

		<!-- Page -->
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
			<form action="../superadmin/connection_files/create/trainer_chat_create.php" method="POST" enctype="multipart/form-data">
			<!-- main-content -->
			<!-- main-content -->
			<div class="main-content app-content">

				<!-- container -->
				<div class="main-container container-fluid">

                    
					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700"> Compose Mail</span>
						</div>

					</div>
				
					             <div class="row row-sm">
										<div class="form-group col-md-4">
										<label for="dropdown">Receipant</label>
										<select id="dropdown1" onchange="showOptions1()" name="Receipant" required class="form-control form-select select2" data-bs-placeholder="Select Country">
											<option value="superadmin">Super Admin</option>
											<option value="Student">Student</option>
										</select>
									</div>
									<div class="form-group col-md-4">
                                      <label for="dropdown">Sending format</label>
									  <select id="dropdown" onchange="showOptions1()" name="Sending_format" required class="form-control form-select select2" data-bs-placeholder="Select Country">
									  <option value="All">All</option>
											<option id="Individuals" style="display:none;"  value="Individuals">Individuals</option>
											<option id="batch" style="display:none;" value="batches">batches</option>
										</select>
									</div>
									
									<div class="form-group col-md-4" id="optionsDiv">
									<label for="exampleInputAadhar" hidden>User ID</label>
				<select name="User_ID" hidden required class="form-control form-select select2" data-bs-placeholder="Select Country">
				<option value="ALL"></option>
				</select>
									</div>
									
									<script>
        function showOptions1() {
            var harsha = document.getElementById("dropdown1").value;
            if (harsha === "Student") {
				document.getElementById("batch").style.display = "unset";
				document.getElementById("Individuals").style.display = "unset";

				var selectedOption = document.getElementById("dropdown").value;
				if (selectedOption === "Individuals") {
			document.getElementById("optionsDiv").innerHTML = `

<label for="exampleInputAadhar">User ID</label>
<select name="User_ID" required class="form-control form-select select2" data-bs-placeholder="Select Country">
<option value="786">TRSTU_786_Kumbha koteswari_S V S Degree College_Management</option>
<option value="4113">TRSTU_4113_V.Rajani_SV Degree College_Information Technology</option>
<option value="4194">TRSTU_4194_C. Durga _GNR Degree College_Information Technology</option>
<option value="3906">TRSTU_3906_PAPPALA BABURAO _S V S Degree College_Information Technology</option>
<option value="3957">TRSTU_3957_Chellapu.n.d.prasad_S V S Degree College_Pharmaceuticals</option>
<option value="3884">TRSTU_3884_Chandaka siva_SV Degree College_Finance</option>
<option value="3881">TRSTU_3881_Yalamanchili naveen_Gayathri Degree College_Pharmaceuticals</option>
<option value="3923">TRSTU_3923_Velaga.varalaxmi _S V S Degree College_Finance</option>
<option value="4372">TRSTU_4372_Yajjala rathnam_S V S Degree College_Finance</option>
<option value="3918">TRSTU_3918_koda malleswari _S V S Degree College_Finance</option>
<option value="3966">TRSTU_3966_Molli varaha sai chandana_S V S Degree College_Finance</option>
<option value="3899">TRSTU_3899_daddisettiumalaxmi_S V S Degree College_Finance</option>
<option value="3923">TRSTU_3923_Velaga.varalaxmi _S V S Degree College_Finance</option>
<option value="3964">TRSTU_3964_Sadireddy bhanurekha_S V S Degree College_Finance</option>
<option value="3901">TRSTU_3901_Mylapalli uma_S V S Degree College_Finance</option>
<option value="3904">TRSTU_3904_Karri meghana _S V S Degree College_Information Technology</option>
<option value="4422">TRSTU_4422_KUDUM VENNELA	_SV Degree College_Information Technology</option>
<option value="4549">TRSTU_4549_M Reddi Ganesh _CNR Arts & Science College- Annamayya_Information Technology</option>
<option value="4702">TRSTU_4702_Sarmas Hussain _SRI VENKATESHWARA DEGREE COLLEGE _Management</option>
<option value="4784">TRSTU_4784_Dulla. Lavanya_ BGBS Womens Degree College_Finance</option>
<option value="4912">TRSTU_4912_Kavya_SV Degree College_Information Technology</option>
<option value="4942">TRSTU_4942_Sai jyothi_SV Degree College_Information Technology</option>
<option value="4942">TRSTU_4942_Sai jyothi_SV Degree College_Information Technology</option>
<option value="5075">TRSTU_5075_Vedangi Jyothi _SNR Degree College_Information Technology</option>
<option value="5080">TRSTU_5080_Divi Siva Mahesh_Sri Y N Degree College_Finance</option>
<option value="5287">TRSTU_5287_Venu_SV Degree College_Information Technology</option>
<option value="5502">TRSTU_5502_MITIA GAYATHRI_SAI DEGREE COLLEGE_Information Technology</option>
<option value="3937">TRSTU_3937_Lalitha marisetti_S V S Degree College_Information Technology</option>
<option value="3937">TRSTU_3937_Lalitha marisetti_S V S Degree College_Information Technology</option>
<option value="3937">TRSTU_3937_Lalitha marisetti_S V S Degree College_Information Technology</option>
<option value="5629">TRSTU_5629_Konatham Ayyanna Naidu _Sri Y N Degree College_Information Technology</option>
<option value="5639">TRSTU_5639_P Praveen kumar_Sri Y N Degree College_Finance</option>
<option value="5654">TRSTU_5654_kuvula madhuri_Gayathri Degree College_Pharmaceuticals</option>
<option value="5093">TRSTU_5093_Potturi Kumara Arun Teja Varma_Sri Y N Degree College_Information Technology</option>
<option value="4923">TRSTU_4923_AKULA ARCHITHA_SRI VIVEKANANDA DEGREE COLLEGE_Management</option>
<option value="4798">TRSTU_4798_Pasupuleti Kedar Ganesh_SRI VIVEKANANDA DEGREE COLLEGE_Information Technology</option>
<option value="5407">TRSTU_5407_GUTTULA.Bhaskara Phani Kumar_Sri Y N Degree College_Management</option>
<option value="5332">TRSTU_5332_Thriveni _Jyothirmayee women’s degree college _Information Technology</option>
<option value="5694">TRSTU_5694_Kune kanthi sree_Jyothirmayee women’s degree college _Management</option>
<option value="879">TRSTU_879_demo2025_Demo Degree College_Information Technology</option>
<option value="4843">TRSTU_4843_Neeluri Ganesh_SRI VIVEKANANDA DEGREE COLLEGE_Management</option>
<option value="5635">TRSTU_5635_Thirumala _Sri Balaji Vidya Vihar degree college_Information Technology</option>
<option value="4815">TRSTU_4815_Shaik.Arshiya_Sri Balaji Vidya Vihar degree college_Information Technology</option>
<option value="4788">TRSTU_4788_G.Gowthami_SRI VIVEKANANDA DEGREE COLLEGE_Management</option>
<option value="5719">TRSTU_5719_Gadi vijay anand _Sri Y N Degree College_Information Technology</option>
<option value="5736">TRSTU_5736_G GANESH _SMJL DEGREE COLLEGE, KADIRI-515 591_Information Technology</option>
<option value="5736">TRSTU_5736_G GANESH _SMJL DEGREE COLLEGE, KADIRI-515 591_Finance</option>
<option value="852">TRSTU_852_Meghana.Medam_SVR DEGREE COLLEGE_Information Technology</option>
<option value="5750">TRSTU_5750_𝑆𝑢𝑟𝑒𝑠𝒉 𝑛𝑎𝑖𝑘_SMJL DEGREE COLLEGE, KADIRI-515 591_Information Technology</option>
<option value="5752">TRSTU_5752_I.Kousalya_SMJL DEGREE COLLEGE, KADIRI-515 591_Information Technology</option>
<option value="769">TRSTU_769_Demo2024_GNR Degree College_Information Technology</option>
<option value="4978">TRSTU_4978_Shaik Safreen _SMJL DEGREE COLLEGE, KADIRI-515 591_Information Technology</option>
<option value="4977">TRSTU_4977_Shaik samrin_SMJL DEGREE COLLEGE, KADIRI-515 591_Information Technology</option>
<option value="4969">TRSTU_4969_Ayesha_SMJL DEGREE COLLEGE, KADIRI-515 591_Information Technology</option>
<option value="4971">TRSTU_4971_Manasa_SMJL DEGREE COLLEGE, KADIRI-515 591_Information Technology</option>
<option value="4980">TRSTU_4980_Sabhavathyamuna bai_SMJL DEGREE COLLEGE, KADIRI-515 591_Information Technology</option>
<option value="4976">TRSTU_4976_Shajeeda_SMJL DEGREE COLLEGE, KADIRI-515 591_Information Technology</option>
	
</select>

`;
			}
			else if (selectedOption === "batches") { 
                document.getElementById("optionsDiv").innerHTML = `
				<div class="form-group col-md-4">
											<label for="exampleInputAadhar">Select batch</label>
										<select name="Select_batch" required class="form-control form-select select2" data-bs-placeholder="Select Batch">
										
										</select>
										</div>
										
										<div class="form-group col-md-4">
										<label for="exampleInputAadhar">User ID</label>
										<select name="User_ID" required class="form-control form-select select2" data-bs-placeholder="Select Batch">
										
										</select>
										</div>

                `;
            }
			else {
                document.getElementById("optionsDiv").innerHTML = `
				<label for="exampleInputAadhar" hidden>Select batch</label>
										<select hidden name="Select_batch" required class="form-control form-select select2" data-bs-placeholder="Select Batch">
    										<option value="ALL"></option>
										</select>

				<label for="exampleInputAadhar" hidden>User ID</label>
				<select name="User_ID" hidden required class="form-control form-select select2" data-bs-placeholder="Select Country">
			    	<option value="ALL"></option>
				</select>
				`;
            }
            }

			else{
				document.getElementById("batch").style.display = "none";
				document.getElementById("Individuals").style.display = "none";

				var selectedOption = document.getElementById("dropdown").value;
				if (selectedOption === "Individuals") {            
			
					document.getElementById("dropdown").innerHTML = `<select id="dropdown" onchange="showOptions1()" name="Sending_format" required class="form-control form-select select2" data-bs-placeholder="Select Country">
											<option value="All">All</option>
											<option id="Individuals" style="display:none;"  value="Individuals">Individuals</option>
											<option id="batch" style="display:none;" value="batches">batches</option>
											</select>`;
											document.getElementById("optionsDiv").innerHTML = `
				<label for="exampleInputAadhar" hidden>User ID</label>
				<select name="User_ID" hidden required class="form-control form-select select2" data-bs-placeholder="Select Country">
				<option value="ALL"></option>
				</select>
				`;
			}
			else if (selectedOption === "batches") {
				document.getElementById("dropdown").innerHTML = `<select id="dropdown" onchange="showOptions1()" name="Sending_format" required class="form-control form-select select2" data-bs-placeholder="Select Country">
											<option value="All">All</option>
											<option id="Individuals" style="display:none;"  value="Individuals">Individuals</option>
											<option id="batch" style="display:none;" value="batches">batches</option>
											</select>`;
											document.getElementById("optionsDiv").innerHTML = `
				<label for="exampleInputAadhar" hidden>User ID</label>
				<select name="User_ID" hidden required class="form-control form-select select2" data-bs-placeholder="Select Country">
				<option value="ALL"></option>
				</select>
				`;
			}
			else {
				document.getElementById("optionsDiv").innerHTML = `
				<label for="exampleInputAadhar" hidden>User ID</label>
				<select name="User_ID" hidden required class="form-control form-select select2" data-bs-placeholder="Select Country">
				<option value="ALL"></option>
				</select>
				`;
            }
            }
		}
    </script>

									</div> 
									

				<!-- row -->
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-body">
									
									
									<div class="">
										<div class="row row-xs formgroup-wrapper">
										
									
											<div class="col-md-6">
											<div class="form-group">
												<label for="exampleInputCompanyPhone" style="color:#ff6700"><b>Subject</b></label>
												<input type="text" class="form-control" id="exampleInputCompanyPhone" placeholder="Enter Subject" name="Subject" required>
											</div>
											</div>
									<div class="col-md-6">
									<div class="form-group">
										<label for="exampleInputAadhar"style="color:#ff6700"><b>Purpose</b></label>
										<select name="Purpose" class="form-control form-select select2" data-bs-placeholder="Select Country" required>
											<option value="query">query</option>
											<option value="feedback">feedback</option>
											<option value="issue">issue</option>
											<option value="General">General</option>
										</select>
									</div>
									</div>
											<div class="col-md-12">
										<div class="form-label">
										<label for="exampleInputAadhar"style="color:#ff6700"><b>Describe</b></label>
											<input class="form-control" placeholder="Textarea" name="Describe" required>
										</div>
											</div>
											
											<div class="col-md-12">
											<div class="form-group">
												<label for="exampleInputcode">add attachments</label>
												<input type="file" class="form-control" id="exampleInputcode" placeholder="" name="add_attachments" required>
											</div>
											</div>


											
									        
											

											
											
									
											
						
										<button type="submit" name="submit" class="btn btn-primary mt-3 mb-0" data-bs-target="#send" data-bs-toggle="modal" style="text-align:right">send</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					

    
				</div>
				<!-- Container closed -->
			</div>
</form>
		

		  <div class="modal fade" id="send">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content modal-content-demo">
                                <div class="modal-header">
                                    <h6 class="modal-title">confirmation Notification</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    
                                    <p> Are you sure you want to send the request??</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn ripple btn-success" type="button">Send</button>
                                    <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Not Now</button>
                                </div>
                            </div>
                        </div>
                    </div>

            
            <!-- Footer opened -->
			<div class="main-footer">
				<div class="container-fluid pd-t-0-f ht-100p">
					 Copyright © 2023 <a href="www.triaright.in" class="text-primary">triaright</a>. Designed with <span class="fa fa-heart text-danger"></span> by <a href="www.mycompany.co.in"> my company</a> . All rights reserved
				</div>
			</div>
			<!-- Footer closed -->

		</div>
		<!-- End Page -->

        <!-- BACK-TO-TOP -->
		<a href="#top" id="back-to-top"><i class="las la-arrow-up"></i></a>

	    <?php 
	 include('./script.php'); 
	  ?>

    </body>

<!-- Mirrored from laravel8.spruko.com/nowa/emptypage by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Sep 2022 16:32:40 GMT -->
</html>
