# Copilot Instructions - Proyecto Diseño DAW2

## Descripción General
Este es un proyecto educativo de DAW2 (Diseño Web) que contiene múltiples actividades y tareas sobre HTML, CSS, y JavaScript. Cada carpeta corresponde a una actividad o tarea específica del curso.

## Estructura del Proyecto

### Organización de Carpetas
- **ALVAREZ_I_ACTIVIDAD0X_XX/**: Actividades numeradas del curso (CSS, SVG, imágenes, etc.)
- **ALVAREZ_I_AMP03_01/**: Actividades complementarias
- **ALVAREZ_I_TAREA0X_XX/**: Tareas con mayor complejidad, algunas con frameworks (Bootstrap)
- Cada carpeta es **independiente** - no hay dependencias entre ellas

### Estructura Típica
- `index.html` - Página principal
- `style.css` - Estilos locales
- `javascript.js` - Lógica con jQuery
- `assets/` - Recursos (CSS frameworks, JS librerías, imágenes, webfonts)
- Subcarpetas específicas (imagenes/, animaciones/, multimedia_webconciertos_space/, etc.)

## Patrones y Convenciones

### HTML
- Uso de Bootstrap (en algunas tareas como ALVAREZ_I_TAREA01_01)
- Estructura semántica básica con divs y clases descriptivas
- Meta viewport configurado para responsive design
- CDN externa para jQuery: `https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js`

### CSS
- **Archivos de CSS**: `style.css` para estilos personalizados, `templatemo.min.css` para templates
- **Colores comunes**: antiquewhite (fondo), rgb(167, 126, 76) (botones), blanco (secciones)
- **Tipografía**: Uso de font-family como "Impact, sans-serif"
- **Componentes**: Botones con border-radius (20px), secciones con borde y border-radius

### JavaScript/jQuery
- **Estándar**: `$(document).ready()` para garantizar carga del DOM
- **Patrón común**: Seleccionar elementos con jQuery (`$()`) y usar `.each()` para iterar
- **Archivos**: `javascript.js` o `custom.js` vinculados al final del body
- **Ejemplo patrón**: 
  ```javascript
  $(document).ready(function() {
      $('selector').each(function(index) {
          // Manipulación del elemento
      });
  });
  ```

### Archivos de Recursos
- **Imágenes**: AVIF, WBMP, y formatos estándar (jpg, png)
- **Archivos Gimp**: `.xcf` en algunas actividades (practica_gimp.xcf)
- **Templates**: Archivos completos bootstrap en assets/css/ y assets/js/

## Workflows Comunes

### Inspeccionar una Actividad
1. Leer el `index.html` para entender la estructura
2. Revisar `style.css` para estilos específicos
3. Analizar `javascript.js` para interactividad
4. Verificar carpeta `assets/` o `imagenes/` para recursos

### Agregar Interactividad jQuery
- Siempre usar `$(document).ready()` al inicio
- Aprovechar `.each()` para iteraciones sobre elementos
- Usar `.append()`, `.prepend()` para agregar elementos al DOM
- Acceder a texto con `.text()` y atributos con `.attr()`

## Ficheros Clave de Referencia
- `ALVAREZ_I_ACTIVIDAD04_01/javascript.js` - Ejemplo de patrón jQuery con DOM traversal
- `ALVAREZ_I_TAREA01_01/plantilla_AlvarezI/` - Proyecto más complejo con Bootstrap
- `ALVAREZ_I_TAREA03_02/webconciertos_space/` - Proyecto multimedia con estilos avanzados

## Notas Especiales
- No hay build system (webpack, npm scripts) - son archivos estáticos HTML/CSS/JS
- No hay testing framework - validación manual en navegador
- jQuery es la librería JS principal para manipulación del DOM
- Algunas actividades incluyen SVG y GIMP para gráficos vectoriales/edición
