<link rel="icon" type="image/x-icon" href="assets/logo/logo-small.png">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<style type="text/css">
*{
	box-sizing: border-box;
	font-family: 'Roboto', sans-serif;
}	

/* Yellow - #fdbd41 */
/* Blue - #0d9eed */
/* Teal - #13acc5 */
/* Dark Teal - #2d5972 */
/* Dark - #282828 */
/* White - #ffffff */

/* Button Classes */
	.form-btn {
		font-weight: 500;
		outline: none;
		border: none;
		border-radius: 4px;
		letter-spacing: 1px;
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
		color: #ffffff;
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
	.btn-gray {
		background-color: #282828;
		border: 1px solid #282828;
		color: #ffffff;
	}
/*  */

.container_login{
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;

	height: 100vh;
	width: 100%;
	padding: 10px;
}
.card_container{
	max-width: 500px;
	width: 100%;
	box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
	border: none;
}
.card_container_2 {
	max-width: 900px;
	width: 100%;
	box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
	border: none;
}
.card_header {
	font-family: 'Poppins', sans-serif;
	font-size: 40px;
	font-weight: 700;
}
@media screen and (max-width: 992px) {
	.container_login {
		height: 100%;
	}
	.card_container, .card_container_2 {
		box-shadow: none;
		border: none;
	}
}
.card_container label, .card_container_2 label{
	font-weight: 500;
}
.card_container img, .card_container_2 img {
	max-width: 80px;
	width: 100%;
}
.page_nav span {
	font-weight: 500;
}
.page_nav_label {
	color: #fdbd41;
	cursor: pointer;
}

</style>