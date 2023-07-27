# jquery-mwst-rechner

Jquery MwSt Rechner

HTML


`Netto: <input type="text" id="netto"> + 
Mwst %: <input type="text" id="mwst"> = 
Brutto: <input type="text" id="brutto">
<button type="submit" id="calc" value="Kalkulieren">Kalkulieren</button>
`


Jquery 

` <script>
            $("#calc").on("click", function() {
                let netto = Number($("#netto").val());
                let mwst = Number($("#mwst").val());
                let brutto = $("#brutto");
                let total = netto + (netto * (mwst / 100));
                brutto.val(parseFloat(total, 10).toFixed(2));
            } );
    </script>`
