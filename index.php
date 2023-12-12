
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News... for now</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
 

    <style>
        body {
            font-family: 'Lora', serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            line-height: 1.6;
        }

        header {
    color: #fff;
    padding: 10px;
    text-align: center;
    position: relative;
    background-image: url('bgggg.jpg'); 
    background-size: cover; 
    background-position: center; 
    backdrop-filter: blur(10px);
    margin: 0; 
}

h1 {
    position: relative; 
    z-index: 1; 
}

        nav {
        background-color: #444;
        overflow: hidden;
        text-align: center; 
    }

    nav a {
        display: inline-block;
        color: #fff;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

        nav a:hover {
            background-color: #ddd;
            color: #333;
        }

        #columns {
        display: flex;
        gap: 20px;
        padding: 20px;
        flex-wrap: wrap;
        justify-content: space-evenly;
    }

        .column {
            flex: 1;
            min-width: 200px;
            max-width: 400px;
        }

        .image-placeholder {
            width: 100%;
            padding-bottom: 75%; 
            background-color: #ddd;
            position: relative;
            overflow: hidden;
            border-radius: 8px;
        }

        .image-placeholder img {
            object-fit: cover;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            border-radius: 8px;
        }

        .image-content {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 10px;
            background: rgba(255, 255, 255, 0.9);
            border-bottom-left-radius: 8px;
            border-bottom-right-radius: 8px;
        }

        #text-content {
            padding: 20px;
            background-color: #fff;
            margin: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .container {
            display: flex;
        }

        #player,
        #exchange-rates-container {
            overflow-y: auto;
            box-sizing: border-box;
            max-height: 500px;
            width: 50%;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        #player iframe {
            width: 100%;
            height: 100%;
        }

        #exchange-rates-container {
            margin-left: 30px;
            display: flex;
            flex-direction: column;
            align-items: left;
        }

        #exchange-rates-table-container {
            max-height: 400px;
            overflow-y: auto;
            border: 1px solid #ddd;
            border-radius: 8px;
        }

        #exchange-rates-table {
            width: 100%;
            border-collapse: collapse;
        }

        #exchange-rates-table th,
        #exchange-rates-table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        #exchange-rates-table th {
            background-color: #f2f2f2;
        }

        .flag-emoji {
            margin-right: 10px;
            font-size: 20px;
        }

        #refresh-button {
        margin-top: 10px;
        padding: 8px 12px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    #refresh-button:hover {
        background-color: #45a049;
    }

        h2 {
            margin-bottom: 2;
        }

        

    </style>
</head>
<body>

<header>
    <h1>News... for now</h1>
</header>

<nav>
    <a href="index.php">Home</a>
    <a href="https://www.espn.ph">Sports</a>
    <a href="https://www.accuweather.com">Weather</a>
    <a href="https://www.politico.com">Politics</a>
</nav>


<div id="columns">
    <div class="column">
        <div class="image-placeholder">
            <img src="4214055-bestof2023.jpg" alt="Placeholder Image">
            <div class="image-content">
                <h2>The Best Games Of 2023 (So Far)</h2>
                <p>2023 is set to go down as an all-time great when it comes to the most memorable years in gaming.</p>
            </div>
        </div>
    </div>

    <div class="column">
        <div class="image-placeholder">
            <img src="kath.jpg" alt="Placeholder Image">
            <div class="image-content">
                <h2>Daniel Padilla and Kathryn Bernardo broke up</h2>
                <p>Daniel only said that his love for the young lady will not diminish despite their separation.</p>
            </div>
        </div>
    </div>

    <div class="column">
        <div class="image-placeholder">
            <img src="image3.jfif" alt="Placeholder Image">
            <div class="image-content">
                <h2>Israel's propaganda is now being debunked</h2>
                <p>The world is waking up from Israel's propaganda of hiding they atrocities with Palestine.</p>
            </div>
        </div>
    </div>

    <div class="column">
        <div class="image-placeholder">
            <img src="image4.jpg" alt="Placeholder Image">
            <div class="image-content">
                <h2>2012 predictions were slowly happening!!!</h2>
                <p>I kid you guys not, sources have shown that 2012 predictions will in 2023!!</p>
            </div>
        </div>
    </div>

