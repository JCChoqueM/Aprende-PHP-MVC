# 📝 GUÍA DE COMENTARIOS - Código Documentado

## ¿Qué Se Hizo?

Se agregaron comentarios descriptivos detallados en `views/layout.php` para hacer el código más intuitivo y entendible. Los comentarios explican:

✅ Qué hace cada sección CSS
✅ Cómo funcionan los contenedores flexibles
✅ Propósito de cada función JavaScript
✅ Flujo de ejecución paso a paso

---

## 📂 Secciones Comentadas

### 1. **Variables CSS (CSS Custom Properties)**

```css
/* Variables CSS: Colores y temas
   Facilitan cambios de color globales */
:root {
  --primary: #4f46e5; /* Indigo - Color principal de la app */
  --secondary: #06b6d4; /* Cyan - Acentos y highlights */
  --success: #10b981; /* Verde - Para botones de éxito */
  /* ... más colores ... */
}
```

**Propósito:** Facilita cambios de color en toda la página modificando un solo lugar.

---

### 2. **Contenedor de Código**

```css
/* ========================================
   CONTENEDOR DE CÓDIGO
   Estructura: Header + Wrapper con scrolling
   max-height: 500px para limitar espacio
   ======================================== */
.code-container {
  max-height: 500px; /* Limita altura para código largo */
  overflow: hidden; /* Oculta contenido que excede */
  display: flex; /* Layout flexible */
  flex-direction: column; /* Apila elementos verticalmente */
}
```

**Propósito:** Contiene código de forma compacta sin ocupar toda la pantalla.

---

### 3. **Header del Código**

```css
/* Header del código: muestra lenguaje (PHP/JS) y botones de acción */
.code-header {
  display: flex; /* Layout horizontal */
  justify-content: space-between; /* Separa contenido a los lados */
  align-items: center; /* Alinea verticalmente */
  gap: 12px; /* Espacio entre elementos */
}
```

**Propósito:** Organiza el lenguaje del código y los botones en una fila.

---

### 4. **Wrapper Scrollable**

```css
/* Contenedor scrollable del código
   Permite scroll horizontal (líneas largas) y vertical (muchas líneas) */
.code-wrapper {
  overflow-x: auto; /* Scroll horizontal si líneas exceden ancho */
  overflow-y: auto; /* Scroll vertical si código excede altura */
  flex: 1; /* Ocupa espacio disponible */
  padding: 16px;
}
```

**Propósito:** Permite navegar código largo en ambas direcciones.

---

### 5. **Botón Copiar**

```css
/* Botón "Copiar" con feedback visual completo */
.copy-btn {
  background: linear-gradient(135deg, var(--success) 0%, #059669 100%);
  transition: transform 0.2s cubic-bezier(0.4, 0, 0.2, 1), box-shadow 0.2s ease;
}

/* Efecto al pasar el mouse: sube 2px y sombra más fuerte */
.copy-btn:hover {
  transform: translateY(-2px); /* Sube el botón */
  box-shadow: 0 4px 12px rgba(16, 185, 129, 0.5); /* Sombra más fuerte */
}
```

**Propósito:** Proporciona feedback visual claro al usuario.

---

### 6. **Scrollbar Personalizado**

```css
/* Ancho/alto de la scrollbar */
.code-wrapper::-webkit-scrollbar {
  height: 6px; /* Alto para scrollbar horizontal */
  width: 6px; /* Ancho para scrollbar vertical */
}

/* Pista (fondo) del scrollbar */
.code-wrapper::-webkit-scrollbar-track {
  background: rgba(71, 85, 105, 0.1); /* Muy sutil */
}

/* Deslizador (thumb) del scrollbar */
.code-wrapper::-webkit-scrollbar-thumb {
  background: rgba(71, 85, 105, 0.3); /* Gris más visible */
}

/* Scrollbar al pasar el mouse */
.code-wrapper::-webkit-scrollbar-thumb:hover {
  background: rgba(71, 85, 105, 0.5); /* Más oscuro */
}
```

**Propósito:** Personaliza scrollbars para que se vean menos intrusivos y más profesionales.

---

### 7. **Syntax Highlighting**

