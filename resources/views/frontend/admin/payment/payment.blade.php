
<head>
    <script src="https://khalti.s3.ap-south-1.amazonaws.com/KPG/dist/2020.12.17.0.0.0/khalti-checkout.iffe.js"></script>
</head>
<body>
    <button id="payment-button">Pay with Khalti</button>
    <script>
        var config = {
            // replace the publicKey with yours
            "publicKey": "test_public_key_1b7d130c7a364c4eb91f0d6a12106b59",
            "productIdentity": "1234567890",
            "productName": "Payment",
            "productUrl": "http://127.0.0.1:8000/payment",
            "paymentPreference": [
                "KHALTI",
                "EBANKING",
                "MOBILE_BANKING",
                "CONNECT_IPS",
                "SCT",
                ],
            "eventHandler": {
                onSuccess (payload) {
                    // hit merchant api for initiating verfication
                    console.log(payload);
                    if(payload.idx){
                        $.ajaxSetup({
                            header: {
                                'X-CSRF-TOKEN': '{{ csrf_token()}}'
                            }
                        });
                        $.ajax({
                            method: 'post',
                            url: "{{ route('ajax.khalti.verify_order') }}",
                            data: payload,

                            success: function(response){
                                if(response.success == 1){
                                    window.location = response.redirecto;
                                }else{
                                    checkout.hide();
                                }
                            },
                            error: function(data){
                                console.log('Error:', data);
                            }
                        });
                    }
                },
                onError (error) {
                    console.log(error);
                },
                onClose () {
                    console.log('widget is closing');
                }
            }
        };

        var checkout = new KhaltiCheckout(config);
        var btn = document.getElementById("payment-button");
        btn.onclick = function () {
            // minimum transaction amount must be 10, i.e 1000 in paisa.
            checkout.show({amount: 1000});
        }
    </script>
</body>
