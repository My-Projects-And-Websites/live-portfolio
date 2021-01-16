<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Enquiry</title>

    <style>
        .container {
            margin: 0 auto;
            width: 60%;
        }

        .container .row-1 {
            background: #333;
            padding: 25px;
        }

        .container .row-1 p {
            color: #fff;
            text-transform: uppercase;
            font-size: 20px;
        }

        .container .filler-block {
            width: 100%;
            height: 200px;
            background: #EE5757;
        }

        .container .main-div {
            padding: 25px;
            background: #333;
        }

        #name, #email, #message {
            font-size: 18px;
            color: #fff;
        }

        #message {
            margin-bottom: 0px;
        }
    </style>
</head>
<body>
    <div class="container" style="margin: auto; width: 60%;">
        <div class="row-1">
            <p>Customer Enquiry</p>
        </div>
        <div class="filler-block"></div>
        <div class="main-div" style="padding: 25px;">
            <div class="main-body">
                <p id="name">This is {{ $data['name'] }}.</p>
                <p id="email">This is my email, {{ $data['email'] }}, I'll receive your reply here.</p>
                <p id="message">{{ $data['message'] }}.</p>
            </div>
        </div>
    </div>
</body>
</html>