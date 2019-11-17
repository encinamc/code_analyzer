<!doctype html>
<html lang="en">
<head>
	<title>Code Comparator (pre-alpha)</title>
	<!-- Bootstrap -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" crossorigin="anonymous">
	<!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<style>
		html {
			scroll-behavior: smooth;
		}
		.flag-yellow {
			background: #ffc107;
			color: #343a40;
		}
		.flag-red {
			background: #dc3545;
			color: #fff;
		}
		.input-row {
			padding-bottom: 5px;
		}
		.custom-acc {
			cursor: pointer !important;
    		text-decoration: underline!important;
    		color: blue!important;
		}
		.empty {
			display: none !important;
		}
	</style>
</head>

 <body>
 	<?php session_start();?>
	<div class="container-fluid">
		<h1> Code Comparator</h1>
		<form action="/code_analyzer/evaluateupload.php" method="POST" enctype="multipart/form-data">
			<div class="row">
				<div class="col">
					<p>Select main file for comparisson</p>
				</div>
			</div>
			<div class="row">
				<div class="col-4">
					<div class="input-group">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" name=mainfile>
							<label class="custom-file-label" for="inputGroupFile04">Choose Main file</label>
						</div>
					</div>
				</div>
			</div>
			<br />
			<div class="row">
				<div class="col">
					<p>Select other files for comparisson (Max of 10)</p>
				</div>
			</div>
			<div class="row">
				<div class="col-3">			
					<span>Select File for upload</span>	
				</div>
				<div class="col-2">
					<span>Alias Name for Selected File</span>
				</div>
			</div>
			<?php for($inputCtr = 1; $inputCtr <= 10; $inputCtr++): ?>
			<div class="row input-row">
				<div class="col-3">
					<div class="input-group">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="comparefile<?php echo $inputCtr; ?>" aria-describedby="comparefileAddOn" name=otherfiles[]>
							<label class="custom-file-label" for="comparefile<?php echo $inputCtr; ?>">Select File <?php echo $inputCtr; ?></label>
						</div>
					</div>
				</div>
				<div class="col-2">
					<input type="text" class="form-control" placeholder="File <?php echo $inputCtr; ?>" name=alias[]>
				</div>
			</div>
			<?php endfor; ?>
			<input class="btn btn-primary" type="submit" value="Compare now!">
		</form>
	</div>
	<br />
	<div class="row col-10" style="padding-left: 30px">
		<?php if (isset($_SESSION['compareResult'])): 
			$compareRs = $_SESSION['compareResult'];
			$aliasRs = $_SESSION['aliasPath'];
		?>
		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th scope="col">File Name Alias</th>
					<th scope="col">Similar Code Lines</th>
					<th scope="col">Identical Code Lines</th>
				</tr>
			</thead>
			<tbody id="tbody">
				<?php $totalFiles = count($compareRs["yellowFlag"]); ?>
				<?php for ($fileNumber = 0; $fileNumber < $totalFiles; $fileNumber++): ?>
				
				<tr class="thead-light">
					<?php
					$tmp = explode('/', $aliasRs['path'][$fileNumber]); 
					$tmpcnt = count($tmp) -1; 
					?>
					<th colspan="3" >Main File vs <?php echo $aliasRs['alias'][$fileNumber] .'('. $tmp[$tmpcnt] .')' ?></th>
				</tr>

						<?php for($ctr = 0; $ctr < 5; $ctr++): ?>
							<?php 
							$empty = "";
							if (is_array($compareRs["redFlag"][$fileNumber][$ctr]) && 
								is_array($compareRs["yellowFlag"][$fileNumber][$ctr]) && 
								count($compareRs["redFlag"][$fileNumber][$ctr]) == 0 && 
								count($compareRs["yellowFlag"][$fileNumber][$ctr]) == 0
							) {
									$empty = "empty";
							}
							
							?>
							<tr class="<?php echo $empty ?>">
								<!-- Line number -->
								<?php $lineNumber = $ctr + 1; ?>
								<td>
									Message <?php echo $lineNumber; ?>
									<?php if ($lineNumber == 2 || $lineNumber == 3): ?>
										<br /><a class="custom-acc" data-attr-row="<?php echo $fileNumber ?>">Show details</a>
									<?php endif; ?>									
								</td>
								
								<!-- Yellow Flag -->
								<?php $flag = "yellowFlag"; ?>
								<?php if(is_array($compareRs[$flag][$fileNumber][$ctr])): ?>
									<td class="flag-yellow <?php echo $empty ?>">
										<div class="rs-yellow-<?php echo $fileNumber ?>">
											<?php foreach($compareRs[$flag][$fileNumber][$ctr] as $value): ?>
												<?php echo $value; ?><br />
											<?php endforeach; ?>
										</div>
									</td>
								<?php else: ?>
									<td class='flag-yellow'><?php echo $compareRs[$flag][$fileNumber][$ctr]; ?>
								<?php endif; ?>
								<!-- Red Flag -->
								<?php $flag = "redFlag"; ?>
								<?php if(is_array($compareRs[$flag][$fileNumber][$ctr])): ?>
									<td class='flag-red'>
										<div class="rs-red-<?php echo $fileNumber ?>">
										<?php foreach($compareRs[$flag][$fileNumber][$ctr] as $value): ?>
											<?php echo $value; ?><br />
										<?php endforeach; ?>
										</div>
									</td>
								<?php else: ?>
									<td class='flag-red'><?php echo $compareRs[$flag][$fileNumber][$ctr]; ?>
								<?php endif; ?>
							</tr>
						<?php endfor; ?>

			<?php endfor; ?>
				

			</tbody>
		</table>

		<?php unset($_SESSION['compareResult']); ?>
		<?php endif; ?>
	</div>

	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-3.4.1.slim.min.js" crossorigin="anonymous"></script>
	<script src="assets/js/popper.min.js" crossorigin="anonymous"></script>
	<script src="assets/js/bootstrap.min.js" crossorigin="anonymous"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 -->
    <!-- Additional JS files -->
    <script type="text/javascript" src="assets/js/bs-custom-file-input.min.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="assets/js/code_analyzer.js"></script>
</body>
</html>
