<!Doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous"/>
    <link href="Login_page.css" rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,700&family=Oswald:wght@300&display=swap" rel="stylesheet">
<script src="Login_page.js"></script>
<script src="https://www.google.com/recaptcha/api.js"></script>
</script>
</head>
<body>
    <div class="container-fluid main-container justify-content-center d-flex vh-100">
    <div class="row align-items-center">
     <div class="login_el  col-md-6">
        <h1 class="text-center mx-auto title">Login</h1>
    
        <form class="mx-auto text-center">
            <label> User Name:
           </label>
           <input type="text">
           </input>
           <label> Password:
           </label>
           <input type="password r" >
           </input>
           <button class="g-recaptcha mx-auto" 
            data-sitekey="reCAPTCHA_site_key" 
            data-callback='onSubmit' 
            data-action='submit'>Submit</button>
        </form>   
         </div>
      </div>
        </div>

       
    

    </div>
    </div>
</body>
</html>