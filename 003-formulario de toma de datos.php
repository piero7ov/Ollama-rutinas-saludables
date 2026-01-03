  <!DOCTYPE html>
  <html lang="es">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Generador de Rutinas</title>
      <style>
          body {
              font-family: system-ui, -apple-system, sans-serif;
              background: #f0f9ff;
              display: flex;
              justify-content: center;
              align-items: center;
              min-height: 100vh;
              margin: 0;  
              color: #334155;
          }
          .container {
              background: white;
              padding: 2.5rem;
              border-radius: 1.5rem;
              box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1);
              width: 100%;
              max-width: 420px;
              border: 1px solid #e2e8f0;
          }
          h3 {
              margin-top: 0;
              color: #0f172a;
              text-align: center;
              font-size: 1.5rem;
              margin-bottom: 0.5rem;
          }
          p {
              text-align: center;
              color: #64748b;
              font-size: 0.95rem;
              margin-bottom: 2rem;
              line-height: 1.5;
          }
          form {
              display: flex;
              flex-direction: column;
              gap: 12px;
          }
          input[type="text"] {
              padding: 0.85rem 1rem;
              border: 1px solid #cbd5e1;
              border-radius: 0.75rem;
              outline: none;
              font-size: 0.95rem;
              transition: all 0.2s ease;
              background-color: #f8fafc;
          }
          input[type="text"]:focus {
              background-color: white;
              border-color: #0ea5e9;
              box-shadow: 0 0 0 4px rgba(14, 165, 233, 0.1);
          }
          input[type="submit"] {
              background: linear-gradient(135deg, #0ea5e9, #2563eb);
              color: white;
              border: none;
              padding: 1rem;
              border-radius: 0.75rem;
              font-weight: 600;
              font-size: 1rem;
              cursor: pointer;
              transition: transform 0.1s, box-shadow 0.2s;
              margin-top: 1rem;
              box-shadow: 0 4px 6px -1px rgba(37, 99, 235, 0.2);
          }
          input[type="submit"]:hover {
              transform: translateY(-1px);
              box-shadow: 0 6px 8px -1px rgba(37, 99, 235, 0.3);
          }
          input[type="submit"]:active {
              transform: translateY(0);
          }
      </style>
  </head>
  <body>
      <div class="container">
          <h3>Generador de Rutinas</h3>
          <p>Selecciona cinco tipos de ejercicios para personalizar tu rutina semanal saludable.</p>
          <form action="004-calculaejercicios.php" method="POST">
              <input type="text" name="tipo1" placeholder="1. Ej: Cardio suave">
              <input type="text" name="tipo2" placeholder="2. Ej: Yoga">
              <input type="text" name="tipo3" placeholder="3. Ej: Pesas">
              <input type="text" name="tipo4" placeholder="4. Ej: Natación">
              <input type="text" name="tipo5" placeholder="5. Ej: Estiramientos">
              <input type="submit" value="✨ Generar Rutina">
          </form>
      </div>
  </body>
  </html>
