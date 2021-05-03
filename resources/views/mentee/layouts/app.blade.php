<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{env('APP_NAME')}} | Mentee</title>
</head>
<body style="background-color: #f8f9fe !important;">
@include('mentee.layouts.side-nav')

</body>

</html>