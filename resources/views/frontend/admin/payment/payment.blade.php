<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <title>ChunDevi Taekwondo Association</title>
    <script src="https://khalti.s3.ap-south-1.amazonaws.com/KPG/dist/2020.12.17.0.0.0/khalti-checkout.iffe.js"></script>
</head>
    <body>

        <div class="container-fluid">
            <form action="{{ route('payment') }}" method="post">
                @csrf
                <div class="payment-container justify-content-center">

                    <div class="basic-container m-4 p-2">
                        <h3>Basic Details</h3>
                        <hr>
                        <div class="flex">
                            <input type="hidden" class="user_id" name="user_id" value="{{ Auth::user()->id }}">
                            <div class="mb-3 right">
                                <label for="exampleFormControlInput1" class="form-label">Name</label>
                                <input type="text" class="form-control name" id="exampleFormControlInput1" name="name"
                                    placeholder="Enter Name" value="{{ Auth::user()->name }}" readonly />
                            </div>
                            <div class="mb-3 right">
                                <label for="exampleFormControlInput1" class="form-label">Contact</label>
                                <input type="text" class="form-control contact" id="exampleFormControlInput1" name="contact"
                                    placeholder="Enter Contact Number" value="{{ Auth::user()->contact }}" readonly />
                            </div>

                            
                        </div>

                        <div class="flex">
                            <div class="mb-3 left">
                                <label for="exampleFormControlInput1" class="form-label">Email</label>
                                <input type="text" class="form-control email" id="exampleFormControlInput1" name="email"
                                    placeholder="Enter Email" value="{{ Auth::user()->email }}" readonly />
                            </div>
                            <div class="mb-3 right">
                                <label for="exampleFormControlInput1" class="form-label">Price</label>
                                <input type="text" class="form-control price" id="exampleFormControlInput1" name="price"/>
                            </div>
                        </div>

                    </div>
                </div>
            </form>
        </div>

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

                            var user_id = $('.user_id').val();
                            var name = $('.name').val();
                            var contact = $('.contact').val();
                            var email = $('.email').val();
                            var price = $('.price').val();

                            $.ajax({
                                headers:{
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                method: 'post',
                                url: "/khaltipayment",
                                data: {
                                    "user_id": user_id,
                                    "name": name,
                                    "contact": contact,
                                    "email": email,
                                    "price": price,
                                },


                                
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
</html>
