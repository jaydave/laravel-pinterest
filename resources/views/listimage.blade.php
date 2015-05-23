<!DOCTYPE html>
<html >
<head>
  <title>Image Gallery</title>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.js"></script>
  <script src="js/angular.min.js"></script>
  <script src="js/ng-infinite-scroll.js"></script>
  <script src="js/angular-masonry.js"></script>
  <script src="js/appImage.js"></script>
</head>
<body ng-app="masonryApp" data-ng-controller="LoadImages" style="margin: 0 25px 0; padding: 0 15px 0;">

  <div infinite-scroll="fetchNext()" infinite-scroll-distance="1" style="display:inline-block; width:100%; height:100%">
    <div data-masonry data-x-margin="20" data-y-margin="30" data-img-width="250" style="margin:3% 2% 0 2%;  width:100%; float:left;">
      <div data-ng-repeat="image in images" style="border:1px solid black; border-radius:5px; padding:1px;">
          
        <img ng-src="http://lorempixel.com/@{{image.thumbnail_url}}">
        <div style="width:250px;  word-wrap: break-word;">
          <h6>@{{image.title}}</h6>
          Author: @{{image.author}}
          @{{ image.blurb}}...<a href="/show/@{{image.details_url}}">Read More</a>
        </div>
        
      </div>
    </div>

  </div>

</body>
</html>