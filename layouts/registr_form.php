<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/layouts/head.php'); ?>



<!-- Верстка -->

<form id="reg_form">
	    	<div class="form-group">
			    <input class="form-control" id="surname" name="surname" aria-describedby="surname" placeholder="Фамилия*" required />
			</div>	

			<div class="form-group">
			    <input class="form-control" id="name" name="name" aria-describedby="name" placeholder="Имя*" required />
			</div>

			<div class="form-group">
			    <input class="form-control" id="otch" name="otch" aria-describedby="otch" placeholder="Отчество*" required />
			</div>

			<div class="form-group">
			    <input class="form-control" id="snum" name="snum" aria-describedby="snum" placeholder="Номер соглашения" />
			    <small id="snum" class="form-text text-muted">если вы не являетесь партнером, оставьте поле пустым.</small>
			</div>

			<div class="form-group">
			    <input class="form-control" id="city" name="city" aria-describedby="city" placeholder="Город*" required />
			</div>

			<div class="form-group">
			    <input class="form-control" id="phone" name="phone" aria-describedby="phone" placeholder="Телефон*" required />
			</div>

		  <div class="form-group">
		    <input type="email" class="form-control" id="email" name="email" aria-describedby="email" placeholder="Email*" required />
		  </div>
		  <input type="hidden" name="action" value="registration">
		  
		  <button type="button" class="btn btn-primary align-self-center">Зарегистрироваться</button>
		  <img id="loader" src="/assets/img/ajax-loader.gif" alt="ajax-loader" style="display: none;">
		</form>

		<div id="res_info"></div>

<!-- /Верстка -->


<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/layouts/footer.php'); ?>