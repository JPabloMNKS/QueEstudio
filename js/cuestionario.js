//var preguntas = ["1BHK", "2BHK", "3BHK", "4BHK"]; 
//var respuestas = ["A","B","C","D","E","F","G"];

var preguntas = ["Operar una imprenta.", "Estudie las causas de los terremotos.", "Plantar y cosechar cultivos.", "Reemplace la ventana y el guardabarros de un automóvil.", "Analizar informes y registros.", "Operar una máquina.", "Trabaja en una oficina.", "Responder las preguntas de los clientes", "Escribir informes.", "Ayuda a exreclusos a encontrar trabajo.", "Diseña una autopista.", "Planificar lecciones educativas.", "Balancear una chequera.", "Tome una radiografía.", "Escribir un programa de computadora.", "Entrenar animales.", "Estar a cargo de la replantación de bosques.", "Actuar en un programa de televisión o película.", "Resolver un robo.", "Verifique la calidad de los productos.", "Construye un aeropuerto.", "Mantenga los registros comerciales de la empresa.", "Juntar herramientas pequeñas.", "Diseña un sitio web.", "Tutor estudiantes.", "Trabajar en un zoológico.", "Cuidar niños.", "Planificar dietas especiales.", "Coreografía un baile.", "Presiona o muestra apoyo por una causa.", "Vende ropa.", "Trabaja con tus manos.", "Trabajo en un parque de diversiones.", "Venta de seguros.", "Aprender sobre grupos étnicos.", "Administrar un sistema de información.", "Valorar el valor de una casa.", "Archivar libros en la biblioteca.", "Hacer objetos tridimensionales.", "Analizar escritura a mano.", "Diseñe sistemas de rociadores para interiores.", "Ejecute una máquina de coser de fábrica.", "Desarrollar políticas de personal.", "Entrenar caballos de carreras.", "Guarda un edificio de oficinas.", "Dirigir una tienda por departamentos.", "Escribir para un periódico.", "Usa una calculadora.", "Ayuda a personas en una clínica de salud mental.", "Remodelar casas antiguas.", "Cuidado de niños pequeños.", "Localiza a una persona desaparecida."];



var respuestas = ["A", "B", "C", "R", "E", "F", "G", "H", "D", "J", "L", "M", "N", "O", "P", "Q", "C", "A", "D", "F", "E", "G", "F", "P", "M", "Q", "J", "O", "A", "K", "H", "E", "I", "N", "I", "P", "N", "M", "E", "D", "B", "F", "G", "Q", "D", "H", "A", "G", "O", "L", "M", "D"];



var num = 0;
var newvalues = document.getElementById("resp");
newvalues.value = respuestas[num];
$("#qid").text(num + 1);
$("#pregunta").text(preguntas[num++]);