</div>

<div id="text-content">
    <h2>If the world is ending you'd come over... right?</h2>
    <p>JP Saxe and Julia Michaels enlisted a handful of their celebrity friends as they performed "If the World Was Ending" in support of Doctors Without Borders. The video features appearances from Niall Horan, Sam Smith, Kesha, Noah Cyrus, and many more artists as they put their own spin on the song about wanting to be with the people you love during hard times. 
        The group number comes after real-life couple Michaels and Saxe gave a stirring performance of the song at their home.</p>
  
</div>

<div class="container">

        <div id="player"></div>
        

        <script>
            
            var tag = document.createElement('script');
            tag.src = "https://www.youtube.com/iframe_api";
            var firstScriptTag = document.getElementsByTagName('script')[0];
            firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

            var player;
            function onYouTubeIframeAPIReady() {
                player = new YT.Player('player', {
                    height: '390',
                    width: '640',
                    videoId: 'uZb7we7O8hk',  ///YT API
                    playerVars: {
                        'playsinline': 1
                    },
                    events: {
                        'onReady': onPlayerReady,
                        'onStateChange': onPlayerStateChange
                    }
                });
            }

            function onPlayerReady(event) {
                event.target.playVideo();
            }

            var done = false;
            function onPlayerStateChange(event) {
                if (event.data == YT.PlayerState.PLAYING && !done) {
                    setTimeout(stopVideo, 6000);
                    done = true;
                }
            }

            function stopVideo() {
                player.stopVideo();
            }
        </script>

<div id="exchange-rates-container">
    <?php

    $accessKey = "https://v6.exchangerate-api.com/v6/d55044ff2806c0a91014ef47/latest/USD"; //API
    $baseCurrency = "USD";
    $apiUrl = "https://open.er-api.com/v6/latest/{$baseCurrency}";

    $json = file_get_contents($apiUrl);

    if ($json === FALSE) {
        die('Error fetching data from Exchange Rates API');
    }

    $data = json_decode($json, true);

    if (isset($data['rates'])) {
        echo '<h2>Exchange Rates</h2>';
        echo '<button id="refresh-button" onclick="refreshExchangeRates()">Refresh Rates</button>'; 
        echo '<div id="exchange-rates-table-container">';
        echo '<table id="exchange-rates-table">';
        echo '<thead>';
        echo '<tr>';
        echo '<th>Currency</th>';
        echo '<th>Rate</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        foreach ($data['rates'] as $currency => $rate) {
            
            $flagEmoji = getFlagEmoji($currency);
            echo "<tr>";
            echo "<td><span class='flag-emoji'>{$flagEmoji}</span>{$currency}</td>";
            echo "<td>{$rate}</td>";
            echo "</tr>";
        }
        echo '</tbody>';
        echo '</table>';
        echo '</div>';
    } else {
        echo '<p>Error decoding exchange rates data. Data received: ' . $json . '</p>';
    }

    function getFlagEmoji($countryCode) {
     
        $offset = 0x1F1A5; 
        $asciiOffset = ord('A');

        $emojiFlag = '';
        for ($i = 0; $i < strlen($countryCode); $i++) {
            $asciiCode = ord(strtoupper($countryCode[$i])) - $asciiOffset + $offset;
            $emojiFlag .= html_entity_decode("&#x" . dechex($asciiCode) . ";", ENT_COMPAT, 'UTF-8');
        }

        return $emojiFlag;
    }
    ?>
</div>
</div>

<script>
    
    function refreshExchangeRates() {
        location.reload();
    }
</script>

</body>
</html>
