<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diagrama Catastral Oruro</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #2c5f8d 0%, #4a7ba7 100%);
            padding: 20px;
            min-height: 100vh;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 3px solid #2c5f8d;
        }

        .header h1 {
            color: #2c5f8d;
            font-size: 24px;
            margin-bottom: 5px;
        }

        .header h2 {
            color: #555;
            font-size: 18px;
            font-weight: normal;
        }

        .content {
            display: grid;
            grid-template-columns: 350px 200px 1fr 350px;
            gap: 20px;
            position: relative;
            align-items: start;
        }

        .requisitos-generales {
            background: #f5f5f5;
            padding: 20px;
            border-radius: 10px;
            border: 3px solid #d4a762;
            height: fit-content;
        }

        .requisitos-generales h3 {
            background: #d4a762;
            color: white;
            padding: 10px;
            border-radius: 8px;
            text-align: center;
            margin-bottom: 15px;
            font-size: 15px;
        }

        .requisitos-generales ol {
            padding-left: 20px;
        }

        .requisitos-generales li {
            margin-bottom: 10px;
            line-height: 1.3;
            font-size: 15px;
            font-weight: bold;
            color: #333;
        }

        .columna-central {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 15px;
        }

        .columna-procesos {
            display: grid;
            grid-template-rows: repeat(6, 68px);
            gap: 15px;
            margin-top: 77px;
        }

        /* Flechas hacia la derecha desde certificado */
        .certificado-box::after {
            content: '→';
            position: absolute;
            right: -35px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 30px;
            color: #4a7ba7;
            font-weight: bold;
        }

        .certificado-box {
            background: #d4a762;
            color: white;
            padding: 20px 15px;
            border-radius: 10px;
            text-align: center;
            font-weight: bold;
            font-size: 14px;
            border: 3px solid #b8954f;
            margin-top: 250px;
            position: relative;
        }

        .proceso-item {
            position: relative;
            width: 100%;
        }

        .numero-proceso {
            background: linear-gradient(135deg, #c14c6d 0%, #d96881 100%);
            color: white;
            padding: 12px 20px;
            border-radius: 25px;
            display: flex;
            align-items: center;
            gap: 15px;
            border: 3px solid #a03d5a;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            position: relative;
            height: 100%;
        }

        .numero-proceso .numero {
            background: white;
            color: #c14c6d;
            width: 35px;
            height: 35px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            font-weight: bold;
            flex-shrink: 0;
        }

        .numero-proceso .texto {
            font-size: 13px;
            font-weight: bold;
            line-height: 1.2;
        }

        /* Flechas hacia la derecha */
        .numero-proceso::after {
            content: '→';
            position: absolute;
            right: -35px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 30px;
            color: #4a7ba7;
            font-weight: bold;
        }

        .columna-derecha {
            display: grid;
            grid-template-rows: auto repeat(6, 68px);
            gap: 15px;
            align-content: start;
        }

        .titulo-complementario {
            background: #d4a762;
            color: white;
            padding: 10px;
            border-radius: 8px;
            text-align: center;
            font-size: 12px;
            font-weight: bold;
            border: 3px solid #b8954f;
            height: auto;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .requisito-complementario {
            background: #e8e8e8;
            padding: 12px;
            border-radius: 10px;
            border: 2px solid #d4a762;
            font-size: 15px;
            font-weight: bold;
            text-align: center;
            color: #555;
            height: 68px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        @media (max-width: 1200px) {
            .content {
                grid-template-columns: 1fr;
            }

            .columna-central {
                order: 2;
            }

            .requisitos-generales {
                order: 1;

            }

            .columna-procesos {
                order: 3;
                margin-top: 0;
            }

            .columna-derecha {
                order: 4;
            }

            .numero-proceso::after,
            .certificado-box::after {
                display: none;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="content">
            <!-- Columna Izquierda: Requisitos Generales -->
            <div class="requisitos-generales">
                <h3>REQUISITOS GENERALES</h3>
                <ol>
                    <li><strong>DOS FOTOCOPIAS DE TESTIMONIO ACTUAL</strong>, INSCRITO EN DERECHOS REALES (UNA FOTOCOPIA VISADA ACTUALIZADA EN SECRETARÍA MUNICIPAL DE ASUNTOS JURÍDICOS)</li>

                    <li><strong>DOS FOTOCOPIAS DE PAGO DE IMPUESTO</strong> DEL BIEN INMUEBLE DE LA ÚLTIMA GESTIÓN.</li>

                    <li><strong>FOTOCOPIA DEL COMPROBANTE DE PAGO</strong> POR TASAS POR SERVICIO DE ALCANTARILLADO DEL BIEN INMUEBLE DE LA ÚLTIMA GESTIÓN.</li>

                    <li><strong>FORMULARIO CATASTRAL 1 Y 2</strong> (DECLARACIÓN JURADA).</li>

                    <li><strong>FORMULARIO CATASTRAL 3</strong> (DECLARACIÓN JURADA)</li>

                    <li><strong>PLANO DEMOSTRATIVO ACTUALIZADO.</strong></li>

                    <li><strong>FOTOGRAFÍAS ACTUALES DEL BIEN INMUEBLE</strong> (DE ACUERDO A LA MAGNITUD DE LA CONSTRUCCIÓN).</li>

                    <li><strong>FOTOCOPIAS DE CARNET DE IDENTIDAD</strong> DEL O LOS PROPIETARIOS.</li>

                    <li><strong>VALORES MUNICIPALES</strong> (FOLDER CATASTRAL, HOJA TÉCNICA Y FORMULARIO 23).</li>
                </ol>
            </div>

            <!-- Columna Central: Certificado -->
            <div class="columna-central">
                <div class="certificado-box">
                    CERTIFICADO<br>CATASTRAL
                </div>
            </div>

            <!-- Columna de Procesos -->
            <div class="columna-procesos">
                <div class="proceso-item">
                    <div class="numero-proceso">
                        <div class="numero">1</div>
                        <div class="texto">REGISTRO NUEVO Y/O CODIFICACIÓN</div>
                    </div>
                </div>

                <div class="proceso-item">
                    <div class="numero-proceso">
                        <div class="numero">2</div>
                        <div class="texto">REGISTRO POR FRACCIONAMIENTO</div>
                    </div>
                </div>

                <div class="proceso-item">
                    <div class="numero-proceso">
                        <div class="numero">3</div>
                        <div class="texto">REGISTRO POR UNIFICACIÓN</div>
                    </div>
                </div>

                <div class="proceso-item">
                    <div class="numero-proceso">
                        <div class="numero">4</div>
                        <div class="texto">CAMBIO DE TITULAR DE DOMINIO</div>
                    </div>
                </div>

                <div class="proceso-item">
                    <div class="numero-proceso">
                        <div class="numero">5</div>
                        <div class="texto">ACTUALIZACIÓN DEL REGISTRO CATASTRAL</div>
                    </div>
                </div>

                <div class="proceso-item">
                    <div class="numero-proceso">
                        <div class="numero">6</div>
                        <div class="texto">REGISTRO DE PREDIOS CON SUPERFICIES MAYORES A 1.000 M2</div>
                    </div>
                </div>
            </div>

            <!-- Columna Derecha: Requisitos Complementarios -->
            <div class="columna-derecha">
                <div class="titulo-complementario">
                    REQUISITOS COMPLEMENTARIOS<br>A REQUISITOS GENERALES
                </div>

                <div class="requisito-complementario">
                    (Sin requisitos adicionales)
                </div>

                <div class="requisito-complementario">
                    FOTOCOPIA DE PLANO<br>DE FRACCIONAMIENTO<br>APROBADO
                </div>

                <div class="requisito-complementario">
                    FOTOCOPIA DE PLANO<br>DE UNIFICACIÓN<br>APROBADO
                </div>

                <div class="requisito-complementario">
                    FOTOCOPIA DE CERTIFICADO<br>CATASTRAL (SI CORRESPONDE)
                </div>

                <div class="requisito-complementario">
                    FOTOCOPIA DEL CERTIFICADO<br>CATASTRAL DEL BIEN INMUEBLE
                </div>

                <div class="requisito-complementario">
                    PLANO GEOREFERENCIADO<br>APROBADO (LEGALIZADO POR<br>STRIA, MUNICIPAL GESTIÓN<br>TERRITORIAL)
                </div>
            </div>
        </div>
    </div>
</body>

</html>