```css
/* ========================================
   COLORES PARA SYNTAX HIGHLIGHTING
   Resalta diferentes elementos del código
   ======================================== */

/* Palabras clave (if, function, return, etc) */
.syntax-keyword {
  color: #ff79c6; /* Rosa/magenta */
  font-weight: 600;
}

/* Strings/cadenas ("texto", 'texto') */
.syntax-string {
  color: #50fa7b; /* Verde */
}

/* Comentarios (// comentario) */
.syntax-comment {
  color: #6272a4; /* Azul grisáceo */
  font-style: italic; /* Itálica para diferenciación */
}
```

**Propósito:** Mejora legibilidad diferenciando tipos de código.

---

## 🔧 Funciones JavaScript Comentadas

### 1. **toggleCollapsible()**

```javascript
/* Alterna visibilidad de secciones colapsables
   Utilizado para: Ver Código PHP, Ver Código JS, Ver Diagrama */
function toggleCollapsible(header) {
  header.classList.toggle('active');
  /* Marca header como activo */

  header.nextElementSibling.classList.toggle('open');
  /* Abre/cierra contenido */
}
```

**Flujo:**

1. Usuario hace clic en "Ver Código PHP"
2. `toggleCollapsible()` se llama
3. Header cambia a clase "active"
4. Contenido cambia a clase "open"
5. CSS muestra el contenido con animación

---

### 2. **handleSubmit()**

```javascript
/* Maneja el envío del formulario de ejercicio */
function handleSubmit(event) {
  event.preventDefault(); /* Evita recarga de página */

  const input1 = document.getElementById('input1').value;
  const input2 = document.getElementById('input2').value;

  /* Calcula y muestra resultados */
  document.getElementById('phpResult').innerHTML = `...`;
  document.getElementById('jsResult').innerHTML = `...`;

  /* Scroll suave hasta la sección de soluciones */
  document.getElementById('solutionSection').scrollIntoView({
    behavior: 'smooth',
    block: 'nearest',
  });
}
```

**Flujo:**

1. Usuario rellena campos y hace clic "Ejecutar"
2. `handleSubmit()` previene recarga
3. Obtiene valores de entrada
4. Calcula resultados
5. Muestra resultados en HTML
6. Scroll suave hasta soluciones

---

### 3. **copyCode()**

```javascript
/* Copia código al portapapeles con feedback visual
   1. Intenta usar Clipboard API (navegadores modernos)
   2. Si falla, usa fallback con textarea (navegadores antiguos)
   3. Muestra feedback visual por 2 segundos */
function copyCode(elementId) {
  const code = document.getElementById(elementId).textContent;
  const btn = event.target;

  /* Intenta copiar usando Clipboard API */
  navigator.clipboard
    .writeText(code)
    .then(() => {
      /* Éxito: Muestra feedback */
      const originalText = btn.innerHTML;
      btn.innerHTML = '✅ Copiado';
      btn.style.background = 'linear-gradient(...)';

      /* Restaura después de 2 segundos */
      setTimeout(() => {
        btn.innerHTML = originalText;
        btn.style.background = '';
      }, 2000);
    })
    .catch((err) => {
      /* Fallback para navegadores sin Clipboard API */
      const textarea = document.createElement('textarea');
      textarea.value = code;
      document.body.appendChild(textarea);
      textarea.select();
      document.execCommand('copy');
      document.body.removeChild(textarea);

      /* Mismo feedback visual */
      const originalText = btn.innerHTML;
      btn.innerHTML = '✅ Copiado';
      setTimeout(() => {
        btn.innerHTML = originalText;
      }, 2000);
    });
}
```

**Flujo:**

1. Usuario hace clic en "📋 Copiar"
2. Se obtiene el código del elemento
3. Se intenta copiar con Clipboard API
4. **Opción A:** Si funciona → Éxito en 2s
5. **Opción B:** Si falla → Usa fallback textarea
6. Muestra "✅ Copiado" en verde
7. Restaura botón después de 2 segundos

---

### 4. **expandDiagram()**

```javascript
/* Expande diagrama a fullscreen o modal
   Función preparada para futuras mejoras */
function expandDiagram(event) {
  event.stopPropagation();
  /* Evita que el click cierre el colapsable */

  /* TODO: Implementar una de estas opciones:
       1. Mostrar imagen en modal fullscreen
       2. Abrir imagen en pestaña nueva
       3. Mostrar zoom interactivo
       4. Mostrar lightbox */
  console.log('Expandir diagrama - Lógica a implementar');
}
```

