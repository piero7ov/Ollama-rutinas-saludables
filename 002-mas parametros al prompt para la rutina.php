<?php
// Endpoint local de Ollama
$url = "http://localhost:11434/api/generate";

// Pregunta al modelo
$data = [
    "model" => "llama3:latest",  // Usamos exactamente el nombre que aparece en `ollama list`
    "prompt" => "Genera una rutina de ejercicios para una vida saludable para una adulto a lo largo de una semana. Debe contener los siguientes dias: Lunes, Martes, Miercoles, Jueves, Viernes, Sabado y Domingo. Debe contener los siguientes tipos de ejercicios: cardio, musculos, flexibilidad y equilibrio. en español.",
    "stream" => false            // false = recibir todo el texto de una vez
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

// Comprobar errores de cURL (opcional pero recomendable)
if ($response === false) {
    echo "Error cURL: " . curl_error($ch);
    curl_close($ch);
    exit;
}

curl_close($ch);

// Decodificar la respuesta JSON
$result = json_decode($response, true);

// Mostrar solo el texto generado
echo "<pre>";
echo $result["response"];
echo "</pre>";

