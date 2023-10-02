

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Edmonton Junior Devs</title>

    <!-- Bootstrap -->
    
    <link href="/css/custom.css" rel="stylesheet">
    <script type="text/javascript" src="/bootstrap/js/bootstrap.min.js"></script>

    <!-- My Stylesheet & Javascript -->
    <!-- <link href="/css/output.css" rel="stylesheet"/> -->

    <!-- jQuery Is Reqired -->
    <script src="/js/jquery.min.js" type="text/javascript"></script>
    <script src="/js/index.global.js"></script>
   <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.4.2/main.min.css">
  


</head>
<body>
    <div class="sticky-top bg-custom-prime-green">
      <?php if(! auth()->loggedIn()): ?>
        <?= view_cell("MainNavMenuLogin::show"); ?>
        <?php else: ?>
        <?= view_cell("MainNavMenuLogout::show"); ?>
        <?php endif; ?> 
    </div>

<main class="container-xl mx-auto p-2" style="min-height: 90vh;">
   