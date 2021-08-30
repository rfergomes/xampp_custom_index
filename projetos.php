<?php
date_default_timezone_set("America/Sao_Paulo");
$dir = "./";
$dirHandle = opendir($dir);
$directoryArray = array();
$a = 0;
$show_hidden = false;
while ($directory = readdir($dirHandle)) {
    if ((strpos($directory, '.') !== 0 || !empty($show_hidden)) && $directory != "." && $directory != "..") {

        if (is_dir($directory)) {
            $directoryArray[$a] = array(
                'name' => $directory,
                'time' => date("F d Y H:i:s.", filemtime($directory))
            );
            $a++;
        }
    }
}
if (isset($_GET['phpInfo'])) {
    die(phpInfo());
}
?>
<style>
    :root {
        --card-bg-color: #e9e9e9;
        --nav-bg-color: #e9e9e9;
        --card-hover-color: #ccc;
        --card-hover-text-color: #000;
        --card-text-color: #000;
        --nav-a-text: black;
        --nav-a-hover-text: black;
        --nav-a-hover-color: #ccc;
    }

    * {
        box-sizing: border-box;
    }

    .topnav {
        overflow: hidden;
        background-color: var(--nav-bg-color);
    }

    .topnav a {
        float: right;
        display: block;
        color: var(--nav-a-text);
        text-align: center;
        padding: 12px 14px;
        text-decoration: none;
        text-transform: none;
        font-size: 17px;
    }

    .topnav a:hover {
        background-color: var(--nav-a-hover-color);
        color: var(--nav-a-hover-text);
    }

    .topnav .search-container {
        text-align: center;

    }

    .topnav input[type=text] {
        padding: 6px;
        margin-top: 8px;
        font-size: 17px;
        border: none;
        font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
    }

    @media screen and (max-width: 600px) {
        .topnav .search-container {
            float: none;
        }

        .topnav a,
        .topnav input[type=text] {
            float: none;
            display: block;
            text-align: left;
            width: 100%;
            margin: 0;
            padding: 14px;
        }
    }

    

    a {
        font-style: normal;
        text-decoration: none;
    }

    .card {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.4);
        display: inline-flex;
        background-color: var(--card-bg-color);
        transition: 0.5s;
        max-width: 31%;
        flex: 0 0 30%;
        position: relative;
        width: 100%;
        min-height: 1px;
        margin: 1%;
        color: var(--card-text-color);
    }

    .card:hover {
        background-color: var(--card-hover-color);
        box-shadow: 0 16px 32px 0 rgba(0, 0, 0, 0.6);
        color: var(--card-hover-text-color);
    }

    .container {
        padding: 4px 16px 8px;
    }
    
</style>
<div id="wrapper">
    <div class="hero">
        <div class="row">
            <div class="large-12 columns">
                <h1><span>Projetos</span></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Pesquisar" id="search" name="search" autofocus="autofocus" onfocus="this.select()">
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="row">
            <div class="row-fluid">
                <div id="replace">
                    <a href="{name}">
                        <div class="card">
                            <div class="container">
                                <h4><b>{name}</b></h4>
                                <p>{time}</p>
                            </div>
                        </div>
                    </a>
                </div>
                </ul>
            </div>
        </div>
    </div>
</div>
<script>
    var mainData = <?php echo json_encode($directoryArray); ?>;
    var div = document.getElementById("replace").innerHTML;
    window.onload = function() {
        setArray(document.getElementById("search").value);
    };
    document.getElementById("search").addEventListener("keyup", function(ev) {
        setArray(document.getElementById("search").value);
    });

    function setArray(string) {
        var i;
        var tempData = [];
        for (i = 0; i < mainData.length; ++i) {
            var temp = mainData[i].name.toUpperCase();
            if (temp.search(string.toUpperCase()) !== -1) {
                tempData.push(mainData[i]);
            }
        }
        populate(tempData);
    }

    function populate(tempData) {
        var text = '';
        for (i = 0; i < tempData.length; ++i) {
            var reg = /{(.*?)}/gi;
            var tempDiv = div;
            do {
                m = reg.exec(div);
                console.log(m);
                if (m) {
                    tempDiv = tempDiv.replace("{" + m[1] + "}", tempData[i][m[1]]);
                }
            } while (m);
            text += tempDiv;
        }
        document.getElementById("replace").innerHTML = text;
    }
</script>