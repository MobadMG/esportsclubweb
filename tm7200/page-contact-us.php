<?php

    get_header();

?>


<div class="background">


<h1 class="text-center fontSize">Contact Us</h1>

    <div class="imgParallax">
    
    </div>

<div class="row contactForm m-auto p-5">
    <div class="col-lg-6 col-md-6 col-xs-12">
    <img src="<?php bloginfo('template_directory');?>/assets/images/TeamPlayers5.jpg"/>
    </div>

    <div class="col-lg-6 col-md-6 col-xs-12 m-auto">

    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euis</p>

    <div class="form-group text-white">
      <input type="text" class=" input text-white" name="" id="" placeholder="Name">
    </div>
    <div class="form-group">
      <input type="text" class="input" name="" id="" aria-describedby="helpId" placeholder="Email">
    </div>

    <div class="form-group">
      <textarea name="" id="" class="input" rows="10" placeholder="Message"></textarea>
    </div>

    <input name="" id="" class=" button" type="button" value="Send">

    </div>
</div>


<div class="w-75 m-auto p-5">
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
    volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation </p>
</div>

<div class="w-75 m-auto p-5">
    <div id="map"></div>
</div>

<script>
AmCharts.makeChart("map",{
  "type": "map",
  "pathToImages": "http://www.amcharts.com/lib/3/images/",
  "addClassNames": true,
  "fontSize": 15,
  "color": "#FFFFFF",
  "projection": "winkel3",
  "backgroundAlpha": 1,
  "backgroundColor": "rgba(80,80,80,0)",
  "dataProvider": {
    "map": "worldLow",
    "getAreasFromMap": true,
    "images": [
      {
        "top": 40,
        "left": 60,
        "width": 80,
        "height": 40,
        "pixelMapperLogo": true,
        "imageURL": "http://pixelmap.amcharts.com/static/img/logo.svg",
        "url": "http://www.amcharts.com"
      },
      {
        "selectable": true,
        "longitude": -82.159,
        "latitude": 8.68,
        "svgPath": "M3.5,13.277C3.5,6.22,9.22,0.5,16.276,0.5C23.333,0.5,29.053,6.22,29.053,13.277C29.053,14.54,28.867,15.759,28.526,16.914C26.707,24.271,16.219,32.5,16.219,32.5C16.219,32.5,4.37,23.209,3.673,15.542C3.673,15.542,3.704,15.536,3.704,15.536C3.572,14.804,3.5,14.049,3.5,13.277C3.5,13.277,3.5,13.277,3.5,13.277M16.102,16.123C18.989,16.123,21.329,13.782,21.329,10.895C21.329,8.008,18.989,5.668,16.102,5.668C13.216,5.668,10.876,8.008,10.876,10.895C10.876,13.782,13.216,16.123,16.102,16.123C16.102,16.123,16.102,16.123,16.102,16.123",
        "color": "rgba(224,67,16,1)",
        "scale": 1
      },
      {
        "selectable": true,
        "longitude": 2.6914,
        "latitude": 48.4084,
        "svgPath": "M3.5,13.277C3.5,6.22,9.22,0.5,16.276,0.5C23.333,0.5,29.053,6.22,29.053,13.277C29.053,14.54,28.867,15.759,28.526,16.914C26.707,24.271,16.219,32.5,16.219,32.5C16.219,32.5,4.37,23.209,3.673,15.542C3.673,15.542,3.704,15.536,3.704,15.536C3.572,14.804,3.5,14.049,3.5,13.277C3.5,13.277,3.5,13.277,3.5,13.277M16.102,16.123C18.989,16.123,21.329,13.782,21.329,10.895C21.329,8.008,18.989,5.668,16.102,5.668C13.216,5.668,10.876,8.008,10.876,10.895C10.876,13.782,13.216,16.123,16.102,16.123C16.102,16.123,16.102,16.123,16.102,16.123",
        "color": "rgba(224,67,16,1)",
        "scale": 1
      },
      {
        "selectable": true,
        "longitude": 128.6746,
        "latitude": 35.5052,
        "svgPath": "M3.5,13.277C3.5,6.22,9.22,0.5,16.276,0.5C23.333,0.5,29.053,6.22,29.053,13.277C29.053,14.54,28.867,15.759,28.526,16.914C26.707,24.271,16.219,32.5,16.219,32.5C16.219,32.5,4.37,23.209,3.673,15.542C3.673,15.542,3.704,15.536,3.704,15.536C3.572,14.804,3.5,14.049,3.5,13.277C3.5,13.277,3.5,13.277,3.5,13.277M16.102,16.123C18.989,16.123,21.329,13.782,21.329,10.895C21.329,8.008,18.989,5.668,16.102,5.668C13.216,5.668,10.876,8.008,10.876,10.895C10.876,13.782,13.216,16.123,16.102,16.123C16.102,16.123,16.102,16.123,16.102,16.123",
        "color": "rgba(224,67,16,1)",
        "scale": 1
      }
    ]
  },
  "balloon": {
    "horizontalPadding": 15,
    "borderAlpha": 0,
    "borderThickness": 1,
    "verticalPadding": 15
  },
  "areasSettings": {
    "color": "rgba(255,255,255,1)",
    "outlineColor": "rgba(80,80,80,0)",
    "rollOverOutlineColor": "rgba(80,80,80,0)",
    "rollOverBrightness": 20,
    "selectedBrightness": 20,
    "selectable": true,
    "unlistedAreasAlpha": 0,
    "unlistedAreasOutlineAlpha": 0
  },
  "imagesSettings": {
    "alpha": 1,
    "color": "rgba(255,255,255,1)",
    "outlineAlpha": 0,
    "rollOverOutlineAlpha": 0,
    "outlineColor": "rgba(80,80,80,0)",
    "rollOverBrightness": 20,
    "selectedBrightness": 20,
    "selectable": true
  },
  "linesSettings": {
    "color": "rgba(255,255,255,1)",
    "selectable": true,
    "rollOverBrightness": 20,
    "selectedBrightness": 20
  },
  "zoomControl": {
    "zoomControlEnabled": true,
    "homeButtonEnabled": false,
    "panControlEnabled": false,
    "right": 38,
    "bottom": 30,
    "minZoomLevel": 0.25,
    "gridHeight": 100,
    "gridAlpha": 0.1,
    "gridBackgroundAlpha": 0,
    "gridColor": "#FFFFFF",
    "draggerAlpha": 1,
    "buttonCornerRadius": 2
  }
});
</script>
   
