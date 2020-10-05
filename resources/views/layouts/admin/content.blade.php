<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		@yield('meta')

		<!-- ZAYEKI CSS -->
		<link rel="stylesheet" href="{{ asset('plugins/zayeki/css/zayeki.min.css') }}">

		<!-- ADMIN CSS -->
		<link rel="stylesheet" href="{{ asset('dist/scss/css/style.min.css') }}">

		@yield('css')

		<title>
			@yield('title')
		</title>
	</head>
	<body>
		<div class="page">
			<div class="page-navside">
				@include('layouts.admin.content_navside')
			</div>

			<div class="page-content">
				<div class="page-header">
					@include('layouts.admin.content_header')
				</div>

				<div class="page-view">
					@yield('view')
				</div>
			</div>
		</div>

		<!--jQUERY JS -->
		<script src="{{ asset('plugins/jquery/jquery-3.4.1.min.js') }}"></script>

		<!--POPPER JS -->
		<script src="https://unpkg.com/@popperjs/core@2"></script>

		<!--ZAYEKI JS -->
		<script src="{{ asset('plugins/zayeki/js/common.js') }}"></script>
		<script src="{{ asset('plugins/zayeki/js/utils.js') }}"></script>
		<script src="{{ asset('plugins/zayeki/js/zayeki.js') }}"></script>
		
		@yield('js')
	</body>
</html>