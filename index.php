<!DOCTYPE html>
<html>
<head>
<title>Jquery Mwst Kalkulator</title>
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
</head>

<body>

Netto: <input type="text" id="netto"> + 
Mwst %: <input type="text" id="mwst"> = 
Brutto: <input type="text" id="brutto">
<button type="submit" id="calc" value="Kalkulieren">Kalkulieren</button>

<br />

<div id="result"></div>

     <script>
            $("#calc").on("click", function() {
                let netto = Number($("#netto").val());
                let mwst = Number($("#mwst").val());
                let brutto = $("#brutto");
                let total = netto + (netto * (mwst / 100));
                brutto.val(parseFloat(total, 10).toFixed(2));
            } );
    </script>
</body>
</html>
