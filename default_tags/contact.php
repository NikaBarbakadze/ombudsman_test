<div class="contact_wrap">
    <div class="contact_addresses">
        <address>
            <h3>თბილისი</h3>
            <ul>
                <li>
                    <em class="fas fa-map-marker-alt"></em>
                    <span>დავით აღმაშენებლის 150, თბილისი</span>
                </li>
                <li>
                    <em class="fas fa-phone"></em>
                    <span>
                        <a href="tel:" title=""></a> / 
                        <a href="tel:1481" title="1481">1481</a> /
                    </span>
                </li>
                <li>
                    <em class="fas fa-mobile-alt"></em>
                    <span>
                        <a href="tel:+1481" title="1481">1481</a> /
                        <a href="tel:" title=""></a>
                    </span>
                </li>
                <li>
                    <em class="fas fa-envelope"></em>
                    <span><a href="mailto:info@ombudsman.ge" title="info@ombudsman.ge">info@ombudsman.ge</a></span>
                </li>
                <li>
                    <em class="fab fa-facebook-f"></em>
                    <span><a href="https://www.fb.com/OmbudsmanofGeorgia/" title="https://www.fb.com/OmbudsmanofGeorgia/" target        ="_blank">https://www.fb.com/OmbudsmanofGeorgia/</a></span>
                </li>
            </ul>
            <h3>ცხელი ხაზი: 1481 (24/7)</h3>
            <div class="address_desc">მუშაობს 24 საათიან რეჟიმში, მათ შორის, არასამუშაო დღეებსა და საათებში</div>
        </address>
        <div class="branches">
            <ul>
                    <li>
                    <strong>ზემო სვანეთი</strong>
                    <em>მესტია სეტის მოედანი #19</em>
                    <span>მობ: <a href="tel:591 50 82 62" title="591 50 82 62">591 50 82 62</a></span>
                </li>
                    <li>
                    <strong>გორი</strong>
                    <em>სამების #1</em>
                    <span>მობ: <a href="tel:551 66 14 77" title="551 66 14 77">551 66 14 77</a></span>
                </li>
                    <li>
                    <strong>ახალქალაქი</strong>
                    <em>ჭავჭავაძის #4</em>
                    <span>მობ: <a href="tel:591 96 88 82" title="591 96 88 82">591 96 88 82</a></span>
                </li>
                    <li>
                    <strong>ოზურგეთი</strong>
                    <em>ჭავჭავაძის #14</em>
                    <span>მობ: <a href="tel:593 44 44 27" title="593 44 44 27">593 44 44 27</a></span>
                </li>
                    <li>
                    <strong>ზუგდიდი</strong>
                    <em>კოსტავას #58</em>
                    <span>მობ: <a href="tel:595 52 53 56" title="595 52 53 56">595 52 53 56</a></span>
                </li>
                    <li>
                    <strong>მარნეული</strong>
                    <em>რუსთაველის #51</em>
                    <span>მობ: <a href="tel:595 52 53 57" title="595 52 53 57">595 52 53 57</a></span>
                </li>
                    <li>
                    <strong>თელავი</strong>
                    <em>ჩოლოყაშვილის #3</em>
                    <span>მობ: <a href="tel:591 88 35 38" title="591 88 35 38">591 88 35 38</a></span>
                </li>
                    <li>
                    <strong>ბათუმი</strong>
                    <em>დუმბაძის #10</em>
                    <span>მობ: <a href="tel:595 80 78 43" title="595 80 78 43">595 80 78 43</a></span>
                </li>
                    <li>
                    <strong>ქუთაისი</strong>
                    <em>რუსთაველის გამზირი #18</em>
                    <span>მობ: <a href="tel:577 55 33 81" title="577 55 33 81">577 55 33 81</a></span>
                </li>
            </ul>
        </div>
    </div>
    <div class="contact_form">
        <script type="text/javascript">
          function onSubmit(token) {
            document.getElementById("contact_form").submit();
          }
        </script>
        <h3 class="contact_title">მოგვწერეთ შეტყობინება</h3>
        <form action="/contact/send" accept-charset="utf-8" method="POST" id="contact_form" autocomplete="off" enctype="multipart/form-data">
            <div style="display:none">
                <input type="hidden" name="token" value="e663f2573b6313721f3e1648804eb87a">
            </div>
            <div class="form_item">
                <input type="text" name="name" id="form1" value="">
                <label for="form1">სახელი</label>
            </div>
            <div class="form_item">
                 <input type="tel" name="phone" id="form2" value="">
                 <label for="form2">ტელეფონის ნომერი</label>
            </div>
            <div class="form_item">
                <input type="email" value="" name="email" id="form3">
                <label for="form3">ელფოსტა</label>
            </div>
            <div class="form_item">
                <textarea name="text" id="form5"></textarea>
                <label for="form5">ტექსტი</label>
            </div>
            <div class="form_item contact_form_submit">
                <button type="submit" class="gilaki g-recaptcha" data-sitekey="6LdR6mkUAAAAAArOsmbCr4LnNvUj2XDqs8Jy1NMW" data-callback="onSubmit">გაგზავნა</button>
            </div>
        </form>
    </div> 
     <div id="map" class="map"></div>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyCylyxdG70oXhvnfrTvt-fpbx48DfZZ41k&amp;sensor=false"></script>
    <script type="text/javascript">
        google.maps.event.addDomListener(window, "load", init);
        function init(){
            var mapOptions = {
                zoom: 15,
                center: new google.maps.LatLng(41.719316, 44.802263),
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                mapTypeControl: false,
                scaleControl: false,
                zoomControl: true,
                streetViewControl: false,
                scrollwheel: true,
                styles: [{
                    elementType: 'geometry',
                    stylers: [{
                        color: '#f2f2f2'
                    }]
                }, {
                    elementType: 'labels.text.fill',
                    stylers: [{
                        color: '#505050'
                    }]
                }, {
                    featureType: 'administrative.locality',
                    elementType: 'labels.text.fill',
                    stylers: [{
                        color: '#505050'
                    }]
                }, {
                    featureType: 'poi',
                    //elementType: 'labels.text.fill',
                    stylers: [{
                        visibility: 'off'
                        //color: '#ffffff'
                    }]
                }, {
                    featureType: 'poi.park',
                    elementType: 'geometry',
                    stylers: [{
                        color: '#777777'
                    }]
                }, {
                    featureType: 'poi.park',
                    elementType: 'labels.text.fill',
                    stylers: [{
                        color: '#505050'
                    }]
                }, {
                    featureType: 'road',
                    elementType: 'geometry',
                    stylers: [{
                        color: '#ffffff'
                    }]
                }, {
                    featureType: 'road',
                    elementType: 'geometry.stroke',
                    stylers: [{
                        color: '#ffffff'
                    }]
                }, {
                    featureType: 'road',
                    elementType: 'labels.text.fill',
                    stylers: [{
                        color: '#505050'
                    }]
                }, {
                    featureType: 'road.highway',
                    elementType: 'geometry',
                    stylers: [{
                        color: '#ffffff'
                    }]
                }, {
                    featureType: 'road.highway',
                    elementType: 'geometry.stroke',
                    stylers: [{
                        color: '#ffffff'
                    }]
                }, {
                    featureType: 'road.highway',
                    elementType: 'labels.text.fill',
                    stylers: [{
                        color: '#505050'
                    }]
                }, {
                    featureType: 'transit',
                    //elementType: 'geometry',
                    stylers: [{
                        visibility: 'off'
                        //color: '#2f3948'
                    }]
                }, {
                    featureType: 'transit.station',
                    elementType: 'labels.text.fill',
                    stylers: [{
                        color: '#505050'
                    }]
                }, {
                    featureType: 'water',
                    elementType: 'geometry',
                    stylers: [{
                        color: '#777777'
                    }]
                }, {
                    featureType: 'water',
                    elementType: 'labels.text.fill',
                    stylers: [{
                        color: '#505050'
                    }]
                }, {
                    featureType: 'water',
                    elementType: 'labels.text.stroke',
                    stylers: [{
                        color: '#505050'
                    }]
                }]
            };
            var mapElement = document.getElementById("map");
            var map = new google.maps.Map(mapElement, mapOptions);
            var locations = [
                [41.719316, 44.802263]
            ];
            for (i = 0; i < locations.length; i++){
                marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[i][0], locations[i][1]),
                    map: map,
                    icon: 'themes/images/marker.png',
                });
            }
        };
    </script>
</div>