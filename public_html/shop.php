<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wombat Coffee Roasters</title>
    <link rel="stylesheet" href="Listing2.css">
    <link rel="stylesheet" href="Listing3.css">
    <link rel="stylesheet" href="Listing5.css">
    <link rel="stylesheet" href="Listing7.css">
    <link rel="stylesheet" href="Listing8.css">
    <link rel="stylesheet" href="Listing9.css">
    <link rel="stylesheet" href="Listing10.css">
</head>
<body>

    <header id="header" class="page-header">
        <div class="title">
          <h1>Wombat Coffee Roasters</h1>
          <div class="slogan">We love coffee I love you very mush</div>
        </div>
    </header>
      
    <nav class="menu" id="main-menu">
        <button class="menu-toggle" id="toggle-menu">             
          toggle menu
        </button>
        <div class="menu-dropdown">                               
          <ul class="nav-menu">
            <li><a href="/index.html">About</a></li>
            <li><a href="/shop.php">Shop</a></li>
            <li><a href="/menu.html">Menu</a></li>
            <li><a href="/brew.html">Brew</a></li>
          </ul>
        </div>
    </nav>

            
    <main id="main">
    
      <div class="wrapper">
          <div class="checkout container">

              <header>
                  <h1>Hi, <br>Let's test a transaction</h1>
                  <p>
                      Make a test payment with Braintree using PayPal or a card
                  </p>
              </header>

              <form method="post" id="payment-form" action="<?php echo $baseUrl;?>checkout.php">
                  <section>
                      <label for="amount">
                          <span class="input-label">Amount</span>
                          <div class="input-wrapper amount-wrapper">
                              <input id="amount" name="amount" type="tel" min="1" placeholder="Amount" value="10">
                          </div>
                      </label>

                      <div class="bt-drop-in-wrapper">
                          <div id="bt-dropin"></div>
                      </div>
                  </section>

                  <input id="nonce" name="payment_method_nonce" type="hidden" />
                  <button class="button" type="submit"><span>Test Transaction</span></button>
              </form>
          </div>
      </div>

    </main>
      
    <script type="text/javascript" src="Listing4.js"></script>  
</body>
</html>