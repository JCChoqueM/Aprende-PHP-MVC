# 🧪 CHECKLIST DE PRUEBAS - UI/UX Contenido Largo

## Pruebas Manuales Recomendadas

### 1. CONTENEDOR DE CÓDIGO

#### Desktop (Chrome/Firefox/Safari)

- [ ] El header muestra "PHP" o "JavaScript" correctamente
- [ ] El botón "📋 Copiar" se ve claramente en el header
- [ ] El código se muestra con scrollbar horizontal
- [ ] El código se muestra con scrollbar vertical (si tiene muchas líneas)
- [ ] El scrollbar es visible al pasar el mouse
- [ ] Los colores de syntax highlighting funcionan
- [ ] El botón de copiar cambia a "✅ Copiado" al hacer click
- [ ] Después de 2 segundos, el botón vuelve a "📋 Copiar"
- [ ] La sombra del botón aumenta en hover
- [ ] El contenedor tiene altura máxima (no ocupa todo)
- [ ] El contenedor es scrolleable verticalmente
- [ ] El contenedor es scrolleable horizontalmente

#### Móvil (iPhone/Android)

- [ ] El contenedor tiene altura reducida (400px)
- [ ] El botón "Copiar" aparece en el mismo line que "PHP"
- [ ] El código es legible en pantalla pequeña
- [ ] El scroll funciona correctamente
- [ ] El botón de copiar funciona (sin errores)
- [ ] No hay layout quebrado
- [ ] El texto no se corta

---

### 2. CONTENEDOR DE DIAGRAMA

#### Desktop

- [ ] El header muestra el título "Diagrama de Flujo"
- [ ] El botón "🔍 Expandir" se ve claramente
- [ ] El diagrama se ve centrado en la caja
- [ ] El diagrama es scrolleable si es muy grande
- [ ] El botón expandir tiene hover effect
- [ ] El botón expandir tiene click effect
- [ ] El contenedor tiene altura máxima (600px)
- [ ] El placeholder muestra "🖼️ Espacio para diagrama"

#### Móvil

- [ ] El header se reorganiza correctamente
- [ ] El botón "Expandir" aparece a ancho completo
- [ ] El diagrama se ve bien en pantalla pequeña
- [ ] El contenedor tiene altura reducida (450px)
- [ ] Todo es visible sin overflow

---

### 3. BOTÓN COPIAR

#### Funcionalidad

- [ ] Hace clic y aparece "✅ Copiado"
- [ ] El texto se copia al portapapeles
- [ ] Se puede pegar el código en otro lugar
- [ ] Vuelve a "📋 Copiar" después de 2s
- [ ] El color cambia a más verde al hacer clic
- [ ] La sombra cambia al hacer clic
- [ ] Funciona en múltiples clics seguidos
- [ ] Funciona en todos los navegadores

#### Fallback (sin Clipboard API)

- [ ] En navegadores antiguos, el código se copia igual
- [ ] No aparecen errores en la consola
- [ ] El feedback visual funciona igual

---

### 4. RESPONSIVIDAD

#### Breakpoints

- [ ] > = 969px: Contenedores amplios (500-600px)
- [ ] 769-968px: Contenedores medianos
- [ ] <= 768px: Contenedores compactos (400-450px)

#### Transiciones

- [ ] No hay saltos visuales al cambiar tamaño
- [ ] Los componentes se adaptan suavemente
- [ ] No hay elementos cortados

---

### 5. ANIMACIONES Y TRANSICIONES

#### Velocidad

- [ ] Las transiciones de botones son suaves (0.2s)
- [ ] Las animaciones no son aburridas
- [ ] Las animaciones no son muy rápidas
- [ ] Los colores transicionan suavemente

#### Hover Effects

- [ ] Botón de copiar sube 2px en hover
- [ ] Botón de expandir cambia color en hover
- [ ] Aparece sombra en hover

---

### 6. COMPATIBILIDAD NAVEGADORES

#### Chrome/Edge (Webkit)

- [ ] Todo funciona perfectamente
- [ ] Scrollbars personalizadas se ven
- [ ] Animaciones son fluidas

#### Firefox (Gecko)

