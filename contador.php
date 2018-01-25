 <html>
<head>
<title>Textarea Characters, Words Counter and Characters Limitation</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.textareaCounter.plugin.js" type="text/javascript"></script>
        <script type="text/javascript">
                jQuery(document).ready(function($) {
                    var options3 = {
                        'maxCharacterSize': 200,
                        'originalStyle': 'originalTextareaInfo',
                        'warningStyle': 'warningTextareaInfo',
                        'warningNumber': 40,
                        'displayFormat': '#left Caracteres Restante / #max'
                    };
                    var palabra_maxima =25;
                    $('#testTextarea3').textareaCount(options3, function(data) {
                        $('#showData').html(data.input + " Cantidad Caracteres. &nbsp;" + data.max + " Max. Caracteres. &nbsp;" + data.words + " Cantidad Palabras.");
                        $('#showData2').html(data.max + " Max. Caracteres. &nbsp;" + data.words + " Cantidad Palabras.");

                        $('#cant_palabra').val(data.words);
                        var cant = data.words;
                        //  console.log(cant);
                        if (cant > palabra_maxima) {
                            $('#showData2').addClass("letras_aviso");
                        } else {
                            $('#showData2').removeClass("letras_aviso");
                        }

                    });


                    $.datepicker.regional['es'] =
                            {
                                closeText: 'Cerrar',
                                prevText: 'Previo',
                                nextText: 'PrÃ³ximo',
                                monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
                                    'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                                monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun',
                                    'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
                                monthStatus: 'Ver otro mes', yearStatus: 'Ver otro aÃ±o',
                                dayNames: ['Domingo', 'Lunes', 'Martes', 'MiÃ©rcoles', 'Jueves', 'Viernes', 'SÃ¡bado'],
                                dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'SÃ¡b'],
                                dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa'],
                                dateFormat: 'dd/mm/yy', firstDay: 0,
                                initStatus: 'Selecciona la fecha', isRTL: false};
                    $.datepicker.setDefaults($.datepicker.regional['es']);


                    $('#with-altField').multiDatesPicker({
                        altField: '#altField',
                        //minDate: 0,
                        minDate: new Date(new Date().getTime() + (1 * 24 * 3600 * 1000)),
                        maxDate: 60
                    });

                    //EL CALENDARIO
                    $("#desde").datepicker({
                        //changeYear: true,
                        minDate: new Date(new Date().getTime() + (1 * 24 * 3600 * 1000)),
                        //maxDate: 60,
                        dateFormat: 'yy-mm-dd',
                        //changeMonth: true,
                        onClose: function(selectedDate) {
                            var maxDate = new Date(new Date(selectedDate).getTime() + (60 * 24 * 3600 * 1000));

                            $("#hasta").datepicker("option", "minDate", selectedDate);
                            $("#hasta").datepicker("option", "maxDate", maxDate);
                        }
                    });
                    $("#hasta").datepicker({
                        //changeYear: true,
                        dateFormat: 'yy-mm-dd',
                        //changeMonth: true,
                        onClose: function(selectedDate) {
                            $("#desde").datepicker("option", "maxDate", selectedDate);
                        }
                    });

                });

        </script>
        <style>
            .charleft {
                width: 205px !important;
            }
			.letras_aviso{
			font-size: 14px;
			color:#CC181E !important;
			font-family: Arial, Helvetica, sans-serif;
			font-weight:bold;
			}
        </style>

</head>
<body>
<textarea id="testTextarea3" cols="70" rows="10"></textarea>
<div id="showData"></div>
<div id="showData" style="color: #000000;"></div>
<div id="showData2" style="color: #000000"></div>
</body>
</html>
