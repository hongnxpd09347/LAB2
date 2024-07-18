<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thông tin sinh viên</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>

<div class="container">
<div class="row">
		<div class="col-12">
			<!-- Page title -->
			<div class="my-5">
				<h3>Thông tin Sinh viên</h3>
				<hr>
			</div>
			<!-- Form START -->
			<form class="file-upload">
				<div class="row mb-5 gx-5">
					<!-- Contact detail -->
					<div class="col-xxl-8 mb-5 mb-xxl-0">
						<div class="bg-secondary-soft px-4 py-5 rounded">
							<div class="row g-3">
								<h4 class="mb-4 mt-0">Thông tin:</h4>
								<div class="col-md-6">
									<label class="form-label">Họ và tên Sinh viên</label>
									<input type="text" class="form-control" value="{{ $name }}" disabled>
								</div>
                                <div class="col-md-6">
									<label class="form-label">Ngày sinh</label>
									<input type="text" class="form-control" value="{{ $dayofbirth }}" disabled>
								</div>
								<div class="col-md-6">
									<label class="form-label">Mã số Sinh viên</label>
									<input type="text" class="form-control" value="{{ $mssv }}" disabled>
								</div>
                                <div class="col-md-6">
									<label class="form-label">Lớp</label>
									<input type="text" class="form-control" value="{{ $class }}" disabled>
								</div>
								<div class="col-md-6">
									<label class="form-label">Số điện thoại</label>
									<input type="text" class="form-control" value="{{ $phone }}" disabled>
								</div>
								<div class="col-md-6">
									<label for="inputEmail4" class="form-label">Email</label>
									<input type="email" class="form-control" id="inputEmail4" value="{{ $email }}" disabled>
								</div>
							</div> <!-- Row END -->
						</div>
					</div>
				</div> <!-- Row END -->
			</form> <!-- Form END -->
		</div>
	</div>
	</div>
</body>
</html>