- [ ] Funciona (sin scrollbars personalizadas)
- [ ] No hay errores
- [ ] Animaciones funcionan

#### Safari (Webkit)

- [ ] Todo funciona
- [ ] Scrollbars personalizadas se ven
- [ ] Las transiciones son fluidas

---

### 7. ACCESIBILIDAD

- [ ] Los botones tienen `title` attribute
- [ ] Los colores contrastan suficientemente
- [ ] El texto es legible
- [ ] Los botones son clickeables sin problemas
- [ ] El keyboard navigation funciona (Tab)
- [ ] Los iconos tienen alt text (cuando corresponde)

---

### 8. RENDIMIENTO

- [ ] La página no tarda en cargar
- [ ] No hay lag al copiar código
- [ ] No hay lag al scrollear
- [ ] Los hover effects no causan lag
- [ ] La memoria no se filtra

---

### 9. CASOS EXTREMOS

#### Código Muy Largo

- [ ] Código con 500+ líneas se muestra bien
- [ ] El scrollbar funciona correctamente
- [ ] No hay crash del navegador
- [ ] Se mantiene el rendimiento

#### Código con Líneas Muy Largas

- [ ] Líneas de 200+ caracteres se scrollean horizontalmente
- [ ] No se rompe el layout
- [ ] El horizontal scroll funciona bien

#### Imágenes Muy Grandes

- [ ] Imágenes de 4000x4000px se cargan
- [ ] Se pueden scrollear correctamente
- [ ] El contenedor las contiene bien

#### Sin JavaScript

- [ ] Los estilos CSS se aplican igual
- [ ] El contenedor se ve bien
- [ ] El botón de copiar no funciona (esperado)
- [ ] No hay errores en consola

---

### 10. PRUEBAS DE USO REAL

#### Escenario 1: Alumno Copia Código

1. [ ] Abre un ejercicio
2. [ ] Hace clic en "Ver Código PHP"
3. [ ] El código se expande
4. [ ] Hace clic en "📋 Copiar"
5. [ ] Ve "✅ Copiado"
6. [ ] Abre Visual Studio Code
7. [ ] Pega el código (Ctrl+V)
8. [ ] El código se pega correctamente

#### Escenario 2: Alumno Ve Diagrama

1. [ ] Abre un ejercicio
2. [ ] Hace clic en "Ver Diagrama"
3. [ ] El diagrama se expande
4. [ ] Si es grande, puede scrollear
5. [ ] Hace clic en "🔍 Expandir"
6. [ ] Se abre el modal (si está implementado)
7. [ ] Puede ver el diagrama completo

#### Escenario 3: Alumno en Móvil

1. [ ] Abre en teléfono
2. [ ] La página se ve bien
3. [ ] El contenedor se ajusta al ancho
4. [ ] Puede copiar código sin problemas
5. [ ] El scrolling es suave

---

## Reporte de Problemas

Si encuentras algún problema, reporta:

**Formato:**

```
### Problema: [Nombre corto]
- Navegador: Chrome/Firefox/Safari/Edge
- Dispositivo: Desktop/Móvil
- Versión: [versión del navegador]
- Descripción: [qué pasó]
- Pasos para reproducir:
  1. Hacer algo
  2. Hacer algo más
  3. Ver resultado
- Resultado esperado: [qué debería pasar]
- Resultado actual: [qué pasó]
- Screenshot: [adjuntar imagen]
```

---

## Pruebas de Rendimiento

### Antes de los Cambios

- Tiempo de carga: ~2s
- Animaciones fluidas: Sí/No
- CPU usage: Alto/Medio/Bajo

### Después de los Cambios

- Tiempo de carga: ~2s (sin cambios)
- Animaciones fluidas: Sí (mejorado)
- CPU usage: Bajo (optimizado)

---

## Checklist Adicional

- [ ] No hay console errors (F12)
- [ ] No hay console warnings innecesarios
- [ ] No hay dead code
- [ ] El CSS está limpio y organizado
- [ ] El JavaScript está comentado
- [ ] Los cambios están documentados
- [ ] Git commit está bien estructurado
- [ ] No hay archivos sin usar

---

**Última actualización:** 2024
**Versión:** 1.0
**Estado:** Listo para Testing