</div>




<script>
// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

// Create map instance
var chart = am4core.create("chartdiv", am4maps.MapChart);

// Set map definition
chart.geodata = am4geodata_worldLow;

// Set projection
chart.projection = new am4maps.projections.Miller();

// Create map polygon series
var polygonSeries = chart.series.push(new am4maps.MapPolygonSeries());

// Exclude Antartica
polygonSeries.exclude = ["AQ"];

// Make map load polygon (like country names) data from GeoJSON
polygonSeries.useGeodata = true;

// Configure series
var polygonTemplate = polygonSeries.mapPolygons.template;
polygonTemplate.tooltipText = "{name}";
polygonTemplate.fill = chart.colors.getIndex(0).lighten(0.5);

// Create hover state and set alternative fill color
var hs = polygonTemplate.states.create("hover");
hs.properties.fill = chart.colors.getIndex(0);

// Add image series
var imageSeries = chart.series.push(new am4maps.MapImageSeries());
imageSeries.mapImages.template.propertyFields.longitude = "longitude";
imageSeries.mapImages.template.propertyFields.latitude = "latitude";
imageSeries.data = [ {
  "zoomLevel": 5,
  "scale": 0.5,
  "title": "Brussels",
  "latitude": 50.8371,
  "longitude": 4.3676
}, {
  "zoomLevel": 5,
  "scale": 0.5,
  "title": "Copenhagen",
  "latitude": 55.6763,
  "longitude": 12.5681
}, {
  "zoomLevel": 5,
  "scale": 0.5,
  "title": "Paris",
  "latitude": 48.8567,
  "longitude": 2.3510
}, {
  "zoomLevel": 5,
  "scale": 0.5,
  "title": "Reykjavik",
  "latitude": 64.1353,
  "longitude": -21.8952
}, {
  "zoomLevel": 5,
  "scale": 0.5,
  "title": "Moscow",
  "latitude": 55.7558,
  "longitude": 37.6176
}, {
  "zoomLevel": 5,
  "scale": 0.5,
  "title": "Madrid",
  "latitude": 40.4167,
  "longitude": -3.7033
}, {
  "zoomLevel": 5,
  "scale": 0.5,
  "title": "London",
  "latitude": 51.5002,
  "longitude": -0.1262,
  "url": "http://www.google.co.uk"
}, {
  "zoomLevel": 5,
  "scale": 0.5,
  "title": "Peking",
  "latitude": 39.9056,
  "longitude": 116.3958
}, {
  "zoomLevel": 5,
  "scale": 0.5,
  "title": "New Delhi",
  "latitude": 28.6353,
  "longitude": 77.2250
}, {
  "zoomLevel": 5,
  "scale": 0.5,
  "title": "Tokyo",
  "latitude": 35.6785,
  "longitude": 139.6823,
  "url": "http://www.google.co.jp"
}, {
  "zoomLevel": 5,
  "scale": 0.5,
  "title": "Ankara",
  "latitude": 39.9439,
  "longitude": 32.8560
}, {
  "zoomLevel": 5,
  "scale": 0.5,
  "title": "Buenos Aires",
  "latitude": -34.6118,
  "longitude": -58.4173
}, {
  "zoomLevel": 5,
  "scale": 0.5,
  "title": "Brasilia",
  "latitude": -15.7801,
  "longitude": -47.9292
}, {
  "zoomLevel": 5,
  "scale": 0.5,
  "title": "Ottawa",
  "latitude": 45.4235,
  "longitude": -75.6979
}, {
  "zoomLevel": 5,
  "scale": 0.5,
  "title": "Washington",
  "latitude": 38.8921,
  "longitude": -77.0241
}, {
  "zoomLevel": 5,
  "scale": 0.5,
  "title": "Kinshasa",
  "latitude": -4.3369,
  "longitude": 15.3271
}, {
  "zoomLevel": 5,
  "scale": 0.5,
  "title": "Cairo",
  "latitude": 30.0571,
  "longitude": 31.2272
}, {
  "zoomLevel": 5,
  "scale": 0.5,
  "title": "Pretoria",
  "latitude": -25.7463,
  "longitude": 28.1876
} ];

