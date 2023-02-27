<link rel="icon" type="image/x-icon" href="../../assets/logo/logo-small2.png">
<link rel="stylesheet" type="text/css" href="../../assets/bootstrap/css/bootstrap4.css">
<link rel="stylesheet" type="text/css" href="../../assets/bootstrap/css/dataTables.bootstrap4.min.css">
<link 
href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" 
rel="stylesheet">
<link 
href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" 
rel="stylesheet">
<link 
rel="stylesheet" 
href="../../assets/css/font-awesome/css/font-awesome.min.css">
<style>
    * {
        box-sizing: border-box;
        /* font-family: 'Roboto', sans-serif; */
		font-family: 'Poppins', sans-serif;
    }	

    /* Yellow - #fdbd41 */
    /* Blue - #0d9eed */
	/* Red - #dc3545 */
    /* Teal - #13acc5 */
    /* Dark Teal - #2d5972 */
    /* Dark - #282828 */
    /* White - #ffffff */

    /* Text */
    .text_teal {
        color: #13acc5;
    }
    /*  */

    /* Button Classes */
	.form-btn {
		font-weight: 500;
		outline: none;
		border: none;
		border-radius: 4px;
		letter-spacing: 1px;
		outline: none !important;
		cursor: pointer;
	}
	.form-btn-sm {
		padding: 5px 10px;
		font-size: 12px;
	}
	.form-btn-md {
		padding: 8px 20px;
	}
	.form-btn-lg {
		padding: 15px 20px;
	}
	.btn-yellow {
		background-color: #fdbd41;
		border: 1px solid #fdbd41;
		color: #282828;
		font-weight: 700;
	}
	.btn-teal {
		background-color: #13acc5;
		border: 1px solid #13acc5;
		color: #ffffff;
	}
	.btn-blue {
		background-color: #0d9eed;
		border: 1px solid #0d9eed;
		color: #ffffff;
	}
	.btn-red {
		background-color: #dc3545;
		border: 1px solid #dc3545;
		color: #ffffff;
	}
	.btn-gray {
		background-color: #282828;
		border: 1px solid #282828;
		color: #ffffff;
	}
/*  */

/* Alert */
	#msg_alert {
		position: fixed;
		z-index: 2000;
		top: 80px;
		right: 30px;

		width: 350px;
		font-size: 14px;
		color: #ffffff;
	}
	.text_bold {
		font-weight: 500 !important;
	}
	.text_bolder {
		font-weight: 700 !important;
	}
/*  */

/* Navbar */
    .nav_logo {
        width: 35px;
    }
    .nav-item{
        cursor: pointer;
    }
    .navbar-dark .navbar-nav .nav-link {
        color: #ffffff;
        font-weight: 500;
    }
    .navbar-dark .navbar-nav .nav-link:hover {
        color: #fdbd41;
    }
    .navbar-dark .navbar-nav #nav_logout i {
        padding: 5px 8px;
        border-radius: 4px;
        color: #ffffff;
        background-color: #dc3545;
    }
    .navbar-brand {
        cursor: pointer;
    }
/*  */

/* Accordion */
    .c_header {
        cursor: pointer;
		display: flex;
		flex-direction: row;
		justify-content: flex-start;
		align-items: center;
    }
    .c_header h5 {
        margin-bottom: 0;
    }
	.c_header div {
		width: 28px;
		height: 28px;
		text-align: center;
		border-radius: 50px;
		font-size: 14px;
		font-weight: 700 !important;
		color: #ffffff;
		margin-top: -1px;
		background-color: #dc3545;
		margin-right: 5px;

		display: flex;
		flex-direction: row;
		justify-content: center;
		align-items: center;
	}
/*  */

/* Doc Header */
	.registration_form .doc_header img {
		width: 100%;
	}
	.registration_form .doc_sub_header {
		border-bottom: 2px solid black;
	}
	.registration_form .doc_sub_header h5 {
		margin-bottom: 0;
	}
	.registration_form .doc_title h6 {
		margin-bottom: 0;
	}
	.doc_body, .doc_body span {
		font-size: 14px !important;
	}
	.doc_indent {
		margin-left: 45px;
		font-size: 16px;
	}
	.text_underline {
		border-bottom: 1px solid black;
		width: 100%;

		display: flex;
		flex-direction: row;
		justify-content: space-around;
	}
	.text_tag {
		width: 100%;

		display: flex;
		flex-direction: row;
		justify-content: space-around;
	}
	.text_tag small {
		font-size: 10px;
	}
	.text_stretch {
		display: flex;
		flex-direction: row;
		justify-content: space-between;
	}
	.text_stretch strong {
		white-space: nowrap;
	}
	.text_stretch strong {
		margin-right: 5px;
	}
	.doc_signature {
		font-size: 14px;
		font-weight: 700;
		border-bottom: 1px solid black;
	}
	.doc_signature_designation {
		font-size: 14px;
	}
	.registration_form .doc_footer {
		text-align: center;
	}
	.registration_form .doc_footer img {
		width: 90% !important;
	}
	.info_tbl {
		font-size: 14px;
	}
	@media print {
		.d_hide {
			display: none;
		}
		.registration_form {
			margin-top: -70px;
			transform: scale(.95);
			transform-origin: top;
		}
		.registration_form .doc_footer img {
			position: fixed;
			bottom: 0;
			left: 0;
			margin-left: 50px;
		}
	}
	.close {
		color: #ffffff !important;
		margin-top: -2px;
	}
	.rating_tbl td {
		border: 1px solid black;
		border-collapse: collapse;
		padding: 0;
	}
/*  */

/* Profile */
	.profile_img_con {
		width: 100%; 
		height: 250px; 
		background-color: #ccc; 
		margin-bottom: 10px; 
		text-align: center; 
		padding: 10px;
		border-radius: 4px;

		display: flex;
		flex-direction: row;
		justify-content: center;
		align-items: center;
	}
	.profile_img_con img {
		max-width: 100%; max-height: 100%;
	}
	#profile_image {
		padding: 3px 3px 30px 3px;
	}
/*  */

/* Card */
	.card_con {
		max-width: 35rem;
		width: 100%;
	}
/*  */
</style>