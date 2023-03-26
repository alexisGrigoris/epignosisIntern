<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<link
      href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&display=swap"
      rel="stylesheet"
    />
    <meta
      name="viewport"
      content="width=device-width,initial-scale=1,maximum-scale=1"
    />
    <style>
      body {
        font-family: "Inter", sans-serif;
		margin: 0 auto;
      }

	  form{
		width:95%;
		margin: 0 auto;
	  }

	  .center{
		margin:5em auto;
	  }

	  h1{
		font-size:1.2em;
	  }
	  
	  .errors{
		color:red;
	  }
    </style>
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js"
      defer
    ></script>
  </head>

	<body class="min-h-screen bg-gray-100 text-gray-900 flex justify-center">
		<form method="post" action="register.php">
			

			<div
			class="max-w-screen-xl m-0 sm:m-20 bg-white shadow sm:rounded-lg flex justify-center flex-1 center"
			>
			<div class="lg:w-1/2 xl:w-5/12 p-6 sm:p-12">
				<div>
				<h1 class="text-2xl xl:text-3xl font-extrabold">
					Epignosis Library 📚
				</h1>
				</div>
				<div class="mt-12 flex flex-col items-center">
				<h1>
					Complete the form below to sign up at Epignosis  Library
				</h1>
				<div class="w-full flex-1 mt-8">
					

					<div class="my-12 border-b text-center line">
				
					</div>

					

					<div class="mx-auto max-w-xs">
						<div class="errors">
							<?php include('errors.php'); ?>
						</div>
						<input
							class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-5 first"
							type="name" name="username"
							placeholder="Username"
						/>
						<input
						class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-5"
							type="email" name="email"
							placeholder="Email"
						/>
						<input
							class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-5"
							type="password" name="password_1" minlength="8"
							placeholder="Password"
						/>

						<input
							class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-5"
							type="password" name="password_2"
							placeholder="Confirm your password"
						/>
						<button
							class="mt-5 tracking-wide font-semibold bg-indigo-500 text-gray-100 w-full py-4 rounded-lg hover:bg-indigo-700 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none"
							type="submit" 
							class="btn" 
							name="reg_user"
							>
							
							<svg
							class="w-6 h-6 -ml-2"
							fill="none"
							stroke="currentColor"
							stroke-width="2"
							stroke-linecap="round"
							stroke-linejoin="round"
							>
							<path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
							<circle cx="8.5" cy="7" r="4" />
							<path d="M20 8v6M23 11h-6" />
							</svg>
							<span class="ml-3">
							Sign Up
							</span>
						</button>
						<p class="mt-6 text-xs text-gray-600 text-center">
							Already have an account? 
							<a href="login.php" class="border-b border-gray-500 border-dotted">
							Click here to log in
							</a>
						</p>
					</div>
				</div>
				</div>
			</div>
			<div class="flex-1 bg-indigo-100 text-center hidden lg:flex">
				<div
				class="m-12 xl:m-16 w-full bg-contain bg-center bg-no-repeat"
				style="background-image: url('https://storage.googleapis.com/devitary-image-host.appspot.com/15848031292911696601-undraw_designer_life_w96d.svg');"
				></div>
			</div>
			</div>
  </body>
</html>