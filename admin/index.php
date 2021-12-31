<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Admin panel | My harvast </title>
    <link href="../css/tailwind.css" rel="stylesheet">
    <link href="../font/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="../css/aos.css" rel="stylesheet" type="text/css">
    <link href="../img/fav-icon.svg" type="img/svg" rel="icon">
</head>
<body>

<div class="w-full max-w-xs ">
  <form 
  id="formvalidation" 
  name="formvalidation" 
  class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        User Email *
      </label>
      <input id="mail" name="mail"
       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        type="text" placeholder="Username">
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
        Password *
      </label>
      <input 
      class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" 
      id="password" 
      name="password"
      type="password" 
      placeholder="******************">
    </div>
    <div class="flex items-center justify-between">
      <button 
      type="submit"
      class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" 
      >
        Sign In
      </button>
    </div>
  </form>
  <p class="text-center text-gray-500 text-xs">
    &copy;2020 Acme Corp. All rights reserved.
  </p>
</div>


<script src="../js/jquery.min.js" type="text/javascript"></script>
<script src="../js/jquery.validate.min.js" type="text/javascript"></script>
<script src="../js/additional-methods.min" type="text/javascript"></script>
<script src="js/pages/index.js" type="text/javascript"></script>

</body>
</html>