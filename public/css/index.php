<html ng-app>
<head>
	<title>Angular JS Test</title>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>
</head>
<body>
	<div>
		<input type="text" ng-model="yourName" placeholder="Enter a name here">
		<h1>Hello, {{yourName}}</h1>
	</div>
</body>
</html>