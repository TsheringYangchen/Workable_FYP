
@extends('UI.layouts.app')
@section('content')
<main class="py-4">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">License Application Form</div>
					<div class="card-body">
						<form>
							<input type="hidden" name="_token">
							<div class="form-group row">
								<label for="name" class="col-md-3 col-form-label text-md-right">Name:</label>
								<div class="col-md-6">
									<input id="name" type="text" class="form-control " name="name" value="" required autocomplete="name" autofocus> </div>
							</div>
							<div class="form-group row">
								<label for="name" class="col-md-3 col-form-label text-md-right">Date of Birth/Age:</label>
								<div class="col-md-6">
									<input id="name" type="date" class="form-control " name="dob" placeholder="dd/mm/yyyy"> </div>
							</div>
							<div class="form-group row">
								<label for="name" class="col-md-3 col-form-label text-md-right">Citizen ID No:</label>
								<div class="col-md-6">
									<input id="name" type="text" class="form-control " name="cid"> </div>
							</div>
							<div class="form-group col-md-6">
								<label for="inputGender">Gender</label>
								<div class="form-check">
									<label class="form-check-label">
										<input type="radio" class="form-check-input" name="optradio">Male </label>
								</div>
								<div class="form-check">
									<label class="form-check-label">
										<input type="radio" class="form-check-input" name="optradio">Female </label>
								</div>
								<div class="form-check">
									<label class="form-check-label">
										<input type="radio" class="form-check-input" name="optradio">Other </label>
								</div>
							</div>
							<div class="form-group col-md-4">
								<label for="inputState"> Permanent Address:</label>
							</div>
							<div class="form-row col-md-12">
								<div class="form-group col-md-3">
									<select id="inputState" class="form-control">
										<option selected>Dzongkhag</option>
										<option>...</option>
									</select>
								</div>
								<div class="form-group col-md-3">
									<select id="inputState" class="form-control">
										<option selected>Dungkhag</option>
										<option>...</option>
									</select>
								</div>
								<div class="form-group col-md-3">
									<select id="inputState" class="form-control">
										<option selected>Gewog</option>
										<option>...</option>
									</select>
								</div>
								<div class="form-group col-md-3">
									<select id="inputState" class="form-control">
										<option selected>Village</option>
										<option>...</option>
									</select>
								</div>
							</div>
							<br>
							<div class="form-group row">
								<label for="name" class="col-md-3 col-form-label text-md-right">Name of Spouse:</label>
								<div class="col-md-6">
									<input id="spouse" type="text" class="form-control " name="spouse"> </div>
							</div>
							<div class="form-group col-md-4 h5"> Establishment: </div>
							<div class="form-group row">
								<label for="name" class="col-md-3 col-form-label text-md-right">Proposed Establishment Name:</label>
								<div class="col-md-6">
									<input id="name" type="text" class="form-control " name="name" value="" required autocomplete="name" autofocus> </div>
							</div>
							<div class="form-group row">
								<label for="inputZip" class="mx-4">Type of Establishment: </label>
								<select id="inputState" class="form-control col-md-4 mx-4">
									<option selected>Karoke</option>
									<option>Drayang</option>
									<option>Discothequee</option>
									<option>Bar</option>
								</select>
							</div>
							<div class="form-group col-md-4">
								<label for="inputState"> Exact Location:</label>
							</div>
							<div class="form-row col-md-12">
								<div class="form-group col-md-3">
									<select id="inputState" class="form-control">
										<option selected>Dzongkhag</option>
										<option>...</option>
									</select>
								</div>
								<div class="form-group col-md-3">
									<select id="inputState" class="form-control">
										<option selected>Dungkhag</option>
										<option>...</option>
									</select>
								</div>
								<div class="form-group col-md-3">
									<select id="inputState" class="form-control">
										<option selected>Gewog</option>
										<option>...</option>
									</select>
								</div>
								<div class="form-group col-md-3">
									<select id="inputState" class="form-control">
										<option selected>Village</option>
										<option>...</option>
									</select>
								</div>
							</div>
							<br>
							<h4 class="text-center text-danger">UNDERTAKING OF THE APPLICANT</h4>
							<ol>
								<li> I/We hereby declare and understand that approval of Licence does not in any way constitute an obligation by the Licencing Authority or any Government agency to provide Land/Space/Manpower to me/ us to carry-out business. </li>
								<li> I hereby certify that the information furnished herewith are true to the best of my knowledge and belief. In the even of detection of false or misleading information. I confer herewith the absolute authority the Ministry of Economic Affairs to take any action deemed appropriate including cancellation of the license: and </li>
								<li> I also undertake to uphold all the laws of the kingdom of Bhutan and observe all internationally accepted norms, code and ethics of business. </li>
							</ol>
							<br>
							<div class="form-group row">
								<label for="name" class="col-form-label mx-4">Date:</label>
								<div class="col-md-6">
									<input id="name" type="text" class="form-control " name="cid"> </div>
							</div>
							<div class="form-group btn">
								<button type="submit" class="btn btn-primary mx-3">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

@endsection