// add events to recalculate map position when the map is moved or zoomed
chart.events.on( "mappositionchanged", updateCustomMarkers );

// this function will take current images on the map and create HTML elements for them
function updateCustomMarkers( event ) {
  
  // go through all of the images
  imageSeries.mapImages.each(function(image) {
    // check if it has corresponding HTML element
    if (!image.dummyData || !image.dummyData.externalElement) {
      // create onex
      image.dummyData = {
        externalElement: createCustomMarker(image)
      };
    }

    // reposition the element accoridng to coordinates
    var xy = chart.geoPointToSVG( { longitude: image.longitude, latitude: image.latitude } );
    image.dummyData.externalElement.style.top = xy.y + 'px';
    image.dummyData.externalElement.style.left = xy.x + 'px';
  });

}

// this function creates and returns a new marker element
function createCustomMarker( image ) {
  
  var chart = image.dataItem.component.chart;

  // create holder
  var holder = document.createElement( 'div' );
  holder.className = 'map-marker';
  holder.title = image.dataItem.dataContext.title;
  holder.style.position = 'absolute';

  // maybe add a link to it?
  if ( undefined != image.url ) {
    holder.onclick = function() {
      window.location.href = image.url;
    };
    holder.className += ' map-clickable';
  }

  // create dot
  var dot = document.createElement( 'div' );
  dot.className = 'dot';
  holder.appendChild( dot );

  // create pulse
  var pulse = document.createElement( 'div' );
  pulse.className = 'pulse';
  holder.appendChild( pulse );

  // append the marker to the map container
  chart.svgContainer.htmlElement.appendChild( holder );

  return holder;
}
</script>
<?php

    get_footer();

?>