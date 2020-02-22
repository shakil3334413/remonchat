<!DOCTYPE html>
<html>
<head>
	<title></title>
	<head>
	<title></title>
	<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/create_profile.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<div class="heading">
					<h5>Create Your Profile</h5>
					<p>Please complete your profile</p>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="heading_right">
					<p class="heading_right_text"><CODE>*</CODE> Mandetory Feild</p>
				</div>
			</div>
		</div>
		<div class="well well-lg text-success ">
			<h4>Tell Us About Your Background...</h4>
		</div>
		<form accept="">
			<div class="form-group">
				<label class="create_text div_text">Profile for<code>*</code></label>
				<span class="create_text div_mid">:</span>
				<select class="crate_border border-success div_input" name="profile" required>
					<option>Select</option>
					<option>Self</option>
					<option>Brother</option>
					<option>Sister</option>
					<option>Father</option>
					<option>Mother</option>
					<option>Friend</option>
					<option>Relative</option>
					<option>Other</option>
				</select>
			</div>
			<div class="form-group">
				<label class="create_text div_text">Marital status<code>*</code></label>
				<span class="create_text div_mid2">:</span>
				<select class="crate_border border-success div_input" name="mstatus" required>
					<option>Select</option>
					<option>Annulled</option>
					<option>Divorcd</option>
					<option>Married</option>
					<option>Un Married</option>
					<option>Separated</option>
					<option>Widow/Widower</option>
				</select>
			</div>
			<div class="form-group">
				<label class="create_text div_text">Date of Birth<code>*</code></label>
				<span class="create_text div_mid3">:</span>
				<input type="Date" name="bday" class="crate_border border-success div_input" required>
			</div>
			<div class="form-group">
				<label class="create_text div_text">Religion<code>*</code></label>
				<span class="create_text div_mid4">:</span>
				<select class="crate_border border-success div_input" name="religion" required>
					<option>Select</option>
					<option>Muslim</option>
					<option>Hindhu</option>
					<option>Buddhist</option>
					<option>Christhan</option>
					<option>Others</option>
				</select>
			</div>
			
			<div class="form-group">
				<label class="create_text div_text" >Mother Tongue<code>*</code></label>
				<span class="create_text div_mid5">:</span>
				<select class="crate_border border-success div_input" name="language" required>
					<option>Select</option>
					<option>Bangla</option>
					<option>English</option>
					<option>Spanish</option>
				</select>
			</div>
			<div class="form-group">
				<label class="create_text div_text">Horoscope/Raasi<code>*</code></label>
				<span class="create_text div_mid6">:</span>
				<select class="crate_border border-success div_input" name="Raasi" required>
					<option>Select</option>
					<option>Dhanu</option>
					<option>Kanya</option>
					<option>Kark</option>
					<option>Kumba</option>
					<option>Makar</option>
					<option>Meen</option>
					<option>Mesh</option>
					<option>Mithun</option>
					<option>Simha</option>
					<option>Tula</option>
					<option>Vrishaba</option>
					<option>Vrishchik</option>
				</select>
			</div>
			<div class="well well-lg text-success ">
				<h4>Physical Attributes :</h4>
			</div>
			<div class="form-group">
				<label class="create_text div_text">Height<code>*</code></label>
				<span class="create_text div_mid7">:</span>
				<select class="crate_border border-success div_input" name="height" required>
					<option>Select</option>
					<option>4 ft</option>
					<option>4 ft 1 in</option>
					<option>4 ft 2 in</option>
					<option>4 ft 3 in</option>
					<option>4 ft 4 in</option>
					<option>4 ft 5 in</option>
					<option>4 ft 6 in</option>
					<option>4 ft 7 in</option>
					<option>4 ft 8 in</option>
					<option>4 ft 9 in</option>
					<option>4 ft 10 in</option>
					<option>4 ft 11 in</option>
					<option>5 ft</option>
					<option>5 ft 1 in</option>
					<option>5 ft 2 in</option>
					<option>5 ft 3 in</option>
					<option>5 ft 4 in</option>
					<option>5 ft 5 in</option>
					<option>5 ft 6 in</option>
					<option>5 ft 7 in</option>
					<option>5 ft 8 in</option>
					<option>5 ft 9 in</option>
					<option>5 ft 10 in</option>
					<option>5 ft 11 in</option>
					<option>6 ft</option>
					<option>6 ft 1 in</option>
					<option>6 ft 2 in</option>
					<option>6 ft 3 in</option>
					<option>6 ft 4 in</option>
					<option>6 ft 5 in</option>
					<option>6 ft 6 in</option>
					<option>6 ft 7 in</option>
					<option>6 ft 8 in</option>
					<option>6 ft 9 in</option>
					<option>6 ft 10 in</option>
					<option>6 ft 11 in</option>
					<option>7 ft</option>
				</select>
			</div>
			<div class="form-group">
				<label class="create_text div_text">Weight<code>*</code></label>
				<span class="create_text div_mid8">:</span>
				<input type="phone" name="weight" class="crate_border border-success div_input" required> [KG]	
			</div>
			<div class="form-group">
				<label class="create_text div_text">Complexion<code>*</code></label>
				<span class="create_text div_mid9">:</span>
				<input type="radio" class="div_input" name="complexion"> Dark
		  		<input type="radio" class="Cradio" name="complexion"> Fair	
		  		<input type="radio" class="Cradio" name="complexion"> Very Fair	
		  		<input type="radio" class="Cradio" name="complexion"> Wheatish	
			</div>
			<div class="form-group ">
				<label class="create_text div_text">Body Type<code>*</code></label>
				<span class="create_text div_mid10">:</span>
				<input type="radio" class="div_input" name="body"> Athletic
		  		<input type="radio" class="Cradio2" name="body"> Average	
		  		<input type="radio" class="Cradio2" name="body"> Slim
		  		<input type="radio" class="Cradio2" name="body"> Heavy
			</div>
			<div class="form-group">
				<label class="create_text div_text" >Blood Group<code>*</code></label>
				<span class="create_text div_mid11">:</span>
				<select class="crate_border border-success div_input" name="language" required>
					<option>Select</option>
					<option>A+</option>
					<option>A-</option>
					<option>B+</option>
					<option>B-</option>
					<option>O+</option>
					<option>O-</option>
					<option>AB+</option>
					<option>AB-</option>
				</select>
			</div>
			<div class="well well-lg text-success ">
				<h4>Education and Career :</h4>
			</div>
			<div class="form-groupr">
				<label class="create_text div_text" >Education<code>*</code></label>
				<span class="create_text div_mid12">:</span>
				<select class="crate_border border-success div_input" name="language" required>
					<option>Select</option>
					
				</select>
			</div>
			<div class="form-group">
				<label class="create_text div_text" >Education Details<code>*</code></label>
				<span class="create_text div_mid13">:</span>
				<select class="crate_border border-success div_input" name="language" required>
					<option>Select</option>
					
				</select>
			</div>
			<div class="form-group">
				<label class="create_text div_text" >Working Sector<code></code></label>
				<span class="create_text div_mid14">:</span>
				<select class="crate_border border-success div_input" name="language" required>
					<option>Select</option>
					
				</select>
			</div>
			<div class="form-group">
				<label class="create_text div_text" >Profession<code></code></label>
				<span class="create_text div_mid15">:</span>
				<select class="crate_border border-success div_input" name="language" required>
					<option>Select</option>
					
				</select>
			</div>
			<div class="form-group">
				<label class="create_text div_text" >Profession Details<code></code></label>
				<span class="create_text div_mid16">:</span>
				<select class="crate_border border-success div_input" name="language" required>
					<option>Select</option>
					
				</select>
			</div>
			<div class="well well-lg text-success ">
				<h4>Your life Style :</h4>
			</div>
			<div class="form-group">
				<label class="create_text div_text">Diet<code>*</code></label>
				<span class="create_text div_mid17">:</span>
				<input type="radio" class="div_input" name="diet"> Eggitarian
		  		<input type="radio" class="diet2" name="diet"> Non-Vegetarian <br>	
		  		<input type="radio" class="diet3" name="diet"> Occasionally Non-Vegetarian	
		  		<input type="radio" class="Cradio" name="diet"> Vegetarian	
			</div>
			<div class="form-group">
				<label class="create_text div_text">Smoke<code>*</code></label>
				<span class="create_text div_mid18">:</span>
				<input type="radio" class="div_input" name="smoke"> No
		  		<input type="radio" class="Cradio" name="smoke"> Occasionally	
		  		<input type="radio" class="Cradio" name="smoke"> Yes
			</div>
			<div class="form-group">
				<label class="create_text div_text">Drink<code>*</code></label>
				<span class="create_text div_mid19">:</span>
				<input type="radio" class="div_input" name="drink"> No
		  		<input type="radio" class="Cradio2" name="drink"> Occasionally	
		  		<input type="radio" class="Cradio2" name="drink"> Yes
			</div>
			<div class="well well-lg text-success ">
				<h4>Family details :</h4>
			</div>
			<div class="form-group">
				<label class="create_text div_text">Family Types<code>*</code></label>
				<span class="create_text div_mid20">:</span>
				<input type="radio" class="div_input" name="ftype"> Join Family
		  		<input type="radio" class="Cradio2" name="ftype"> Nuclear Family
			</div>
			<div class="form-group">
				<label class="create_text div_text">Family Stutas<code>*</code></label>
				<span class="create_text div_mid21">:</span>
				<input type="radio" class="div_input" name="fstutas"> Rich
		  		<input type="radio" class="Cradio2" name="fstutas"> upper middle class
		  		<input type="radio" class="Cradio2" name="fstutas"> middle class
			</div>
			<div class="form-group">
				<label class="create_text div_text">Family Value<code>*</code></label>
				<span class="create_text div_mid22">:</span>
				<input type="radio" class="div_input" name="fvalue"> Liberal
		  		<input type="radio" class="Cradio2" name="fvalue"> Modarate
		  		<input type="radio" class="Cradio2" name="fvalue"> Traditional
			</div>
			<div class="form-group">
				<label class="create_text div_text">Family Origin</label>
				<span class="create_text div_mid23">:</span>
				<input type="text" name="forigin" class="crate_border div_input border-success">
			</div>
			<div class="form-group ">
				<label class="create_text div_text">Father's Occupation</label>
				<span class="create_text div_mid24">:</span>
				<input type="text" name="foccupation" class="crate_border div_input border-success">
			</div>
			<div class="form-group">
				<label class="create_text div_text">Mother's Occupation</label>
				<span class="create_text div_mid25">:</span>
				<input type="text" name="moccupation" class="crate_border div_input border-success">
			</div>
			<div class="form-group">
				<label class="create_text div_text" >No. Of Brother</label>
				<span class="create_text div_mid26">:</span>
				<select class="crate_border div_input border-success" name="nbro" required>
					<option>Select</option>
					<option>0</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>Others</option>
				</select>
			</div>
			<div class="form-group">
				<label class="create_text  div_text" >No. Of Sister</label>
				<span class="create_text div_mid27">:</span>
				<select class="crate_border div_input border-success" name="nsis" required>
					<option>Select</option>
					<option>0</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>Others</option>
				</select>
			</div>
			<div class="well well-lg text-success ">
				<h4>More about Yourself :</h4>
			</div>
			<div class="form-group">
				<label class="create_text div_text">About Yourself<code>*</code></label>
				<span class="create_text div_mid28">:</span>
				<textarea type="text" name="aboutyour" class="crate_border2 div_input border-success" placeholder="minimum 150 words and maximum 1000 words" required></textarea>
				<p class="about_text">Write more about yourself, your partner choice and your family background</p>
				<p ><CODE class="about_text2">WARNING: Don't write your your Mobile, Email or Facebook id. it will disapprove your profile</CODE></p>
			</div>
			<div class="form-group ">
				<input type="checkbox" class="privacy" name="checked" checked>
				<span class="privacy2"><a href="">I agree terms and condition</a></span>
			</div>
			<input type="submit" value="Create Your Profile" class="btn btn-success button button_link" name="">
		</form>
	</div>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>