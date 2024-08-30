    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banking App</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
     
    </head>
    <body>
    <div class="container">
    <header>
    <h1>Banking App</h1>
    </header>
    <main>
    <div class="options">
    <div class="option-card">
    @foreach($cashDepositOptions as $option)
    <h2>{{$option->transaction_option_name}}</h2>
    <p>Securely deposit cash into your account.</p>
    <button onclick="handleOptionClick('Deposit', this);" name="item" id="item1">Deposit Now</button>
    @endforeach
    </div>
    <div class="option-card">
    @foreach($withdrawalOptions as $option)
    <h2>{{$option->transaction_option_name}}</h2>
    <p>Withdraw cash with ease.</p>
    <button onclick="handleOptionClick('Withdrawal', this);" name="item" id="item2">Withdraw Now</button>
    @endforeach
    </div>
    <div class="option-card">
    @foreach($billPaymentOptions as $option)
    <h2>{{$option->transaction_option_name}}</h2>
    <p>Pay your bills swiftly and securely.</p>
    <button onclick="handleOptionClick('Bill Payment', this);" name="item" id="item3">Pay Bill</button>
    @endforeach
    </div>
    </div>
  

</div>
</main>

    
    <script src="{{asset('assets/script/script.js')}}"></script>

    </body>
    </html>
