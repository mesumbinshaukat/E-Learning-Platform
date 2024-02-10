	<div class=" main-container container-fluid">
	    <div class="main-header-left ">
	        <!-- <div class="responsive-logo">
	            <a href="" class="header-logo">
	                <img src="assets/img/tabnine-logo.png" class="mobile-logo logo-1" alt="logo">
	                <img src="assets/img/tabnine-logo.png" class="mobile-logo dark-logo-1" alt="logo">
	            </a>
	        </div> -->
	        <div class="app-sidebar__toggle" data-bs-toggle="sidebar">
	            <a class="open-toggle" href="javascript:void(0);"><i class="header-icon fe fe-align-left"></i></a>
	            <a class="close-toggle" href="javascript:void(0);"><i class="header-icon fe fe-x"></i></a>
	        </div>
	        <div class="logo-horizontal">
	            <a href="index.html" class="header-logo">
	                <img src="assets/img/tabnine-logo.png" class="mobile-logo logo-1" alt="logo">
	                <img src="assets/img/tabnine-logo.png" class="mobile-logo dark-logo-1" alt="logo">
	            </a>
	        </div>

	    </div>
	    <div class="main-header-right">
	        <button class="navbar-toggler navresponsive-toggler d-md-none ms-auto" type="button" data-bs-toggle="collapse"
	            data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false"
	            aria-label="Toggle navigation">
	            <span class="navbar-toggler-icon fe fe-more-vertical "></span>
	        </button>
	        <div class="mb-0 navbar navbar-expand-lg navbar-nav-right responsive-navbar navbar-dark p-0">
	            <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
	                <ul class="nav nav-item header-icons navbar-nav-right ms-auto">
	                    <li class="nav-link Search-icon d-lg-none d-Block">
	                        <form class="navbar-form" role="Search">
	                            <div class="input-group">
	                                <input type="text" class="form-control" placeholder="Search">
	                                <span class="input-group-btn">
	                                    <button type="Reset" class="btn btn-default">
	                                        <i class="fas fa-times"></i>
	                                    </button>
	                                    <button type="submit" class="btn btn-default nav-link resp-btn">
	                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" class="header-icon-svgs"
	                                            viewBox="0 0 24 24" width="24px" fill="#000000">
	                                            <path d="M0 0h24v24H0V0z" fill="none" />
	                                            <path
	                                                d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
	                                        </svg>
	                                    </button>
	                                </span>
	                            </div>
	                        </form>
	                    </li>
	                    <li class="dropdown main-profile-menu nav nav-item nav-link ps-lg-2">
	                        <a class="new nav-link profile-user d-flex" href="#" data-bs-toggle="dropdown"><img alt=""
	                                src="./assets/img/icons/user.png" class=""></a>
	                        <div class="dropdown-menu">
	                            <div class="menu-header-content p-3 border-bottom">
	                                <div class="d-flex wd-100p">
	                                    <div class="main-img-user"><img alt="" src="./assets/img/icons/user.png" class="">
	                                    </div>
	                                    <div class="ms-3 my-auto">
	                                        <h6 class="tx-15 font-weight-semibold mb-0"></h6><span
	                                            class="dropdown-title-text subtext op-6  tx-12"><?php echo $_COOKIE["college_username"] ?></span>
	                                    </div>
	                                </div>
	                            </div>


	                            <a class="dropdown-item" href="changepassword.php"><i class="far fa-sun"></i>Change
	                                Password</a>
	                            <a class="dropdown-item" href="./partials/logout.php"><i
	                                    class="far fa-arrow-alt-circle-left"></i>
	                                Logout</a>
	                        </div>
	                    <li class="nav-item full-screen fullscreen-button">
	                        <a class="new nav-link full-screen-link" href="javascript:void(0);"><svg
	                                xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" width="24" height="24"
	                                viewBox="0 0 24 24">
	                                <path d="M5 5h5V3H3v7h2zm5 14H5v-5H3v7h7zm11-5h-2v5h-5v2h7zm-2-4h2V3h-7v2h5z" />
	                            </svg></a>
	                    </li>
	                    </li>
	                </ul>
	            </div>
	        </div>
	    </div>
	</div>