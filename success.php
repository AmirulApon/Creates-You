<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
	<!--CSS-->
	<?php include './elements/header.php'; ?>
	<!--//CSS-->
</head>

<body>
	<header>
		<!--Header-->

		<?php include './elements/headerDesign.php'; ?>
		<!--//Header-->
	</header>
	<section class="main-container">
		<div class="container payment">

			<h1>
				Congratulations!
			</h1>
			<h5>
				Your payment has been successfully processed. Thank you for your purchase. We hope you enjoy your new service.
			</h5>
			<?php

			$val_id = urlencode($_POST['val_id']);
			$store_id = urlencode("wecre6410aae6c4f94");
			$store_passwd = urlencode("wecre6410aae6c4f94@ssl");
			$requested_url = ("https://sandbox.sslcommerz.com/validator/api/validationserverAPI.php?val_id=" . $val_id . "&store_id=" . $store_id . "&store_passwd=" . $store_passwd . "&v=1&format=json");

			$handle = curl_init();
			curl_setopt($handle, CURLOPT_URL, $requested_url);
			curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false); # IF YOU RUN FROM LOCAL PC
			curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false); # IF YOU RUN FROM LOCAL PC

			$result = curl_exec($handle);

			$code = curl_getinfo($handle, CURLINFO_HTTP_CODE);

			if ($code == 200 && !(curl_errno($handle))) {

				# TO CONVERT AS ARRAY
				# $result = json_decode($result, true);
				# $status = $result['status'];

				# TO CONVERT AS OBJECT
				$result = json_decode($result);

				# TRANSACTION INFO
				$status = $result->status;
				$tran_date = $result->tran_date;
				$tran_id = $result->tran_id;
				$val_id = $result->val_id;
				$amount = $result->amount;
				$store_amount = $result->store_amount;
				$bank_tran_id = $result->bank_tran_id;
				$card_type = $result->card_type;

				# EMI INFO
				$emi_instalment = $result->emi_instalment;
				$emi_amount = $result->emi_amount;
				$emi_description = $result->emi_description;
				$emi_issuer = $result->emi_issuer;

				# ISSUER INFO
				$card_no = $result->card_no;
				$card_issuer = $result->card_issuer;
				$card_brand = $result->card_brand;
				$card_issuer_country = $result->card_issuer_country;
				$card_issuer_country_code = $result->card_issuer_country_code;

				# API AUTHENTICATION
				$APIConnect = $result->APIConnect;
				$validated_on = $result->validated_on;
				$gw_version = $result->gw_version;
			} else {

				echo "Failed to connect with SSLCOMMERZ";
			}

			?>
			<div class="row download-file">

				<div class="col-md-12">
					<div class="" id="invoice">
						<table>
							<tr>
								<th>Items</th>
								<th>Value</th>
							<tr>
								<td>Your Payment Status</td>
								<td><?php echo $status ?></td>
							</tr>
							<tr>
								<td>Your Payment Amount</td>
								<td><?php echo $amount ?></td>
							</tr>
							<tr>
								<td>Transaction Date</td>
								<td><?php echo $tran_date ?></td>
							</tr>
							<tr>
								<td>Your Transaction Id </td>
								<td><?php echo $tran_id ?></td>
							</tr>
							<tr>
								<td>Your Value Id </td>
								<td><?php echo $val_id ?></td>
							</tr>
							<tr>
								<td>Your Store Amount</td>
								<td><?php echo $store_amount ?></td>
							</tr>
							<tr>
								<td>Your Card Type</td>
								<td><?php echo $card_type ?></td>
							</tr>
							<tr>
								<td>Your Bank transaction Id </td>
								<td><?php echo $bank_tran_id ?></td>
							</tr>
						</table>
					</div>

				</div>
				<div class=" col-md-4 text-right ">
				<button class="btn btn-primary gray-btn" id="download"> Download pdf</button>
			    </div>
			</div>
	</section>

	<footer>
		<!--Footer-->
		<?php include './elements/footerDesign.php'; ?>
		<?php include './elements/footer.php'; ?>
		<!--//Footer-->
	</footer>
</body>

</html>