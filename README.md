# 🥗 Ollama – Rutinas Saludables (PHP + IA local)

App web en **PHP** que genera una **rutina de ejercicios semanal** usando **Ollama** (IA corriendo en tu PC).  
Funciona en local: un formulario manda tus “tipos de ejercicios” → PHP arma un prompt → Ollama responde → la web muestra la rutina.

Repo: https://github.com/piero7ov/ollama-rutinas-saludables

---

## ✨ Qué hace

- Formulario para ingresar **5 tipos de ejercicios** (ej: “cardio”, “yoga”, “fuerza”…)
- Genera una rutina de **Lunes a Domingo**
- Llama a la API local de Ollama: `http://localhost:11434/api/generate`
- Puedes elegir **qué modelo (IA) usar**: llama3, qwen, mistral, gemma, etc. (siempre que lo tengas descargado en Ollama)

---

## 📁 Archivos principales

- `003-formulario de toma de datos.php` → formulario (entrada)
- `004-calculaejercicios.php` → llama a Ollama y muestra la rutina (salida)

Extras / pruebas:
- `005-probamos qwen.php` → ejemplo usando otro modelo (`qwen2.5-coder:7b`)
- `001/002` → iteraciones de prompts
- `006-tipos de ejercicios.md` → ideas para rellenar el formulario

---

## ✅ Requisitos

- **Servidor con PHP** (recomendado: **XAMPP** en Windows)
- PHP con **cURL** habilitado
- **Ollama instalado**
- **Al menos 1 modelo descargado** en Ollama (esto es clave)

> Ojo: los modelos ocupan bastante espacio (decenas de GB en algunos casos).

---

## 🚀 Quick start (en 5 pasos)

1) Instala Ollama (Windows o Linux, abajo tienes mini tutorial).
2) Descarga un modelo: `ollama pull llama3:latest`
3) Copia el proyecto a tu servidor web (ej: `htdocs` en XAMPP).  
4) Abre el formulario: `003-formulario de toma de datos.php`  
5) Rellena los 5 tipos → **Generar Rutina** ✅

---

## 🧠 Mini tutorial: Instalar Ollama + “sus IAs” (modelos)

### 🪟 Windows

1) Descarga e instala **Ollama para Windows** (instalador oficial).
2) Abre **PowerShell** o **CMD** y verifica:
```bash
ollama --version
````

3. Descarga (instala) un modelo:

```bash
ollama pull llama3:latest
```

4. Prueba que responde:

```bash
ollama run llama3:latest
```

5. Ver modelos descargados:

```bash
ollama list
```

([GitHub][1])

> Tip: en Windows, normalmente Ollama queda corriendo en segundo plano y la API local queda disponible.

---

### 🐧 Linux (Ubuntu/Debian y similares)

1. Instalar Ollama (script oficial):

```bash
curl -fsSL https://ollama.com/install.sh | sh
```

([docs.ollama.com][2])

2. Levantar el servicio (opción rápida):

```bash
ollama serve
```

([docs.ollama.com][3])

3. Descargar un modelo:

```bash
ollama pull llama3:latest
```

4. Probar:

```bash
ollama run llama3:latest
```

5. Ver modelos descargados:

```bash
ollama list
```

([GitHub][1])

> Opcional (modo servidor): puedes configurar Ollama como servicio systemd. La doc oficial explica el `ollama serve` y el enfoque de servicio. 

---

## 🎛️ Elegir qué modelo (IA) usa el proyecto

En `004-calculaejercicios.php` cambia esta línea:

```php
"model" => "llama3:latest",
```

Por el modelo que tengas instalado (míralo con `ollama list`), por ejemplo:

* `"model" => "qwen2.5-coder:7b",`
* `"model" => "llama3.2:latest",`

Si pones un nombre que no existe en tu PC, te va a fallar o no va a responder.

---

## 🧰 Instalación del proyecto (XAMPP recomendado)

### Windows + XAMPP

1. Copia la carpeta del proyecto a:

* `C:\xampp\htdocs\ollama-rutinas-saludables\`

2. En XAMPP, enciende:

* ✅ Apache

3. Asegúrate de que Ollama esté corriendo y tengas un modelo descargado.

4. Abre en el navegador:

* `http://localhost/ollama-rutinas-saludables/003-formulario%20de%20toma%20de%20datos.php`

> Si te incomodan los espacios en nombres de archivos, puedes renombrarlos (opcional), pero así como está funciona.

---

## 🧯 Problemas comunes

**1) “Error al conectar con la IA”**

* Ollama no está corriendo (`ollama serve` en Linux o app activa en Windows)
* Puerto/API no disponible: `http://localhost:11434`

**2) No tienes modelos descargados**

* Solución:

```bash
ollama pull llama3:latest
ollama list
```

**3) Entraste directo a `004-calculaejercicios.php`**

* Ese archivo espera `POST` del formulario.

---

## 🔒 Nota rápida (uso responsable)

La rutina generada es texto automático. Úsalo como guía general y ajusta a tu contexto.

---

## 👤 Autor

Piero Olivares
