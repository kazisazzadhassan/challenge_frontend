<?php
class Records {
	public $legal_name = "CrowdApex Systems Inc";
	public $business_name = "CrowdApex";
	public $business_address = "290 Bremner Blvd, Toronto, ON M5V 3L9, Canada";
	public $business_mailing_address = " Wellington St, Ottawa, ON K1A 0A9, Canada";
	public $business_phone = "+1 647 944 3023"; 
	public $business_fax = "+1 647 944 3024";
	public $business_email = "hello@controlledgoods.com";
	public $application_type = "New";
	public $business_title = "Employee";
	public $lang = "English";
}
$controlledGoods = [
	["Description"=>'Miliatry Product'	,"Group"=>123,"Item"=>123.1],
	["Description"=>"Silly Product"		,"Group"=>345,"Item"=>321.0],
	["Description"=>'Miliatry Product'	,"Group"=>123,"Item"=>123.1],
	["Description"=>"Silly Product"		,"Group"=>345,"Item"=>321.0],
	["Description"=>'Miliatry Product'	,"Group"=>123,"Item"=>123.1],

];

$model = new Records();

?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Security Screen</title>
  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Fontawesome -->
  <link href="css/all.css" rel="stylesheet">
  <!-- stylesheet -->
  <link rel="stylesheet" href="css/styles.css?v=1.0">


</head>

<body>
	<div class="formBody">
		<p class="title mb-0 padding">A. BUSINESS INFORMATION (To be completed by the Designated Official)</p>
		<form action="">
			<div class="pl-4 singleInput">
				<span class="serialNumber">1</span>
				<label for="" class="label mb-0">Legal Name</label>
				<input type="text" class="form-control form-control-sm" id="">
			</div>
			<div class="pl-4 singleInput border-top">
			<span class="serialNumber">2</span>
				<label for="" class="label mb-0">Business Name <span class="subtext">(If different from legal name)</span></label>
				<input type="text" class="form-control form-control-sm" id="">
			</div>
			<div class="pl-4 singleInput border-top">
				<span class="serialNumber">3</span>
				<label for="" class="label mb-0">Civil Address</label>
				<input type="text" class="form-control form-control-sm" id="">
			</div>
			<div class="pl-4 singleInput border-top">
				<span class="serialNumber">4</span>
				<label for="" class="label mb-0">Mailing Address <span class="subtext">(If differnet from civil address)</span></label>
				<input type="text" class="form-control form-control-sm" id="">
			</div>
			<div class="row mx-0">
				<div class="col-6 pl-4 singleInput border-top border-right">
					<span class="serialNumber">5</span>
					<label for="" class="label mb-0">Telephone Number <span class="subtext">(Include extention no. if applicable)</span></label>
					<input type="text" class="form-control form-control-sm" id="">
				</div>
				<div class="col-6 pl-4 singleInput border-top">
					<span class="serialNumber">6</span>
					<label for="" class="label mb-0">Facsimile Number</label>
					<input type="text" class="form-control form-control-sm" id="">
				</div>
			</div>
			<div class="pl-4 singleInput border-top">
				<span class="serialNumber">7</span>
				<label for="" class="label mb-0">E-mail</label>
				<input type="email" class="form-control form-control-sm" id="">
			</div>
			<div class="pl-4 singleInput border-top">
				<span class="serialNumber">8</span>
				<label for="" class="label mb-0">Description of the controlled goods the applicant may be required to examine, process or transfer <br> <span class="subtext">(Refer to the Export control list (ECL))</span></label>
			</div>
			<div class="singleInput border-top p-0">
				<table class="table table-bordered formTable mb-0">
					<thead>
						<tr>
							<th scope="col" colspan="2" width="60%" class="text-center">Description of Controlled Goods</th>
							<th scope="col"  width="17%" class="text-center">ECL Group<br>No.</th>
							<th scope="col"  width="17%" class="text-center">ECL Item<br>No.</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row" width="6%">a</th>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<th scope="row">b</th>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<th scope="row">c</th>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<th scope="row">d</th>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<th scope="row">e</th>
							<td></td>
							<td></td>
							<td></td>
						</tr>
					</tbody>
				</table>
			</div>
			<p class="title mb-0 padding">B. APPLICANT INFORMATION (To be completed by the applicant)</p>
			<div class="pl-4 singleInput">
				<span class="serialNumber">9</span>
				<div class="d-flex">
					<div class="checkboxItems d-flex">
						<label for="" class="label checkbox-label mb-0">Type of Application </label>
						<i class="fas fa-caret-right pl-4"></i>
					</div>
					<div class="custom-control custom-radio checkboxBox mr-5 ml-4">
						<input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
						<label class="custom-control-label label" for="customRadio1">New</label>
					</div>
					<div class="custom-control custom-radio checkboxBox">
						<input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
						<label class="custom-control-label label" for="customRadio2">Re-Assessment</label>
					</div>
				</div>
			</div>
			<div class="pl-4 singleInput border-top">
				<span class="serialNumber doubleDigit">10</span>
				<label for="" class="label mb-0">Business Title <span class="subtext">(Select all that apply)</span></label>
				<div class="d-flex">
					<div class="custom-control custom-checkbox checkboxBox mr-5">
						<input type="checkbox" class="custom-control-input" id="Owner">
						<label class="custom-control-label label" for="Owner">Owner</label>
					</div>
					<div class="custom-control custom-checkbox checkboxBox mr-5">
						<input type="checkbox" class="custom-control-input" id="Authorized">
						<label class="custom-control-label label" for="Authorized">Authorized Individual</label>
					</div>
					<div class="custom-control custom-checkbox checkboxBox mr-5">
						<input type="checkbox" class="custom-control-input" id="Designated">
						<label class="custom-control-label label" for="Designated">Designated Official</label>
					</div>
					<div class="custom-control custom-checkbox checkboxBox mr-5">
						<input type="checkbox" class="custom-control-input" id="Officer">
						<label class="custom-control-label label" for="Officer">Officer</label>
					</div>
				</div>
				<div class="d-flex">
					<div class="custom-control custom-checkbox checkboxBox mr-5">
						<input type="checkbox" class="custom-control-input" id="Director">
						<label class="custom-control-label label" for="Director">Director</label>
					</div>
					<div class="custom-control custom-checkbox checkboxBox mr-5">
						<input type="checkbox" class="custom-control-input" id="Employee">
						<label class="custom-control-label label" for="Employee">Employee</label>
					</div>
				</div>
			</div>
			<div class="pl-4 singleInput border-top">
				<span class="serialNumber doubleDigit">11</span>
				<div class="d-flex">
					<div class="checkboxItems d-flex">
						<label for="" class="label checkbox-label mb-0">Preferred Language of Correspondence</label>
						<i class="fas fa-caret-right pl-4"></i>
					</div>
					<div class="custom-control custom-radio checkboxBox mr-5 ml-4">
						<input type="radio" id="customRadio3" name="customRadio2" class="custom-control-input">
						<label class="custom-control-label label" for="customRadio3">English</label>
					</div>
					<div class="custom-control custom-radio checkboxBox">
						<input type="radio" id="customRadio4" name="customRadio2" class="custom-control-input">
						<label class="custom-control-label label" for="customRadio4">French</label>
					</div>
				</div>
			</div>
		</form>
	</div>


	<!-- Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/scripts.js"></script>
	  
</body>
</html>

