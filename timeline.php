<html>

<head>
    <style>
        body {
            margin: 0 auto;
            padding: 0px;
            text-align: center;
            width: 100%;
            font-family: "Myriad Pro", "Helvetica Neue", Helvetica, Arial, Sans-Serif;
            background-color: silver;
        }

        #wrapper {
            margin: 0 auto;
            padding: 0px;
            text-align: center;
            width: 995px;
        }

        #wrapper h1 {
            margin-top: 50px;
            font-size: 45px;
        }

        #wrapper p {
            font-size: 16px;
        }

        #timeline {
            position: relative;
            width: 700px;
            height: auto;
            float: left;
            margin-left: 145px;
        }

        #timeline_bar {
            padding: 0;
            list-style: none;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 50%;
            width: 10px;
            background-color: black;
            border-radius: 10px;
            height: auto;
        }

        #timeline li {
            position: relative;
            margin-top: 20px;
            margin-bottom: 20px;
            width: 330px;
            height: 70px;
            background-color: black;
            padding: 15px;
            box-sizing: border-box;
            border-radius: 10px;
            list-style-type: none;
            color: white;
            font-size: 15px;
        }

        #timeline li:nth-child(odd) {
            margin-right: 10px;
            right: -10px;
        }

        #timeline li:nth-child(even) {
            left: 370px;
        }
    </style>
</head>

<body>
    <div id="wrapper">

        <div id="timeline">
            <div id="timeline_bar">
            </div>
            <li>Login</li>
            <li>Sign up</li>
            <li>Claim your employment</li>
            <li>Service</li>
            <li>Login</li>
            <li>Sign up</li>
            <li>Claim your employment</li>
            <li>Service</li>
        </div>

    </div>
</body>

</html>
