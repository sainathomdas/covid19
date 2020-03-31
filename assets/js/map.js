var statesLayer;

		var map = L.map('map').setView([22.9734,78.6569],2);

		function highlightFeature(e){
			var layer = e.target;
			layer.setStyle(
			{
				weight : 2,
				color : 'teal',
				fillColor : 'white',
				fillOpacity : 0.2
			}
			);
			if(!L.Browser.ie && !L.Browser.opera){
				layer.bringToFront();
			}

			document.getElementById('count1').innerHTML = e.target.feature.count.Indians;
		}

		function resetHighlight(e){
			statesLayer.resetStyle(e.target);
		}

		function zoomToFeature(e){
			map.fitBounds(e.target.getBounds());
		}


		function statesOnEachFeature(feature, layer){
			layer.bindLabel(feature.properties.st_nm.toString(),{noHide: true,direction: 'auto'});
			layer.on(
			{
				mouseover : highlightFeature,
				mouseout : resetHighlight,
				click : zoomToFeature
			}
			);
		}

		
		function getStateColor(cases){
			if (cases > 50){
				return '#c51b8a';
			}
			else if(cases > 25 && cases <= 50){
				return '#fa9fb5';
			}
			else{
				return '#fde0dd';
			}
		}


		function statesStyle(feature){
			return {
				fillColor : getStateColor(feature.count.Indians),
				weight : 1,
				opacity : 1,
				color : 'white',
				dashArray : 0.5,
				fillOpacity : 0.7
			}
		}



		statesLayer = L.geoJson(
			states,
			{
				style: statesStyle,
				onEachFeature: statesOnEachFeature
			}).addTo(map);

		map.fitBounds(statesLayer.getBounds());



