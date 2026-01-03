<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Rutina Saludable</title>
    <style>
        body {
            font-family: system-ui, -apple-system, sans-serif;
            background: #f0f9ff;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
            margin: 0;
            color: #334155;
            padding: 2rem;
        }
        .container {
            background: white;
            padding: 2.5rem;
            border-radius: 1.5rem;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 700px;
            border: 1px solid #e2e8f0;
        }
        h1 {
            margin-top: 0;
            color: #0f172a;
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
            border-bottom: 2px solid #f1f5f9;
            padding-bottom: 1rem;
            text-align: center;
        }
        .content {
            line-height: 1.7;
            white-space: pre-wrap;
            color: #475569;
            font-size: 1rem;
        }
        .loading {
            text-align: center;
            color: #64748b;
        }
        .btn-back {
            display: inline-block;
            margin-top: 2rem;
            text-decoration: none;
            color: #0ea5e9;
            font-weight: 600;
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            transition: background 0.2s;
        }
        .btn-back:hover {
            background: #f0f9ff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🏋️ Tu Rutina Personalizada</h1>
        <div class="content">
<?php
// Endpoint local de Ollama
$url = "http://localhost:11434/api/generate";

// Pregunta al modelo
$data = [
    "model" => "llama3:latest",
    "prompt" => "Genera una rutina de ejercicios para una vida saludable para una adulto a lo largo de una semana. Debe contener los siguientes dias: Lunes, Martes, Miercoles, Jueves, Viernes, Sabado y Domingo. Debe contener los siguientes tipos de ejercicios: ".$_POST['tipo1'].", ".$_POST['tipo2'].", ".$_POST['tipo3'].", ".$_POST['tipo4'].", ".$_POST['tipo5'].". en español.",
    "stream" => false
];

// Inicializar cURL
$ch = curl_init($url);

// Configuración de cURL
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Content-Type: application/json"
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

// Ejecutar petición
$response = curl_exec($ch);

// Comprobar errores de cURL
if ($response === false) {
    echo "<p style='color:red'>Error al conectar con la IA: " . curl_error($ch) . "</p>";
} else {
    // Decodificar la respuesta JSON
    $result = json_decode($response, true);
    // Mostrar solo el texto generado
    echo $result["response"];
}

curl_close($ch);
?>
        </div>
        <div style="text-align: center;">
            <a href="003-formulario de toma de datos.php" class="btn-back">← Volver a crear otra rutina</a>
        </div>
    </div>
</body>
</html>