**Estado:** Función preparada para futuras mejoras.

---

### 5. **DOMContentLoaded**

```javascript
/* Inicialización cuando el DOM está completamente cargado */
document.addEventListener('DOMContentLoaded', () => {
  /* 1. Genera la estructura de capítulos y ejercicios */
  generateChapters();

  /* 2. Activa scroll suave en toda la página */
  document.documentElement.style.scrollBehavior = 'smooth';

  /* 3. Agrega event listeners a botones de expandir diagrama */
  document.querySelectorAll('.diagram-expand-btn').forEach((btn) => {
    btn.addEventListener('click', expandDiagram);
  });
});
```

**Flujo de Inicialización:**

1. Espera a que el DOM esté cargado
2. Genera capítulos y ejercicios
3. Activa scroll suave
4. Conecta botones expandir con función

---

## 🎯 Patrones de Comentarios Usados

### Tipo 1: Sección Principal

```css
/* ========================================
   NOMBRE DE LA SECCIÓN
   Descripción y propósito
   ======================================== */
```

### Tipo 2: Propiedad Explicada

```css
.mi-clase {
  max-height: 500px; /* Limita altura para código largo */
  display: flex; /* Layout flexible */
}
```

### Tipo 3: Función Comentada

```javascript
function miFunc(parametro) {
  /* Descripción general de qué hace */
  var resultado = calcular(parametro); /* Qué hace esta línea */
  return resultado;
}
```

### Tipo 4: Flujo de Pasos

```javascript
/* Paso 1: Obtener datos */
const dato = document.getElementById('id').value;

/* Paso 2: Procesar */
const resultado = procesar(dato);

/* Paso 3: Mostrar resultado */
document.getElementById('result').textContent = resultado;
```

---

## 📚 Referencia Rápida

| Elemento              | Comentario        | Línea |
| --------------------- | ----------------- | ----- |
| `:root`               | Variables CSS     | 10    |
| `body`                | Estilos globales  | 33    |
| `.code-container`     | Contenedor código | 770   |
| `.code-header`        | Header del código | 800   |
| `.code-lang`          | Etiqueta lenguaje | 810   |
| `.code-wrapper`       | Área scrollable   | 840   |
| `.syntax-*`           | Colores sintaxis  | 920   |
| `toggleCollapsible()` | Toggle colapsable | 1482  |
| `copyCode()`          | Copia código      | 1502  |
| `expandDiagram()`     | Expande diagrama  | 1545  |
| `DOMContentLoaded`    | Inicialización    | 1558  |

---

## 💡 Beneficios de los Comentarios

✅ **Claridad:** Alguien nuevo entiende el código inmediatamente
✅ **Mantenimiento:** Fácil hacer cambios sin romper funcionalidad
✅ **Debugging:** Más rápido encontrar dónde está el problema
✅ **Documentación:** El código se auto-documenta
✅ **Educación:** Aprenderás mientras entiendes el flujo

---

## 🔍 Cómo Encontrar Secciones

Use Ctrl+F (Cmd+F en Mac) y busque:

| Para encontrar     | Busque                 |
| ------------------ | ---------------------- |
| Variables CSS      | `:root {`              |
| Contenedor código  | `CONTENEDOR DE CÓDIGO` |
| Botón copiar       | `copyCode()`           |
| Syntaxhighlighting | `SYNTAX HIGHLIGHTING`  |
| Inicialización     | `DOMContentLoaded`     |

---

## 📝 Formato de Comentarios Usados

```css
/* Comentario de una línea */

/* Comentario de
   varias líneas
   explicando algo */

/* ========================================
   COMENTARIO DE SECCIÓN GRANDE
   Usado para agrupar funcionalidades
   ======================================== */

.clase {
  propiedad: valor; /* Comentario inline */
}
```

---

## 🚀 Próximo Paso

Ahora que entiendes los comentarios, puedes:

1. **Modificar estilos:** Busca la sección CSS que quieres cambiar
2. **Agregar funciones:** Usa el patrón de comentarios existente
3. **Debuggear:** Usa los comentarios para entender el flujo
4. **Documentar:** Mantén el mismo estilo de comentarios

---

**Versión:** 2.0
**Estado:** ✅ Código Completamente Comentado
**Mejora:** Intuitivo y Entendible
