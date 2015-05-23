<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Always force latest IE rendering engine or request Chrome Frame -->
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">

  <title>ngInfiniteScroll - Demo - Basic - Infinite Scrolling for AngularJS</title>

  <link href="css/appImage.css" media="screen" rel="stylesheet" type="text/css" />
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.js"></script>
  <script src="js/angular.min.js" type="text/javascript"></script>
  <script src="js/ng-infinite-scroll.js" type="text/javascript"></script>
  <script src="js/app.js" type="text/javascript"></script>
</head>
<body >


<div ng-app='myApp' ng-controller='DemoController' class="row demo ng-scope">
  <div infinite-scroll='reddit.nextPage()' infinite-scroll-disabled='reddit.busy' infinite-scroll-distance='1'>
    <div ng-repeat='item in reddit.items'>
      <span class='score'>@{{item.score}}</span>
      <span class='title'>
        <a ng-href="@{{item.url}}" target='_blank'>@{{item.title}}</a>
      </span>

      
      <div style='clear: both;'></div>
    </div>
    <div ng-show='reddit.busy'>Loading data...</div>
  </div>
</div>

</body>
</html>
