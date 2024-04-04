<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.cinetpay.com/seamless/main.js"></script>
    <script type="text/javascript" src="https://es10.premiummod.com/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js"></script>
    <style>
        .sdk {
            display: block;
            position: absolute;
            background-position: center;
            text-align: center;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }
    </style>

</head>
<body>
    </head>
    <body>
        <div id="sdk" style="visibility: hidden;z-index: 999">
            <h2>Prix:</h2>
            <p id="price" value="5000">{{ $price }}</p>
            <p id="membership">{{ $membership }}</p>
            <p id="user_id">{{ $user->id }}</p>
        </div>
        <div style="position:fixed;z-index: 99999999;top:250px;" class="d-lg-block d-md-block d-none">
            <a href="{{ url()->previous() }}">
                <button style="border: none;cursor:pointer;background:#ED5858 ;color:white;padding-top:10px;padding-bottom:10px;padding-left:50px;padding-right:50px">Retour</button>
            </a>

        </div>

        <div style="position:fixed;z-index: 99999999;top:250px;right:5px" class="d-lg-block d-md-block d-none">
            <a href="{{ route('db.customer.finance') }}">
                <button style="border: none;background:#ED5858 ;color:white;padding-top:10px;padding-bottom:10px;padding-left:50px;padding-right:50px">Mes paiements</button>
            </a>

        </div>
        <div style="position:fixed;z-index: 99999999;top:250px;right:5px" class="d-sm-block d-lg-none d-md-none">
            <a href="{{ route('db.customer.finance') }}">
                <button style="border: none;background:#ED5858 ;color:white;padding-top:10px;padding-bottom:10px;padding-left:50px;padding-right:50px">Mes paiements</button>
            </a>

        </div>
    </body>

    <script>
        const price=document.querySelector('#price').innerHTML;
        const membership=document.querySelector('#membership').innerHTML;
        const url=window.location.origin;
        const user_id=document.querySelector('#user_id').innerHTML;
        const transaction_id=Math.floor(Math.random() * 100000000).toString();
        console.log(price)
        document.getElementById('sdk').value=
            CinetPay.setConfig({
                apikey: '108089145655d2b949d7a99.42080516',//   YOUR APIKEY
                site_id: '5866009',//YOUR_SITE_ID
                notify_url: `http://127.0.0.1:8001/api/subscribe/member/momo/${user_id}/${transaction_id}`,
                mode: 'PRODUCTION'
            });
            CinetPay.getCheckout({
                transaction_id: transaction_id, // YOUR TRANSACTION ID
                amount: 100,
                currency: 'XAF',
                channels: 'MOBILE_MONEY',
                description: 'Paiement Abonnement',
            });
            CinetPay.waitResponse(function(data) {
                if (data.status == "REFUSED") {
                    window.location.assign(`${url}/payment/fail`);
                    console.log("level")
                } else if (data.status == "ACCEPTED") {
                    window.location.assign(`${url}/success/payment/plan`);
                }
            });
            CinetPay.onError(function(data) {
                console.log(data);
            });
            console.log('e')


    </script>
</html>
