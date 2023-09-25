<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- BOOTSTRAP --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    {{-- FONT AWESOME --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="row justify-content-center">
        <div class="col">
            <div class="text-center mb-3">
                <h2>Thank you for signing up</h2>
                <p>We'll keep you posted on the latest app updates, news and features</p>
            </div>

            <div class="bg-light w-50 text-center mx-auto my-auto">
                <h3>STAY CONNECTED</h3>
                <i class="fa-brands fa-instagram fa-10x text-secondary"></i>
                <p>This email was sent to {{ $email }} because you asked to received information related offers about Kredo Insta App.</p>
            </div>
        </div>
    </div>
</body>
</html>