<div class="firstScreen innerpage">
	<div class="slider-back">
		<div style="background-image: url(pictures/slider-bg-2.jpg);"></div>
		<div style="background-image: url(pictures/slider-bg-1.png);"></div>
	</div>
	<div class="container firstScreen-text ctext">
		<h1><em>Наши</em> Контакты</h1>
		<p>For questions or inquiries specific to Investor Relations or shareholder matters, please submit your question using the form below.</p>
		<p>Если Вас заинтересовали наши продукты, и Вы хотите получить более подробную информацию, свяжитесь с нашими консультантами любым удобным для Вас способом.</p>
	</div>
</div>
<div class="main">
	<div class="container">
		<div class="contacts">
			<div class="contacts-data">
				<div class="contacts-data-item"><i class="icon icon-map"></i><span>ул. Соболева д.23.</span></div>
				<div class="contacts-data-item"><i class="icon icon-phone-red"></i><span>+7 (123) <b>456-78-90</b></span></div>
				<div class="contacts-data-item"><i class="icon icon-mail"></i><span><a href="mailto:ayrapetov@amcapitalinvestment.com">ayrapetov@amcapitalinvestment.com</a></span></div>
			</div>
			<div class="contacts-form">
				<form action="?">
					<div class="contacts-form-main">
						<div class="contacts-form-field">
							<select name="subject">
								<option value="Subject">Subject</option>
								<option value="Subject2">Subject2</option>
							</select>
						</div>
						<div class="contacts-form-field">
							<div class="contacts-form-row col2Item">
								<div class="contacts-form-col"><input type="text" name="name" placeholder="Name" /></div>
								<div class="contacts-form-col"><input type="text" name="email" placeholder="E-mail" /></div>
							</div>
						</div>
						<div class="contacts-form-field">
							<textarea name="comments" rows="10" placeholder="Comments"></textarea>
						</div>
					</div>
					<input type="submit" value="Submit comment" />
				</form>
			</div>
		</div>
		<div class="map">
			<div id="map"></div>
    		<script>
			function initMap() {
			  var myLatLng = {lat: -25.363, lng: 131.044};

			  var map = new google.maps.Map(document.getElementById('map'), {
			    zoom: 4,
			    center: myLatLng,
			    scrollwheel: false
			  });

			  var marker = new google.maps.Marker({
			    position: myLatLng,
			    map: map,
			    title: 'Hello World!',
			    icon: 'images/baloon.png'
			  });
			}
    		</script>
   			 <script async defer src="https://maps.googleapis.com/maps/api/js?signed_in=true&callback=initMap"></script>
		</div>
	</div>
</div>