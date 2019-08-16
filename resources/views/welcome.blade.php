<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Baby Caller</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            body { font: 14pt 'Alike', sans-serif;}
            #note { font-size: 164px; }
            .droptarget { background-color: #348781}
            div.confident { color: black; }
            div.vague { color: lightgrey; }
            #note { display: inline-block; height:180px; text-align: left;}

            #detector { width: 300px; height: 300px; border: 4px solid gray; border-radius: 8px; text-align: center; padding-top: 10px;}
            #output { width: 300px; height: 42px; }
            #flat { display: none; }
            #sharp { display: none; }
            .flat #flat { display: inline; }
            .sharp #sharp { display: inline; }
        </style>
        <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
        <script src="js/pitchdetect.js"></script>

    </head>
    <body>

    <p>
<!--        <button onclick="this.innerText = togglePlayback()">use demo audio</button>-->
        <button onclick="toggleLiveInput()">Start listening</button>
<!--        <button onclick="toggleOscillator()">use oscillator</button>-->
        <!--<button onclick="updatePitch(0);">sample</button>-->
    </p>

    <div id="detector" class="vague">
        <div class="pitch"><span id="pitch">--</span>Hz</div>
    </div>

    <!-- just used for debugging
    <canvas id="waveform" width="512" height="256"></canvas>
    -->
    </body>
</html>
