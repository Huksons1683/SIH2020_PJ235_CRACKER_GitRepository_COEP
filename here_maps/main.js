
function findNearestMarker(coords) {
	var minDist = 1000,
	  nearest_text = '*None*',
	  markerDist,
	  // get all objects added to the map
	  objects = map.getObjects(),
	  len = map.getObjects().length,
	  i;
  
	// iterate over objects and calculate distance between them
	for (i = 0; i < len; i += 1) {
	  markerDist = objects[i].getGeometry().distance(coords);
	  if (markerDist < minDist) {
		minDist = markerDist;
		nearest_text = objects[i].getData();
	  }
	}
  
	logEvent('The nearest marker is: ' + nearest_text);
  }
  
  function addClickEventListenerToMap(map) {
	// add 'tap' listener
	map.addEventListener('tap', function (evt) {
	  var coords =  map.screenToGeo(evt.currentPointer.viewportX, evt.currentPointer.viewportY);
	  findNearestMarker(coords);
	}, false);
  }
  
  /**
   * Boilerplate map initialization code starts below:
   */
  
  //Step 1: initialize communication with the platform
  // In your own code, replace variable window.apikey with your own apikey
  var platform = new H.service.Platform({
	apikey: window.apikey
  });
  var defaultLayers = platform.createDefaultLayers();
  lat:28.37575
  //Step 2: initialize a map
  var map = new H.Map(document.getElementById('map'),
	defaultLayers.vector.normal.map,{
	center: {lat: 28.41352, lng: 77.3467},
	zoom: 16,
	pixelRatio: window.devicePixelRatio || 1
  });
  // add a resize listener to make sure that the map occupies the whole container
  window.addEventListener('resize', () => map.getViewPort().resize());
  
  //Step 3: make the map interactive
  // MapEvents enables the event system
  // Behavior implements default interactions for pan/zoom (also on mobile touch environments)
  var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));
  
  // Step 4: create custom logging facilities
  var logContainer = document.createElement('ul');
  logContainer.className ='log';
  logContainer.innerHTML = '<li class="log-entry">Try clicking on the map</li>';
  map.getElement().appendChild(logContainer);
  
  // Helper for logging events
  function logEvent(str) {
	var entry = document.createElement('li');
	entry.className = 'log-entry';
	entry.textContent = str;
	logContainer.insertBefore(entry, logContainer.firstChild);
  }
  
  // Set up five markers.
  var coords = [{ lat:28.40555, lng: 77.31369},
	{  lat:28.37383 , lng:77.35571},
	{  lat:28.34133 , lng:77.19565},
	{ lat:28.33198 , lng:77.20968},
	{ lat:28.38982 , lng:77.36067},{lat:28.41352, lng:77.3467},{lat:28.44251, lng:77.33032},
	{lat:28.41679, lng:77.34044},{lat:28.48027, lng:77.32948},{lat:28.37972, lng:77.33846},{lat:28.41952, lng:77.33725},
	{lat:28.37329, lng:77.32356},{lat:28.3515, lng:77.28434},{lat:28.33822,lng:77.29707},{lat:28.39858, lng:77.19657},
	{lat:28.38037, lng:77.22834},{lat:28.38644, lng:77.27999},{lat:28.40791, lng:77.27508},{lat:28.34034, lng:77.28033},
	{lat:28.34898, lng:77.32594},{lat:28.4772, lng:77.29582}];

     // lat:28.27895 , lng:77.28822
	// lat:28.45053 , lng:77.28352
	// lat:28.42011 , lng:77.34608
	
  //Create the svg mark-up
  var svgMarkup = '<svg width="24" height="24" xmlns="http://www.w3.org/2000/svg">' +
	  '<rect stroke="white" fill="#1b468d" x="1" y="1" width="22" height="22" />' +
	  '<text x="12" y="18" font-size="12pt" font-family="Arial" font-weight="bold" ' +
	  'text-anchor="middle" fill="white">${REPLACE}</text></svg>';
  
  coords.forEach(function (value, index) {
	var myIcon = new H.map.Icon(svgMarkup.replace('${REPLACE}', index + 1), {
	  anchor: {x: 12, y: 12}
	}),
	marker = new H.map.Marker(value,  {
	  icon: myIcon,
	  volatility: true
	});
	// add custom data to the marker
	marker.setData(index + 1);
  
	// set draggable attribute on the marker so it can recieve drag events
	marker.draggable = true;
	map.addObject(marker);
  });
  
  
  // simple D'n"D implementation for markers"'
  map.addEventListener('dragstart', function(ev) {
	var target = ev.target;
	if (target instanceof H.map.Marker) {
	  behavior.disable();
	}
  }, false);
  
  map.addEventListener('drag', function(ev) {
	var target = ev.target,
		pointer = ev.currentPointer;
	if (target instanceof H.map.Marker) {
	  target.setGeometry(map.screenToGeo(pointer.viewportX, pointer.viewportY));
	}
  }, false);
  
  map.addEventListener('dragend', function(ev) {
	var target = ev.target;
	if (target instanceof H.map.Marker) {
	  behavior.enable();
	}
  }, false);
  
  // Add the click event listener.
  addClickEventListenerToMap(map);


  