$(function () {
    var loading = $('#loadbar').hide();
    $(document)
        .ajaxStart(function () {
            loading.show();
        }).ajaxStop(function () {
            loading.hide();
        });



    $("label.btn").on('click', function () {
        var choice = $(this).find('input:radio').val();
        $('#loadbar').show();
        $('#quiz').fadeOut();

        setTimeout(function () {
            $("#qid").text(num + 1);
            newvalues.value = respuestas[num];
            $("#pregunta").text(preguntas[num++]);
//            $("#answer").html($(this).checking(choice));
            $('#quiz').show();
            $('#loadbar').fadeOut();
            //preguntas.length
            if (num == 3) {
//                $("#CardPregunta").hide();
                fin();
                
            }


            /* something else */
        }, 500);
    });

    var resultados = "";

    $.fn.checking = function (ck) {
        resultados = resultados + ck;
        return resultados;
    };

    function fin() {
        var a = 0;
        var b = 0;
        var c = 0;
        var d = 0;
        var e = 0;
        var f = 0;
        var g = 0;
        var h = 0;
        var ii = 0;
        var j = 0;
        var k = 0;
        var l = 0;
        var m = 0;
        var n = 0;
        var o = 0;
        var p = 0;
        var q = 0;
        var r = 0;
        var ceros = 0;

        for (i = 0; i < resultados.length; i++) {
            if (resultados[i] == 'A')
                a++;
            else if (resultados[i] == 'B')
                b++;
            else if (resultados[i] == 'C')
                c++;
            else if (resultados[i] == 'D')
                d++;
            else if (resultados[i] == 'E')
                e++;
            else if (resultados[i] == 'F')
                f++;
            else if (resultados[i] == 'G')
                g++;
            else if (resultados[i] == 'H')
                h++;
            else if (resultados[i] == 'I')
                ii++;
            else if (resultados[i] == 'J')
                j++;
            else if (resultados[i] == 'K')
                k++;
            else if (resultados[i] == 'L')
                l++;
            else if (resultados[i] == 'M')
                m++;
            else if (resultados[i] == 'N')
                n++;
            else if (resultados[i] == 'O')
                o++;
            else if (resultados[i] == 'P')
                p++;
            else if (resultados[i] == 'Q')
                q++;
            else if (resultados[i] == 'R')
                r++;
            else {
                ceros++;
            }
        }
        
        var letrasR = [{
            name: 'A',
            value: a
        }, {
            name: 'B',
            value: b
        }, {
            name: 'C',
            value: c
        }, {
            name: 'D',
            value: d
        }, {
            name: 'E',
            value: e
        }, {
            name: 'F',
            value: f
        }, {
            name: 'G',
            value: g
        }, {
            name: 'H',
            value: h
        }, {
            name: 'I',
            value: ii
        }, {
            name: 'J',
            value: j
        }, {
            name: 'K',
            value: k
        }, {
            name: 'L',
            value: l
        }, {
            name: 'M',
            value: m
        }, {
            name: 'N',
            value: n
        }, {
            name: 'O',
            value: o
        }, {
            name: 'P',
            value: p
        }, {
            name: 'Q',
            value: q
        }, {
            name: 'R',
            value: r
        }];

        var letrasO = letrasR.sort(function (a, b) {
            if (a.value > b.value) {
                return 1;
            }
            if (a.value < b.value) {
                return -1;
            }
            return 0;
        });

        //        var letrasO = letrasR.sort();
        var letrasOC = letrasO.reverse();

        $("#answer2").text("Primer Lugar: " + letrasOC[0].name + " con valor: " + letrasOC[0].value + " Segundo lugar: " + letrasOC[1].name + " con valor: " + letrasOC[1].value + " Tercer lugar: " + letrasOC[2].name + " valor: " + letrasOC[2].value);






        // $("#answer2").text("Primero: "+resssulordenado[0]+" Segundo: "+ resssulordenado[1]+ "lista ordenada: "+resssulordenado + "   dsabdisjnosasn  \n"+ " prueba: "+prueba[0].name + prueba[0].value);
    }


});




//var preguntas = ["Operar una imprenta.", "Estudie las causas de los terremotos.", "Plantar y cosechar cultivos.", "Reemplace la ventana y el guardabarros de un automóvil.","Analizar informes y registros.","Operar una máquina.","Trabaja en una oficina.","Responder las preguntas de los clientes","Escribir informes.","Ayuda a exreclusos a encontrar trabajo.","Diseña una autopista.","Planificar lecciones educativas.","Balancear una chequera.","Tome una radiografía.","Escribir un programa de computadora.","Entrenar animales.","Estar a cargo de la replantación de bosques.","Actuar en un programa de televisión o película.","Resolver un robo.","Verifique la calidad de los productos.","Construye un aeropuerto.","Mantenga los registros comerciales de la empresa.","Juntar herramientas pequeñas.","Diseña un sitio web.","Tutor estudiantes.","Trabajar en un zoológico.","Cuidar niños.","Planificar dietas especiales.","Coreografía un baile.","Presiona o muestra apoyo por una causa.","Vende ropa.","Trabaja con tus manos.","Trabajo en un parque de diversiones.","Venta de seguros.","Aprender sobre grupos étnicos.","Administrar un sistema de información.","Valorar el valor de una casa.","Archivar libros en la biblioteca.","Hacer objetos tridimensionales.","Analizar escritura a mano.","Diseñe sistemas de rociadores para interiores.","Ejecute una máquina de coser de fábrica.","Desarrollar políticas de personal.","Entrenar caballos de carreras.","Guarda un edificio de oficinas.","Dirigir una tienda por departamentos.","Escribir para un periódico.","Usa una calculadora.","Ayuda a personas en una clínica de salud mental.","Remodelar casas antiguas.","Cuidado de niños pequeños.","Localiza a una persona desaparecida.","","","","","","","","","",""]; 




//var respuestas = ["A","B","C","R","E","F","G","H","D","J","L","M","N","O","P","Q","C","A","D","F","E","G","F","P","M","Q","J","O","A","K","H","E","I","N","I","P","N","M","E","D","B","F","G","Q","D","H","A","G","O","L","M","D",""];
