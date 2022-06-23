<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
	
	<title>Speedy Web App with Cloudinary</title>
	
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
	
	<!-- Styles -->
	@section('styles')
		<link href="{{ mix('css/app.css') }}" rel="stylesheet">
		@livewireStyles
	@show
</head>
<body class="antialiased">
<div
	class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
	
	<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
		<div class="flex align-items-center pt-8 sm:items-center sm:pt-0">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 96.77" height="50" class="mx-auto" fill="blue">
				<path
					d="M160.53 30.41a17.14 17.14 0 0 1 13.56 6.7.69.69 0 0 0 1 .11l5.71-4.55a.71.71 0 0 0 .11-1 26 26 0 0 0-20.61-10.13c-14.91 0-27 12.85-27 28.65s12.13 28.65 27 28.65a25.85 25.85 0 0 0 20.6-10.12.69.69 0 0 0-.12-1l-5.7-4.5a.71.71 0 0 0-1 .11A17.26 17.26 0 0 1 160.53 70c-10.19 0-18.16-8.7-18.16-19.79s7.97-19.8 18.16-19.8ZM188.27 19.91h7.16a.71.71 0 0 1 .71.71V77.4a.7.7 0 0 1-.7.7h-7.16a.71.71 0 0 1-.71-.71V20.62a.7.7 0 0 1 .7-.71ZM220.54 39.55c-9.49 0-19.09 6.72-19.09 19.57 0 11.29 8.21 19.81 19.09 19.81s19.17-8.52 19.17-19.81-8.24-19.57-19.17-19.57Zm10.53 19.57c0 6.52-4.53 11.44-10.53 11.44s-10.44-4.92-10.44-11.44 4.49-11.2 10.44-11.2 10.53 4.81 10.53 11.2ZM278.3 40.37h-7.16a.7.7 0 0 0-.71.7v19c0 7.42-5.12 10.05-9.51 10.05-3.88 0-7.79-2.93-7.79-9.48V41.07a.7.7 0 0 0-.71-.7h-7.16a.7.7 0 0 0-.7.7v20.5c0 11.25 5.09 17.44 14.34 17.44 3.36 0 8.8-1.93 10.84-6.19l.69.14v4.44a.71.71 0 0 0 .71.71h7.16a.71.71 0 0 0 .71-.71V41.07a.7.7 0 0 0-.71-.7ZM322.27 19.91h-7.17a.7.7 0 0 0-.7.71V46l-.44-.7c-2.18-3.51-6.87-5.78-11.95-5.78-8.76 0-17.62 6.75-17.62 19.65 0 11.25 7.61 19.73 17.69 19.73 3.84 0 9.25-1.54 11.88-5.86l.44-.72v5.08a.7.7 0 0 0 .7.71h7.17a.7.7 0 0 0 .7-.71V20.62a.7.7 0 0 0-.7-.71Zm-8 39.21a11 11 0 0 1-10.75 11.36c-5.86 0-10.45-5-10.45-11.36s4.59-11.2 10.45-11.2a11 11 0 0 1 10.72 11.2ZM333 40.37h7.16a.7.7 0 0 1 .7.7V77.4a.7.7 0 0 1-.7.7H333a.71.71 0 0 1-.71-.71V41.07a.71.71 0 0 1 .71-.7ZM336.61 21.06a5.57 5.57 0 0 0-5.69 5.57 5.64 5.64 0 0 0 5.69 5.58 5.54 5.54 0 0 0 5.61-5.58 5.48 5.48 0 0 0-5.61-5.57ZM370.35 39.55c-3.14 0-8.72 1.69-10.85 6.19l-.69-.14v-4.53a.7.7 0 0 0-.71-.7h-7.16a.7.7 0 0 0-.7.7V77.4a.7.7 0 0 0 .7.71h7.16a.71.71 0 0 0 .71-.71v-19c0-7.36 5.12-10 9.51-10 3.88 0 7.79 2.91 7.79 9.4v19.6a.71.71 0 0 0 .71.71H384a.71.71 0 0 0 .71-.71V56.91c-.02-11.19-5.12-17.36-14.36-17.36ZM427.48 40.37h-7.16a.7.7 0 0 0-.71.7v5l-.43-.7c-2.19-3.51-6.88-5.78-12-5.78-8.75 0-17.62 6.75-17.62 19.65 0 11.25 7.61 19.73 17.7 19.73 3.83 0 9.24-1.54 11.88-5.86l.43-.72v5.01a.71.71 0 0 0 .71.71h7.16a.7.7 0 0 0 .7-.71V41.07a.7.7 0 0 0-.66-.7Zm-8 18.75a11 11 0 0 1-10.78 11.36c-5.86 0-10.44-5-10.44-11.36s4.58-11.2 10.44-11.2a11 11 0 0 1 10.76 11.2ZM460.15 40.5a13.66 13.66 0 0 0-5.14-1c-4.76 0-8.22 2.85-10 8.25l-.64-.09v-6.59a.7.7 0 0 0-.71-.7h-7.16a.7.7 0 0 0-.71.7V77.4a.71.71 0 0 0 .71.71h7.24a.7.7 0 0 0 .7-.71V65c0-14.8 5.91-17 9.44-17a11 11 0 0 1 4.33.9.72.72 0 0 0 .61 0 .7.7 0 0 0 .36-.48l1.42-7.11a.71.71 0 0 0-.45-.81ZM499.88 40.68a.69.69 0 0 0-.59-.31h-7.71a.72.72 0 0 0-.66.45L481.59 65l-9.42-24.18a.72.72 0 0 0-.66-.45h-7.86a.69.69 0 0 0-.58.31.7.7 0 0 0-.07.66l14 34.38-7.73 20.09a.71.71 0 0 0 .66 1h7.5a.69.69 0 0 0 .65-.45l21.86-55a.69.69 0 0 0-.06-.68ZM97.91 28.11A40.38 40.38 0 0 0 59.73 0 39.62 39.62 0 0 0 24.6 20.87a29.88 29.88 0 0 0-7.21 56.56l.75.34h.05v-8.5a22.29 22.29 0 0 1 9.29-41.16l2.1-.22.92-1.89A32.15 32.15 0 0 1 59.73 7.57a32.7 32.7 0 0 1 31.55 25l.72 2.86h3a18.53 18.53 0 0 1 18.15 18.46c0 7.05-4.07 12.82-11 15.74v8.06l.5-.16c11.14-3.65 18.06-12.71 18.06-23.64a26.19 26.19 0 0 0-22.8-25.78Z"></path>
				<path
					d="m45.07 76.79 1.66 1.66a.33.33 0 0 1-.23.56H33.4a6 6 0 0 1-6-6V47.57a.33.33 0 0 0-.33-.33h-2.8a.33.33 0 0 1-.24-.56l11.12-11.12a.33.33 0 0 1 .47 0l11.11 11.12a.33.33 0 0 1-.23.56h-2.84a.34.34 0 0 0-.34.33v25a6 6 0 0 0 1.75 4.22ZM69.64 76.79l1.67 1.66a.33.33 0 0 1-.24.56H58a6 6 0 0 1-6-6V54a.34.34 0 0 0-.33-.34h-2.83a.33.33 0 0 1-.23-.56L59.72 42a.33.33 0 0 1 .47 0l11.12 11.08a.33.33 0 0 1-.24.56h-2.84a.34.34 0 0 0-.33.34v18.59a6 6 0 0 0 1.74 4.22ZM94.22 76.79l1.66 1.66a.33.33 0 0 1-.23.56H82.54a6 6 0 0 1-6-6V60.38a.33.33 0 0 0-.33-.33h-2.8a.33.33 0 0 1-.23-.57L84.3 48.37a.32.32 0 0 1 .46 0l11.12 11.11a.33.33 0 0 1-.23.57H92.8a.33.33 0 0 0-.33.33v12.19a6 6 0 0 0 1.75 4.22Z"></path>
			</svg>
		</div>
		<h2 class="m-3 mx-auto text-center fw-bold">Speedy Web Apps with Cloudinary Image Optimization</h2>
		<p class="m-4">
			Cloudinary’s built-in fast CDN delivery helps to get all resources to your users quickly. Additionally, Cloudinary automatically performs certain optimizations on all transformed images and videos by default.
		</p>
		
		<div class="m-2 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
			@livewire('image-upload')
		</div>
		
		<div class="flex justify-center mt-4 mb-4 sm:items-center sm:justify-between">
			<div class="ml-4 text-center text-sm text-gray-500 sm:text-center sm:ml-0 mx-auto">
				Powered by <a href="https://cloudinary.com">Cloudinary</a>
			</div>
		</div>
	</div>
</div>
@section('scripts')
	<script src="{{ mix('js/app.js') }}"></script>
	<script>
		if (window.self !== window.top) {
			window.top.location.href = '{{ url('/') }}';
		}
	</script>
	@livewireScripts
@show
</body>
</html>
